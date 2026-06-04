<script setup>
import ResponsiveNav from '@/components/Navigation/ResponsiveNav.vue'
import { Head, Link } from '@inertiajs/vue3';
import CadIndexCategoria from '@/components/Cards/cardIndexCategoria.vue';

const props = defineProps({
    categoriasIngreso: Array,
    categoriasEgreso: Array
})

let currentType = 'egresos';
let currentStatus = 'activas';

function updateVisibility() {
    const egresosContainer = document.getElementById('egresos-container');
    const ingresosContainer = document.getElementById('ingresos-container');

    // Handle main containers
    if (currentType === 'egresos') {
        egresosContainer.classList.remove('hidden');
        ingresosContainer.classList.add('hidden');
    } else {
        egresosContainer.classList.add('hidden');
        ingresosContainer.classList.remove('hidden');
    }

    // Handle sub-lists within active container
    const activeContainer = currentType === 'egresos' ? egresosContainer : ingresosContainer;
    const activasGrid = activeContainer.querySelector(`[id$="-activas"]`);
    const archivadasGrid = activeContainer.querySelector(`[id$="-archivadas"]`);

    if (currentStatus === 'activas') {
        activasGrid.classList.remove('hidden');
        archivadasGrid.classList.add('hidden');
    } else {
        activasGrid.classList.add('hidden');
        archivadasGrid.classList.remove('hidden');
    }
}

function switchMainTab(type) {
    currentType = type;
    const tabEgresos = document.getElementById('tab-egresos');
    const tabIngresos = document.getElementById('tab-ingresos');

    if (type === 'egresos') {
        tabEgresos.classList.add('active-tab-indicator', 'text-primary', 'font-bold');
        tabEgresos.classList.remove('text-on-surface-variant');
        tabIngresos.classList.remove('active-tab-indicator', 'text-primary', 'font-bold');
        tabIngresos.classList.add('text-on-surface-variant');
    } else {
        tabIngresos.classList.add('active-tab-indicator', 'text-primary', 'font-bold');
        tabIngresos.classList.remove('text-on-surface-variant');
        tabEgresos.classList.remove('active-tab-indicator', 'text-primary', 'font-bold');
        tabEgresos.classList.add('text-on-surface-variant');
    }
    updateVisibility();
}

function switchStatusTab(status) {
    currentStatus = status;
    const tabActivas = document.getElementById('tab-activas');
    const tabArchivadas = document.getElementById('tab-archivadas');

    if (status === 'activas') {
        tabActivas.classList.add('bg-primary', 'text-on-primary');
        tabActivas.classList.remove('bg-surface-container', 'text-on-surface-variant');
        tabArchivadas.classList.add('bg-surface-container', 'text-on-surface-variant');
        tabArchivadas.classList.remove('bg-primary', 'text-on-primary');
    } else {
        tabArchivadas.classList.add('bg-primary', 'text-on-primary');
        tabArchivadas.classList.remove('bg-surface-container', 'text-on-surface-variant');
        tabActivas.classList.add('bg-surface-container', 'text-on-surface-variant');
        tabActivas.classList.remove('bg-primary', 'text-on-primary');
    }
    updateVisibility();
}
</script>

<template>
    <!-- Navbar responsivo -->
    <ResponsiveNav />

    <!-- Main Content -->
    <main class="bg-surface lg:ml-[280px] min-h-screen px-margin-mobile md:px-margin-desktop py-8 pb-24 lg:pb-8">
        <div class="max-w-container-max mx-auto">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div>
                    <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-background">
                        Categorías</h2>
                </div>
                <Link :href="route('categoria.create')"
                    class="bg-primary text-on-primary px-6 py-3 rounded-xl font-label-sm text-label-sm flex items-center justify-center gap-2 shadow-sm hover:bg-primary-container transition-colors active:scale-95 transition-transform self-start md:self-auto">
                    <span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                    Agregar Categoría
                </Link>
            </div>

            <!-- Double Tabs Structure -->
            <div class="space-y-6 mb-8">
                <!-- First level: Egresos / Ingresos -->
                <div class="border-b border-surface-container-highest flex gap-8">
                    <button
                        class="pb-3 font-title-md text-title-md transition-all active-tab-indicator text-primary font-bold"
                        id="tab-egresos" @click="switchMainTab('egresos')">
                        Egresos
                    </button>
                    <button
                        class="pb-3 font-title-md text-title-md transition-all text-on-surface-variant hover:text-on-surface"
                        id="tab-ingresos" @click="switchMainTab('ingresos')">
                        Ingresos
                    </button>
                </div>
                <!-- Second level: Activas / Archivadas -->
                <div class="flex gap-4">
                    <button
                        class="px-4 py-2 rounded-full font-label-sm text-label-sm bg-primary text-on-primary shadow-sm"
                        id="tab-activas" @click="switchStatusTab('activas')">
                        Activas
                    </button>
                    <button
                        class="px-4 py-2 rounded-full font-label-sm text-label-sm bg-surface-container text-on-surface-variant  transition-colors"
                        id="tab-archivadas" @click="switchStatusTab('archivadas')">
                        Archivadas
                    </button>
                </div>
            </div>

            <!-- Categories Containers -->
            <div id="egresos-container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="egresos-list-activas">
                    <div v-for="categoria in categoriasEgreso" :key="categoria.id">
                        <CadIndexCategoria :categoria="categoria" />
                    </div>
                </div>
                <div class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter"
                    id="egresos-list-archivadas">
                    <!-- Archived Category Example -->
                    <div
                        class="category-card archived-card flex items-center justify-between p-6 border border-surface-container-highest rounded-xl shadow-none transition-all">
                        <div class="flex items-center gap-4">
                            <div>
                                <h3 class="font-title-md text-title-md">Suscripciones Antiguas</h3>
                                <p class="text-on-surface-variant text-label-sm">Archivada hace 2 meses</p>
                            </div>
                        </div>
                        <div class="action-buttons flex gap-2">
                            <button class="p-2 hover:bg-primary-container/20 rounded-lg text-primary transition-colors"
                                title="Restaurar">
                                <span class="material-symbols-outlined text-[20px]" data-icon="restore">restore</span>
                            </button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error transition-colors">
                                <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden" id="ingresos-container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="ingresos-list-activas">
                    <div v-for="categoria in categoriasIngreso" :key="categoria.id">
                        <CadIndexCategoria :categoria="categoria" />
                    </div>
                </div>
                <div class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter"
                    id="ingresos-list-archivadas">
                    <!-- Archived Income Example -->
                    <div
                        class="category-card archived-card flex items-center justify-between p-6 border border-surface-container-highest rounded-xl shadow-none transition-all">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-outline-variant/30 flex items-center justify-center text-outline">
                                <span class="material-symbols-outlined" data-icon="card_giftcard">card_giftcard</span>
                            </div>
                            <div>
                                <h3 class="font-title-md text-title-md">Premios 2023</h3>
                                <p class="text-on-surface-variant text-label-sm">Archivada</p>
                            </div>
                        </div>
                        <div class="action-buttons flex gap-2">
                            <button class="p-2 hover:bg-primary-container/20 rounded-lg text-primary transition-colors"
                                title="Restaurar">
                                <span class="material-symbols-outlined text-[20px]" data-icon="restore">restore</span>
                            </button>
                            <button class="p-2 hover:bg-error-container/20 rounded-lg text-error transition-colors">
                                <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
</template>