<?php
// DYNAMIC SEO LOGIC
$siteName = "M.V. Garden Services";
$defaultDesc = "Professional gardening, landscaping, and jet washing services in Hertfordshire by M.V. Garden Services.";

// Set dynamic title and description, or use defaults
$title = isset($pageTitle) ? $pageTitle . " | " . $siteName : "$siteName | Premium Landscaping in Hertfordshire";
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
    <meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/imgs/matts-garden.jpg" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($title); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($description); ?>" />
    <meta name="twitter:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/imgs/matts-garden.jpg" />

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
            --color-brand-dark: #1A2E24;
            --color-brand-green: #2C4C3B;
            --color-brand-beige: #F4F1EA;
            --color-brand-text: #111827;
            --color-brand-accent: #00E676;
            
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
    </style>

    <link rel="stylesheet" href="/style.css">
</head>

<body class="flex flex-col min-h-screen bg-brand-beige text-brand-text antialiased">

    <header id="site-header"
        class="fixed w-full top-0 left-0 z-50 transition-all duration-300 bg-transparent text-white border-b border-transparent">
        <div id="header-container"
            class="container mx-auto px-4 md:px-8 py-5 md:py-6 flex justify-between items-center transition-all duration-300">

            <a href="/index.php" class="flex items-center group">
                <img src="/assets/imgs/logo.png" alt="M.V. Garden Services Logo"
                    class="w-32 md:w-40 lg:w-48 h-auto object-contain transition-transform duration-300 group-hover:scale-105">
            </a>

            <nav class="hidden xl:flex items-center gap-8 font-body text-[17px] font-semibold tracking-wide">
                <a href="/about.php"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">About
                    Us</a>
                <a href="/services.php"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">Services</a>
                <a href="/gallery.php"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">Our
                    Works</a>
                <a href="/index.php#faq"
                    class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">FAQs</a>

                <div class="flex items-center gap-8">
                    <a href="/contact.php"
                        class="hover:text-brand-accent transition-all duration-300 hover:scale-105 whitespace-nowrap">Contact</a>

                    <a href="https://maps.google.com/?q=Hertfordshire,+UK" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-2 hover:text-brand-accent transition-all duration-300 hover:scale-105 group whitespace-nowrap">
                        Hertfordshire, UK
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
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <div id="mobileNav"
            class="xl:hidden absolute top-full left-0 w-full px-4 pt-2 pb-6 transition-all duration-400 ease-out opacity-0 invisible -translate-y-4 pointer-events-none">
            <div
                class="bg-brand-dark/95 backdrop-blur-xl border border-white/10 shadow-2xl rounded-2xl overflow-hidden">
                <div class="flex flex-col px-6 py-6 space-y-4 text-center font-body text-white">
                    <a href="/about.php"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">About Us</a>
                    <a href="/services.php"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">Services</a>
                    <a href="/gallery.php"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">Our Works</a>
                    <a href="/index.php#faq"
                        class="block py-2 text-lg font-medium hover:text-brand-accent transition-colors">FAQs</a>

                    <div class="pt-6 mt-2 border-t border-white/10">
                        <a href="/contact.php"
                            class="inline-block w-full px-8 py-3.5 bg-brand-accent text-brand-dark font-bold rounded-xl hover:bg-white transition-colors shadow-[0_0_15px_rgba(0,230,118,0.3)]">
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

            // Listen for scroll events to toggle the navbar background
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.remove('bg-transparent', 'border-transparent');
                    header.classList.add('bg-brand-dark/95', 'backdrop-blur-md', 'shadow-md', 'border-white/10');
                    container.classList.remove('py-5', 'md:py-6');
                    container.classList.add('py-2', 'md:py-3');
                } else {
                    header.classList.add('bg-transparent', 'border-transparent');
                    header.classList.remove('bg-brand-dark/95', 'backdrop-blur-md', 'shadow-md', 'border-white/10');
                    container.classList.add('py-5', 'md:py-6');
                    container.classList.remove('py-2', 'md:py-3');
                }
            });
        });
    </script>