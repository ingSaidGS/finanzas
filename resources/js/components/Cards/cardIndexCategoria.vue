<script setup>
const props = defineProps({
    categoria: Object
})
</script>

<template>

    <div
        class="category-card flex items-center justify-between p-6 bg-surface-container-lowest border border-surface-container-highest rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] hover:shadow-md transition-all">
        <div class="flex items-center gap-4">
            <div>
                <h3 class="font-title-md text-title-md">{{ categoria.nombre }}</h3>
            </div>
        </div>

        <div class="action-buttons flex gap-2">
            <button v-if="categoria.activo == false"
                class="p-2 hover:bg-primary-container/20 rounded-lg text-primary transition-colors" title="Restaurar">
                <span class="material-symbols-outlined text-[20px]" data-icon="restore">restore</span>
            </button>
            <button v-if="categoria.activo == true" class="p-2 hover:bg-surface-container rounded-lg text-on-surface-variant transition-colors">
                <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
            </button>
            <button v-if="categoria.activo == true"
                class="p-2 hover:bg-error-container/20 rounded-lg text-error transition-colors">
                <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
            </button>
        </div>
    </div>

</template>