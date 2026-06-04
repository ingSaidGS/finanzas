<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
import { route } from 'ziggy-js'

const props = defineProps({
    billetera: Object
})

const processing = ref(false)

const archivarBilletera = () => {
    if (confirm(`¿Archivar la billetera "${props.billetera.nombre}"?`)) {
        processing.value = true

        // ✅ Usando route() - SEGURO en producción
        router.patch(route('billetera.archive', props.billetera.id), {}, {
            onSuccess: () => {
                processing.value = false
                // Opcional: mostrar notificación de éxito
            },
            onError: (errors) => {
                processing.value = false
                console.error('Error al archivar:', errors)
                alert('Error al archivar la billetera')
            }
        })
    }
}

const restaurarBilletera = () => {
    if (confirm(`Restaurar la billetera "${props.billetera.nombre}"?`)) {
        processing.value = true

        // ✅ Usando route() - SEGURO en producción
        router.patch(route('billetera.restore', props.billetera.id), {}, {
            onSuccess: () => {
                processing.value = false
                // Opcional: mostrar notificación de éxito
            },
            onError: (errors) => {
                processing.value = false
                console.error('Error al restaurar:', errors)
                alert('Error al restaurar la billetera')
            }
        })
    }
}
</script>

<template>

    <div
        class="card-elevation bg-surface-container-lowest rounded-xl p-6 group hover:-translate-y-1 transition-all duration-300">
        <div>
            <h3 v-if="billetera.activo == true" class="font-title-md text-title-md text-on-surface mb-1">{{
                billetera.nombre }}</h3>
            <h3 v-else class="opacity-60 font-title-md text-title-md text-on-surface mb-1">{{ billetera.nombre }}</h3>

            <p v-if="billetera.activo == true" class="text-on-surface-variant font-label-sm text-label-sm mb-4">{{
                billetera.tipo }} •
                {{ billetera.proposito }}
            </p>
            <p v-else class="opacity-60 text-on-surface-variant font-label-sm text-label-sm mb-4">{{ billetera.tipo }} •
                {{ billetera.proposito }}
            </p>

            <p v-if="billetera.activo == true" class="font-headline-lg text-headline-lg text-on-surface">Bs. {{
                billetera.saldo }}</p>
            <p v-else class="opacity-60 font-headline-lg text-headline-lg text-on-surface">Bs. {{ billetera.saldo }}</p>
        </div>

        <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
            <button v-if="billetera.activo == true"
                class="p-2 hover:bg-surface-container rounded-full text-outline transition-colors">
                <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
            </button>
            <button v-if="billetera.activo == false" @click="restaurarBilletera" :disabled="processing"
                class="p-2 hover:bg-surface-container rounded-full text-primary transition-colors" title="Restaurar">
                <span class="material-symbols-outlined text-[20px]" data-icon="undo">
                    {{ processing ? 'hourglass_empty' : 'undo' }}</span>
            </button>
            <button v-if="billetera.activo == true" @click="archivarBilletera" :disabled="processing"
                class="p-2 hover:bg-error-container/20 rounded-full text-error transition-colors">
                <span class="material-symbols-outlined text-[20px]" data-icon="delete">
                    {{ processing ? 'hourglass_empty' : 'delete' }}
                </span>
            </button>
        </div>
    </div>

</template>