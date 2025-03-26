<header class="sticky top-0 z-50 glass-effect border-b border-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="index.php" class="flex items-center group">
                    <img src="assets/images/clidenta-logo.png" alt="Clidenta Logo" class="mt-2 h-10 w-auto">
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="index.php" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50">
                    Home
                </a>
                
                <!-- About Dropdown -->
                <div class="dropdown relative group">
                    <a href="about.php" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50 flex items-center">
                        About
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-content absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="about.php" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">About Us</a>
                        <a href="smile-gallery.php" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Smile Gallery</a>
                    </div>
                </div>
                
                <!-- Services Dropdown -->
                <div class="dropdown relative group">
                    <a href="services.php" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50 flex items-center">
                        Services
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-content absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="services.php#general-dentistry" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">General Dentistry</a>
                        <a href="services.php#cosmetic-dentistry" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Cosmetic Dentistry</a>
                        <a href="services.php#implants" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Dental Implants</a>
                        <a href="services.php#whitening" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Teeth Whitening</a>
                        <a href="services.php#crowns" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Zirconium Crowns</a>
                        <a href="services.php#kids" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Kids Dentistry</a>
                    </div>
                </div>
                
                <a href="finances.php" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50">
                    Finances
                </a>
                
                <a href="contact.php" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50">
                    Contact
                </a>
            </nav>
            
            <!-- CTA Button -->
            <div class="hidden md:flex">
                <a href="tel:5456144" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all overflow-hidden group mr-4">
                    <span class="relative z-10">(07) 5456 1144</span>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
                </a>
                <a href="appointment.php" class="relative inline-flex items-center px-4 py-2 border border-primary-600 text-sm font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all overflow-hidden group">
                    <span class="relative z-10">Book an Appointment</span>
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-secondary-600 hover:text-primary-600 hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500 transition-all">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile menu, show/hide based on menu state -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-primary-50 hover:text-primary-600 transition-all">Home</a>
            
            <div class="block px-3 py-2 font-medium">
                <div class="flex justify-between items-center" id="about-mobile-toggle">
                    <span class="text-secondary-700">About</span>
                    <svg class="h-4 w-4 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="hidden pl-4 mt-2 space-y-1" id="about-mobile-menu">
                    <a href="about.php" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">About Us</a>
                    <a href="smile-gallery.php" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Smile Gallery</a>
                </div>
            </div>
            
            <div class="block px-3 py-2 font-medium">
                <div class="flex justify-between items-center" id="services-mobile-toggle">
                    <span class="text-secondary-700">Services</span>
                    <svg class="h-4 w-4 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="hidden pl-4 mt-2 space-y-1" id="services-mobile-menu">
                    <a href="services.php#general-dentistry" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">General Dentistry</a>
                    <a href="services.php#cosmetic-dentistry" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Cosmetic Dentistry</a>
                    <a href="services.php#implants" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Dental Implants</a>
                    <a href="services.php#whitening" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Teeth Whitening</a>
                    <a href="services.php#crowns" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Zirconium Crowns</a>
                    <a href="services.php#kids" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Kids Dentistry</a>
                </div>
            </div>
            
            <a href="finances.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-primary-50 hover:text-primary-600 transition-all">Finances</a>
            <a href="contact.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-primary-50 hover:text-primary-600 transition-all">Contact</a>
            <div class="flex flex-col space-y-2 mt-3 px-3">
                <a href="tel:5456144" class="block py-2 rounded-md text-base font-medium text-white bg-gradient-primary hover:bg-primary-700 text-center transition-all">(07) 5456 1144</a>
                <a href="appointment.php" class="block py-2 rounded-md text-base font-medium border border-primary-600 text-primary-600 hover:bg-primary-50 text-center transition-all">Book an Appointment</a>
            </div>
        </div>
    </div>
</header>

<!-- Add custom styles for the improved dropdown behavior -->
<style>
    /* Ensure dropdown content is accessible when hovering over it */
    .dropdown:hover .dropdown-content,
    .dropdown-content:hover {
        display: block;
        opacity: 1;
        visibility: visible;
    }
    
    /* Add a slight delay on dropdown hiding for better usability */
    .dropdown-content {
        transition: opacity 0.3s, visibility 0.3s;
    }
</style>

<!-- Mobile menu JavaScript -->
<script>
    // Mobile menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Mobile dropdown toggles
        const aboutMobileToggle = document.getElementById('about-mobile-toggle');
        const aboutMobileMenu = document.getElementById('about-mobile-menu');
        const servicesMobileToggle = document.getElementById('services-mobile-toggle');
        const servicesMobileMenu = document.getElementById('services-mobile-menu');
        
        if (aboutMobileToggle && aboutMobileMenu) {
            aboutMobileToggle.addEventListener('click', function() {
                aboutMobileMenu.classList.toggle('hidden');
            });
        }
        
        if (servicesMobileToggle && servicesMobileMenu) {
            servicesMobileToggle.addEventListener('click', function() {
                servicesMobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
