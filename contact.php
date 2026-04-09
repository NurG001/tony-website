<?php
// DYNAMIC SEO VARIABLES
$pageTitle = "Contact Us | Cyril Ernest Landscapes | Bespoke Garden Landscaping";
$pageDesc = "Contact Tony at Cyril Ernest Landscapes for a free quote on garden design, landscaping, and maintenance in Maidstone, Sevenoaks, and Kent.";
include 'components/header.php';
?>

<main class="bg-brand-beige min-h-screen">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Cyril Ernest Landscapes",
      "image": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/imgs/logo.png",
      "telephone": "07772804627",
      "email": "info@cyrilernest.co.uk",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "14 Castle View",
        "addressLocality": "Maidstone",
        "addressRegion": "Kent",
        "postalCode": "ME14 2BY",
        "addressCountry": "UK"
      },
      "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/contact.php",
      "openingHours": "Mo,Tu,We,Th,Fr 07:30-17:00, Sa 08:00-12:00",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "07772804627",
        "contactType": "customer service",
        "areaServed": ["Maidstone", "Sevenoaks", "Kent"],
        "availableLanguage": "English"
      }
    }
    </script>

    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 flex items-center justify-center overflow-hidden bg-brand-dark">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20 text-center text-white reveal reveal-up flex flex-col items-center">

            <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                Get In Touch
            </span>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal leading-tight relative pb-6 flex flex-col items-center">
                Let's Discuss Your Garden Project
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
            </h1>

        </div>

        <div class="absolute inset-0 opacity-20 pointer-events-none bg-[radial-gradient(#E74040_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-6 max-w-[85rem]">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col lg:flex-row border border-gray-100 reveal reveal-up">

                <div class="lg:w-3/5 p-8 md:p-12 lg:p-20">
                    <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-dark mb-4">Request a Free Estimate</h2>
                    <p class="font-body text-xl text-brand-text/70 mb-12">Fill out the details below and Tony will get back to you shortly with expert horticultural advice.</p>

                    <form action="#" method="POST" class="space-y-8 font-body">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label for="name" class="block text-base font-bold text-brand-dark mb-3">Full Name *</label>
                                <input type="text" id="name" name="name" required placeholder="e.g. John Smith"
                                    class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-[#E74040] focus:ring-4 focus:ring-[#E74040]/10 outline-none transition-all bg-gray-50/50 text-lg">
                            </div>
                            <div>
                                <label for="phone" class="block text-base font-bold text-brand-dark mb-3">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required placeholder="07772 804627"
                                    class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-[#E74040] focus:ring-4 focus:ring-[#E74040]/10 outline-none transition-all bg-gray-50/50 text-lg">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-base font-bold text-brand-dark mb-3">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="info@example.com"
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-[#E74040] focus:ring-4 focus:ring-[#E74040]/10 outline-none transition-all bg-gray-50/50 text-lg">
                        </div>

                        <div>
                            <label for="message" class="block text-base font-bold text-brand-dark mb-3">Project Details *</label>
                            <textarea id="message" name="message" required rows="5"
                                placeholder="Tell us about the landscaping, maintenance, or tree work you need..."
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:border-[#E74040] focus:ring-4 focus:ring-[#E74040]/10 outline-none transition-all bg-gray-50/50 resize-none text-lg"></textarea>
                        </div>

                        <button type="submit" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 w-full sm:w-auto border-none cursor-pointer">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 text-white transition-colors duration-500 group-hover:text-white">Submit Request</span>
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
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-[#E74040] group-hover:scale-110 group-hover:border-[#E74040]">
                                    <svg aria-hidden="true" class="w-6 h-6 text-[#E74040] transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Call Tony</p>
                                    <a href="tel:07772804627" class="text-2xl font-bold hover:text-[#E74040] transition-colors">07772 804627</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-[#E74040] group-hover:scale-110 group-hover:border-[#E74040]">
                                    <svg aria-hidden="true" class="w-6 h-6 text-[#E74040] transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Email</p>
                                    <a href="mailto:info@cyrilernest.co.uk" class="text-xl font-medium hover:text-[#E74040] transition-colors break-all">info@cyrilernest.co.uk</a>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-[#E74040] group-hover:scale-110 group-hover:border-[#E74040]">
                                    <svg aria-hidden="true" class="w-6 h-6 text-[#E74040] transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Availability</p>
                                    <p class="text-xl font-semibold text-white">Mon - Fri: 07:30 - 17:00</p>
                                    <p class="text-lg text-brand-beige/60 mt-1 italic">Saturday: 08:00 - 12:00</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 group">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center shrink-0 border border-white/5 transition-all duration-300 group-hover:bg-[#E74040] group-hover:scale-110 group-hover:border-[#E74040]">
                                    <svg aria-hidden="true" class="w-6 h-6 text-[#E74040] transition-colors duration-300 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-brand-beige/60 text-sm uppercase tracking-widest font-bold mb-2">Location</p>
                                    <address class="not-italic text-xl font-medium text-white mb-0 leading-snug">
                                        14 Castle View<br>Maidstone, ME14 2BY
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative z-10 mt-16 pt-10 border-t border-white/10">
                        <p class="font-body text-brand-beige/80 text-lg leading-relaxed italic">
                            "I am usually out working on-site during the day. Please leave a message or send an email, and I will get back to you as soon as possible." <br><span class="font-bold block mt-2 text-white">— Tony Tearle</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 md:py-32 bg-[#E74040] text-white overflow-hidden relative border-t border-white/5">
        <div class="container mx-auto px-6 max-w-[90rem] relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 lg:gap-24">

                <div class="group reveal reveal-up flex flex-col items-center text-center md:items-start md:text-left">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 border border-white/10 transition-all duration-500 group-hover:bg-brand-dark group-hover:border-brand-dark group-hover:-translate-y-2">
                        <svg class="w-8 h-8 text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading text-3xl font-normal mb-5">Local Coverage</h3>
                    <p class="font-body text-xl text-white/90 leading-relaxed">
                        Based in <span class="text-white font-semibold">Maidstone</span>, we proudly serve all of <span class="text-white font-semibold">Kent</span> and surrounding areas including Sevenoaks and Tonbridge.
                    </p>
                </div>

                <div class="group reveal reveal-up flex flex-col items-center text-center md:items-start md:text-left" style="transition-delay: 100ms;">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 border border-white/10 transition-all duration-500 group-hover:bg-brand-dark group-hover:border-brand-dark group-hover:-translate-y-2">
                        <svg class="w-8 h-8 text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading text-3xl font-normal mb-5">Direct Communication</h3>
                    <p class="font-body text-xl text-white/90 leading-relaxed">
                        You speak directly with Tony, not a call center. Expect a response or a call back within <span class="text-white font-semibold">24 hours</span> to discuss your project details.
                    </p>
                </div>

                <div class="group reveal reveal-up flex flex-col items-center text-center md:items-start md:text-left" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mb-8 border border-white/10 transition-all duration-500 group-hover:bg-brand-dark group-hover:border-brand-dark group-hover:-translate-y-2">
                        <svg class="w-8 h-8 text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-heading text-3xl font-normal mb-5">Free Estimates & Advice</h3>
                    <p class="font-body text-xl text-white/90 leading-relaxed">
                        Backed by formal horticultural training, we provide <span class="text-white font-semibold">free expert advice</span> and fair, transparent estimates for all potential work.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 md:py-32 bg-[#F8F9F4] border-t border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto relative z-20">

            <div class="text-center mb-16 px-4 reveal reveal-up flex flex-col items-center">
                <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                    Coverage
                </span>

                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark leading-tight relative pb-6 flex flex-col items-center">
                    Areas We Serve
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                </h2>

                <p class="font-body text-lg lg:text-xl text-brand-text/70 mt-6 max-w-2xl mx-auto">
                    We proudly deliver our bespoke landscaping and maintenance services to private and commercial properties across Kent and the surrounding areas.
                </p>
            </div>

            <div class="relative w-full overflow-hidden py-4 mask-edges group">
                <div id="location-scroller" class="flex w-max gap-4 px-4">
                    <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-[#E74040]">
                        <svg class="w-5 h-5 text-[#E74040]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">Maidstone</span>
                    </div>
                    <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-[#E74040]">
                        <svg class="w-5 h-5 text-[#E74040]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">Sevenoaks</span>
                    </div>
                    <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-[#E74040]">
                        <svg class="w-5 h-5 text-[#E74040]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">Tonbridge</span>
                    </div>
                     <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-[#E74040]">
                        <svg class="w-5 h-5 text-[#E74040]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">West Malling</span>
                    </div>
                     <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-[#E74040]">
                        <svg class="w-5 h-5 text-[#E74040]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">Aylesford</span>
                    </div>
                     <div class="flex items-center gap-3 px-8 py-3.5 bg-white border border-brand-dark/10 rounded-full shadow-sm shrink-0 transition-colors hover:border-[#E74040]">
                        <svg class="w-5 h-5 text-[#E74040]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-body font-semibold text-brand-dark text-[17px]">All of Kent</span>
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

                        <span class="inline-block px-5 py-2 bg-[#E74040] text-white text-sm font-medium tracking-widest uppercase rounded-full mb-6">
                            Questions & Answers
                        </span>

                        <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl font-normal text-brand-dark leading-tight relative flex flex-col items-center lg:items-start pb-6 mb-8">
                            Got Questions?
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                        </h2>

                        <p class="font-body text-base sm:text-lg md:text-xl text-brand-dark/70 mb-10 max-w-sm leading-relaxed">
                            Can't find the answer you're looking for? Reach out and Tony will be happy to offer free advice and estimates.
                        </p>

                        <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border border-transparent">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 transition-colors duration-500 group-hover:text-white">Get in touch</span>
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
                                    Do you provide free estimates and consultations?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">Yes, we offer initial free estimates and expert horticultural advice for all our clients. We believe in complete transparency before starting any project. Call Tony direct on 07772804627.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    What areas do you serve?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">We are based at 14 Castle View, Maidstone, and provide our landscaping and maintenance services throughout Maidstone, Sevenoaks, and the wider Kent area.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    Do you undertake commercial garden maintenance?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">Absolutely. We offer comprehensive garden maintenance services for both private residential properties and commercial premises, ensuring your grounds look pristine year-round.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    Do you build custom garden features like garden rooms and decking?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">Yes, we specialize in bespoke garden rooms, custom shed builds, decking, pergolas, and full paving and walling services. All of our services are delivered in-house to maintain our strict quality standards.</span>
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
                        <img src="assets/imgs/garden-makeover-after.jpg" alt="Beautiful newly landscaped garden with patio" loading="lazy" class="w-full h-80 md:h-[500px] lg:h-[600px] object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col items-center text-center lg:items-start lg:text-left">

                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Ready to Start?
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Transform Your Outdoor Space
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>

                    <p class="font-body text-lg lg:text-xl text-brand-text/70 mt-6 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Don't let your garden's potential go to waste. Reach out today to schedule a consultation with Tony and discover how we can create a space tailored entirely to your lifestyle.
                    </p>

                    <div class="mt-10 flex justify-center lg:justify-start w-full">
                        <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 shadow-lg w-full sm:w-auto">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 transition-colors duration-500 group-hover:text-white">Get a Free Estimate</span>
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

<section class="py-24 md:py-32 bg-brand-dark text-white overflow-hidden relative border-t border-white/5">
        
        <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#E74040_1px,transparent_1px)] [background-size:20px_20px]"></div>

        <div class="container mx-auto px-6 max-w-[90rem] relative z-20">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">

                <div class="w-full lg:w-3/12 reveal reveal-up order-2 lg:order-1 flex justify-center lg:justify-start">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="assets/imgs/beautiful-garden-patio.jpg" alt="A freshly paved patio and landscaped garden" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

                <div class="w-full lg:w-5/12 text-center reveal reveal-up order-1 lg:order-2 flex flex-col items-center">

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-white leading-tight relative pb-6 flex flex-col items-center mb-6">
                        Explore Our Full Capabilities
                    </h2>

                    <p class="font-body text-lg lg:text-xl text-white/80 mb-10 max-w-md mx-auto leading-relaxed">
                        Still looking for inspiration? Browse our past projects to see the level of craftsmanship and attention to detail we bring to every job.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center w-full sm:w-auto">
                        <a href="gallery.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-transparent border border-white/30 font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 w-full sm:w-auto hover:border-[#E74040]">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 text-white transition-colors duration-500 group-hover:text-white">View Gallery</span>
                            <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white transition-colors duration-500 -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                                </svg>
                            </span>
                        </a>

<a href="services.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] shadow-[0_0_20px_rgba(231,64,64,0.3)] font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 w-full sm:w-auto border-none">
    <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
    <span class="relative z-10 text-white transition-colors duration-500 group-hover:text-brand-dark">Our Services</span>
    <span class="relative z-10 w-10 h-10 bg-white rounded-full flex items-center justify-center transition-colors duration-700 group-hover:bg-brand-dark">
        <svg class="w-5 h-5 text-[#E74040] -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
        </svg>
    </span>
</a>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 reveal reveal-up order-3 flex justify-center lg:justify-end mt-0 lg:mt-16" style="transition-delay: 200ms;">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="assets/imgs/garden-decking-fencing.jpg" alt="High quality timber decking and fencing" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>