<template>

    <Head title="FácilFin" />
    <body class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container">
        <!-- Header / TopNavBar -->
        <header class="bg-surface-container-lowest sticky top-0 z-50 shadow-sm">
            <div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
                <div class="font-display-lg text-primary tracking-tighter text-[24px]">FácilFin Finance</div>
                <nav class="hidden md:flex gap-8">
                    <a class="text-on-surface-variant font-medium hover:text-primary transition-colors font-title-md text-title-md transition-all duration-200 ease-in-out"
                        href="#">About</a>
                </nav>
                <nav>
                    <div class="flex items-center gap-4">
                        <Link
                            :href="route('login')"
                            class="px-6 py-2 border border-outline rounded-full text-on-surface font-title-md text-title-md hover:bg-surface-container transition-colors">Iniciar Sesión</Link>
                        <Link
                            :href="route('register')"
                            class="px-6 py-2 bg-primary-container text-on-primary rounded-full font-title-md text-title-md hover:bg-primary transition-all shadow-sm">Register</Link>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <!-- Hero Section -->
            <section
                class="relative overflow-hidden pt-5 pb-5 md:pt-7 md:pb-7 px-margin-mobile md:px-margin-desktop">
                <div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <h1 class="font-display-lg text-display-lg text-on-surface leading-tight">
                            Toma el control de tu futuro financiero hoy
                        </h1>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">
                            Gestiona tus ingresos y gastos con una claridad sin precedentes. Nuestra plataforma
                            intuitiva te permite visualizar tu salud financiera en tiempo real, ayudándote a tomar
                            decisiones más inteligentes para tu crecimiento.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <Link
                                :href="route('register')"
                                class="px-8 py-4 bg-primary text-white rounded-xl font-title-md text-title-md hover:scale-[1.02] transition-transform shadow-lg">
                                Empieza Gratis
                            </Link>
                            <button
                                class="px-8 py-4 flex items-center gap-2 text-primary font-title-md text-title-md hover:underline">
                                Ver Demo <span class="material-symbols-outlined">play_circle</span>
                            </button>
                        </div>
                    </div>
                    <div class="relative lg:h-[500px] flex items-center justify-center">
                        <div class="absolute inset-0 bg-primary/5 rounded-full blur-3xl"></div>
                        <div
                            class="relative bg-white p-6 rounded-3xl soft-card-shadow border border-outline-variant w-full max-w-lg transform hover:-translate-y-2 transition-transform duration-500">
                            <img class="w-full h-auto rounded-xl shadow-inner"
                                data-alt="A high-end UI mockup showing a financial dashboard on a sleek tablet. The screen displays clean bar charts and transaction lists using a color palette of deep azure and soft grays. The surrounding environment is a bright, minimalist desk with a single architectural plant. The image uses soft, diffused light to create a feeling of calm and organized efficiency."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfjH1SpaLfLU9MaTYxoQUart14v-bE-JA_2fsRa1jPRkcqZnjJjsdLgguLfyFmWT90j1sQ8sqFYCMW1uXiJ-nEU-NcE90QLYjiIKuE4dPQmB6TIUnM8T2Ncgf6ePpZrIUhDiPbfQKCcOcnw59ml9iynOstbYGY-TIuY6ciT5vgd2PzdYsgqc9TSZqTo9AP-MI-Omf9WbFSg7Lb55xcgv6bjyJ7OJAN9k8PPwkVesr8ZlmW1R9mS0GwNiGcIz3y4uoEfJgIgQg4XIw" />
                        </div>
                    </div>
                </div>
            </section>
            
        </main>

    </body>

</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
// Simple micro-interaction for scroll effects
document.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 20) {
        header.classList.add('shadow-md');
    } else {
        header.classList.remove('shadow-md');
    }
});

// Hover effect for feature cards
const cards = document.querySelectorAll('.soft-card-shadow');
cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'translateY(-4px)';
    });
    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(0px)';
    });
});
</script>