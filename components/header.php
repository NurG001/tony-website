<?php
// DYNAMIC SEO LOGIC
$siteName = "Cyril Ernest Landscapes";
$defaultDesc = "Bespoke garden landscaping, maintenance, garden rooms, and tree work in Maidstone and Kent. Over 30 years of family-run excellence.";

// Set dynamic title and description, or use defaults
$title = isset($pageTitle) ? $pageTitle . " | " . $siteName : "$siteName | Premium Landscaping in Kent";
$description = isset($pageDesc) ? $pageDesc : $defaultDesc;

// Generate Canonical URL to prevent duplicate content penalties
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>" />
    <link rel="canonical" href="<?php echo htmlspecialchars($currentUrl); ?>" />

    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo htmlspecialchars($currentUrl); ?>" />
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/imgs/logo-dark.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($description); ?>" />
    <meta name="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/imgs/logo-dark.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <style type="text/tailwindcss">
        @theme {
            --color-brand-dark: #1A1A1A;
            --color-brand-green: #16a34a;
            --color-brand-beige: #F8F9F4;
            --color-brand-text: #111827;
            --color-brand-accent: #E74040;
            
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Inter', sans-serif;
        }
        
        body { 
            font-family: var(--font-body); 
            background-color: var(--color-brand-beige); 
            color: var(--color-brand-text); 
        }
        h1, h2, h3, h4, h5, h6 { 
            font-family: var(--font-heading); 
        }

        img {
    filter: saturate(130%); /* Adjust this percentage to your liking */
}

/* Optional: Keep logos and QR codes looking natural */
#header-logo, .qr-code, img[src*="logo"], img[src*="qrcode"] {
    filter: saturate(1);
}
    </style>

    <link rel="stylesheet" href="/style.css">
</head>

<body class="flex flex-col min-h-screen bg-brand-beige text-brand-text antialiased">

    <header id="site-header"
        class="fixed w-full top-0 left-0 z-50 transition-all duration-300 bg-transparent text-white border-b border-transparent">
        <div id="header-container"
            class="container mx-auto px-4 md:px-8 py-5 md:py-6 flex justify-between items-center transition-all duration-300">

            <a href="/index.php" class="flex items-center group">
                <img id="header-logo" src="/assets/imgs/logo-light.png" alt="Cyril Ernest Landscapes Logo"
                    class="w-32 md:w-40 lg:w-48 h-auto object-contain transition-transform duration-300 group-hover:scale-105">
            </a>

            <nav class="hidden xl:flex items-center gap-8 font-body text-[17px] font-semibold tracking-wide">
                <a href="/about.php"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">About
                    Us</a>
                <a href="/services.php"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">Services</a>
                <a href="/gallery.php"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">Gallery</a>
                <a href="/index.php#faq"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">FAQs</a>

                <div class="flex items-center gap-8">
                    <a href="/contact.php"
                        class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">Contact</a>

                    <a href="https://maps.google.com/?q=14+Castle+View,+Maidstone,+Kent,+ME14+2BY" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-2 hover:text-brand-accent transition-all duration-300 hover:scale-105 group whitespace-nowrap">
                        Maidstone, Kent
                        <svg class="w-4 h-4 group-hover:-translate-y-1 transition-transform duration-300"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                        </svg>
                    </a>
                </div>
            </nav>

            <button id="menuBtn" aria-expanded="false" aria-controls="mobileNav"
                class="xl:hidden text-white focus:outline-none p-2 -mr-2" aria-label="Toggle Mobile Menu">
                <svg class="w-7 h-7 hover:text-brand-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div id="mobileNav"
            class="xl:hidden absolute top-full left-0 w-full px-4 pt-2 pb-6 transition-all duration-400 ease-out opacity-0 invisible -translate-y-4 pointer-events-none">
            <div
                class="bg-brand-beige border border-brand-dark/10 shadow-2xl rounded-2xl overflow-hidden">
                <div class="flex flex-col px-6 py-6 space-y-4 text-center font-body text-brand-dark">
                    <a href="/about.php"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">About Us</a>
                    <a href="/services.php"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">Services</a>
                    <a href="/gallery.php"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">Gallery</a>
                    <a href="/index.php#faq"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">FAQs</a>

                    <div class="pt-6 mt-2 border-t border-brand-dark/10">
                        <a href="/contact.php"
                            class="inline-block w-full px-8 py-3.5 bg-brand-accent text-white font-bold rounded-xl hover:bg-brand-dark transition-colors shadow-[0_0_15px_rgba(231,64,64,0.3)]">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('site-header');
            const container = document.getElementById('header-container');
            const mobileNav = document.getElementById('mobileNav');
            const menuBtn = document.getElementById('menuBtn');
            const headerLogo = document.getElementById('header-logo');
            
            // Listen for scroll events to toggle the navbar background
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    // Scrolled state (Beige background)
                    header.classList.remove('bg-transparent', 'border-transparent', 'text-white');
                    header.classList.add('bg-brand-beige', 'shadow-md', 'border-brand-dark/10', 'text-brand-dark');
                    container.classList.remove('py-5', 'md:py-6');
                    container.classList.add('py-2', 'md:py-3');
                    
                    // Switch to dark logo
                    headerLogo.src = '/assets/imgs/logo-dark.png';
                    
                    // Update mobile menu button color
                    menuBtn.classList.remove('text-white');
                    menuBtn.classList.add('text-brand-dark');
                } else {
                    // Top state (Transparent background)
                    header.classList.add('bg-transparent', 'border-transparent', 'text-white');
                    header.classList.remove('bg-brand-beige', 'shadow-md', 'border-brand-dark/10', 'text-brand-dark');
                    container.classList.add('py-5', 'md:py-6');
                    container.classList.remove('py-2', 'md:py-3');
                    
                    // Switch back to light logo
                    headerLogo.src = '/assets/imgs/logo-light.png';
                    
                    // Revert mobile menu button color
                    menuBtn.classList.remove('text-brand-dark');
                    menuBtn.classList.add('text-white');
                }
            });
            
            // Toggle Mobile Menu
            menuBtn.addEventListener('click', () => {
                const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
                menuBtn.setAttribute('aria-expanded', !isExpanded);
                
                if (isExpanded) {
                    mobileNav.classList.remove('opacity-100', 'translate-y-0', 'pointer-events-auto', 'visible');
                    mobileNav.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none', 'invisible');
                } else {
                    mobileNav.classList.add('opacity-100', 'translate-y-0', 'pointer-events-auto', 'visible');
                    mobileNav.classList.remove('opacity-0', '-translate-y-4', 'pointer-events-none', 'invisible');
                }
            });
        });
    </script>