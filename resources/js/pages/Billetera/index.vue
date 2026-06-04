<script setup>
import ResponsiveNav from '@/components/Navigation/ResponsiveNav.vue'
import cardIndexBilletera from '@/components/Cards/cardIndexBilletera.vue'
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue'

const props = defineProps({
    billeterasActivas: Array,
    billeterasNoActivas: Array,
})

// Computed para la cantidad de elementos
const totalBilleteras = computed(() => {
    return props.billeterasActivas.length
})

// Computed para la sumatoria de saldos
const sumaSaldos = computed(() => {
    return props.billeterasActivas.reduce((total, billetera) => {
        return total + (billetera.saldo || 0)
    }, 0)
})

let currentStatus = 'activas';

function switchStatusTab(status) {
    currentStatus = status;
    const tabActivas = document.getElementById('d-activas');
    const tabArchivadas = document.getElementById('d-archivadas');

    if (status === 'activas') {
        tabActivas.classList.remove('hidden');
        tabArchivadas.classList.add('hidden');

    } else {
        tabArchivadas.classList.remove('hidden');
        tabActivas.classList.add('hidden');
    }
    //updateVisibility();
}
</script>

<template>

    <ResponsiveNav />
    <main class="bg-surface lg:ml-[280px] min-h-screen px-margin-mobile md:px-margin-desktop py-10 lg:py-16">
        <!-- Header Section -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">Mis Billeteras
                </h2>
                <p class="text-on-surface-variant font-body-md text-body-md mt-2 max-w-xl">Gestiona tus cuentas
                    bancarias, billeteras virtuales y efectivo en un solo lugar de forma segura y eficiente.</p>
            </div>
            <Link :href="route('billetera.create')"
                class="bg-primary text-on-primary px-6 py-3 rounded-xl flex items-center justify-center gap-2 font-label-sm text-label-sm font-semibold active:scale-95 transition-transform shadow-md">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                Nueva Billetera
            </Link>
        </section>
        <!-- Tabs Navigation -->
        <div class="flex border-b border-surface-container-highest mb-8">
            <button class="px-6 py-3 font-label-sm text-label-sm font-semibold transition-all tab-active"
                id="tab-activas" @click="switchStatusTab('activas')">Activas</button>
            <button
                class="px-6 py-3 font-label-sm text-label-sm font-semibold text-on-surface-variant hover:text-primary transition-all"
                id="tab-archivadas" @click="switchStatusTab('archivadas')">Archivadas</button>
        </div>
        <!-- Stats Overview Bento Grid -->
        <div id="d-activas">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-12" id="stats-section">
                <div
                    class="md:col-span-2 card-elevation bg-surface-container-lowest rounded-xl p-8 flex flex-col justify-between min-h-[160px] relative overflow-hidden group">
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-primary/5 rounded-full group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Balance
                        Total
                        Combinado</p>
                    <div class="mt-4">
                        <span class="font-display-lg text-display-lg text-primary">Bs. {{ sumaSaldos }}</span>
                        <span class="text-secondary font-numeric-data text-numeric-data ml-2">+ 12.5% este mes</span>
                    </div>
                </div>
                <div
                    class="card-elevation bg-primary-container rounded-xl p-8 flex flex-col justify-between min-h-[160px] text-on-primary-container">
                    <p class="font-label-sm text-label-sm opacity-80 uppercase tracking-wider">Cuentas Activas</p>
                    <div class="flex items-end justify-between">
                        <span class="font-display-lg text-display-lg">{{ totalBilleteras }}</span>
                        <span class="material-symbols-outlined text-4xl"
                            data-icon="account_balance">account_balance</span>
                    </div>
                </div>
            </div>
            <!-- Activas Panel -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="panel-activas">
                <!-- Wallet Card: Banco Nación -->
                <div v-for="billetera in billeterasActivas" :key="billetera.id">
                    <cardIndexBilletera :billetera="billetera" />
                </div>

                <!-- Empty Placeholder / Add Card -->
                <Link :href="route('billetera.create')"
                    class="border-2 border-dashed border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center gap-3 hover:bg-surface-container/50 hover:border-primary transition-all duration-300 group min-h-[220px]">
                    <div
                        class="w-14 h-14 rounded-full bg-surface-container-highest flex items-center justify-center group-hover:bg-primary-container/10 transition-colors">
                        <span class="material-symbols-outlined text-outline group-hover:text-primary"
                            data-icon="add">add</span>
                    </div>
                    <span
                        class="font-label-sm text-label-sm font-bold text-on-surface-variant group-hover:text-primary">Agregar
                        Nueva Billetera</span>
                </Link>
            </section>
        </div>
        <!-- Archivadas Panel (Hidden by default) -->
        <section class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="d-archivadas">
            <!-- Archived Wallet Card: Lemon Cash -->
            <div v-for="billetera in billeterasNoActivas" :key="billetera.id">
                <cardIndexBilletera :billetera="billetera" />
            </div>
        </section>
        <!-- Bottom Spacer for Mobile Nav -->
        <div class="h-24 md:h-0"></div>
    </main>

</template>