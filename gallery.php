<?php
// DYNAMIC SEO VARIABLES
$pageTitle = "Project Gallery | Cyril Ernest Landscapes | Kent";
$pageDesc = "Browse our portfolio of bespoke garden landscaping, patio laying, and tree work projects. See real before and after transformations across Maidstone and Kent.";
include 'components/header.php';

// Define the services array for the dynamic submenu
$services = [
    'general' => ['name' => 'General', 'folder' => 'General'],
    'garden-design' => ['name' => 'Garden Design', 'folder' => 'Garden Design'],
    'bespoke-planting' => ['name' => 'Bespoke Planting', 'folder' => 'Bespoke Planting Plans'],
    'paving-driveways' => ['name' => 'Paving & Driveways', 'folder' => 'Paving & Driveways'],
    'patios' => ['name' => 'Patios', 'folder' => 'Patios'],
    'walling' => ['name' => 'Walling', 'folder' => 'Walling'],
    'decking' => ['name' => 'Decking', 'folder' => 'Decking'],
    'fencing' => ['name' => 'Fencing', 'folder' => 'Fencing'],
    'garden-rooms' => ['name' => 'Garden Rooms', 'folder' => 'Garden Rooms & Pergolas'],
    'garden-sheds' => ['name' => 'Garden Sheds', 'folder' => 'Garden Sheds'],
    'lawn-installation' => ['name' => 'Lawn Installation', 'folder' => 'Lawn Installation & Treatments'],
    'commercial-maintenance' => ['name' => 'Commercial Maintenance', 'folder' => 'Commercial Garden Mainetenance'],
    'garden-maintenance' => ['name' => 'Garden Maintenance', 'folder' => 'Garden Maintenance (mowing _ hedge tr...'],
    'tree-work' => ['name' => 'Tree Work', 'folder' => 'Tree Work'],
    'team' => ['name' => 'Our Team', 'folder' => 'AA - Tony + Team']
];

// Determine the active category based on URL parameter, default to 'general'
$activeCategory = isset($_GET['category']) && array_key_exists($_GET['category'], $services) ? $_GET['category'] : 'general';
$activeFolder = $services[$activeCategory]['folder'];
$activeName = $services[$activeCategory]['name'];

?>
<style>
    /* On gallery page, header text is dark when at top (beige bg, no hero image) */
    #site-header.gallery-dark-nav,
    #site-header.gallery-dark-nav nav a,
    #site-header.gallery-dark-nav #menuBtn {
        color: var(--color-brand-dark) !important;
    }
    /* Hover color on nav links when dark nav is active using dynamic variable */
    #site-header.gallery-dark-nav nav a:hover,
    #site-header.gallery-dark-nav #menuBtn:hover {
        color: var(--color-brand-accent) !important;
    }
    
    /* Hide scrollbar for the horizontal menu but keep functionality */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .hide-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('site-header');
        const logo = document.getElementById('header-logo');
        
        const syncGalleryNav = () => {
            if (window.scrollY <= 50) {
                header.classList.add('gallery-dark-nav');
                if(logo) logo.src = '/assets/imgs/logo-dark.png';
            } else {
                header.classList.remove('gallery-dark-nav');
            }
        };
        syncGalleryNav();
        window.addEventListener('scroll', syncGalleryNav);
    });
