<script setup>
import ResponsiveNav from '@/components/Navigation/ResponsiveNav.vue'
import { Head, Link, useForm } from '@inertiajs/vue3';

// Configurar el formulario con Inertia
const form = useForm({
    monto: '',
    transaccion: '', // Por defecto: efectivo
    saldo: '',
    proposito: ''

})
</script>

<template>
    <ResponsiveNav />
    <main class="bg-surface lg:ml-[280px] p-6 md:p-12 min-h-screen flex items-center justify-center">
        <!-- Form Container / Independent View -->
        <div
            class="md:col-span-7 bg-surface-container-lowest p-8 md:p-12 rounded-xl border border-surface-container-highest shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
            <div class=" pt-5 pb-6 border-b border-surface-container-high flex justify-between items-center">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Nueva Transacción</h2>
                    <p class="text-on-surface-variant font-body-md text-body-md mt-1">Registra tus movimientos
                        financieros con precisión.</p>
                </div>
            </div>
            <form class="space-y-6" @submit.prevent="submitForm">
                <!-- Amount Section (Hero Input) -->
                <div class="text-center space-y-2">
                    <label class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Monto
                        de la Operación</label>
                    <div class="relative flex items-center justify-center">
                        <span class="absolute left-1/4 text-display-lg font-display-lg text-outline-variant">$</span>
                        <input
                            class="w-full bg-transparent border-none text-center text-display-lg font-display-lg focus:ring-0 text-primary placeholder:text-outline-variant"
                            placeholder="0.00" required="" step="0.01" type="number" />
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="block font-label-sm text-label-sm text-on-surface">Transacción</label>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Income Option -->
                        <label class="relative cursor-pointer group">
                            <input v-model="form.transaccion" class="sr-only peer" name="tipo" type="radio" value="0" />
                            <div
                                class="flex flex-col items-center justify-center gap-3 p-6 rounded-xl border border-outline-variant bg-surface-bright transition-all duration-200 peer-checked:border-secondary peer-checked:bg-secondary-container/10 group-hover:bg-surface-container-low">
                                <div
                                    class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined" data-icon="trending_up">trending_up</span>
                                </div>
                                <span
                                    class="font-title-md text-title-md text-on-surface peer-checked:text-secondary">No</span>
                            </div>
                        </label>
                        <!-- Expense Option -->
                        <label class="relative cursor-pointer group">
                            <input v-model="form.transaccion" checked="" class="sr-only peer" name="tipo" type="radio"
                                value="1" />
                            <div
                                class="flex flex-col items-center justify-center gap-3 p-6 rounded-xl border border-outline-variant bg-surface-bright transition-all duration-200 peer-checked:border-error peer-checked:bg-error-container/10 group-hover:bg-surface-container-low">
                                <div
                                    class="w-12 h-12 rounded-full bg-error/10 flex items-center justify-center text-error">
                                    <span class="material-symbols-outlined"
                                        data-icon="trending_down">trending_down</span>
                                </div>
                                <span
                                    class="font-title-md text-title-md text-on-surface peer-checked:text-error">Sí</span>
                            </div>
                        </label>
                    </div>
                    <!-- Mostrar error si existe -->
                    <p v-if="form.errors.tipo" class="text-error text-label-sm mt-1">
                        {{ form.errors.tipo }}
                    </p>
                </div>
                <!-- Grid Inputs -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant px-1">Billetera de
                            Origen</label>
                        <div class="relative group">
                            <select
                                class="w-full bg-surface-container-lowest border border-outline-variant rounded-xl px-4 py-3.5 appearance-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-md text-body-md outline-none">
                                <option>Bank Account Main</option>
                                <option>Savings Fund</option>
                                <option>Cash Wallet</option>
                                <option>Crypto Exchange</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-outline"
                                data-icon="expand_more">expand_more</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant px-1">Categoría</label>
                        <div class="relative group">
                            <select
                                class="w-full bg-surface-container-lowest border border-outline-variant rounded-xl px-4 py-3.5 appearance-none focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-md text-body-md outline-none">
                                <option>Alimentación</option>
                                <option>Transporte</option>
                                <option>Vivienda</option>
                                <option>Entretenimiento</option>
                                <option>Inversiones</option>
                            </select>
                            <span
                                class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-outline"
                                data-icon="expand_more">expand_more</span>
                        </div>
                    </div>
                    <div class="md:col-span-2 space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant px-1">Descripción</label>
                        <input
                            class="w-full bg-surface-container-lowest border border-outline-variant rounded-xl px-4 py-3.5 focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-md text-body-md outline-none"
                            placeholder="¿En qué gastaste este dinero?" type="text" />
                    </div>
                    <div class="md:col-span-2 space-y-2">
                        <label class="font-label-sm text-label-sm text-on-surface-variant px-1">Fecha</label>
                        <div class="relative">
                            <input
                                class="w-full bg-surface-container-lowest border border-outline-variant rounded-xl px-4 py-3.5 focus:border-primary focus:ring-2 focus:ring-primary/10 transition-all font-body-md text-body-md outline-none"
                                type="date" value="2023-10-27" />
                        </div>
                    </div>
                </div>
                <!-- Actions -->
                <div class="flex items-center gap-4 pt-4">
                    <button
                        class="flex-1 py-4 border border-outline-variant rounded-2xl text-on-surface font-title-md text-title-md hover:bg-surface-container-low transition-colors active:scale-95"
                        type="button">
                        Cancelar
                    </button>
                    <button
                        class="flex-[2] py-4 bg-primary text-white rounded-2xl font-title-md text-title-md shadow-lg shadow-primary/20 hover:bg-primary-container transition-all active:scale-95"
                        type="submit">
                        Guardar Transacción
                    </button>
                </div>
            </form>
        </div>
    </main>
</template>