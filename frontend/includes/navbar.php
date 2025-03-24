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
            <nav class="hidden md:flex space-x-1">
                <div class="dropdown">
                    <a href="#services" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50 flex items-center">
                        Services
                        <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="#implants" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Dental Implants</a>
                        <a href="#whitening" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Teeth Whitening</a>
                        <a href="#kids" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Kids Dentistry</a>
                        <a href="#rootcanal" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Root Canal Treatment</a>
                        <a href="#perio" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Periodontology</a>
                        <a href="#crowns" class="block px-4 py-2 text-sm text-secondary-700 hover:bg-primary-50 hover:text-primary-600">Zirconium Crowns</a>
                    </div>
                </div>
                <a href="#about" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50">About Us</a>
                <a href="#doctors" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50">Doctors</a>
                <a href="index.php#appointment" class="px-3 py-2 text-sm font-medium text-secondary-600 hover:text-primary-600 rounded-md transition-all hover:bg-primary-50">Contact</a>
            </nav>
            
            <!-- CTA Button -->
            <div class="hidden md:flex">
                <a href="index.php#appointment" class="relative inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all overflow-hidden group">
                    <span class="relative z-10">Book Appointment</span>
                    <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
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
            <div class="block px-3 py-2 font-medium">
                <div class="flex justify-between items-center" id="services-mobile-toggle">
                    <span class="text-secondary-700">Services</span>
                    <svg class="h-4 w-4 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <div class="hidden pl-4 mt-2 space-y-1" id="services-mobile-menu">
                    <a href="#implants" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Dental Implants</a>
                    <a href="#whitening" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Teeth Whitening</a>
                    <a href="#kids" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Kids Dentistry</a>
                    <a href="#rootcanal" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Root Canal Treatment</a>
                    <a href="#perio" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Periodontology</a>
                    <a href="#crowns" class="block py-2 text-sm text-secondary-600 hover:text-primary-600">Zirconium Crowns</a>
                </div>
            </div>
            <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-primary-50 hover:text-primary-600 transition-all">About Us</a>
            <a href="#doctors" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-primary-50 hover:text-primary-600 transition-all">Doctors</a>
            <a href="index.php#contact" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-primary-50 hover:text-primary-600 transition-all">Contact</a>
            <a href="index.php#appointment" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gradient-primary hover:bg-primary-700 transition-all mt-3">Book Appointment</a>
        </div>
    </div>
</header>

