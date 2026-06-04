<script setup>
import ResponsiveNav from '@/components/Navigation/ResponsiveNav.vue'
import { Head, Link, useForm } from '@inertiajs/vue3';

// Configurar el formulario con Inertia
const form = useForm({
    nombre: '',
    tipo: 'efectivo', // Por defecto: efectivo
    saldo: '',
    proposito: ''

})

// Función para enviar el formulario
const submitForm = () => {
    // ✅ Esto es SEGURO en producción y funciona perfectamente
    form.post(route('billetera.store'), {
        onSuccess: () => {
            // tu código existente del toast...
            const toast = document.getElementById('toast')
            if (toast) {
                toast.classList.remove('opacity-0', 'translate-y-4')
                toast.classList.add('opacity-100', 'translate-y-0')

                setTimeout(() => {
                    toast.classList.remove('opacity-100', 'translate-y-0')
                    toast.classList.add('opacity-0', 'translate-y-4')
                }, 3000)
            }

            form.reset()
        },
        onError: (errors) => {
            console.error('Errores:', errors)
        }
    })
}

</script>

<template>
    <ResponsiveNav />
    <main class="bg-surface lg:ml-[280px] p-6 md:p-12 min-h-screen flex items-center justify-center">
        <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Information Card (Bento Style Item) -->
            <div
                class="md:col-span-5 hidden md:flex flex-col justify-center bg-primary p-10 rounded-xl shadow-lg relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-primary-container/20 rounded-full blur-3xl">
                </div>
                <div
                    class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 bg-secondary-container/10 rounded-full blur-2xl">
                </div>
                <h2 class="font-headline-lg text-headline-lg text-white mb-6 relative z-10">Organiza tu futuro
                    financiero.</h2>
                <p class="font-body-md text-body-md text-primary-fixed-dim relative z-10">Crea billeteras personalizadas
                    para separar tus ahorros, gastos diarios o inversiones. Kinetic Finance te ayuda a mantener el
                    control absoluto.</p>
                <div class="mt-12 space-y-6 relative z-10">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-secondary-fixed">shield</span>
                        </div>
                        <div>
                            <p class="font-label-sm text-label-sm text-white">Seguridad Total</p>
                            <p class="text-xs text-primary-fixed-dim">Encriptación de nivel bancario.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-secondary-fixed">insights</span>
                        </div>
                        <div>
                            <p class="font-label-sm text-label-sm text-white">Métricas en vivo</p>
                            <p class="text-xs text-primary-fixed-dim">Sigue cada movimiento al instante.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Card -->
            <div
                class="md:col-span-7 bg-surface-container-lowest p-8 md:p-12 rounded-xl border border-surface-container-highest shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
                <div class="mb-8">
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Nueva Billetera</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Configura tu nueva cuenta para comenzar
                        a transaccionar.</p>
                </div>
                <form class="space-y-6" @submit.prevent="submitForm">
                    <!-- Name Field -->
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block"
                            for="wallet-name">Nombre de la billetera</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">payments</span>
                            <input v-model="form.nombre"
                                class="w-full pl-12 pr-4 py-3 rounded-lg border border-outline-variant bg-surface-bright focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none font-body-md text-body-md"
                                id="nombre" name="nombre" placeholder="Ej. Banco unión" type="text" />
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block font-label-sm text-label-sm text-on-surface">Tipo de Billetera</label>
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Income Option -->
                            <label class="relative cursor-pointer group">
                                <input v-model="form.tipo" class="sr-only peer" name="tipo" type="radio"
                                    value="efectivo" />
                                <div
                                    class="flex flex-col items-center justify-center gap-3 p-6 rounded-xl border border-outline-variant bg-surface-bright transition-all duration-200 peer-checked:border-secondary peer-checked:bg-secondary-container/10 group-hover:bg-surface-container-low">
                                    <div
                                        class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined"
                                            data-icon="trending_up">trending_up</span>
                                    </div>
                                    <span
                                        class="font-title-md text-title-md text-on-surface peer-checked:text-secondary">Efectivo</span>
                                </div>
                            </label>
                            <!-- Expense Option -->
                            <label class="relative cursor-pointer group">
                                <input v-model="form.tipo" checked="" class="sr-only peer" name="tipo" type="radio"
                                    value="banca" />
                                <div
                                    class="flex flex-col items-center justify-center gap-3 p-6 rounded-xl border border-outline-variant bg-surface-bright transition-all duration-200 peer-checked:border-error peer-checked:bg-error-container/10 group-hover:bg-surface-container-low">
                                    <div
                                        class="w-12 h-12 rounded-full bg-error/10 flex items-center justify-center text-error">
                                        <span class="material-symbols-outlined"
                                            data-icon="trending_down">trending_down</span>
                                    </div>
                                    <span
                                        class="font-title-md text-title-md text-on-surface peer-checked:text-error">Banca</span>
                                </div>
                            </label>
                        </div>
                        <!-- Mostrar error si existe -->
                        <p v-if="form.errors.tipo" class="text-error text-label-sm mt-1">
                            {{ form.errors.tipo }}
                        </p>
                    </div>

                    <!-- Initial Balance Field -->
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block"
                            for="initial-balance">Saldo inicial</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">account_balance_wallet</span>
                            <span
                                class="absolute left-12 top-1/2 -translate-y-1/2 font-numeric-data text-on-surface">$</span>
                            <input v-model="form.saldo"
                                class="w-full pl-16 pr-4 py-3 rounded-lg border border-outline-variant bg-surface-bright focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none font-numeric-data text-numeric-data"
                                id="initial-balance" placeholder="0.00" type="number" />
                        </div>
                        <p class="text-xs text-on-surface-variant">Este será el monto con el que iniciará tu registro.
                        </p>
                    </div>

                    <!-- Name Field -->
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block"
                            for="wallet-name">Porpósito de la billetera</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">payments</span>
                            <input v-model="form.proposito"
                                class="w-full pl-12 pr-4 py-3 rounded-lg border border-outline-variant bg-surface-bright focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none font-body-md text-body-md"
                                id="proposito" name="proposito" placeholder="Ej. Ahorros Vacaciones" type="text" />
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="pt-8 flex flex-col sm:flex-row gap-4">
                        <button
                            class="flex-1 bg-primary-container text-white font-title-md text-title-md py-4 rounded-xl shadow-sm active:scale-95 transition-transform hover:bg-primary-container/90"
                            type="submit" :disabled="form.processing">
                            {{ form.processing ? 'Guardando...' : 'Crear Billetera' }}
                        </button>
                        <Link :href="route('categoria.index')"
                            class="flex-1 bg-white text-center text-on-surface-variant border border-outline-variant font-title-md text-title-md py-4 rounded-xl hover:bg-surface-container transition-colors"
                            type="button">
                            Cancelar
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </main>
</template>