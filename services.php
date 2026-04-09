<?php
// DYNAMIC SEO VARIABLES
$pageTitle = "Our Comprehensive Landscaping Services | Cyril Ernest Landscapes";
$pageDesc = "Explore our premium landscaping services in Kent, including garden design, paving, maintenance, garden rooms, tree work, and driveway installation.";
include 'components/header.php';
?>

<main>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": [
        "Garden Design", 
        "Garden Landscaping", 
        "Paving & Patios", 
        "Walling", 
        "Fencing", 
        "Decking & Pergolas", 
        "Garden Rooms", 
        "Bespoke Shed Builds", 
        "Turfing & Artificial Lawns", 
        "Lawn Treatments", 
        "Garden Maintenance", 
        "Arboriculture & Tree Work", 
        "Driveways", 
        "Planting Plans & Horticultural Advice"
      ],
      "provider": {
        "@type": "HomeAndConstructionBusiness",
        "@id": "https://cyrilernest.co.uk/services.php",
        "name": "Cyril Ernest Landscapes"
      },
      "areaServed": [
        {
          "@type": "City",
          "name": "Maidstone"
        },
        {
          "@type": "City",
          "name": "Sevenoaks"
        },
        {
          "@type": "State",
          "name": "Kent"
        }
      ],
      "description": "Premium garden design, landscaping, maintenance, and tree work services across Kent."
    }
    </script>

    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 flex items-center justify-center overflow-hidden bg-brand-dark">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20 text-center text-white reveal reveal-up flex flex-col items-center">

            <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                Our Services
            </span>

            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal leading-tight relative pb-6 flex flex-col items-center">
                Comprehensive Landscaping & Maintenance
                <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
            </h1>
            
            <p class="font-body text-lg lg:text-xl text-white/80 leading-relaxed max-w-2xl mt-6">
                All of our services are delivered in-house with the same commitment to quality, attention to detail, and absolute customer satisfaction.
            </p>

        </div>

        <div class="absolute inset-0 opacity-20 pointer-events-none bg-[radial-gradient(#E74040_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
    </section>

    <section id="garden-design" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/Tony Best Pictures/Garden Design/garden_design_1.webp" alt="Bespoke Garden Design Concept"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 1
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Garden Design
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        A beautiful outdoor space begins with an exceptional design. We work closely with you to understand your vision, transforming your ideas into a practical, breathtaking design scheme tailored perfectly to your property's dimensions and lifestyle needs.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Comprehensive Site Assessment
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Conceptual Layout Planning
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Material & Feature Selection
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="garden-landscaping" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-y border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/imgs/garden-design-paving.jpg" alt="Garden Landscaping in Progress"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 2
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Garden Landscaping
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Our complete landscaping service handles every aspect of your garden's revitalization. By managing all groundworks, hardscaping, and softscaping in-house, we ensure a seamless process and a flawless finish that stands the test of time.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Complete Garden Makeovers
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Professional Groundworks & Clearance
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Seamless Hard/Softscaping Integration
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="patios-paving" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/Tony Best Pictures/Patios/patios_after_1.webp" alt="Beautifully paved garden patio"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 3
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Paving & Patios
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Create the ultimate outdoor entertainment area. We install high-quality patios and paths using a wide range of materials, ensuring a solid foundation and precise pointing for a durable, stunning finish.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Natural Stone & Sandstone
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Modern Porcelain Paving
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Custom Patio Design & Laying
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="walling" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-t border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
             <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/Tony Best Pictures/Walling/walling_1.webp" alt="Brickwork and retaining walls"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 4
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Walling & Brickwork
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Add dimension, structure, and security to your landscape. Our expert bricklayers construct beautiful decorative walls, sturdy retaining walls for terraced gardens, and custom brick borders to frame your planting beds perfectly.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Structural Retaining Walls
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Decorative Garden Brickwork
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Boundary & Privacy Walls
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="fencing" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/Tony Best Pictures/Fencing/fencing_2.webp" alt="High quality timber fencing installation"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 5
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Fencing Solutions
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Secure your property while enhancing its aesthetic appeal. We supply and install a wide variety of strong, weather-resistant fencing solutions—from traditional feather-edge panels to decorative trellis work and custom gates.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Privacy & Security Fencing
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Decorative Trellis & Screens
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Custom Timber Gates
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="decking" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-y border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/Tony Best Pictures/Decking/decking_3.webp" alt="Decking and Pergola Construction"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 6
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Decking
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Whether you prefer traditional timber or modern, low-maintenance composite materials, we build robust decking areas to expand your living space. We also hand-build stunning pergolas to provide vertical interest and perfect spaces for climbing plants.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Hardwood & Softwood Decking
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Modern Composite Decking Solutions
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Bespoke Timber Pergolas
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="garden-rooms" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/imgs/bespoke-garden-rooms.jpg" alt="Bespoke Garden Room Installation"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 7
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Garden Rooms
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Unlock the potential of your garden with a fully insulated, bespoke garden room. Whether you need a peaceful home office, a home gym, or a relaxing summerhouse retreat, we design and construct premium outdoor buildings tailored to your lifestyle.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Fully Insulated Outdoor Offices
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Custom Garden Studios & Retreats
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Complete Construction In-House
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="shed-builds" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-y border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/Tony Best Pictures/Garden Sheds/garden_sheds_1.webp" alt="Custom built timber shed"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 8
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Bespoke Shed Builds
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Standard store-bought sheds rarely fit your exact needs or the unique shape of your garden. We build bespoke sheds and custom garden features to perfectly fit awkward spaces, providing durable, heavy-duty storage exactly where you need it.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Custom Dimensions & Shapes
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Heavy-Duty Timber Construction
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Unique Garden Storage Features
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="turfing" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/imgs/slideshow2.jpg" alt="Freshly laid natural turf lawn"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 9
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Turfing & Artificial Lawns
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        We provide complete ground preparation and installation for both lush, natural turf and high-grade, low-maintenance artificial lawns. Let us give your garden the perfect, vibrant green centerpiece it deserves.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Professional Ground Preparation
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Premium Natural Turf Sourcing
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Realistic Artificial Lawn Installation
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="lawn-treatments" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-y border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/Tony Best Pictures\Lawn Installation & Treatments\Lawn_Installation_&_Treatments_2.webp" alt="Healthy treated green lawn"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 10
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Lawn Treatments
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        A beautiful lawn requires ongoing care and specialized treatments. We provide expert seasonal feeding, weed control, scarification, and aeration to ensure your grass stays healthy, thick, and deeply green all year long.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Seasonal Fertilization & Feeding
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Moss & Weed Control
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Aeration & Scarification
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="garden-maintenance" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/Tony Best Pictures/Garden Maintenance (mowing _ hedge trimming)/garden_maintenance_9.webp" alt="Commercial and Private Garden Maintenance"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 11
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Garden Maintenance
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Enjoy your outdoor space without the hard work. We offer comprehensive, reliable garden maintenance contracts for both private residential gardens and large commercial properties to keep your grounds looking immaculate.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Private & Commercial Contracts
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Regular Pruning & Hedge Trimming
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Seasonal Clean-ups & Clearances
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="arboriculture" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-y border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/imgs/tree-work-arboriculture.jpg" alt="Professional Tree Work and Arboriculture"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 12
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Arboriculture & Tree Work
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Tree management requires a highly trained approach to preserve plant health and property safety. We undertake professional arboriculture work safely, skillfully, and with the utmost respect for the natural environment.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Safe Tree Felling & Dismantling
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Crown Reductions & Thinning
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Stump Grinding & Removal
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="driveways" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-brand-beige overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group">
                        <img src="assets/Tony Best Pictures/General/general_after_3.webp" alt="Professional Driveway Installation"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 13
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Driveways
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Boost your property's curb appeal from the moment you pull up. We install long-lasting, beautifully laid driveways, managing everything from deep structural groundworks and proper drainage to the final decorative finish.
                    </p>
                    <div class="bg-white/40 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Block Paving Solutions
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Resin Bound & Gravel Driveways
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Comprehensive Groundworks & Drainage
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

    <section id="horticultural-advice" class="relative min-h-[100svh] py-16 flex items-center justify-center bg-white border-t border-brand-dark/5 overflow-hidden">
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
             <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-16 reveal reveal-up">
                <div class="lg:w-1/2 w-full">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-brand-beige group">
                        <img src="assets/Tony Best Pictures/Bespoke Planting Plans/planting_2.webp" alt="Expert Horticultural Advice and Planting"
                            class="w-full h-80 md:h-[650px] object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Service 14
                    </span>
                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Planting Plans & Expert Advice
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>
                    <p class="font-body text-lg lg:text-xl text-brand-text/80 leading-relaxed mb-10 max-w-2xl">
                        Armed with formal college training and over 30 years of practical experience, Tony provides expert horticultural advice. We create intricate planting plans designed to thrive in your specific soil and light conditions, delivering stunning seasonal color.
                    </p>
                    <div class="bg-brand-beige/50 border border-brand-dark/5 p-8 rounded-3xl mb-10 shadow-sm w-full max-w-xl">
                        <ul class="space-y-4 font-body text-lg text-brand-text/80">
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Deep Horticultural Knowledge
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Detailed Seasonal Planting Plans
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="w-2 h-2 bg-[#E74040] rounded-full"></div> Specimen Plant Sourcing
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-brand-dark text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-[#E74040] rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
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

<section class="relative min-h-[100svh] py-16 md:py-24 flex items-center justify-center bg-brand-beige text-brand-dark overflow-hidden border-t border-brand-dark/10">
        
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20 reveal reveal-up">

                <div class="w-full lg:w-1/2 flex flex-col items-center text-center lg:items-start lg:text-left">
                    <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                        Share Your Experience
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark mb-8 leading-tight relative pb-6 flex flex-col items-center lg:items-start">
                        Leave Us a Review
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                    </h2>

                    <p class="font-body text-lg lg:text-xl text-brand-dark/80 leading-relaxed mb-10 max-w-2xl">
                        As a family-run business with over 30 years in the industry, our reputation means everything to us. If you're happy with the quality, attention to detail, and customer service we provided, please take a moment to leave a review.
                    </p>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 shadow-xl border-none">
                        <span class="absolute right-2.5 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500 group-hover:text-white">Write a Review</span>
                        <span class="relative z-10 w-10 h-10 bg-brand-dark rounded-full flex items-center justify-center text-white transition-colors duration-700 group-hover:bg-transparent">
                            <svg class="w-5 h-5 -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
                    <div class="relative group p-8 md:p-12 bg-[#E74040] rounded-[2.5rem] shadow-xl transition-all duration-500 border border-[#E74040]">
                        <div class="flex justify-center text-yellow-400 mb-6 text-2xl gap-1">
                            ★★★★★
                        </div>

                        <div class="p-2 md:p-4 rounded-[1.5rem] mb-6 relative z-10 flex items-center justify-center border border-white/10">
                            <img src="assets/imgs/qrcode.png" alt="Scan to leave a Google Review"
                                class="w-48 h-48 md:w-64 md:h-64 object-contain mx-auto rounded-xl">
                        </div>

                        <div class="text-center">
                            <p class="font-heading text-2xl font-bold text-white mb-2">Scan to Review</p>
                            <p class="font-body text-white/80 text-sm uppercase tracking-widest font-bold">Open camera on your phone</p>
                        </div>

                        <div class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-brand-dark opacity-10 rounded-full blur-3xl"></div>
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

<?php include 'components/footer.php'; ?>