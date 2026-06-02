<script setup>

</script>

<template>
    <!-- Desktop SideNavBar -->
    <aside
        class="hidden lg:flex flex-col w-[280px] h-screen fixed left-0 top-0 bg-surface-container-lowest border-r border-surface-container-highest shadow-sm z-40">
        <div class="p-8">
            <h1 class="font-headline-lg text-headline-lg font-bold text-primary">Arco</h1>
            <p class="text-on-surface-variant font-label-sm text-label-sm mt-1">Young Professional</p>
        </div>
        <nav class="flex-1 px-4 space-y-2 mt-4">
            <!-- Dashboard -->
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container transition-all duration-200 rounded-xl group"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-sm text-label-sm">Dashboard</span>
            </a>
            <!-- Billeteras -->
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container transition-all duration-200 rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
                <span class="font-label-sm text-label-sm">Billeteras</span>
            </a>
            <!-- Categorías (Active) -->
            <a class="flex items-center gap-3 bg-primary-container/10 text-primary border-l-4 border-primary px-4 py-3 transition-all duration-200 rounded-r-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="category"
                    style="font-variation-settings: 'FILL' 1;">category</span>
                <span class="font-label-sm text-label-sm font-bold">Categorías</span>
            </a>
            <!-- Reportes -->
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container transition-all duration-200 rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="insert_chart">insert_chart</span>
                <span class="font-label-sm text-label-sm">Reportes</span>
            </a>
            <!-- Perfil -->
            <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container transition-all duration-200 rounded-xl"
                href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-label-sm text-label-sm">Perfil</span>
            </a>
        </nav>
        <div class="p-4 border-t border-surface-container-highest">
            <button
                class="w-full bg-primary text-on-primary py-3 rounded-xl font-label-sm text-label-sm flex items-center justify-center gap-2 active:scale-95 transition-transform">
                <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
                New Transaction
            </button>
            <div class="mt-4 space-y-1">
                <a class="flex items-center gap-3 text-on-surface-variant px-4 py-2 hover:bg-surface-container transition-all duration-200 rounded-lg"
                    href="#">
                    <span class="material-symbols-outlined text-[20px]" data-icon="logout">logout</span>
                    <span class="font-label-sm text-label-sm">Logout</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- ⭐ IMPORTANTE: Espaciador para que el contenido no quede debajo del sidebar -->
    <div class="hidden lg:block w-[280px] shrink-0"></div>
</template>