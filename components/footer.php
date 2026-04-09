<footer class="bg-[#E74040] text-white mt-auto pt-20 pb-8 border-t border-white/5">
    <div class="container mx-auto px-6 max-w-[90rem]">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-8 items-start">

            <div class="flex flex-col items-center md:items-start gap-6 w-full">
                <img src="/assets/imgs/logo-light.png" alt="Cyril Ernest Landscapes Logo" loading="lazy"
                    class="w-48 md:w-56 h-auto object-contain">

                <a href="contact.php"
                    class="group relative inline-flex items-center justify-between gap-4 pl-6 pr-2 py-2 bg-white text-[#E74040] font-body font-bold text-lg rounded-full overflow-hidden transition-all duration-500 hover:scale-105 shadow-lg w-full sm:w-auto">
                    <span
                        class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-brand-dark rounded-full transition-transform duration-700 ease-[cubic-bezier(0.19,1,0.22,1)] group-hover:scale-[25] z-0"></span>

                    <span class="relative z-10 transition-colors duration-500 group-hover:text-white">Get a Free Quote</span>

                    <span class="relative z-10 w-10 h-10 flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#E74040] transition-colors duration-500 group-hover:text-white -rotate-45 transition-transform duration-500 ease-in-out group-hover:rotate-0"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M5 12h14m-6-6l6 6-6 6"></path>
                        </svg>
                    </span>
                </a>
            </div>

            <div class="flex flex-col items-center text-center gap-3 w-full">
                <h3 class="font-heading text-3xl lg:text-4xl font-semibold mb-2 text-white">Contact Tony</h3>
                <a href="mailto:info@cyrilernest.co.uk"
                    class="font-body text-base lg:text-lg text-white/90 hover:text-brand-dark transition-colors font-medium">info@cyrilernest.co.uk</a>
                <a href="tel:07772804627"
                    class="font-body text-base lg:text-lg text-white/90 hover:text-brand-dark transition-colors font-medium">07772 804627</a>
                <p class="font-body text-sm text-white/70 mt-2">14 Castle View, Maidstone, Kent</p>
            </div>

            <div class="flex flex-col items-center md:items-end w-full">
                <div class="flex flex-col items-center md:items-start w-fit">
                    <h3 class="font-heading text-3xl lg:text-4xl font-semibold mb-5 text-white">Quick links</h3>
                    <div
                        class="grid grid-cols-2 gap-x-12 gap-y-4 font-body text-base lg:text-lg text-white/90 font-medium text-left">
                        <a href="/" class="hover:text-brand-dark transition-colors">Home</a>
                        <a href="/#faq" class="hover:text-brand-dark transition-colors">FAQs</a>
                        <a href="/about.php" class="hover:text-brand-dark transition-colors">About Us</a>
                        <a href="/services.php" class="hover:text-brand-dark transition-colors">Services</a>
                        <a href="/gallery.php" class="hover:text-brand-dark transition-colors">Gallery</a>
                        <a href="/contact.php" class="hover:text-brand-dark transition-colors">Contact</a>
                    </div>
                </div>
            </div>

        </div>

        <hr class="border-white/20 my-12 w-full">

        <div
            class="flex flex-col md:flex-row justify-center items-center text-center font-body text-sm font-semibold text-white/90 gap-3 md:gap-4">
            <span>© <?php echo date("Y"); ?> Cyril Ernest Landscapes. All rights reserved.</span>
            <span class="hidden md:inline text-white/30">|</span>
            <span>Website design by <a href="https://onteksystems.com/" target="_blank" rel="noopener noreferrer"
                    class="hover:text-brand-dark underline underline-offset-4 transition-colors">Ontek Systems
                    Limited</a></span>
        </div>

    </div>
</footer>

<script src="/global.js"></script>
</body>

</html>