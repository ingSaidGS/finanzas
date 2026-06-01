<template>
    <!DOCTYPE html>

        <html class="light" lang="es">

        <head>
            <meta charset="utf-8" />
            <meta content="width=device-width, initial-scale=1.0" name="viewport" />
            <title>FácilFin | Toma el control de tu futuro</title>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
                rel="stylesheet" />
            <link
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
            <link
                href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
                rel="stylesheet" />
            <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
            <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-variant": "#d9e3f6",
                    "primary": "#00288e",
                    "on-tertiary-fixed-variant": "#930013",
                    "error-container": "#ffdad6",
                    "on-tertiary": "#ffffff",
                    "on-primary-container": "#a8b8ff",
                    "tertiary": "#70000c",
                    "surface": "#f8f9ff",
                    "surface-container-high": "#dee9fc",
                    "tertiary-fixed": "#ffdad7",
                    "tertiary-container": "#9b0015",
                    "on-primary-fixed-variant": "#173bab",
                    "secondary": "#006c49",
                    "primary-container": "#1e40af",
                    "on-primary": "#ffffff",
                    "surface-container-low": "#eff4ff",
                    "secondary-container": "#6cf8bb",
                    "surface-tint": "#3755c3",
                    "error": "#ba1a1a",
                    "on-tertiary-fixed": "#410004",
                    "inverse-primary": "#b8c4ff",
                    "secondary-fixed": "#6ffbbe",
                    "inverse-surface": "#27313f",
                    "secondary-fixed-dim": "#4edea3",
                    "on-secondary-fixed-variant": "#005236",
                    "on-surface": "#121c2a",
                    "on-error": "#ffffff",
                    "tertiary-fixed-dim": "#ffb3ad",
                    "primary-fixed-dim": "#b8c4ff",
                    "outline-variant": "#c4c5d5",
                    "primary-fixed": "#dde1ff",
                    "outline": "#757684",
                    "on-secondary-fixed": "#002113",
                    "on-primary-fixed": "#001453",
                    "background": "#f8f9ff",
                    "surface-container": "#e6eeff",
                    "on-secondary-container": "#00714d",
                    "on-background": "#121c2a",
                    "on-surface-variant": "#444653",
                    "on-secondary": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "on-tertiary-container": "#ffa39c",
                    "inverse-on-surface": "#eaf1ff",
                    "surface-container-highest": "#d9e3f6",
                    "on-error-container": "#93000a",
                    "surface-bright": "#f8f9ff",
                    "surface-dim": "#d0dbed"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "container-max": "1280px",
                    "margin-desktop": "40px",
                    "unit": "8px",
                    "margin-mobile": "20px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "title-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "display-lg": ["Inter"],
                    "numeric-data": ["Inter"]
            },
            "fontSize": {
                    "title-md": ["18px", {"lineHeight": "1.5", "fontWeight": "600"}],
                    "label-sm": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "headline-lg": ["32px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "numeric-data": ["16px", {"lineHeight": "1.0", "letterSpacing": "-0.01em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
            <style>
                body {
                    font-family: 'Inter', sans-serif;
                }

                .material-symbols-outlined {
                    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
                }

                .soft-card-shadow {
                    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.04);
                }
            </style>
        </head>

        <body class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container">
            <!-- Header / TopNavBar -->
            <header class="bg-surface-container-lowest sticky top-0 z-50 shadow-sm">
                <div class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
                    <div class="font-display-lg text-primary tracking-tighter text-[24px]">Kinetic Finance</div>
                    <nav class="hidden md:flex gap-8">
                        <a class="text-primary font-bold border-b-2 border-primary font-title-md text-title-md transition-all duration-200 ease-in-out"
                            href="#">Features</a>
                        <a class="text-on-surface-variant font-medium hover:text-primary transition-colors font-title-md text-title-md transition-all duration-200 ease-in-out"
                            href="#">Pricing</a>
                        <a class="text-on-surface-variant font-medium hover:text-primary transition-colors font-title-md text-title-md transition-all duration-200 ease-in-out"
                            href="#">About</a>
                    </nav>
                    <div class="flex items-center gap-4">
                        <button
                            class="px-6 py-2 border border-outline rounded-full text-on-surface font-title-md text-title-md hover:bg-surface-container transition-colors">Login</button>
                        <button
                            class="px-6 py-2 bg-primary-container text-on-primary rounded-full font-title-md text-title-md hover:bg-primary transition-all shadow-sm">Register</button>
                    </div>
                </div>
            </header>
            <main>
                <!-- Hero Section -->
                <section
                    class="relative overflow-hidden pt-20 pb-16 md:pt-32 md:pb-32 px-margin-mobile md:px-margin-desktop">
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
                                <button
                                    class="px-8 py-4 bg-primary text-white rounded-xl font-title-md text-title-md hover:scale-[1.02] transition-transform shadow-lg">
                                    Empieza Gratis
                                </button>
                                <button
                                    class="px-8 py-4 flex items-center gap-2 text-primary font-title-md text-title-md hover:underline">
                                    Ver Demo <span class="material-symbols-outlined">play_circle</span>
                                </button>
                            </div>
                            <div class="flex items-center gap-4 pt-4">
                                <div class="flex -space-x-2">
                                    <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                        data-alt="Close-up portrait of a professional woman in a bright, modern office setting with soft daylight. She represents a successful user of the finance app, conveying trust and confidence. The aesthetic is clean and high-fidelity, matching the soft minimalism of the brand."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCltNnsOfq1I4T2Gy5BOyk6FBDsyk7N_-b62i32Ch-ydVV8FWznmOXb6UC-Kb3Q9C4_7ZZh7Pi6dTptVpc-BJN6po-Q-hy26vZmZoWQHQv31xa7LO0nMt5Df5b7qzLWUTberno5Fnq0wFSWOqUenTmKGOqwq8QzyI2mcf9JwVKzGm_G9eceUhVzCLgxYp6zr3J823KDRPzO4uK8dZNBqlBoORNi_I0T3sCx6oeagJqTtWmRItVrAU3WRpnXDxM1VIKbcozRSy5wX7M" />
                                    <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                        data-alt="Portrait of a young male professional smiling warmly, shot against a neutral studio background with professional soft-box lighting. He embodies the tech-savvy audience of the financial platform. The lighting is bright and crisp to align with the light-mode UI design."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBI8xKOpt0ZyjwQCQ439HVoJBqUvhBmf7R-TBoMCqe9FE_w8tDVyHTgV2Jp_igqQ4CoHDFGiY2nyNeEndFtEdzBAH1uMu30Z_1qUoygcsKfay0KLBIQBcBaRma4c5VKh0GMk-zGXB6CxFEMrvjxECQbIxhNQqV0zQKjJXEHCmINCGts-7wPMvNoyNkUM22L4WSE756HiQmSPdDgSYKGXCTFPAhY5UD4Uk1034DnD0L01QCJXKJuJ3nduxqKOU0AwvINBtJrTCfsaqo" />
                                    <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                        data-alt="A focused young woman in a high-tech minimalist coworking space, softly blurred background with clean lines and plant life. She represents the target professional demographic. The image has a cool, sophisticated color temperature with blue and white tones."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBexnGvGIf-zTEJzS3xR9NWUT52lSP2-E2bQUQCR0ZMtSDNB8aG_qvQdRnWS0Kv8u4aAl0eo0yzTtdxCU3KOclep2hsBKxnUpG18ayK-z8C_BqmFgX22VWManhCbG59jzk4JkVcGyEyHAOp6-DlChKZUyth29dYSBJBc6MOEHYha9qjB0Mk9LY7wlQv8FEJKaENeJVTsHJii0Q8Lyqi9wqI9jmiHmJq_2rzhlY4BJC5EKndr379jTU1PO2Yk1HCPZWCgFPVld8H3Fo" />
                                </div>
                                <p class="font-label-sm text-label-sm text-on-surface-variant">Únete a +10k
                                    profesionales</p>
                            </div>
                        </div>
                        <div class="relative lg:h-[500px] flex items-center justify-center">
                            <div class="absolute inset-0 bg-primary/5 rounded-full blur-3xl"></div>
                            <div
                                class="relative bg-white p-6 rounded-3xl soft-card-shadow border border-outline-variant w-full max-w-lg transform hover:-translate-y-2 transition-transform duration-500">
                                <img class="w-full h-auto rounded-xl shadow-inner"
                                    data-alt="A high-end UI mockup showing a financial dashboard on a sleek tablet. The screen displays clean bar charts and transaction lists using a color palette of deep azure and soft grays. The surrounding environment is a bright, minimalist desk with a single architectural plant. The image uses soft, diffused light to create a feeling of calm and organized efficiency."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfjH1SpaLfLU9MaTYxoQUart14v-bE-JA_2fsRa1jPRkcqZnjJjsdLgguLfyFmWT90j1sQ8sqFYCMW1uXiJ-nEU-NcE90QLYjiIKuE4dPQmB6TIUnM8T2Ncgf6ePpZrIUhDiPbfQKCcOcnw59ml9iynOstbYGY-TIuY6ciT5vgd2PzdYsgqc9TSZqTo9AP-MI-Omf9WbFSg7Lb55xcgv6bjyJ7OJAN9k8PPwkVesr8ZlmW1R9mS0GwNiGcIz3y4uoEfJgIgQg4XIw" />
                                <div
                                    class="absolute -bottom-6 -right-6 bg-secondary-container p-4 rounded-2xl shadow-lg border border-white flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-secondary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-white">trending_up</span>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-on-secondary-container">+24% Ahorro</p>
                                        <p class="text-[10px] text-on-secondary-container opacity-80">Este mes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Features Section -->
                <section class="py-24 bg-surface-container-low px-margin-mobile md:px-margin-desktop">
                    <div class="max-w-container-max mx-auto text-center mb-16">
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Herramientas diseñadas para
                            la eficiencia</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                            Elimina la fricción de tus finanzas personales con tecnología de punta diseñada para darte
                            respuestas, no solo datos.
                        </p>
                    </div>
                    <div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Feature 1 -->
                        <div
                            class="bg-surface-container-lowest p-8 rounded-2xl soft-card-shadow border border-outline-variant hover:border-primary transition-colors group">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[32px]">account_balance_wallet</span>
                            </div>
                            <h3 class="font-title-md text-title-md text-on-surface mb-3">Gestión de Billeteras</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Conecta y sincroniza múltiples cuentas bancarias y carteras digitales en un solo lugar
                                seguro y centralizado.
                            </p>
                        </div>
                        <!-- Feature 2 -->
                        <div
                            class="bg-surface-container-lowest p-8 rounded-2xl soft-card-shadow border border-outline-variant hover:border-primary transition-colors group">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[32px]">auto_awesome</span>
                            </div>
                            <h3 class="font-title-md text-title-md text-on-surface mb-3">Categorización Inteligente</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Nuestra IA clasifica automáticamente tus transacciones para que sepas exactamente a
                                dónde va cada centavo.
                            </p>
                        </div>
                        <!-- Feature 3 -->
                        <div
                            class="bg-surface-container-lowest p-8 rounded-2xl soft-card-shadow border border-outline-variant hover:border-primary transition-colors group">
                            <div
                                class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-[32px]">bar_chart</span>
                            </div>
                            <h3 class="font-title-md text-title-md text-on-surface mb-3">Reportes Detallados</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Visualiza tendencias y genera reportes mensuales elegantes que te ayudan a planificar tu
                                crecimiento a largo plazo.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Trust / Social Proof -->
                <section class="py-16 px-margin-mobile md:px-margin-desktop bg-surface">
                    <div class="max-w-container-max mx-auto">
                        <p class="text-center font-label-sm text-label-sm text-outline mb-10 tracking-widest uppercase">
                            Empresas que confían en nosotros</p>
                        <div
                            class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                            <div class="font-bold text-2xl">FINTECH_CORP</div>
                            <div class="font-bold text-2xl">GLOBAL_PAY</div>
                            <div class="font-bold text-2xl">SECURE_FLOW</div>
                            <div class="font-bold text-2xl">MODERN_BANK</div>
                        </div>
                        <div
                            class="mt-20 max-w-3xl mx-auto bg-surface-container rounded-3xl p-10 relative overflow-hidden">
                            <span
                                class="material-symbols-outlined text-primary/10 text-[120px] absolute -top-4 -left-4">format_quote</span>
                            <p class="font-title-md text-title-md text-on-surface italic relative z-10">
                                "Kinetic Finance cambió la forma en que veo mi dinero. No es solo una app de
                                contabilidad, es una herramienta de claridad mental para mi negocio y mi vida personal."
                            </p>
                            <div class="mt-6 flex items-center gap-4 relative z-10">
                                <div class="w-12 h-12 rounded-full bg-primary/20 overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Close-up profile of a professional executive woman with a friendly expression. The background is a brightly lit corporate environment with minimalist design and clean windows. The mood is sophisticated and authoritative, reflecting trust in the financial product."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsQ4xAClkGzKPAU40aDgJMYeWzvFtS3XBizKvndein9WBWuchrQkMXPSSLIawPDlKaMRSXBaq5t3f-TTX1dGXcWDhGB95vMtLzkXD47z1Xp_XdT684gGnqhQLTzNveIpjBB62ahjlrOl5Jhswb15HHvu0_nnNi_6StemvYlBXfk_NmBxNRPDADAcL4aYyXOTYCKSS6wtLju8Qe2v1TFISNYsvfuFzTsw58tbXhx1AleYXUNpDbmSt-cdFDIKPXNCRUodtI6fouc7g" />
                                </div>
                                <div>
                                    <p class="font-title-md text-on-surface leading-tight text-sm">Elena Rodriguez</p>
                                    <p class="text-xs text-on-surface-variant">Directora de Operaciones, FinTech Lab</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Final CTA Section -->
                <section class="py-24 px-margin-mobile md:px-margin-desktop">
                    <div
                        class="max-w-container-max mx-auto bg-primary-container rounded-[2rem] p-12 md:p-20 text-center text-on-primary relative overflow-hidden">
                        <!-- Abstract decorative shapes -->
                        <div class="absolute -top-20 -left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-primary/30 rounded-full blur-3xl"></div>
                        <h2 class="font-display-lg text-headline-lg md:text-display-lg mb-6 relative z-10">
                            ¿Listo para transformar tus finanzas?
                        </h2>
                        <p
                            class="font-body-md text-body-md text-on-primary-container max-w-xl mx-auto mb-10 relative z-10">
                            Únete a miles de usuarios que ya están ahorrando tiempo y dinero con Kinetic Finance.
                            Comienza hoy mismo, sin compromisos.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center relative z-10">
                            <button
                                class="px-10 py-4 bg-white text-primary rounded-full font-title-md text-title-md hover:bg-surface-container-high transition-colors shadow-xl">
                                Registrarse Ahora
                            </button>
                            <button
                                class="px-10 py-4 border border-white/30 text-white rounded-full font-title-md text-title-md hover:bg-white/10 transition-colors">
                                Hablar con Ventas
                            </button>
                        </div>
                    </div>
                </section>
            </main>
            <!-- Footer -->
            <footer class="bg-surface-container-low border-t border-outline-variant">
                <div
                    class="flex flex-col md:flex-row justify-between items-center px-margin-desktop py-12 max-w-container-max mx-auto gap-8">
                    <div class="flex flex-col items-center md:items-start gap-4">
                        <div class="font-title-md text-primary font-bold text-[20px]">Kinetic Finance</div>
                        <p class="font-body-md text-body-md text-on-surface-variant max-w-xs text-center md:text-left">
                            Simplificando las finanzas para la nueva generación de profesionales.
                        </p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-6">
                        <a class="text-on-surface-variant hover:underline hover:text-primary font-body-md text-body-md transition-opacity opacity-80 hover:opacity-100"
                            href="#">Privacy Policy</a>
                        <a class="text-on-surface-variant hover:underline hover:text-primary font-body-md text-body-md transition-opacity opacity-80 hover:opacity-100"
                            href="#">Terms of Service</a>
                        <a class="text-on-surface-variant hover:underline hover:text-primary font-body-md text-body-md transition-opacity opacity-80 hover:opacity-100"
                            href="#">Contact Support</a>
                        <a class="text-on-surface-variant hover:underline hover:text-primary font-body-md text-body-md transition-opacity opacity-80 hover:opacity-100"
                            href="#">Security</a>
                    </div>
                    <div class="text-on-surface-variant font-body-md text-body-md opacity-80">
                        © 2024 Kinetic Finance. All rights reserved.
                    </div>
                </div>
            </footer>
            <script>
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
        </body>

        </html>
</template>