<?php
// DYNAMIC SEO VARIABLES
$pageTitle = "Contact Us | [Company Name] | [Your Short Pitch]";
$pageDesc = "Contact [Company Name] for a free quote on [Service 1], [Service 2], and [Service 3] in [Your Area].";
include 'components/header.php';
?>

<main class="bg-brand-beige min-h-screen">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "[Company Name]",
      "image": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/imgs/logo.png",
      "telephone": "[Phone Number]",
      "email": "[Email Address]",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "[Street Address]",
        "addressLocality": "[City]",
        "addressRegion": "[Region/County]",
        "addressCountry": "[Country]"
      },
      "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/contact.php",
      "openingHours": "Mo-Sa 08:00-18:00",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "[Phone Number]",
        "contactType": "customer service",
        "areaServed": "[Your Area]",
        "availableLanguage": "English"
      }
    }
    </script>

    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 flex items-center justify-center overflow-hidden bg-brand-dark">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20 text-center text-white reveal reveal-up flex flex-col items-center">

            <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                [Contact Tagline]
            </span>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal leading-tight relative pb-6 flex flex-col items-center">
                [Contact Main Headline e.g., Let's discuss your project.]
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
            </h1>

        </div>

        <div class="absolute inset-0 opacity-20 pointer-events-none bg-[radial-gradient(#2C4C3B_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-6 max-w-[85rem]">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-gray-100 reveal reveal-up">

                <div class="lg:w-3/5 p-8 md:p-12 lg:p-20">
                    <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-dark mb-4">[Form Headline]</h2>
                    <p class="font-body text-xl text-brand-text/70 mb-12">[Brief subtext explaining you will reply shortly.]</p>

                    <form action="#" method="POST" class="space-y-8 font-body">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="name" class="block text-base font-bold text-brand-dark mb-3">Full Name *</label>
                                <input type="text" id="name" name="name" required placeholder="[Placeholder Name]"
                                    class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-brand-accent focus:ring-4 focus:ring-brand-accent/10 outline-none transition-all bg-gray-50/50 text-lg">
                            </div>
                            <div>
                                <label for="phone" class="block text-base font-bold text-brand-dark mb-3">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="[Placeholder Phone Format]"
                                    class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-brand-accent focus:ring-4 focus:ring-brand-accent/10 outline-none transition-all bg-gray-50/50 text-lg">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-base font-bold text-brand-dark mb-3">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="[Placeholder Email]"
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-brand-accent focus:ring-4 focus:ring-brand-accent/10 outline-none transition-all bg-gray-50/50 text-lg">
                        </div>

                        <div>
                            <label for="message" class="block text-base font-bold text-brand-dark mb-3">Project Details *</label>
                            <textarea id="message" name="message" required rows="5"
                                placeholder="[Brief prompt asking what service they need...]"
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-brand-accent focus:ring-4 focus:ring-brand-accent/10 outline-none transition-all bg-gray-50/50 resize-none text-lg"></textarea>
                        </div>

                        <button type="submit" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-accent font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 w-full sm:w-auto border-none cursor-pointer">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-green rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 text-brand-dark transition-colors duration-500 group-hover:text-white">[Submit Button Text]</span>
                            <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                                </svg>
                            </span>
                        </button>
                    </form>
                </div>

                <div class="lg:w-2/5 bg-brand-dark text-white p-8 md:p-12 lg:p-20 flex flex-col justify-between relative overflow-hidden">
                    <div class="relative z-10">
                        <h3 class="font-heading text-3xl font-bold mb-12 text-brand-beige">Direct Contact</h3>

                        <div class="space-y-10 font-body">

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-brand-accent group-hover:scale-110 group-hover:border-brand-accent">
                                    <svg aria-hidden="true" class="w-6 h-6 text-brand-accent transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Call Us</p>
                                    <a href="tel:[Phone Number]" class="text-2xl font-bold hover:text-brand-accent transition-colors">[Phone Number]</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-brand-accent group-hover:scale-110 group-hover:border-brand-accent">
                                    <svg aria-hidden="true" class="w-6 h-6 text-brand-accent transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Email</p>
                                    <a href="mailto:[Email Address]" class="text-xl font-medium hover:text-brand-accent transition-colors break-all">[Email Address]</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-brand-accent group-hover:scale-110 group-hover:border-brand-accent">
                                    <svg aria-hidden="true" class="w-6 h-6 text-brand-accent transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Availability</p>
                                    <p class="text-xl font-semibold text-white">[Working Days e.g., Mon - Saturday]</p>
                                    <p class="text-lg text-brand-beige/60 mt-1 italic">[General Working Area]</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-brand-accent group-hover:scale-110 group-hover:border-brand-accent">
                                    <svg aria-hidden="true" class="w-6 h-6 text-brand-accent transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Location</p>
                                    <address class="not-italic text-xl font-medium text-white mb-0 leading-snug">
                                        [City, Region/County]
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-10 mt-16 pt-10 border-t border-white/10">
                        <p class="font-body text-brand-beige/80 text-lg leading-relaxed italic">
                            "[Brief quote about your availability, e.g., I am usually out working during the day. Leave a message and I will get back to you ASAP.]"
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 bg-brand-green text-white overflow-hidden relative border-t border-white/5">
        <div class="container mx-auto px-6 max-w-[90rem] relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 lg:gap-24">

                <div class="group reveal reveal-up flex flex-col items-center text-center md:items-start md:text-left">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 border border-white/10 transition-all duration-500 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:-translate-y-2">
                        <svg class="w-8 h-8 text-brand-accent transition-colors duration-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading text-3xl font-normal mb-5">[Highlight 1 Title e.g., Local Coverage]</h3>
                    <p class="font-body text-xl text-white/70 leading-relaxed">
                        Based in <span class="text-white font-semibold">[City]</span>, we proudly serve all of <span class="text-white font-semibold">[Region]</span> and surrounding areas including [Area 1, Area 2].
                    </p>
                </div>

                <div class="group reveal reveal-up flex flex-col items-center text-center md:items-start md:text-left" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 border border-white/10 transition-all duration-500 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:-translate-y-2">
                        <svg class="w-8 h-8 text-brand-accent transition-colors duration-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading text-3xl font-normal mb-5">[Highlight 2 Title e.g., Quick Response]</h3>
                    <p class="font-body text-xl text-white/70 leading-relaxed">
                        I check my inquiries every evening. You can expect a response or a call back within <span class="text-white font-semibold">24 hours</span> to discuss your project details.
                    </p>
                </div>

                <div class="group reveal reveal-up flex flex-col items-center text-center md:items-start md:text-left" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 border border-white/10 transition-all duration-500 group-hover:bg-brand-accent group-hover:border-brand-accent group-hover:-translate-y-2">
                        <svg class="w-8 h-8 text-brand-accent transition-colors duration-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading text-3xl font-normal mb-5">[Highlight 3 Title e.g., On-Site Quotes]</h3>
                    <p class="font-body text-xl text-white/70 leading-relaxed">
                        For larger jobs, I provide a <span class="text-white font-semibold">free on-site consultation</span> to give you the most accurate and fair price possible.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-[#F8F9F4] border-t border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto relative z-20">

            <div class="text-center mb-16 px-4 reveal reveal-up flex flex-col items-center">
                <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                    [Carousel Tagline e.g., Coverage]
                </span>

                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark leading-tight relative pb-6 flex flex-col items-center">
                    [Carousel Headline e.g., Areas We Serve]
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                </h2>

                <p class="font-body text-lg lg:text-xl text-brand-text/70 mt-6 max-w-2xl mx-auto">
                    [Brief paragraph explaining the items in the carousel below.]
                </p>
            </div>

            <div class="relative w-full overflow-hidden py-4 mask-edges group">
                <div id="location-scroller" class="flex w-max gap-4 px-4">
                    <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-brand-accent">
                        <svg class="w-5 h-5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">[Carousel Item 1]</span>
                    </div>
                    <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-brand-accent">
                        <svg class="w-5 h-5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">[Carousel Item 2]</span>
                    </div>
                    <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-brand-accent">
                        <svg class="w-5 h-5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">[Carousel Item 3]</span>
                    </div>
                     <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-brand-accent">
                        <svg class="w-5 h-5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">[Carousel Item 4]</span>
                    </div>
                     <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-brand-accent">
                        <svg class="w-5 h-5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">[Carousel Item 5]</span>
                    </div>
                     <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-brand-accent">
                        <svg class="w-5 h-5 text-brand-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">[Carousel Item 6]</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .mask-edges {
            mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scroller = document.getElementById('location-scroller');
            if (scroller) {
                const content = scroller.innerHTML;
                scroller.innerHTML = content + content;
                const anim = scroller.animate([
                    { transform: 'translateX(0)' },
                    { transform: 'translateX(-50%)' }
                ], { duration: 35000, iterations: Infinity, easing: 'linear' });

                scroller.parentElement.addEventListener('mouseenter', () => { anim.playbackRate = 0.25; });
                scroller.parentElement.addEventListener('mouseleave', () => { anim.playbackRate = 1; });
            }
        });
    </script>

    <section id="faq" class="relative min-h-[100svh] py-20 flex items-center justify-center bg-brand-beige">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

            <div class="flex flex-col lg:flex-row gap-12 lg:gap-24 relative w-full">

                <div class="w-full lg:w-1/3 relative">
                    <div class="lg:sticky lg:top-32 flex flex-col items-center text-center lg:items-start lg:text-left reveal reveal-up mt-8 lg:mt-0">

                        <span class="inline-block px-5 py-2 bg-brand-accent text-white text-sm font-medium tracking-widest uppercase rounded-full mb-6">
                            [FAQ Tagline]
                        </span>

                        <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl font-normal text-brand-dark leading-tight relative flex flex-col items-center lg:items-start pb-6 mb-8">
                            [FAQ Main Headline]
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                        </h2>

                        <p class="font-body text-base sm:text-lg md:text-xl text-brand-dark/70 mb-10 max-w-sm leading-relaxed">
                            [Brief paragraph explaining that users can contact you if they have more questions.]
                        </p>

                        <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-accent font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border border-black/5">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-green rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 text-brand-dark transition-colors duration-500 group-hover:text-white">Get in touch</span>
                            <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 reveal reveal-up" style="transition-delay: 150ms;" itemscope itemtype="https://schema.org/FAQPage">
                    <div class="space-y-0 font-body border-t border-brand-dark/10">

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    [FAQ Question 1]
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">[FAQ Answer 1]</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    [FAQ Question 2]
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">[FAQ Answer 2]</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    [FAQ Question 3]
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">[FAQ Answer 3]</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    [FAQ Question 4]
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">[FAQ Answer 4]</span>
                            </div>
                        </details>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        details>div { animation-name: slideDown; animation-duration: 350ms; animation-timing-function: ease-out; }
        @keyframes slideDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }
        details>summary::-webkit-details-marker { display: none; }
    </style>

    <section class="py-16 md:py-24 bg-white border-t border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">

            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20 reveal reveal-up">

                <div class="w-full lg:w-1/2">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="[cta-image-path.jpg]" alt="[CTA Image Alt Text]" loading="lazy" class="w-full h-80 md:h-[500px] lg:h-[600px] object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col items-center text-center lg:items-start lg:text-left">

                    <span class="inline-block px-5 py-1.5 bg-brand-accent text-white border border-brand-accent rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        [Secondary CTA Tagline]
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        [Secondary CTA Headline]
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-brand-accent rounded-full"></span>
                    </h2>

                    <p class="font-body text-lg lg:text-xl text-brand-text/70 mt-6 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        [Brief paragraph encouraging the user to act or ask a question.]
                    </p>

                    <div class="mt-10 flex justify-center lg:justify-start w-full">
                        <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 shadow-lg w-full sm:w-auto">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 transition-colors duration-500">[Secondary CTA Button Text]</span>
                            <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                                </svg>
                            </span>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="py-24 md:py-32 bg-brand-green text-white overflow-hidden relative border-t border-white/5">
        <div class="container mx-auto px-6 max-w-[90rem]">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">

                <div class="w-full lg:w-3/12 reveal reveal-up order-2 lg:order-1 flex justify-center lg:justify-start">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="[bottom-cta-image-path.jpg]" alt="[Bottom CTA Alt Text]" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

                <div class="w-full lg:w-5/12 text-center reveal reveal-up order-1 lg:order-2 flex flex-col items-center">

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-white leading-tight relative pb-6 flex flex-col items-center mb-6">
                        [Final Call to Action Headline]
                    </h2>

                    <p class="font-body text-lg lg:text-xl text-white/85 mb-10 max-w-md mx-auto leading-relaxed">
                        [Final convincing paragraph encouraging the user to explore more or get in touch.]
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center w-full sm:w-auto">
                        <a href="gallery.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-transparent border border-white/30 font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 w-full sm:w-auto">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 text-white transition-colors duration-500 group-hover:text-brand-green">View Gallery</span>
                            <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-brand-green -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                                </svg>
                            </span>
                        </a>

                        <a href="services.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-white shadow-lg font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 w-full sm:w-auto">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-accent rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 text-brand-green transition-colors duration-500 group-hover:text-white">Our Services</span>
                            <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 reveal reveal-up order-3 flex justify-center lg:justify-end mt-0 lg:mt-16" style="transition-delay: 200ms;">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="[bottom-cta-image-path-2.jpg]" alt="[Bottom CTA Alt Text 2]" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>