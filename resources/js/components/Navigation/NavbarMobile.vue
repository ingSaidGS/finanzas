<script setup>

</script>

<template>

    <!-- Mobile TopBar -->
    <header
        class="lg:hidden sticky top-0 z-50 flex items-center justify-between px-5 w-full h-16 bg-primary shadow-[0px_4px_20px_rgba(0,0,0,0.04)]">
        <div class="flex items-center gap-3">
            <span class="font-headline-lg-mobile text-headline-lg-mobile font-bold text-on-secondary">Arco</span>
        </div>
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-on-secondary"
                data-icon="notifications">notifications</span>
            <div class="w-8 h-8 rounded-full bg-surface-container-highest overflow-hidden">
                <img alt="User profile avatar" class="w-full h-full object-cover"
                    data-alt="A professional young man's portrait avatar with a clean, minimalist aesthetic. He is wearing a modern blue sweater against a neutral, high-key studio background that feels bright and professional. The lighting is soft and even, highlighting a confident yet friendly expression, perfectly fitting a sophisticated financial app user interface."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBn_HimQvPnXCzzDqqeStZKgOipfMUgAX0PP2hgJhHMDa_dzLEm9nqm1OaW9ejUV84dvEuPE-0TNvODi4fs8xxU8c2pxANsWU3G-SqRu_QilA7E1d_M3x7zEIo0RvCCmrxeD0_gmmemgjw6xTP3irImDiicd3yW9f3ScL8ybPf2TPLHC6vXjhOSKy80-Atkc_CZipOqwOQGM8f0tsrc_fFJwH0oI5tsGAHV1e8rxMZ2C9zIxEvLctPgTKYyAH-jsmmgoce9UaPaVX8" />
            </div>
        </div>
    </header>

    <!-- Mobile BottomNavBar -->
    <nav
        class="lg:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-margin-mobile py-2 bg-surface-container-lowest shadow-lg rounded-t-xl">
        <a class="flex flex-col items-center justify-center text-on-surface-variant active:scale-110 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="home">home</span>
            <span class="font-label-sm text-label-sm-mobile">Home</span>
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant active:scale-110 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
            <span class="font-label-sm text-label-sm-mobile">Wallets</span>
        </a>
        <button
            class="flex flex-col items-center justify-center text-primary -mt-6 active:scale-110 transition-transform">
            <span class="material-symbols-outlined text-[48px]" data-icon="add_circle"
                style="font-variation-settings: 'FILL' 1;">add_circle</span>
        </button>
        <a class="flex flex-col items-center justify-center text-primary font-bold active:scale-110 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="category"
                style="font-variation-settings: 'FILL' 1;">category</span>
            <span class="font-label-sm text-label-sm-mobile">Categorías</span>
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant active:scale-110 transition-transform"
            href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-label-sm text-label-sm-mobile">Profile</span>
        </a>
    </nav>   
    
    <!-- ⭐ ESPACIADOR: evita que el contenido quede oculto detrás del bottom nav -->
    <div></div>
</template>