<?php
// DYNAMIC SEO VARIABLES
$pageTitle = "Our [Service Category] Services | [Company Name]";
$pageDesc = "Explore our premium [Service Category] services in [Your Area], including [Service 1], [Service 2], [Service 3], and [Service 4].";
include 'components/header.php';
?>

<main>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": ["[Service 1]", "[Service 2]", "[Service 3]", "[Service 4]"],
      "provider": {
        "@type": "HomeAndConstructionBusiness",
        "@id": "https://[your-domain.com]/services.php",
        "name": "[Company Name]"
      },
      "areaServed": {
        "@type": "State",
        "name": "[Your Area]"
      },
      "description": "Premium [Service Category] services across [Your Area]."
    }
    </script>

    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 flex items-center justify-center overflow-hidden bg-brand-dark">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20 text-center text-white reveal reveal-up flex flex-col items-center">

            <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                Our Services
            </span>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal leading-tight relative pb-6 flex flex-col items-center">
                [Services Hero Headline]
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
            </h1>

        </div>

        <div class="absolute inset-0 opacity-20 pointer-events-none bg-[radial-gradient(#2C4C3B_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
    </section>

    <section id="service-1-id" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="[service-1-image-path.jpg]" alt="[Service 1 Alt Text]"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 1
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Service 1 Title]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        [Detailed description of Service 1. Explain what it is, why the customer needs it, and the value it provides.]
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 1 Bullet Point 1]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 1 Bullet Point 2]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 1 Bullet Point 3]
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500">Book Now</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="service-2-id" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-y border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="[service-2-image-path.jpg]" alt="[Service 2 Alt Text]"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 2
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Service 2 Title]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        [Detailed description of Service 2. Explain what it is, why the customer needs it, and the value it provides.]
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 2 Bullet Point 1]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 2 Bullet Point 2]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 2 Bullet Point 3]
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500">Book Now</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="service-3-id" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="[service-3-image-path.jpg]" alt="[Service 3 Alt Text]"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 3
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Service 3 Title]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        [Detailed description of Service 3. Explain what it is, why the customer needs it, and the value it provides.]
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 3 Bullet Point 1]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 3 Bullet Point 2]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 3 Bullet Point 3]
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500">Book Now</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="service-4-id" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-t border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
             <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="[service-4-image-path.jpg]" alt="[Service 4 Alt Text]"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 4
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Service 4 Title]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        [Detailed description of Service 4. Explain what it is, why the customer needs it, and the value it provides.]
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 4 Bullet Point 1]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 4 Bullet Point 2]
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-brand-accent rounded-full"></div> [Service 4 Bullet Point 3]
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500">Book Now</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="relative min-h-[100svh] py-16 md:py-24 flex items-center justify-center bg-brand-dark text-white overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20 reveal reveal-up">

                <div class="w-full lg:w-1/2 flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        [Review CTA Tagline]
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-white mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Review CTA Headline]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>

                    <p class="font-body text-lg lg:text-xl text-white/80 leading-relaxed mb-10 max-w-2xl">
                        [Short paragraph explaining the importance of leaving a review for your business.]
                    </p>

                    <a href="[Your Google Review Link]" target="_blank" rel="noopener noreferrer" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-white text-brand-dark font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500 group-hover:text-white">Write a Review</span>
                        <span class="relative z-10 w-10 h-10 bg-brand-accent rounded-full flex items-center justify-center text-white transition-colors duration-700 group-hover:bg-transparent">
                            <svg class="w-5 h-5 -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
                    <div class="relative group p-8 md:p-12 bg-white rounded-[2.5rem] shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="flex justify-center text-yellow-400 mb-6 text-2xl gap-1">
                            ★★★★★
                        </div>

                        <div class="bg-brand-dark/90 p-6 rounded-3xl mb-6 relative z-10">
                            <img src="[qr-code-image-path.png]" alt="Scan to leave a Google Review"
                                class="w-48 h-48 md:w-64 md:h-64 object-contain mx-auto">
                        </div>

                        <div class="text-center">
                            <p class="font-heading text-2xl font-bold text-brand-dark mb-2">Scan to Review</p>
                            <p class="font-body text-brand-text/50 text-sm uppercase tracking-widest font-normal">Open camera on your phone</p>
                        </div>

                        <div class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-brand-accent opacity-10 rounded-full blur-3xl"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative py-20 flex items-center justify-center bg-brand-green text-white overflow-hidden">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8 w-full">

                <div class="w-full lg:w-3/12 reveal reveal-up order-2 lg:order-1 flex justify-center lg:justify-start">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2rem] overflow-hidden shadow-2xl border border-white/10 group">
                        <img src="[bottom-cta-image-path.jpg]" alt="[Bottom CTA Alt Text]" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>

                <div class="w-full lg:w-6/12 text-center reveal reveal-up order-1 lg:order-2 flex flex-col items-center">

                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl font-semibold text-white leading-tight mb-4">
                        [Final Call to Action Headline]
                    </h2>

                    <p class="font-body text-base sm:text-lg md:text-xl text-white/85 mb-10 max-w-md mx-auto leading-relaxed mt-2">
                        [Final convincing paragraph encouraging the user to reach out.]
                    </p>

                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-accent font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none">
                        <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 text-brand-dark transition-colors duration-500 group-hover:text-white">Claim Your FREE Quote</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-3/12 reveal reveal-up order-3 flex justify-center lg:justify-end mt-0 lg:mt-16" style="transition-delay: 200ms;">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2rem] overflow-hidden shadow-2xl border border-white/10 group">
                        <img src="[bottom-cta-image-path-2.jpg]" alt="[Bottom CTA Alt Text 2]" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>