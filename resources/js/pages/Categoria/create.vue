<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import ResponsiveNav from '@/components/Navigation/ResponsiveNav.vue'

// Configurar el formulario con Inertia
const form = useForm({
    nombre: '',
    tipo: 'egreso' // Por defecto: egreso
})

// Función para enviar el formulario
const submitForm = () => {
    form.post('/categoria', {
        onSuccess: () => {
            // Mostrar toast de éxito
            const toast = document.getElementById('toast')
            if (toast) {
                toast.classList.remove('opacity-0', 'translate-y-4')
                toast.classList.add('opacity-100', 'translate-y-0')

                // Ocultar toast después de 3 segundos
                setTimeout(() => {
                    toast.classList.remove('opacity-100', 'translate-y-0')
                    toast.classList.add('opacity-0', 'translate-y-4')
                }, 3000)
            }

            // Limpiar el formulario
            form.reset()
        },
        onError: (errors) => {
            console.error('Errores:', errors)
            // Aquí puedes mostrar mensajes de error
        }
    })
}
</script>

<template>
    <Head title="Crear Categoría" />
    <!-- Navbar responsivo -->
    <ResponsiveNav />
    <main
        class="bg-surface lg:ml-[280px] min-h-screen px-margin-mobile py-8 md:px-margin-desktop md:py-12 flex items-center justify-center">
        <div class="w-full max-w-2xl">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-8 text-on-surface-variant font-label-sm text-label-sm">
                <Link :href="route('categoria.index')" class="hover:text-primary transition-colors">Categorías
                </Link>
                <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
                <span class="text-primary font-bold">Nueva Categoría</span>
            </nav>
            <!-- Form Card -->
            <section
                class="bg-surface-container-lowest rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] border border-surface-container-highest overflow-hidden">
                <div class="p-8 md:p-12">
                    <header class="mb-10 text-center">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Crear Categoría</h2>
                    </header>
                    <form class="space-y-8" id="categoryForm" @submit.prevent="submitForm">
                        <!-- Category Name Input -->
                        <div class="space-y-2">
                            <label class="block font-label-sm text-label-sm text-on-surface" for="category_name">Nombre
                                de la Categoría</label>
                            <div class="relative group">
                                <input v-model="form.nombre"
                                    class="w-full pl-12 pr-4 py-4 bg-surface-bright border border-outline-variant rounded-lg font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all duration-200"
                                    id="nombre" name="nombre" placeholder="Ej: Supermercado, Freelance, Alquiler..."
                                    type="text" />
                                <!-- Mostrar error si existe -->
                                <p v-if="form.errors.nombre" class="text-error text-label-sm mt-1">
                                    {{ form.errors.nombre }}
                                </p>
                            </div>
                        </div>
                        <!-- Category Type Selector -->
                        <div class="space-y-2">
                            <label class="block font-label-sm text-label-sm text-on-surface">Tipo de Movimiento</label>
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Income Option -->
                                <label class="relative cursor-pointer group">
                                    <input v-model="form.tipo" class="sr-only peer" name="tipo" type="radio"
                                        value="ingreso" />
                                    <div
                                        class="flex flex-col items-center justify-center gap-3 p-6 rounded-xl border border-outline-variant bg-surface-bright transition-all duration-200 peer-checked:border-secondary peer-checked:bg-secondary-container/10 group-hover:bg-surface-container-low">
                                        <div
                                            class="w-12 h-12 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                                            <span class="material-symbols-outlined"
                                                data-icon="trending_up">trending_up</span>
                                        </div>
                                        <span
                                            class="font-title-md text-title-md text-on-surface peer-checked:text-secondary">Ingreso</span>
                                    </div>
                                </label>
                                <!-- Expense Option -->
                                <label class="relative cursor-pointer group">
                                    <input v-model="form.tipo" checked="" class="sr-only peer" name="tipo" type="radio"
                                        value="egreso" />
                                    <div
                                        class="flex flex-col items-center justify-center gap-3 p-6 rounded-xl border border-outline-variant bg-surface-bright transition-all duration-200 peer-checked:border-error peer-checked:bg-error-container/10 group-hover:bg-surface-container-low">
                                        <div
                                            class="w-12 h-12 rounded-full bg-error/10 flex items-center justify-center text-error">
                                            <span class="material-symbols-outlined"
                                                data-icon="trending_down">trending_down</span>
                                        </div>
                                        <span
                                            class="font-title-md text-title-md text-on-surface peer-checked:text-error">Egreso</span>
                                    </div>
                                </label>
                            </div>
                            <!-- Mostrar error si existe -->
                            <p v-if="form.errors.tipo" class="text-error text-label-sm mt-1">
                                {{ form.errors.tipo }}
                            </p>
                        </div>

                        <!-- Form Actions -->
                        <div class="flex flex-col-reverse md:flex-row items-center gap-4 pt-4">
                            <Link
                                :href="route('categoria.index')"
                                class="w-full md:w-auto px-8 py-3 text-on-surface font-title-md text-title-md bg-transparent border border-outline-variant rounded-xl hover:bg-surface-container-low transition-colors"
                                onclick="window.history.back()" type="button">
                                Cancelar
                            </Link>
                            <button
                                class="w-full md:flex-1 px-8 py-3 bg-primary text-on-primary font-title-md text-title-md rounded-xl shadow-lg active:scale-95 transition-all duration-200"
                                type="submit"
                                 :disabled="form.processing">
                                {{ form.processing ? 'Guardando...' : 'Guardar Categoría' }}
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Success Micro-interaction Hint (Hidden by default) -->
            <div class="fixed bottom-24 left-1/2 -translate-x-1/2 md:left-[calc(50%+140px)] md:bottom-12 bg-inverse-surface text-inverse-on-surface px-6 py-4 rounded-full shadow-xl opacity-0 translate-y-4 transition-all duration-300 pointer-events-none z-[60] flex items-center gap-3"
                id="toast">
                <span class="material-symbols-outlined text-secondary-fixed" data-icon="check_circle"
                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="font-label-sm text-label-sm">Categoría guardada con éxito</span>
            </div>
        </div>
    </main>
</template>