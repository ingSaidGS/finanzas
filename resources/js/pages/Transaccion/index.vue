<script setup>
import ResponsiveNav from '@/components/Navigation/ResponsiveNav.vue'
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <ResponsiveNav />
    <main
        class="bg-surface lg:ml-[280px] min-h-screen px-margin-mobile md:px-margin-desktop py-10 lg:py-16">
        <!-- Hero Bento Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Total Balance Card (Large Anchor) -->
            <div
                class="md:col-span-8 bg-surface-container-lowest rounded-xl p-8 shadow-[0px_4px_20px_rgba(0,0,0,0.04)] border border-surface-container-highest transition-all hover:shadow-md">
                <div class="flex flex-col gap-6">
                    <div>
                        <span class="text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">Saldo
                            Total</span>
                        <h3 class="text-display-lg font-display-lg text-primary mt-1 tracking-tighter">$ 4.250,80
                        </h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4 pt-6 border-t border-surface-container">
                        <div class="flex items-center gap-3">
                            <div class="bg-secondary-container/20 p-2 rounded-full">
                                <span class="material-symbols-outlined text-on-secondary-container"
                                    data-icon="arrow_downward"
                                    style="font-variation-settings: 'wght' 700;">arrow_downward</span>
                            </div>
                            <div>
                                <p class="text-on-surface-variant font-label-sm text-label-sm">Ingresos</p>
                                <p class="text-on-secondary-container font-numeric-data text-numeric-data text-lg">+
                                    $ 12.400,00</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-tertiary-fixed/30 p-2 rounded-full">
                                <span class="material-symbols-outlined text-tertiary" data-icon="arrow_upward"
                                    style="font-variation-settings: 'wght' 700;">arrow_upward</span>
                            </div>
                            <div>
                                <p class="text-on-surface-variant font-label-sm text-label-sm">Gastos</p>
                                <p class="text-tertiary font-numeric-data text-numeric-data text-lg">- $ 8.149,20
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Secondary Action Card (Asymmetric) -->
            <div class="md:col-span-4 flex flex-col gap-gutter">
                <div
                    class="bg-primary-container text-white p-6 rounded-xl shadow-lg flex-1 flex flex-col justify-between overflow-hidden relative group">
                    <!-- Decorative glow -->
                    <div
                        class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-500">
                    </div>
                    <div class="relative z-10">
                        <span class="material-symbols-outlined text-4xl"
                            data-icon="account_balance">account_balance</span>
                        <h4 class="font-title-md text-title-md mt-4">Mis Bileteras</h4>
                        <p class="font-label-sm text-label-sm opacity-80 mt-1">Gestiona los fondos de tus billeteras en BS</p>
                    </div>
                    <Link
                        :href="route('billetera.index')"
                        class="relative z-10 mt-8 bg-white text-primary px-6 py-3 rounded-lg font-label-sm text-label-sm font-bold flex items-center justify-between active:scale-95 transition-transform">
                        Ver detalles
                        <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                </Link>
                </div>
            </div>
            <!-- Transaction List (Full Width) -->
            <div
                class="md:col-span-12 bg-surface-container-lowest rounded-xl shadow-[0px_4px_20px_rgba(0,0,0,0.04)] border border-surface-container-highest overflow-hidden">
                <div class="p-6 border-b border-surface-container flex items-center justify-between">
                    <h4 class="font-title-md text-title-md text-on-surface">Últimos 5 movimientos</h4>
                    <button class="text-primary font-label-sm text-label-sm hover:underline">Ver todo</button>
                </div>
                <div class="flex flex-col">
                    <!-- Item 1 -->
                    <div
                        class="flex items-center justify-between p-4 px-6 hover:bg-surface-container-low transition-colors group">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-container group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                            </div>
                            <div>
                                <p class="font-title-md text-sm text-on-surface font-semibold">Supermercado Jumbo
                                </p>
                                <p class="font-label-sm text-xs text-on-surface-variant">Banco Galicia • 12 Oct</p>
                            </div>
                        </div>
                        <span class="text-tertiary font-numeric-data text-numeric-data font-bold">- $
                            15.400,00</span>
                    </div>
                    <!-- Item 2 -->
                    <div
                        class="flex items-center justify-between p-4 px-6 border-t border-surface-container hover:bg-surface-container-low transition-colors group">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-container group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined" data-icon="work">work</span>
                            </div>
                            <div>
                                <p class="font-title-md text-sm text-on-surface font-semibold">Haberes Mensuales</p>
                                <p class="font-label-sm text-xs text-on-surface-variant">Wise Transfer • 10 Oct</p>
                            </div>
                        </div>
                        <span class="text-on-secondary-container font-numeric-data text-numeric-data font-bold">+ $
                            3.200,00</span>
                    </div>
                    <!-- Item 3 -->
                    <div
                        class="flex items-center justify-between p-4 px-6 border-t border-surface-container hover:bg-surface-container-low transition-colors group">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-container group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined" data-icon="restaurant">restaurant</span>
                            </div>
                            <div>
                                <p class="font-title-md text-sm text-on-surface font-semibold">Restaurante El Club
                                </p>
                                <p class="font-label-sm text-xs text-on-surface-variant">Tarjeta Naranja • 08 Oct
                                </p>
                            </div>
                        </div>
                        <span class="text-tertiary font-numeric-data text-numeric-data font-bold">- $
                            4.250,00</span>
                    </div>
                    <!-- Item 4 -->
                    <div
                        class="flex items-center justify-between p-4 px-6 border-t border-surface-container hover:bg-surface-container-low transition-colors group">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-container group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined" data-icon="bolt">bolt</span>
                            </div>
                            <div>
                                <p class="font-title-md text-sm text-on-surface font-semibold">Edesur S.A.</p>
                                <p class="font-label-sm text-xs text-on-surface-variant">Débito Automático • 05 Oct
                                </p>
                            </div>
                        </div>
                        <span class="text-tertiary font-numeric-data text-numeric-data font-bold">- $
                            2.100,50</span>
                    </div>
                    <!-- Item 5 -->
                    <div
                        class="flex items-center justify-between p-4 px-6 border-t border-surface-container hover:bg-surface-container-low transition-colors group">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface-variant group-hover:bg-primary-container group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined" data-icon="person_add">person_add</span>
                            </div>
                            <div>
                                <p class="font-title-md text-sm text-on-surface font-semibold">Transferencia de Juan
                                </p>
                                <p class="font-label-sm text-xs text-on-surface-variant">CVU • 02 Oct</p>
                            </div>
                        </div>
                        <span class="text-on-secondary-container font-numeric-data text-numeric-data font-bold">+ $
                            15.000,00</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>