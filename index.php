<?php include 'components/header.php'; ?>

<main>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "HomeAndConstructionBusiness",
      "name": "Cyril Ernest Landscapes",
      "image": "https://cyrilernest.co.uk/assets/imgs/logo.png",
      "@id": "https://cyrilernest.co.uk/index.php",
      "url": "https://cyrilernest.co.uk/",
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
      "openingHours": "Mo,Tu,We,Th,Fr 07:30-17:00, Sa 08:00-12:00",
      "areaServed": [
        {
          "@type": "City",
          "name": "Maidstone"
        },
        {
          "@type": "City",
          "name": "Sevenoaks"
        }
      ],
      "description": "At Cyril Ernest Landscapes, we specialise in bespoke garden landscaping and maintenance. With over 30 years of experience, we are a company you can trust.",
      "priceRange": "££"
    }
    </script>

 <section class="relative min-h-[100svh] flex flex-col pt-24 pb-16 overflow-hidden bg-brand-dark">
    
    <div class="absolute inset-0 w-full h-full z-0 hero-slideshow">
        <img src="assets/Tony Best Pictures/HERO/HERO_1.webp" alt="Landscaping Background 1" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out active">
        <img src="assets/Tony Best Pictures/HERO/HERO_2.webp" alt="Landscaping Background 2" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out">
        <img src="assets/Tony Best Pictures/HERO/HERO_3.webp" alt="Landscaping Background 3" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out">
        <img src="assets/Tony Best Pictures/HERO/HERO_4.webp" alt="Landscaping Background 4" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out">
        <img src="assets/Tony Best Pictures/HERO/HERO_5.webp" alt="Landscaping Background 5" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out">
        <img src="assets/Tony Best Pictures/HERO/HERO_6.webp" alt="Landscaping Background 6" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out">
        <img src="assets/Tony Best Pictures/HERO/HERO_7.webp" alt="Landscaping Background 7" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-[2000ms] ease-in-out">
    </div>

    <div class="absolute inset-0 bg-black/50 z-10"></div>

    <div class="relative z-20 flex-grow flex flex-col items-center justify-center text-center px-4 sm:px-8 w-full max-w-[96rem] mx-auto reveal reveal-up">
         
         <h1 class="font-heading text-5xl sm:text-6xl md:text-7xl lg:text-[6rem] font-bold mb-6 leading-tight text-white drop-shadow-2xl tracking-wide uppercase">
            Cyril Ernest Landscapes
        </h1>

        <p class="font-body text-lg md:text-xl text-white/95 font-medium leading-relaxed max-w-3xl drop-shadow-md mb-8">
            Taking pride in delivering high-quality gardening and landscaping services tailored to your specific needs. Trustworthy, loyal, and professional since 1996.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-center justify-center w-full sm:w-auto">
            
            <a href="contact.php"
                class="group relative inline-flex items-center justify-between gap-4 pl-8 pr-3 py-3 bg-[#E74040] text-white font-body font-bold text-xl rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none shadow-[0_0_20px_rgba(231,64,64,0.4)] w-full sm:w-auto">
                <span class="absolute right-2 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/20 rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                <span class="relative z-10 transition-colors duration-500">Get Free Estimate</span>
                <span class="relative z-10 w-12 h-12 flex items-center justify-center bg-white rounded-full">
                    <svg class="w-6 h-6 text-[#E74040] -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                    </svg>
                </span>
            </a>

<a href="gallery.php"
    class="group relative inline-flex items-center justify-between gap-4 pl-8 pr-3 py-3 bg-white text-[#E74040] font-body font-bold text-xl rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none shadow-xl w-full sm:w-auto">
    
    <span class="absolute right-2 top-1/2 -translate-y-1/2 w-12 h-12 bg-gray-50 rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
    
    <span class="relative z-10 transition-colors duration-500">
        View Our Gallery
    </span>

    <span class="relative z-10 w-12 h-12 flex items-center justify-center bg-[#E74040] rounded-full">
        <svg class="w-6 h-6 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
        </svg>
    </span>
</a>

        </div>

    </div>