</script>
<main>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ImageGallery",
      "name": "Cyril Ernest Landscapes Portfolio",
      "description": "A collection of before and after transformations, paving, decking, and landscaping projects in Maidstone and Kent.",
      "provider": {
        "@type": "HomeAndConstructionBusiness",
        "@id": "https://cyrilernest.co.uk/gallery.php",
        "name": "Cyril Ernest Landscapes"
      }
    }
    </script>
    
    <section class="relative min-h-[100svh] pt-32 pb-16 md:pt-40 md:pb-24 flex flex-col items-center bg-brand-beige overflow-hidden">
        

        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-20 flex-grow flex flex-col">
            <div class="text-center mb-12 md:mb-16 reveal reveal-up flex flex-col items-center">
                <span class="inline-block px-5 py-1.5 bg-[#E74040] text-white border border-[#E74040] rounded-full text-sm tracking-widest uppercase mb-6 font-normal">
                    Project Gallery
                </span>
                <h2 class="font-heading text-4xl md:text-5xl lg:text-6xl font-normal text-brand-dark leading-tight relative pb-6 flex flex-col items-center">
                    <?php echo $activeName; ?> Projects
                    <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-16 md:w-20 h-[3px] md:h-[4px] bg-[#E74040] rounded-full"></span>
                </h2>
                <p class="font-body text-lg lg:text-xl text-brand-text/70 mt-6 max-w-3xl mx-auto">
                    Browse our recent <?php echo strtolower($activeName); ?> work. See the level of detail and craftsmanship we bring to every property across Kent.
                </p>
            </div>
            
        <div class="w-full max-w-[98rem] mx-auto px-4 sm:px-6 lg:px-10 relative z-30 mb-8">
            <div class="bg-white rounded-full shadow-md border border-brand-dark/5 p-2 overflow-x-auto hide-scrollbar">
                <ul class="flex items-center gap-2 w-max min-w-full justify-start lg:justify-center px-2">
                    <?php foreach ($services as $key => $data): ?>
                        <li>
                            <a href="?category=<?php echo $key; ?>" 
                               class="block px-4 py-2 rounded-full font-body text-sm md:text-base font-semibold transition-all duration-300 whitespace-nowrap
                               <?php echo $activeCategory === $key ? 'bg-[#E74040] text-white shadow-md' : 'text-brand-dark/70 hover:bg-gray-100 hover:text-brand-dark'; ?>">
                               <?php echo $data['name']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 md:gap-16 mb-16 flex-grow">
                
                <div class="reveal reveal-up flex flex-col items-center">
                    <div class="ba-slider touch-pan-y relative w-full aspect-[4/5] rounded-[2.5rem] overflow-hidden cursor-ew-resize shadow-2xl border-2 border-white/50 group mb-8">
                        <img src="assets/imgs/garden-makeover-after.jpg" alt="Completed <?php echo $activeName; ?> project" loading="lazy" decoding="async" class="absolute inset-0 w-full h-full object-cover pointer-events-none">
                       
                        <img src="assets/imgs/garden-makeover-before.jpg" alt="Site before <?php echo $activeName; ?> project" loading="lazy" decoding="async" class="ba-before absolute inset-0 w-full h-full object-cover pointer-events-none shadow-[2px_0_10px_rgba(0,0,0,0.5)]" style="clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);">
                        <div class="ba-handle absolute top-0 bottom-0 left-[50%] w-1.5 bg-white shadow-[0_0_15px_rgba(0,0,0,0.8)] pointer-events-none -ml-[3px] flex items-center justify-center">
                            <div class="w-12 h-12 bg-white rounded-full shadow-2xl border border-gray-100 flex items-center justify-center text-brand-dark transition-transform group-hover:scale-110">
                                <svg aria-hidden="true" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l-3 3m0 0l3 3m-3-3h14m0 0l-3-3m3 3l-3 3"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="absolute bottom-6 left-6 bg-black/60 backdrop-blur-sm text-white px-4 py-1.5 rounded-full text-xs font-bold tracking-widest font-body uppercase pointer-events-none">Before</div>
                        <div class="absolute bottom-6 right-6 bg-[#E74040]/80 backdrop-blur-sm text-white px-4 py-1.5 rounded-full text-xs font-bold tracking-widest font-body uppercase pointer-events-none">After</div>
                    </div>
                    <h3 class="font-heading text-2xl md:text-3xl font-normal text-brand-dark text-center">Complete Transformation</h3>
                    <p class="font-body text-base md:text-lg text-brand-text/70 text-center mt-3 px-4">Overgrown garden cleared and fully revitalized.</p>
                </div>
                
                <div class="reveal reveal-up flex flex-col items-center" style="transition-delay: 100ms;">
                    <button class="gallery-item w-full aspect-[4/5] relative block rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group mb-8 cursor-pointer focus:outline-none"
                        aria-label="View larger image of <?php echo $activeName; ?> Project"
                        data-src="assets/imgs/beautiful-garden-patio.jpg" data-caption="High quality paving and landscaping finish">
                        <img src="assets/imgs/beautiful-garden-patio.jpg" alt="<?php echo $activeName; ?> Project Detail" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                            <h3 class="text-white font-heading text-xl font-bold translate-y-2 group-hover:translate-y-0 transition-transform duration-500">View Detail</h3>
                        </div>
                    </button>
                    <h3 class="font-heading text-2xl md:text-3xl font-normal text-brand-dark text-center">High Quality Finish</h3>
                    <p class="font-body text-base md:text-lg text-brand-text/70 text-center mt-3 px-4">Meticulous attention to detail in every aspect.</p>
                </div>

                <div class="reveal reveal-up flex flex-col items-center" style="transition-delay: 200ms;">
                    <button class="gallery-item w-full aspect-[4/5] relative block rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white/50 group mb-8 cursor-pointer focus:outline-none"
                        aria-label="View larger image of <?php echo $activeName; ?> Feature"
                        data-src="assets/imgs/garden-design-paving.jpg" data-caption="Expert groundworks and hardscaping">
                        <img src="assets/imgs/garden-design-paving.jpg" alt="<?php echo $activeName; ?> Project Feature" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                            <h3 class="text-white font-heading text-xl font-bold translate-y-2 group-hover:translate-y-0 transition-transform duration-500">View Detail</h3>
                        </div>
                    </button>
                    <h3 class="font-heading text-2xl md:text-3xl font-normal text-brand-dark text-center">Structural Integrity</h3>
                    <p class="font-body text-base md:text-lg text-brand-text/70 text-center mt-3 px-4">Built to last by our in-house experts.</p>
                </div>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6 auto-rows-[250px] mb-16">
                <button class="gallery-item md:col-span-2 md:row-span-2 group relative block rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 w-full h-full cursor-pointer focus:outline-none text-left reveal reveal-up"
                    aria-label="View larger image"
                    data-src="assets/imgs/bespoke-garden-rooms.jpg" data-caption="Bespoke garden room construction">
                    <img src="assets/imgs/bespoke-garden-rooms.jpg" alt="Bespoke Garden Room" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-brand-dark/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6 md:p-8">
                        <span class="text-[#E74040] font-body text-xs font-bold tracking-widest uppercase mb-1"><?php echo $activeName; ?></span>
                        <h3 class="text-white font-heading text-2xl md:text-3xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Custom Builds</h3>
                    </div>
                </button>
                <button class="gallery-item md:col-span-1 md:row-span-1 group relative block rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 w-full h-full cursor-pointer focus:outline-none text-left reveal reveal-up"
                    aria-label="View larger image" style="transition-delay: 100ms;"
                    data-src="assets/imgs/garden-decking-fencing.jpg" data-caption="Timber decking and fencing">
                    <img src="assets/imgs/garden-decking-fencing.jpg" alt="Decking and fencing" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-white font-heading text-lg font-bold translate-y-2 group-hover:translate-y-0 transition-transform duration-500">Timber Work</h3>
                    </div>
                </button>
                <button class="gallery-item md:col-span-1 md:row-span-1 group relative block rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 w-full h-full cursor-pointer focus:outline-none text-left reveal reveal-up"
                    aria-label="View larger image" style="transition-delay: 200ms;"
                    data-src="assets/imgs/tree-work-arboriculture.jpg" data-caption="Professional tree maintenance">
                    <img src="assets/imgs/tree-work-arboriculture.jpg" alt="Tree work" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                        <h3 class="text-white font-heading text-lg font-bold translate-y-2 group-hover:translate-y-0 transition-transform duration-500">Tree Work</h3>
                    </div>
                </button>
                 <button class="gallery-item md:col-span-2 md:row-span-1 group relative block rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 w-full h-full cursor-pointer focus:outline-none text-left reveal reveal-up"
                    aria-label="View larger image"
                    data-src="assets/imgs/commercial-garden-maintenance.jpg" data-caption="Lawn care and maintenance">
                    <img src="assets/imgs/commercial-garden-maintenance.jpg" alt="Garden maintenance" loading="lazy" decoding="async" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6 md:p-8">
                        <h3 class="text-white font-heading text-xl font-bold translate-y-4 group-hover:translate-y-0 transition-transform duration-500">Maintenance</h3>
                    </div>
                </button>
            </div>

            <div class="flex justify-center reveal reveal-up mt-4">
                <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] text-white font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none">
                    <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                    <span class="relative z-10 transition-colors duration-500">Get Your FREE Quote</span>
                    <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <section class="relative py-20 flex items-center justify-center bg-brand-dark text-white overflow-hidden border-t border-white/5">
        <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#E74040_1px,transparent_1px)] [background-size:20px_20px]"></div>
        
        <div class="w-full max-w-[96rem] mx-auto px-4 sm:px-8 lg:px-12 relative z-20">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8 w-full">
                <div class="w-full lg:w-3/12 reveal reveal-up order-2 lg:order-1 flex justify-center lg:justify-start">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="assets/imgs/beautiful-garden-patio.jpg" alt="A freshly paved patio and landscaped garden" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>
                <div class="w-full lg:w-6/12 text-center reveal reveal-up order-1 lg:order-2 flex flex-col items-center">
                    <h2 class="font-heading text-4xl sm:text-5xl md:text-6xl font-semibold text-white leading-tight mb-4">
                        Ready to Revitalize Your Outdoor Space?
                    </h2>
                    <p class="font-body text-base sm:text-lg md:text-xl text-white/80 mb-10 max-w-md mx-auto leading-relaxed mt-2">
                        Contact us today for a free estimate and expert horticultural advice. Let Tony and the team at Cyril Ernest Landscapes build the garden of your dreams.
                    </p>
                    <a href="contact.php" class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-[#E74040] font-body font-bold text-lg rounded-full overflow-hidden transition-transform duration-500 hover:scale-105 border-none text-white shadow-[0_0_20px_rgba(231,64,64,0.3)]">
                        <span class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>
                        <span class="relative z-10 transition-colors duration-500 group-hover:text-brand-dark">Claim Your FREE Quote</span>
                        <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white transition-colors duration-500 group-hover:text-[#E74040] -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 12h14m-6-6l6 6-6 6"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="w-full lg:w-3/12 reveal reveal-up order-3 flex justify-center lg:justify-end mt-0 lg:mt-16" style="transition-delay: 200ms;">
                    <div class="relative w-full max-w-sm lg:max-w-none h-[300px] lg:h-[400px] rounded-[2rem] overflow-hidden shadow-2xl border-2 border-white/10 group">
                        <img src="assets/imgs/garden-decking-fencing.jpg" alt="High quality timber decking and fencing" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="lightbox"
    class="fixed inset-0 z-[100] bg-brand-dark/95 backdrop-blur-md hidden opacity-0 transition-opacity duration-300 flex items-center justify-center"
    aria-modal="true" role="dialog">
    <button id="lightbox-close"
        class="absolute top-4 right-4 md:top-6 md:right-6 text-white hover:text-[#E74040] transition-colors focus:outline-none z-50 p-2 bg-black/20 rounded-full md:bg-transparent"
        aria-label="Close Lightbox">
        <svg aria-hidden="true" class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <button id="lightbox-prev"
        class="absolute left-2 md:left-6 top-1/2 -translate-y-1/2 text-white hover:text-[#E74040] transition-colors focus:outline-none p-2 z-50 bg-black/20 rounded-full md:bg-transparent"
        aria-label="Previous Image">
        <svg aria-hidden="true" class="w-8 h-8 md:w-12 md:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button id="lightbox-next"
        class="absolute right-2 md:right-6 top-1/2 -translate-y-1/2 text-white hover:text-[#E74040] transition-colors focus:outline-none p-2 z-50 bg-black/20 rounded-full md:bg-transparent"
        aria-label="Next Image">
        <svg aria-hidden="true" class="w-8 h-8 md:w-12 md:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
    <div class="relative w-full h-full flex flex-col items-center justify-center px-12 md:px-24 pointer-events-none">
        <img id="lightbox-img" src="" alt=""
            class="max-w-full max-h-[75vh] md:max-h-[85vh] object-contain rounded-xl shadow-2xl pointer-events-auto select-none">
        <p id="lightbox-caption"
            class="text-white font-body text-base md:text-lg mt-4 md:mt-6 text-center tracking-wide drop-shadow-md px-4">
        </p>
    </div>
</div>

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
        
        // 2. Lightbox Carousel Logic with Dynamic Alt Tags
        const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');
        let currentIndex = 0;
        
        const updateLightboxContent = (index) => {
            if (index < 0) index = galleryItems.length - 1;
            if (index >= galleryItems.length) index = 0;
            currentIndex = index;
            const item = galleryItems[currentIndex];
            const src = item.getAttribute('data-src');
            const caption = item.getAttribute('data-caption');
            
            // SEO FIX: Fetch the alt tag from the thumbnail
            const imgElement = item.querySelector('img');
            const altText = imgElement ? imgElement.getAttribute('alt') : 'Cyril Ernest Landscapes Project Photo';
            
            lightboxImg.src = src;
            lightboxImg.alt = altText;
            lightboxCaption.textContent = caption || '';
        };
        
        const openLightbox = (index) => {
            updateLightboxContent(index);
            lightbox.classList.remove('hidden');
            setTimeout(() => lightbox.classList.remove('opacity-0'), 10);
            document.body.style.overflow = 'hidden';
        };
        
        const closeLightbox = () => {
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightboxImg.src = '';
                lightboxImg.alt = '';
                document.body.style.overflow = '';
            }, 300);
        };
        
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                openLightbox(index);
            });
        });
        
        document.getElementById('lightbox-close').addEventListener('click', closeLightbox);
        document.getElementById('lightbox-next').addEventListener('click', (e) => {
            e.stopPropagation();
            updateLightboxContent(currentIndex + 1);
        });
        document.getElementById('lightbox-prev').addEventListener('click', (e) => {
            e.stopPropagation();
            updateLightboxContent(currentIndex - 1);
        });
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('hidden')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowRight') updateLightboxContent(currentIndex + 1);
                if (e.key === 'ArrowLeft') updateLightboxContent(currentIndex - 1);
            }
        });
    });
</script>
<?php include 'components/footer.php'; ?>