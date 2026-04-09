<?php
// 1. DYNAMIC SEO VARIABLES (Read by header.php)
$pageTitle = "About Us | [Company Name] | [Your Short Pitch]";
$pageDesc = "Learn the story behind [Company Name]. We are a dedicated, independent [Service Type] business proudly serving [Your Area].";
include 'components/header.php';
?>

<main>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "mainEntity": {
        "@type": "HomeAndConstructionBusiness",
        "@id": "https://[your-domain.com]/about.php",
        "name": "[Company Name]",
        "description": "An independent, premium [Service Type] company operating in [Your Area].",
        "founder": {
          "@type": "Person",
          "name": "[Founder Name]"
        }
      }
    }
    </script>

    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 flex items-center justify-center overflow-hidden bg-brand-dark">

        <img src="[hero-image-path.jpg]" alt="[Company Name] [Your Area]"
            class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="absolute inset-0 bg-brand-dark/85 z-10"></div>

        <div class="absolute inset-0 opacity-20 pointer-events-none z-10 bg-[radial-gradient(#2C4C3B_1px,transparent_1px)] [background-size:20px_20px]">
        </div>

        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20 text-center text-white reveal reveal-up flex flex-col items-center">

            <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                About Us
            </span>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal leading-tight relative pb-6 flex flex-col items-center text-brand-beige/90">
                [Hero Headline e.g., Rooted in Our Community.]
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
            </h1>

        </div>
    </section>

    <section class="relative min-h-[100svh] py-20 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16 w-full reveal reveal-up">

                <div class="w-full lg:w-1/2 flex flex-col items-center text-center lg:items-start lg:text-left order-2 lg:order-1 mt-4 lg:mt-0">

                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        [Story Tagline e.g., The Founder]
                    </span>

                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl font-normal text-brand-dark leading-tight relative inline-block pb-6 mb-8">
                        [Story Headline e.g., Expert care with a personal touch.]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>

                    <div class="space-y-6 font-body text-base sm:text-lg md:text-xl text-brand-dark/80 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        <p>
                            [Company Name] was established to provide [Your Area] with a reliable,
                            high-tier [Service Type] service. We believe that [Core belief of your business], which is why we approach every project with meticulous attention to detail.
                        </p>
                        <p>
                            Founded by [Founder Name] after [Number] years of hands-on experience, the business
                            remains dedicated to its roots. When you hire us, you don't get a rotating
                            crew of subcontractors; you get our direct expertise, ensuring consistent, premium
                            quality on every visit.
                        </p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 relative order-1 lg:order-2">
                    <div class="relative w-full h-[400px] sm:h-[500px] md:h-[600px] lg:h-[650px] rounded-[2.5rem] overflow-hidden shadow-2xl group border border-black/5">
                        <img src="[founder-image-path.jpg]"
                            alt="[Founder Name] - Professional [Service] in [Your Area]" loading="lazy" decoding="async"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>

                    <div class="absolute -bottom-8 -left-6 lg:-left-12 bg-white p-6 lg:p-8 rounded-[1.5rem] shadow-2xl border border-black/5 hidden md:flex flex-col items-center text-center transition-transform duration-500 hover:-translate-y-2 z-10 cursor-default">
                        <p class="font-heading font-bold text-4xl lg:text-5xl text-brand-accent mb-1">[Number]+</p>
                        <p class="font-body text-xs lg:text-sm text-brand-dark font-bold uppercase tracking-widest">
                            Years Experience</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative min-h-[100svh] py-20 flex items-center justify-center bg-[#EAEBE4] text-brand-dark overflow-hidden">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

                <div class="w-full lg:w-[50%] order-2 lg:order-1 flex flex-col items-center text-center lg:items-start lg:text-left reveal reveal-up mt-8 lg:mt-0">

                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Our Philosophy
                    </span>

                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-brand-dark mb-8 leading-tight flex flex-col items-center lg:items-start">
                        [Philosophy Headline e.g., Built on trust.]
                        <span class="block w-20 h-[3px] bg-brand-accent mt-4 lg:mt-6 rounded-full"></span>
                    </h2>

                    <div class="font-body text-base sm:text-lg md:text-xl text-brand-dark/80 leading-relaxed space-y-6 mb-10 max-w-2xl">
                        <p>
                            With over a decade of hands-on experience in [Your Industry], [Company Name] was founded with a simple goal: to do honest and high quality work.
                        </p>
                        <p>
                            We grew tired of seeing clients overcharged for rushed, poor quality work. We
                            wanted to build a service where clients knew exactly who was turning up, and could trust
                            that their property would be treated with absolute respect.
                        </p>
                    </div>

                    <div class="grid grid-cols-3 gap-4 sm:gap-8 md:gap-10 border-t border-brand-dark/10 pt-8 mt-2 mb-12 w-full max-w-xl mx-auto lg:mx-0">
                        <div class="group flex flex-col items-center lg:items-start">
                            <p class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-brand-dark transition-transform duration-500 group-hover:-translate-y-2 whitespace-nowrap">
                                <span class="auto-counter" data-target="[Metric 1]">0</span>+
                            </p>
                            <p class="font-body text-[10px] sm:text-xs md:text-sm uppercase tracking-widest mt-2 opacity-70 font-bold text-center lg:text-left text-brand-dark">[Metric 1 Label]</p>
                        </div>
                        <div class="group flex flex-col items-center lg:items-start">
                            <p class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-brand-dark transition-transform duration-500 group-hover:-translate-y-2 whitespace-nowrap">
                                <span class="auto-counter" data-target="[Metric 2]">0</span>★
                            </p>
                            <p class="font-body text-[10px] sm:text-xs md:text-sm uppercase tracking-widest mt-2 opacity-70 font-bold text-center lg:text-left text-brand-dark">[Metric 2 Label]</p>
                        </div>
                        <div class="group flex flex-col items-center lg:items-start">
                            <p class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-brand-dark transition-transform duration-500 group-hover:-translate-y-2 whitespace-nowrap">
                                <span class="auto-counter" data-target="[Metric 3]">0</span>%
                            </p>
                            <p class="font-body text-[10px] sm:text-xs md:text-sm uppercase tracking-widest mt-2 opacity-70 font-bold text-center lg:text-left text-brand-dark">[Metric 3 Label]</p>
                        </div>
                    </div>

                    <a href="/gallery.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-transparent border border-brand-dark/30 font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105">
                        <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 text-brand-dark transition-colors duration-500 group-hover:text-white">See our works</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-brand-dark -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-[50%] order-1 lg:order-2 reveal reveal-up">
                    <div class="relative group w-full flex justify-center">
                        <img src="[philosophy-image-path.jpg]" alt="Professional working" loading="lazy" decoding="async"
                            class="rounded-[2.5rem] w-full h-[400px] sm:h-[500px] md:h-[600px] lg:h-[800px] object-cover transition-transform duration-700 group-hover:scale-[1.02] border border-black/5 shadow-2xl">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const duration = 2000;
            const frameRate = 1000 / 60;
            const totalFrames = Math.round(duration / frameRate);
            const easeOutQuad = t => t * (2 - t);

            const animateCounter = (counter) => {
                let frame = 0;
                const target = parseInt(counter.getAttribute('data-target'), 10);
                const counterInterval = setInterval(() => {
                    frame++;
                    const progress = easeOutQuad(frame / totalFrames);
                    const currentCount = Math.round(target * progress);
                    if (parseInt(counter.innerText, 10) !== currentCount) { counter.innerText = currentCount; }
                    if (frame === totalFrames) { clearInterval(counterInterval); counter.innerText = target; }
                }, frameRate);
            };

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const countersToAnimate = entry.target.querySelectorAll('.auto-counter');
                        countersToAnimate.forEach(animateCounter);
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });

            const statsSection = document.querySelector('.auto-counter')?.closest('section');
            if (statsSection) { observer.observe(statsSection); }
        });
    </script>


    <section class="min-h-[100vh] py-16 md:py-20 bg-white border-t border-brand-dark/10 flex flex-col justify-center w-full relative overflow-hidden">

        <style>
            .animate-infinite-scroll { animation: infinite-scroll 40s linear infinite; width: max-content; }
            @keyframes infinite-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        </style>

        <div class="w-full mx-auto flex flex-col justify-center items-center">

            <div class="text-center mb-12 md:mb-16 px-4 md:px-8 w-full reveal reveal-up flex flex-col items-center">
                <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                    [Carousel Tagline e.g., The Difference]
                </span>

                <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-brand-dark mb-8 leading-tight flex flex-col items-center text-center relative pb-6">
                    [Carousel Headline e.g., Our commitment to you]
                    <span class="block w-20 h-[3px] bg-brand-accent mt-6 rounded-full"></span>
                </h2>
            </div>

            <div class="relative w-full overflow-hidden pb-10">

                <div class="absolute inset-y-0 left-0 w-12 md:w-24 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none"></div>
                <div class="absolute inset-y-0 right-0 w-12 md:w-24 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none"></div>

                <div class="flex animate-infinite-scroll" id="commitment-carousel">

                    <div class="flex gap-6 pr-6">
                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 1]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 1]</p>
                        </div>

                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 2]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 2]</p>
                        </div>

                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 3]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 3]</p>
                        </div>

                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 4]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 4]</p>
                        </div>

                         <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 5]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 5]</p>
                        </div>

                         <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 6]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 6]</p>
                        </div>
                    </div>

                    <div class="flex gap-6 pr-6">
                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 1]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 1]</p>
                        </div>

                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 2]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 2]</p>
                        </div>

                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 3]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 3]</p>
                        </div>

                        <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 4]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 4]</p>
                        </div>

                         <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 5]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 5]</p>
                        </div>

                         <div class="group flex flex-col items-center text-center bg-brand-beige p-8 md:p-12 rounded-3xl transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 cursor-default border border-transparent hover:border-gray-200 w-[280px] md:w-[320px] shrink-0">
                            <div class="w-16 h-16 md:w-20 md:h-20 bg-white rounded-2xl flex items-center justify-center text-brand-dark mb-6 md:mb-8 shadow-sm border border-gray-100 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:text-white group-hover:-translate-y-2 transition-all duration-500">
                                <svg class="w-7 h-7 md:w-8 md:h-8 transition-transform duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                </svg>
                            </div>
                            <h3 class="font-heading text-2xl md:text-3xl font-bold text-brand-dark mb-4 transition-colors duration-500">[Feature 6]</h3>
                            <p class="font-body text-brand-text/70 leading-relaxed text-base md:text-lg">[Description of Feature 6]</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 md:gap-6 mt-8 w-full px-4 reveal reveal-up z-20">

                <a href="services.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-beige text-brand-dark font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 hover:shadow-[0_8px_25px_rgba(26,46,36,0.15)] w-full sm:w-auto text-center border border-brand-dark/10">
                    <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                    <span class="relative z-10 transition-colors duration-500 group-hover:text-white mx-auto sm:mx-0">Check Services</span>
                    <span class="relative z-10 w-10 h-10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-brand-dark -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                        </svg>
                    </span>
                </a>

                <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 shadow-lg w-full sm:w-auto text-center">
                    <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                    <span class="relative z-10 transition-colors duration-500 mx-auto sm:mx-0">Contact Us Now</span>
                    <span class="relative z-10 w-10 h-10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                        </svg>
                    </span>
                </a>
            </div>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const scroller = document.getElementById('commitment-carousel');
                scroller.addEventListener('mouseenter', () => {
                    const animations = scroller.getAnimations();
                    animations.forEach(anim => { anim.playbackRate = 0.33; });
                });
                scroller.addEventListener('mouseleave', () => {
                    const animations = scroller.getAnimations();
                    animations.forEach(anim => { anim.playbackRate = 1; });
                });
            });
        </script>
    </section>

    <section class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">

            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">

                <div class="w-full lg:w-1/2 relative">
                    <div class="relative z-10 rounded-[2.5rem] overflow-hidden shadow-[0_20px_50px_rgba(26,46,36,0.15)] border-2 border-white/50">
                        <img src="[why-choose-us-image-path.jpg]" alt="[Why Choose Us Alt Text]" loading="lazy" decoding="async" class="w-full h-80 md:h-[600px] lg:h-[750px] object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-accent rounded-full opacity-5 blur-3xl"></div>
                    <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-brand-dark rounded-full opacity-5 blur-3xl"></div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col items-center text-center lg:items-start lg:text-left">

                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Why Choose Us
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Why Choose Us Headline]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>

                    <div class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed space-y-6 max-w-2xl">
                        <p>
                            We noticed a gap in the market: large agencies lack a personal touch, while casual workers
                            often lack professional reliability. <strong>[Company Name] bridges that gap.</strong>
                        </p>
                        <p>
                            By remaining a dedicated, independent operation, we ensure that the person you speak to on
                            the phone is the exact same person who turns up at your gate. No revolving door of
                            subcontractors and no rushed jobs: just meticulous, high-quality work.
                        </p>
                    </div>

                    <div class="mt-8 space-y-4 w-full flex flex-col items-center lg:items-start">
                        <div class="flex items-center gap-4 text-brand-dark font-medium text-lg">
                            <div class="w-6 h-6 rounded-full bg-brand-accent flex items-center justify-center text-white shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            [Key Benefit 1]
                        </div>
                        <div class="flex items-center gap-4 text-brand-dark font-medium text-lg">
                            <div class="w-6 h-6 rounded-full bg-brand-accent flex items-center justify-center text-white shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            [Key Benefit 2]
                        </div>
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