</section>

    <style>
        .hero-slideshow img.active { opacity: 1; }
        .scrolling-wrapper { overflow: hidden; white-space: nowrap; display: flex; width: 100%; cursor: default;}
        .scrolling-track { display: flex; width: max-content; animation: scrollBanner 35s linear infinite; }
        .scrolling-wrapper:hover .scrolling-track, .scrolling-track:hover { animation-play-state: running !important; }
        @keyframes scrollBanner { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .hover-item { transition: opacity 0.3s ease; }
        .scrolling-wrapper:hover .hover-item { opacity: 0.5; }
        .scrolling-wrapper .hover-item:hover { opacity: 1; }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.hero-slideshow img');
            if (slides.length > 1) {
                let currentSlide = 0;
                setInterval(() => {
                    slides[currentSlide].classList.remove('active');
                    currentSlide = (currentSlide + 1) % slides.length;
                    slides[currentSlide].classList.add('active');
                }, 5000); // Change image every 5 seconds
            }
        });
    </script>

    <div class="bg-[#E74040] text-brand-beige py-5 border-y border-brand-dark/20 shadow-inner">
        <div class="scrolling-wrapper">
            <div class="scrolling-track flex items-center font-body font-medium tracking-wide text-sm md:text-base">

                <div class="flex items-center gap-12 md:gap-20 px-6 md:px-10">
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"></path></svg>
                        Over 30 Years Experience
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        Family-Run Company
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Exceptional Workmanship
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trustworthy & Loyal
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Initial Free Estimates & Advice
                    </div>
                </div>
                <div class="flex items-center gap-12 md:gap-20 px-6 md:px-10">
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"></path></svg>
                        Over 30 Years Experience
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        Family-Run Company
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Exceptional Workmanship
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Trustworthy & Loyal
                    </div>
                    <div class="flex items-center gap-3 hover-item">
                        <svg class="w-6 h-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Initial Free Estimates & Advice
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const wrappers = document.querySelectorAll('.scrolling-wrapper');
            wrappers.forEach(wrapper => {
                const track = wrapper.querySelector('.scrolling-track');
                if (track) {
                    wrapper.addEventListener('mouseenter', () => {
                        track.getAnimations().forEach(anim => { anim.play(); anim.playbackRate = 0.25; });
                    });
                    wrapper.addEventListener('mouseleave', () => {
                        track.getAnimations().forEach(anim => { anim.playbackRate = 1; });
                    });
                }
            });
        });
    </script>

    <section class="relative min-h-[100svh] py-20 flex items-center justify-center bg-brand-beige text-brand-dark overflow-hidden">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

                <div class="w-full lg:w-[50%] order-2 lg:order-1 flex flex-col items-center text-center lg:items-start lg:text-left reveal reveal-up mt-8 lg:mt-0">

                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Our Story
                    </span>

                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-brand-dark mb-8 leading-tight flex flex-col items-center lg:items-start">
                        Over 30 Years of Horticultural Excellence
                        <span class="block w-20 h-[3px] bg-[#E74040] mt-4 lg:mt-6 rounded-full"></span>
                    </h2>

                    <div class="font-body text-base sm:text-lg md:text-xl text-brand-dark/80 leading-relaxed space-y-6 mb-10 max-w-2xl">
                        <p>With a passion for the great outdoors from a young age, Tony Tearle went on to study at one of the leading horticultural colleges and universities, gaining the knowledge and foundations needed to build a successful family-run company. The name Cyril Ernest was chosen in tribute to his father, whom he sadly lost during his training, honouring his memory through the business.</p>
                        <p>Now in our 30th year in the industry, Cyril Ernest Landscapes continues to provide a wide range of services to our clients, driven by a genuine passion for the sector and a commitment to excellence. As a trustworthy, loyal, and professional team, we are committed to providing exceptional workmanship and a reliable service you can depend on.</p>
                    </div>

                    <div class="grid grid-cols-3 gap-4 sm:gap-8 md:gap-10 border-t border-brand-dark/10 pt-8 mt-2 mb-12 w-full max-w-xl mx-auto lg:mx-0">
                        <div class="group flex flex-col items-center lg:items-start">
                            <p class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-brand-dark transition-transform duration-500 group-hover:-translate-y-2 whitespace-nowrap">
                                <span class="auto-counter" data-target="30">0</span>+
                            </p>
                            <p class="font-body text-[10px] sm:text-xs md:text-sm uppercase tracking-widest mt-2 opacity-70 font-bold text-center lg:text-left text-brand-dark">Years Experience</p>
                        </div>
                        <div class="group flex flex-col items-center lg:items-start">
                            <p class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-brand-dark transition-transform duration-500 group-hover:-translate-y-2 whitespace-nowrap">
                                <span class="auto-counter" data-target="5">0</span>★
                            </p>
                            <p class="font-body text-[10px] sm:text-xs md:text-sm uppercase tracking-widest mt-2 opacity-70 font-bold text-center lg:text-left text-brand-dark">Commitment to Quality</p>
                        </div>
                        <div class="group flex flex-col items-center lg:items-start">
                            <p class="font-heading text-3xl sm:text-4xl md:text-5xl font-bold text-brand-dark transition-transform duration-500 group-hover:-translate-y-2 whitespace-nowrap">
                                <span class="auto-counter" data-target="100">0</span>%
                            </p>
                            <p class="font-body text-[10px] sm:text-xs md:text-sm uppercase tracking-widest mt-2 opacity-70 font-bold text-center lg:text-left text-brand-dark">Tailored Solutions</p>
                        </div>
                    </div>

                    <a href="/about.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 shadow-sm border-none">
                        <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500">Learn more about us</span>
                        <span class="relative z-10 w-10 h-10 bg-brand-dark rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-[50%] order-1 lg:order-2 reveal reveal-up">
                    <div class="relative group w-full flex justify-center">
                        <img src="assets/imgs/tony-tearle-landscaping.jpg" alt="Tony Tearle and the Cyril Ernest Landscapes Team" loading="lazy" decoding="async"
                            class="rounded-[2.5rem] w-full h-[400px] sm:h-[500px] md:h-[600px] lg:h-[800px] object-cover transition-transform duration-700 group-hover:scale-[1.02]">
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

    <section class="relative min-h-[100svh] py-20 flex items-center justify-center bg-white overflow-hidden">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

            <div class="flex flex-col items-center text-center mb-12 md:mb-16 reveal reveal-up">

                <span class="inline-block px-5 py-2 bg-[#E74040] text-white text-sm font-medium tracking-widest uppercase rounded-full mb-6">
                    Comprehensive In-House Services
                </span>

                <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-brand-dark mb-8 leading-tight flex flex-col items-center text-center relative pb-6">
                    Expert Landscaping & Maintenance
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-1.5 md:h-2 bg-[#E74040] rounded-full"></span>
                </h2>

                <p class="font-body text-base sm:text-lg md:text-xl text-brand-text/70 max-w-2xl mx-auto leading-relaxed mt-2">
                    We offer a comprehensive range of services, all undertaken in-house. From bespoke garden design to complete revitalisation, all of our services are delivered with the same commitment to quality, attention to detail, and customer satisfaction.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 w-full">

                <a href="services.php#garden-design" class="group flex flex-col rounded-[1.5rem] overflow-hidden reveal reveal-up transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                    <div class="h-40 sm:h-48 lg:h-52 relative overflow-hidden bg-gray-200 w-full">
                        <img src="assets/imgs/garden-design-paving.jpg" alt="Garden Design & Landscaping" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="flex flex-col flex-grow p-5 sm:p-6 bg-brand-beige group-hover:bg-[#E74040] transition-colors duration-500 text-center lg:text-left border border-brand-dark/5">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Garden Design & Landscaping
                        </h3>
                        <p class="font-body text-brand-text/80 group-hover:text-white/90 text-sm lg:text-base leading-relaxed mb-4 transition-colors duration-500">
                            Complete garden landscaping, including bespoke planting plans, paving, patios, walling, fencing, decking, pergolas, and driveways.
                        </p>
                        <div class="mt-auto pt-3 border-t border-brand-dark/5 group-hover:border-white/20 transition-colors duration-500 w-full">
                            <p class="font-heading font-bold text-brand-dark group-hover:text-white text-sm md:text-base mb-1 transition-colors duration-500">Perfect for</p>
                            <p class="font-body text-xs sm:text-sm text-brand-text/70 group-hover:text-white/80 transition-colors duration-500">
                                Complete Outdoor Revitalisation
                            </p>
                        </div>
                    </div>
                </a>

                <a href="services.php#maintenance" class="group flex flex-col rounded-[1.5rem] overflow-hidden reveal reveal-up transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="transition-delay: 100ms;">
                    <div class="h-40 sm:h-48 lg:h-52 relative overflow-hidden bg-gray-200 w-full">
                        <img src="assets/imgs/commercial-garden-maintenance.jpg" alt="Garden Maintenance" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="flex flex-col flex-grow p-5 sm:p-6 bg-brand-beige group-hover:bg-[#E74040] transition-colors duration-500 text-center lg:text-left border border-brand-dark/5">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Garden Maintenance & Turfing
                        </h3>
                        <p class="font-body text-brand-text/80 group-hover:text-white/90 text-sm lg:text-base leading-relaxed mb-4 transition-colors duration-500">
                            Private and commercial garden maintenance, expert horticultural advice, natural and artificial lawn installation, and expert lawn treatments.
                        </p>
                        <div class="mt-auto pt-3 border-t border-brand-dark/5 group-hover:border-white/20 transition-colors duration-500 w-full">
                            <p class="font-heading font-bold text-brand-dark group-hover:text-white text-sm md:text-base mb-1 transition-colors duration-500">Perfect for</p>
                            <p class="font-body text-xs sm:text-sm text-brand-text/70 group-hover:text-white/80 transition-colors duration-500">
                                Year-Round Property Care
                            </p>
                        </div>
                    </div>
                </a>

                <a href="services.php#garden-rooms" class="group flex flex-col rounded-[1.5rem] overflow-hidden reveal reveal-up transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="transition-delay: 200ms;">
                    <div class="h-40 sm:h-48 lg:h-52 relative overflow-hidden bg-gray-200 w-full">
                        <img src="assets/imgs/bespoke-garden-rooms.jpg" alt="Bespoke Garden Rooms" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="flex flex-col flex-grow p-5 sm:p-6 bg-brand-beige group-hover:bg-[#E74040] transition-colors duration-500 text-center lg:text-left border border-brand-dark/5">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Bespoke Garden Rooms
                        </h3>
                        <p class="font-body text-brand-text/80 group-hover:text-white/90 text-sm lg:text-base leading-relaxed mb-4 transition-colors duration-500">
                            Custom garden rooms, bespoke shed builds, and unique custom garden features designed and installed entirely in-house.
                        </p>
                        <div class="mt-auto pt-3 border-t border-brand-dark/5 group-hover:border-white/20 transition-colors duration-500 w-full">
                            <p class="font-heading font-bold text-brand-dark group-hover:text-white text-sm md:text-base mb-1 transition-colors duration-500">Perfect for</p>
                            <p class="font-body text-xs sm:text-sm text-brand-text/70 group-hover:text-white/80 transition-colors duration-500">
                                Outdoor Retreats & Offices
                            </p>
                        </div>
                    </div>
                </a>

                <a href="services.php#tree-work" class="group flex flex-col rounded-[1.5rem] overflow-hidden reveal reveal-up transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="transition-delay: 300ms;">
                    <div class="h-40 sm:h-48 lg:h-52 relative overflow-hidden bg-gray-200 w-full">
                        <img src="assets/imgs/tree-work-arboriculture.jpg" alt="Arboriculture & Tree Work" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="flex flex-col flex-grow p-5 sm:p-6 bg-brand-beige group-hover:bg-[#E74040] transition-colors duration-500 text-center lg:text-left border border-brand-dark/5">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Arboriculture & Tree Work
                        </h3>
                        <p class="font-body text-brand-text/80 group-hover:text-white/90 text-sm lg:text-base leading-relaxed mb-4 transition-colors duration-500">
                            Professional arboriculture and tree work, carried out safely and efficiently with immense respect for your property's natural environment.
                        </p>
                        <div class="mt-auto pt-3 border-t border-brand-dark/5 group-hover:border-white/20 transition-colors duration-500 w-full">
                            <p class="font-heading font-bold text-brand-dark group-hover:text-white text-sm md:text-base mb-1 transition-colors duration-500">Perfect for</p>
                            <p class="font-body text-xs sm:text-sm text-brand-text/70 group-hover:text-white/80 transition-colors duration-500">
                                Tree Maintenance & Safe Removals
                            </p>
                        </div>
                    </div>
                </a>

            </div>

            <div class="mt-12 flex justify-center reveal reveal-up w-full">
                <a href="services.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none">
                    <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                    <span class="relative z-10 transition-colors duration-500">View All Services</span>
                    <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </section>

    <section class="relative min-h-[100svh] py-20 flex items-center justify-center bg-brand-dark text-brand-beige overflow-hidden">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">

                <div class="w-full lg:w-5/12 flex flex-col items-center text-center lg:items-start lg:text-left reveal reveal-up mt-8 lg:mt-0">

                    <span class="inline-block px-5 py-2 bg-[#E74040] text-white text-sm font-medium tracking-widest uppercase rounded-full mb-6">
                        Before & After
                    </span>

                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-white leading-tight relative pb-6 mb-8 flex flex-col items-center lg:items-start">
                        Transforming Outdoor Spaces
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>

                    <p class="font-body text-base sm:text-lg md:text-xl text-brand-beige/80 leading-relaxed mb-10 max-w-xl mx-auto lg:mx-0">
                        Swipe to see a true before and after transformation. We bring expert knowledge and a passion for excellence to every project, turning your vision into a beautiful reality.
                    </p>

                    <a href="gallery.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none">
                        <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500">View Full Gallery</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-7/12 reveal reveal-up" style="transition-delay: 100ms;">
                    <div class="ba-slider touch-pan-y relative w-full aspect-[4/3] md:aspect-[16/9] rounded-[2.5rem] overflow-hidden cursor-ew-resize shadow-2xl border-4 border-white/5 group">
                        <img src="assets/imgs/garden-makeover-after.jpg" alt="Beautiful newly landscaped garden with patio" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                        
                        <img src="assets/imgs/garden-makeover-before.jpg" alt="Overgrown garden before landscaping" loading="lazy" decoding="async" class="ba-before absolute inset-0 w-full h-full object-cover pointer-events-none shadow-[2px_0_10px_rgba(0,0,0,0.5)]" style="clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);">

                        <div class="ba-handle absolute top-0 bottom-0 left-[50%] w-1.5 bg-white shadow-[0_0_15px_rgba(0,0,0,0.8)] pointer-events-none -ml-[3px] flex items-center justify-center">
                            <div class="w-14 h-14 bg-white rounded-full shadow-2xl border border-gray-100 flex items-center justify-center text-brand-dark transition-transform group-hover:scale-110">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l-3 3m0 0l3 3m-3-3h14m0 0l-3-3m3 3l-3 3"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="absolute bottom-6 left-6 bg-black/60 backdrop-blur-sm text-white px-4 py-1.5 rounded text-xs font-bold tracking-widest font-body uppercase pointer-events-none">Before</div>
                        <div class="absolute bottom-6 right-6 bg-black/60 backdrop-blur-sm text-white px-4 py-1.5 rounded text-xs font-bold tracking-widest font-body uppercase pointer-events-none">After</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="relative min-h-[100svh] py-20 flex items-center justify-center bg-white border-t border-brand-dark/5 overflow-hidden">
    <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

        <div class="flex flex-col items-center text-center mb-12 md:mb-16 reveal reveal-up">
            <span class="inline-block px-5 py-2 bg-[#E74040] text-white text-sm font-medium tracking-widest uppercase rounded-full mb-6">
                Simple & Reliable
            </span>

            <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-brand-dark leading-tight flex flex-col items-center text-center relative pb-6 mb-6">
                How We Bring Your Vision to Life
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
            </h2>

            <p class="font-body text-base sm:text-lg md:text-xl text-brand-dark/70 max-w-2xl mx-auto leading-relaxed mt-2">
                Our process is designed to be completely hassle-free, from your initial phone call to the final sign-off on your beautiful new outdoor space.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16 w-full">

            <div class="w-full lg:w-[45%] reveal reveal-up">
                <div class="relative w-full h-[400px] md:h-[500px] lg:h-[600px] rounded-[2.5rem] overflow-hidden group border border-brand-dark/5">
                    <img src="assets/Tony Best Pictures/HERO/HERO_1.webp" 
                         alt="Tony Tearle consulting with a client on garden design" 
                         loading="lazy" 
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>

            <div class="w-full lg:w-[55%] flex flex-col gap-4 sm:gap-6">

                <div class="group flex flex-col sm:flex-row items-center text-center sm:text-left gap-5 p-6 sm:p-8 rounded-[1.5rem] bg-brand-beige hover:bg-[#E74040] transition-all duration-500 border border-brand-dark/5 hover:border-transparent hover:shadow-xl reveal reveal-up cursor-default">
                    <div class="flex-shrink-0 w-14 h-14 bg-white group-hover:bg-white rounded-2xl flex items-center justify-center text-[#E74040] group-hover:text-[#E74040] font-heading text-2xl font-bold transition-all duration-500 shadow-sm">1</div>
                    <div class="flex-grow">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Initial Free Estimates and Advice
                        </h3>
                        <p class="font-body text-brand-dark/70 group-hover:text-white/90 text-sm sm:text-base leading-relaxed transition-colors duration-500">
                            Reach out to Tony for a friendly chat. We'll listen to your needs, offer expert horticultural advice, and provide an initial free estimate.
                        </p>
                    </div>
                    <div class="flex-shrink-0 mt-2 sm:mt-0 transition-transform duration-500 group-hover:translate-y-2 sm:group-hover:translate-y-0 sm:group-hover:translate-x-2">
                        <svg class="w-6 h-6 text-[#E74040] group-hover:text-white rotate-90 sm:rotate-0 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path></svg>
                    </div>
                </div>

                <div class="group flex flex-col sm:flex-row items-center text-center sm:text-left gap-5 p-6 sm:p-8 rounded-[1.5rem] bg-brand-beige hover:bg-[#E74040] transition-all duration-500 border border-brand-dark/5 hover:border-transparent hover:shadow-xl reveal reveal-up cursor-default" style="transition-delay: 100ms;">
                    <div class="flex-shrink-0 w-14 h-14 bg-white group-hover:bg-white rounded-2xl flex items-center justify-center text-[#E74040] group-hover:text-[#E74040] font-heading text-2xl font-bold transition-all duration-500 shadow-sm">2</div>
                    <div class="flex-grow">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Bespoke Design & Planning
                        </h3>
                        <p class="font-body text-brand-dark/70 group-hover:text-white/90 text-sm sm:text-base leading-relaxed transition-colors duration-500">
                            We create tailored planting plans, select materials, and draw up comprehensive garden design schemes that reflect your style perfectly.
                        </p>
                    </div>
                    <div class="flex-shrink-0 mt-2 sm:mt-0 transition-transform duration-500 group-hover:translate-y-2 sm:group-hover:translate-y-0 sm:group-hover:translate-x-2">
                        <svg class="w-6 h-6 text-[#E74040] group-hover:text-white rotate-90 sm:rotate-0 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path></svg>
                    </div>
                </div>

                <div class="group flex flex-col sm:flex-row items-center text-center sm:text-left gap-5 p-6 sm:p-8 rounded-[1.5rem] bg-brand-beige hover:bg-[#E74040] transition-all duration-500 border border-brand-dark/5 hover:border-transparent hover:shadow-xl reveal reveal-up cursor-default" style="transition-delay: 200ms;">
                    <div class="flex-shrink-0 w-14 h-14 bg-white group-hover:bg-white rounded-2xl flex items-center justify-center text-[#E74040] group-hover:text-[#E74040] font-heading text-2xl font-bold transition-all duration-500 shadow-sm">3</div>
                    <div class="flex-grow">
                        <h3 class="font-heading text-xl sm:text-2xl font-bold text-brand-dark group-hover:text-white mb-2 transition-colors duration-500">
                            Quality Installation & Handover
                        </h3>
                        <p class="font-body text-brand-dark/70 group-hover:text-white/90 text-sm sm:text-base leading-relaxed transition-colors duration-500">
                            Our professional team executes the build. All of our services are delivered with the same commitment to quality, attention to detail, and customer satisfaction.
                        </p>
                    </div>
                    <div class="flex-shrink-0 mt-2 sm:mt-0 transition-transform duration-500 group-hover:translate-y-2 sm:group-hover:translate-y-0 sm:group-hover:translate-x-2">
                        <svg class="w-6 h-6 text-[#E74040] group-hover:text-white rotate-90 sm:rotate-0 transition-all duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path></svg>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-12 md:mt-16 flex justify-center reveal reveal-up w-full">
            <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none">
                <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                <span class="relative z-10 transition-colors duration-500">Start Your Project</span>
                <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                    <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                    </svg>
                </span>
            </a>
        </div>

    </div>
</section>

    <section class="relative min-h-[100svh] py-20 flex flex-col justify-center bg-white overflow-hidden border-t border-brand-dark/5">
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

            <div class="flex flex-col md:flex-row justify-between items-center md:items-end mb-12 md:mb-16 gap-8 reveal reveal-up text-center md:text-left w-full">
                <div class="flex flex-col items-center md:items-start w-full">

                    <span class="inline-block px-5 py-2 bg-[#E74040] text-white text-sm font-medium tracking-widest uppercase rounded-full mb-6">
                        Client Testimonials
                    </span>

                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-normal text-brand-dark leading-tight relative flex flex-col items-center lg:items-start pb-6 mb-6">
                        Trusted by Homeowners & Businesses
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>

                    <p class="font-body text-base sm:text-lg md:text-xl text-brand-dark/70 max-w-2xl mx-auto md:mx-0 leading-relaxed mt-2">
                        Don't just take our word for it. Read what our loyal clients across Kent have to say about our commitment to quality and exceptional workmanship.
                    </p>
                </div>
            </div>

            <div class="relative reveal reveal-up -mx-4 sm:-mx-8 lg:-mx-12 px-4 sm:px-8 lg:px-12 w-[calc(100%+2rem)] sm:w-[calc(100%+4rem)] lg:w-[calc(100%+6rem)]">

                <style>
                    .review-scrolling-wrapper { overflow: hidden; display: flex; width: 100%; cursor: default; mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent); -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent); }
                    .review-scrolling-track { display: flex; width: max-content; animation: scrollReviews 60s linear infinite; }
                    .review-scrolling-wrapper:hover .review-scrolling-track, .review-scrolling-track:hover { animation-play-state: running !important; }
                    @keyframes scrollReviews { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
                </style>

                <div class="review-scrolling-wrapper pb-8 pt-4">
                    <div class="review-scrolling-track">

                        <div class="flex gap-4 sm:gap-6 md:gap-8 pr-4 sm:pr-6 md:pr-8 w-max">

                            <div class="w-[85vw] sm:w-[350px] lg:w-[380px] flex-shrink-0">
                                <div class="group bg-brand-beige p-6 sm:p-8 lg:p-10 rounded-3xl h-full flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(231,64,64,0.1)] hover:bg-[#E74040] border border-brand-dark/5">
                                    <div>
                                        <div class="flex text-yellow-400 mb-5 text-xl tracking-widest drop-shadow-sm">★★★★★</div>
                                        <p class="font-body text-brand-dark/80 group-hover:text-white/90 italic mb-8 text-sm sm:text-base lg:text-lg leading-relaxed transition-colors duration-500">
                                            "Tony and the team transformed our overgrown garden into a beautiful, usable space with amazing decking and paving. Highly professional and trustworthy from start to finish!"
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-brand-dark/10 group-hover:bg-white/20 flex items-center justify-center transition-colors duration-500">
                                            <span class="font-heading font-bold text-brand-dark group-hover:text-white text-sm">SK</span>
                                        </div>
                                        <p class="font-body font-bold text-brand-dark text-sm lg:text-base group-hover:text-white transition-colors duration-500">
                                            S. Kent, Maidstone
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[85vw] sm:w-[350px] lg:w-[380px] flex-shrink-0">
                                <div class="group bg-brand-beige p-6 sm:p-8 lg:p-10 rounded-3xl h-full flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(231,64,64,0.1)] hover:bg-[#E74040] border border-brand-dark/5">
                                    <div>
                                        <div class="flex text-yellow-400 mb-5 text-xl tracking-widest drop-shadow-sm">★★★★★</div>
                                        <p class="font-body text-brand-dark/80 group-hover:text-white/90 italic mb-8 text-sm sm:text-base lg:text-lg leading-relaxed transition-colors duration-500">
                                            "Cyril Ernest Landscapes have been maintaining our commercial grounds for years. Always reliable, deeply knowledgeable, and an absolute pleasure to work with."
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-brand-dark/10 group-hover:bg-white/20 flex items-center justify-center transition-colors duration-500">
                                            <span class="font-heading font-bold text-brand-dark group-hover:text-white text-sm">MD</span>
                                        </div>
                                        <p class="font-body font-bold text-brand-dark text-sm lg:text-base group-hover:text-white transition-colors duration-500">
                                            M. Davies, Sevenoaks
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[85vw] sm:w-[350px] lg:w-[380px] flex-shrink-0">
                                <div class="group bg-brand-beige p-6 sm:p-8 lg:p-10 rounded-3xl h-full flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(231,64,64,0.1)] hover:bg-[#E74040] border border-brand-dark/5">
                                    <div>
                                        <div class="flex text-yellow-400 mb-5 text-xl tracking-widest drop-shadow-sm">★★★★★</div>
                                        <p class="font-body text-brand-dark/80 group-hover:text-white/90 italic mb-8 text-sm sm:text-base lg:text-lg leading-relaxed transition-colors duration-500">
                                            "From the initial free estimate to the final bespoke shed build, the attention to detail was exceptional. I highly recommend this family-run business!"
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-brand-dark/10 group-hover:bg-white/20 flex items-center justify-center transition-colors duration-500">
                                            <span class="font-heading font-bold text-brand-dark group-hover:text-white text-sm">RH</span>
                                        </div>
                                        <p class="font-body font-bold text-brand-dark text-sm lg:text-base group-hover:text-white transition-colors duration-500">
                                            R. Hughes, Kent
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="flex gap-4 sm:gap-6 md:gap-8 pr-4 sm:pr-6 md:pr-8 w-max">
                            <div class="w-[85vw] sm:w-[350px] lg:w-[380px] flex-shrink-0">
                                <div class="group bg-brand-beige p-6 sm:p-8 lg:p-10 rounded-3xl h-full flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(231,64,64,0.1)] hover:bg-[#E74040] border border-brand-dark/5">
                                    <div>
                                        <div class="flex text-yellow-400 mb-5 text-xl tracking-widest drop-shadow-sm">★★★★★</div>
                                        <p class="font-body text-brand-dark/80 group-hover:text-white/90 italic mb-8 text-sm sm:text-base lg:text-lg leading-relaxed transition-colors duration-500">
                                            "Tony and the team transformed our overgrown garden into a beautiful, usable space with amazing decking and paving. Highly professional and trustworthy from start to finish!"
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-brand-dark/10 group-hover:bg-white/20 flex items-center justify-center transition-colors duration-500">
                                            <span class="font-heading font-bold text-brand-dark group-hover:text-white text-sm">SK</span>
                                        </div>
                                        <p class="font-body font-bold text-brand-dark text-sm lg:text-base group-hover:text-white transition-colors duration-500">
                                            S. Kent, Maidstone
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[85vw] sm:w-[350px] lg:w-[380px] flex-shrink-0">
                                <div class="group bg-brand-beige p-6 sm:p-8 lg:p-10 rounded-3xl h-full flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(231,64,64,0.1)] hover:bg-[#E74040] border border-brand-dark/5">
                                    <div>
                                        <div class="flex text-yellow-400 mb-5 text-xl tracking-widest drop-shadow-sm">★★★★★</div>
                                        <p class="font-body text-brand-dark/80 group-hover:text-white/90 italic mb-8 text-sm sm:text-base lg:text-lg leading-relaxed transition-colors duration-500">
                                            "Cyril Ernest Landscapes have been maintaining our commercial grounds for years. Always reliable, deeply knowledgeable, and an absolute pleasure to work with."
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-brand-dark/10 group-hover:bg-white/20 flex items-center justify-center transition-colors duration-500">
                                            <span class="font-heading font-bold text-brand-dark group-hover:text-white text-sm">MD</span>
                                        </div>
                                        <p class="font-body font-bold text-brand-dark text-sm lg:text-base group-hover:text-white transition-colors duration-500">
                                            M. Davies, Sevenoaks
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[85vw] sm:w-[350px] lg:w-[380px] flex-shrink-0">
                                <div class="group bg-brand-beige p-6 sm:p-8 lg:p-10 rounded-3xl h-full flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(231,64,64,0.1)] hover:bg-[#E74040] border border-brand-dark/5">
                                    <div>
                                        <div class="flex text-yellow-400 mb-5 text-xl tracking-widest drop-shadow-sm">★★★★★</div>
                                        <p class="font-body text-brand-dark/80 group-hover:text-white/90 italic mb-8 text-sm sm:text-base lg:text-lg leading-relaxed transition-colors duration-500">
                                            "From the initial free estimate to the final bespoke shed build, the attention to detail was exceptional. I highly recommend this family-run business!"
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-full bg-brand-dark/10 group-hover:bg-white/20 flex items-center justify-center transition-colors duration-500">
                                            <span class="font-heading font-bold text-brand-dark group-hover:text-white text-sm">RH</span>
                                        </div>
                                        <p class="font-body font-bold text-brand-dark text-sm lg:text-base group-hover:text-white transition-colors duration-500">
                                            R. Hughes, Kent
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const reviewWrappers = document.querySelectorAll('.review-scrolling-wrapper');
            reviewWrappers.forEach(wrapper => {
                const track = wrapper.querySelector('.review-scrolling-track');
                if (track) {
                    wrapper.addEventListener('mouseenter', () => {
                        track.getAnimations().forEach(anim => { anim.playState = 'running'; anim.playbackRate = 0.25; });
                    });
                    wrapper.addEventListener('mouseleave', () => {
                        track.getAnimations().forEach(anim => { anim.playbackRate = 1; });
                    });
                }
            });
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

                        <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none">
                            <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                            <span class="relative z-10 transition-colors duration-500">Get in touch</span>
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
                                <span itemprop="text">We are based at 14 Castle View, Maidstone, and provide our landscaping and maintenance services throughout Maidstone (01622 685 255), Sevenoaks (01732 884 203), and the wider Kent area.</span>
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

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    Are you fully insured?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">Yes, Cyril Ernest Landscapes holds comprehensive public liability insurance. We prioritize safety and professionalism, giving you complete peace of mind while we work on your property.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    Do you use subcontractors for your landscaping projects?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">No. A core part of the Cyril Ernest Standard is that all of our work is carried out by our own dedicated, in-house team. This allows us to guarantee exceptional quality control and reliable service from start to finish.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    Can you help me design my garden from scratch?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">Absolutely. Tony brings extensive formal horticultural training to every project. We can create complete, bespoke garden design schemes and tailored planting plans that perfectly suit your property's soil, lighting, and your lifestyle.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    What materials do you use for patios and paving?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">We work with a wide variety of high-quality materials tailored to suit your aesthetic preferences and budget. This includes natural sandstone, modern and durable porcelain paving, and traditional block paving options.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    Are you qualified to do tree work?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">Yes, we provide professional arboriculture services. Our team is highly trained and experienced in handling everything from careful crown reductions and seasonal pruning to safe, complete tree dismantling and stump grinding.</span>
                            </div>
                        </details>

                        <details class="group border-b border-brand-dark/10" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <summary class="flex justify-between items-center cursor-pointer list-none py-8 md:py-10 pr-2" itemprop="name">
                                <span class="font-heading text-xl sm:text-2xl lg:text-3xl font-semibold text-brand-dark pr-6">
                                    How long does a typical landscaping project take?
                                </span>
                                <span class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white flex items-center justify-center text-brand-dark shadow-sm transition-transform duration-300 group-open:rotate-180">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                </span>
                            </summary>
                            <div class="text-brand-dark/70 pb-8 md:pb-10 text-base sm:text-lg lg:text-xl leading-relaxed pr-8 md:pr-12 animate-fade-in" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <span itemprop="text">The timeline depends entirely on the size, scale, and complexity of the project. During your initial free consultation, we will carefully assess your requirements and provide a clear, realistic timeframe alongside your estimate.</span>
                            </div>
                        </details>

                    </div>
                </div>

            </div>
        </div>
    </section>

<section
        class="relative py-20 flex items-center justify-center bg-brand-dark text-white overflow-hidden border-t border-white/5">

        <div
            class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#E74040_1px,transparent_1px)] [background-size:20px_20px]">
        </div>

        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8 w-full">

                <div class="w-full lg:w-3/12 reveal reveal-up order-2 lg:order-1 flex justify-center lg:justify-start">
                    <div
                        class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="assets/imgs/beautiful-garden-patio.jpg"
                            alt="A freshly paved patio and landscaped garden" loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>

                <div
                    class="w-full lg:w-6/12 text-center reveal reveal-up order-1 lg:order-2 flex flex-col items-center">

                    <h2
                        class="font-heading text-4xl sm:text-5xl md:text-6xl font-semibold text-white leading-tight mb-4">
                        Ready to Revitalize Your Outdoor Space?
                    </h2>

                    <p
                        class="font-body text-base sm:text-lg md:text-xl text-white/80 mb-10 max-w-md mx-auto leading-relaxed mt-2">
                        Contact us today for a free estimate and expert horticultural advice. Let Tony and the team at
                        Cyril Ernest Landscapes build the garden of your dreams.
                    </p>

                    <a href="contact.php"
                        class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none text-white shadow-[0_0_20px_rgba(231,64,64,0.3)]">
                        <span
                            class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500 group-hover:text-brand-dark">Claim
                            Your FREE Quote</span>
                        <span
                            class="relative z-10 w-10 h-10 bg-white rounded-full flex items-center justify-center transition-colors duration-700 group-hover:bg-brand-dark">
                            <svg class="w-5 h-5 text-[#E74040] -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0 group-hover:text-white"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-3/12 reveal reveal-up order-3 flex justify-center lg:justify-end mt-0 lg:mt-16"
                    style="transition-delay: 200ms;">
                    <div
                        class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="assets/imgs/garden-decking-fencing.jpg" alt="High quality timber decking and fencing"
                            loading="lazy"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<style>
    details>summary::-webkit-details-marker { display: none; }
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // 1. Before/After Slider Logic
        const sliders = document.querySelectorAll('.ba-slider');
        sliders.forEach(slider => {
            const beforeImage = slider.querySelector('.ba-before');
            const handle = slider.querySelector('.ba-handle');
            let isDragging = false;

            const updateSlider = (e) => {
                if (!isDragging) return;
                const rect = slider.getBoundingClientRect();
                let clientX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
                let xPos = clientX - rect.left;
                if (xPos < 0) xPos = 0;
                if (xPos > rect.width) xPos = rect.width;
                const percentage = (xPos / rect.width) * 100;
                beforeImage.style.clipPath = `polygon(0 0, ${percentage}% 0, ${percentage}% 100%, 0 100%)`;
                handle.style.left = `${percentage}%`;
            };

            slider.addEventListener('mousedown', () => isDragging = true);
            window.addEventListener('mouseup', () => isDragging = false);
            window.addEventListener('mousemove', updateSlider);
            slider.addEventListener('touchstart', () => isDragging = true, { passive: true });
            window.addEventListener('touchend', () => isDragging = false);
            window.addEventListener('touchmove', updateSlider, { passive: true });
        });
    });
</script>

<?php include 'components/footer.php'; ?>