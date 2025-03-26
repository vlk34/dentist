<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <!-- Hero Section (Retained from original) -->
    <section class="relative overflow-hidden bg-gradient">
        <!-- Add subtle pattern background -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="dental-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M0 20h40M20 0v40" stroke="#6B7280" stroke-width="0.5" fill="none" />
                        <circle cx="20" cy="20" r="2" fill="#4F46E5" opacity="0.2" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#dental-pattern)" />
            </svg>
        </div>
        
        <!-- Add soft gradient overlays with enhanced colors -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-2/3 h-2/3 bg-gradient-to-bl from-teal-100 to-transparent opacity-40"></div>
            <div class="absolute bottom-0 left-0 w-2/3 h-2/3 bg-gradient-to-tr from-emerald-200 to-transparent opacity-40"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="max-w-lg animate-slide-up">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-6">
                        <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                        Premium Dental Care in Istanbul
                    </div>
                    <h1 class="text-4xl md:text-5xl font-display font-bold tracking-tight text-secondary-900 mb-6 leading-tight">
                        Your <span class="text-gradient">perfect smile</span> is our priority
                    </h1>
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Experience exceptional dental care in Istanbul with our team of professionals dedicated to providing you with the highest quality treatments using the latest technology.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all group">
                            <span class="mr-2">Book Appointment</span>
                            <svg class="h-5 w-5 text-white group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="#services" class="inline-flex justify-center items-center px-6 py-3 border border-primary-200 text-base font-medium rounded-md text-primary-700 bg-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all">
                            Our Services
                        </a>
                    </div>
                </div>
                <div class="relative animate-slide-down">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-teal-100 rounded-full opacity-50 mix-blend-multiply filter blur-xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-emerald-200 rounded-full opacity-50 mix-blend-multiply filter blur-xl"></div>
                    
                    <div class="relative rounded-2xl overflow-hidden shadow-elegant">
                        <img src="assets/images/hero-img.jpeg" alt="Modern dental office" class="w-full h-auto object-cover">
                    </div>
                    
                    <div class="absolute -bottom-6 -left-6 glass-effect rounded-lg shadow-soft p-4 max-w-xs hidden md:block animate-fade-in">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-teal-600 rounded-full p-2">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-secondary-900">Trusted by over</p>
                                <p class="text-lg font-bold text-teal-600">1,230+ patients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-display font-bold text-secondary-900 mb-4">This Is What We Strive For</h2>
                <div class="w-20 h-1 bg-teal-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Stat 1 -->
                <div class="bg-white rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-5xl font-display font-bold text-teal-600 mb-2">25+</h3>
                    <p class="text-lg text-secondary-600 font-medium">Dental Practices</p>
                </div>
                
                <!-- Stat 2 -->
                <div class="bg-white rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-5xl font-display font-bold text-emerald-600 mb-2">5+</h3>
                    <p class="text-lg text-secondary-600 font-medium">Professionals</p>
                </div>
                
                <!-- Stat 3 -->
                <div class="bg-white rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-5xl font-display font-bold text-cyan-600 mb-2">1,230+</h3>
                    <p class="text-lg text-secondary-600 font-medium">Happy Customers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Dental Services Section -->
    <section id="services" class="py-16 bg-gradient-to-br from-teal-50 to-emerald-50 relative">
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="services-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M25,50 a25,25 0 1,1 50,0 a25,25 0 1,1 -50,0" stroke="#0D9488" stroke-width="0.5" fill="none" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#services-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    Our Expertise
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">Dental Services</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">Our comprehensive range of dental services to meet all your oral health needs.</p>
            </div>
            
            <!-- Services Categories -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Category 1: Dental Crowns -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal">
                    <div class="h-56 overflow-hidden">
                        <img src="assets/images/crown.jpeg" alt="Dental Crowns" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Dental Crowns</h3>
                        <p class="text-secondary-600 mb-4">Restore damaged teeth with dental crowns. Dental crowns are meticulously created to ensure your oral health while enhancing your smile's appearance.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Natural appearance</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Durable protection</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Custom-fitted</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-teal-600 hover:text-teal-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 2: Dental Implants -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="h-56 overflow-hidden">
                        <img src="assets/images/implant.jpg" alt="Dental Implants" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Dental Implants</h3>
                        <p class="text-secondary-600 mb-4">Restore both the function and aesthetics of your natural teeth with our advanced dental implant treatments. Our skilled dentists provide exceptional care.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Permanent solution</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Natural look and feel</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Improved oral health</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-emerald-600 hover:text-emerald-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 3: Composite Bonding -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="h-56 overflow-hidden">
                        <img src="assets/images/composite-bonding.jpg" alt="Composite Bonding" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Composite Bonding</h3>
                        <p class="text-secondary-600 mb-4">Address dental imperfections with composite bonding. This versatile technique offers seamless repairs, blending flawlessly with your natural teeth.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Minimally invasive</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Natural appearance</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Single visit treatment</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-cyan-600 hover:text-cyan-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- View All Services Button -->
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-teal-600 to-cyan-600 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all group">
                    <span class="mr-2">View All Services</span>
                    <svg class="h-5 w-5 text-white group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    About Us
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">Get to Know Clidenta</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">Your trusted partner for exceptional dental care in Istanbul</p>
            </div>
            
            <!-- About Clidenta Section -->
            <div id="about-clidenta" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="relative scroll-reveal">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-teal-100 rounded-full"></div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-emerald-100 rounded-full"></div>
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <img src="assets/images/20years.jpeg" alt="Dental team" class="w-full h-auto">
                    </div>
                </div>
                
                <div class="scroll-reveal" data-delay="100">
                    <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4">About Clidenta</h3>
                    <div class="space-y-4 text-secondary-600">
                        <p>Our staff participates in numerous trainings, courses, and seminars both in America and abroad. We use the best materials in our clinic. The work is carried out with maximum precision, on time, and according to international standards.</p>
                        
                        <p>At Clidenta with the latest technology, and a great team of dentists and specialists, you will get great, quality dental care. Our friendly dental clinic Clidenta, situated in the heart of Istanbul – Kadikoy with an incredible view of the Bosphorus.</p>
                        
                        <p>In addition to dental treatments, we provide services including free airport transfer and help with accommodation booking, even booking your sightseeing tours. We are happy to help!</p>
                    </div>
                </div>
            </div>
            
            <!-- Our Mission Section -->
            <div id="our-mission" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="scroll-reveal order-2 lg:order-1">
                    <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4">Our Mission</h3>
                    <div class="space-y-4 text-secondary-600">
                        <p>Our mission at Clidenta is to provide exceptional dental care that enhances the quality of life for our patients. We are committed to delivering personalized treatment plans that address each patient's unique needs and concerns.</p>
                        
                        <p>We strive to create a comfortable and welcoming environment where patients feel valued and respected. Our team is dedicated to staying at the forefront of dental technology and techniques to ensure the best possible outcomes for our patients.</p>
                        
                        <p>We believe that everyone deserves access to high-quality dental care, and we work tirelessly to make that a reality for our patients from around the world who choose to visit us in Istanbul.</p>
                    </div>
                </div>
                
                <div class="relative scroll-reveal order-1 lg:order-2" data-delay="100">
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-cyan-100 rounded-full"></div>
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-teal-100 rounded-full"></div>
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <img src="assets/images/mission.jpg" alt="Our mission" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-teal-600 to-cyan-600 relative">
        <div class="absolute inset-0 opacity-20">
            <!-- Soft curved lines pattern background -->
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="smile-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0,50 C20,30 50,0 100,50 C50,100 20,70 0,50 Z" stroke="white" stroke-width="0.5" fill="none" opacity="0.7" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#smile-pattern)" />
            </svg>
        </div>
        
        <!-- Add soft glowing accents -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-1/4 w-64 h-64 bg-teal-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 right-1/4 w-80 h-80 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">Transform Your Smile With Cosmetic Dentistry</h2>
                    <p class="text-lg text-teal-100 mb-8">Discover our selection of natural-looking cosmetic solutions designed just for you. Your journey to the smile you've always dreamed of begins here!</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-white text-sm font-medium rounded-md text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                            Teeth Whitening
                        </a>
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-white text-sm font-medium rounded-md text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                            Dental Crowns
                        </a>
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-white text-sm font-medium rounded-md text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                            Porcelain Veneers
                        </a>
                        <a href="#" class="inline-flex items-center px-4 py-2 border border-white text-sm font-medium rounded-md text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                            Dental Implants
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <img src="assets/images/cosmetic-1.jpg" alt="Cosmetic Dentistry" class="rounded-lg shadow-lg">
                    <img src="assets/images/original.jpeg" alt="Cosmetic Dentistry" class="rounded-lg shadow-lg mt-8">
                    <img src="assets/images/hero-img.jpeg" alt="Cosmetic Dentistry" class="rounded-lg shadow-lg">
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-teal-700 bg-white shadow-md hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                    Schedule An Appointment
                </a>
            </div>
        </div>
    </section>

    <!-- Additional Content Section (Payment Plans) -->
    <section id="finances" class="py-20 bg-gray-50 relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="assets/images/interest.jpeg" alt="Dental Payment Plans" class="rounded-xl shadow-elegant w-full">
                </div>
                <div>
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                        Flexible Financing
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-6">Interest-free Dental Payment Plans</h2>
                    <p class="text-lg text-secondary-600 mb-8">At Clidenta Dental, we are committed to ensuring that your dental health is both accessible and affordable. Our interest-free payment plans are thoughtfully designed to alleviate the financial burden associated with dental care, allowing you to receive the treatments you need and achieve the healthy, beautiful smile you deserve!</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all">
                            Book An Appointment
                        </a>
                        <a href="#contact" class="inline-flex justify-center items-center px-6 py-3 border border-primary-200 text-base font-medium rounded-md text-primary-700 bg-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking CTA Section -->
    <section class="py-16 bg-gradient-to-r from-emerald-600 to-teal-600 relative">
        <div class="absolute inset-0 opacity-20">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="booking-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                        <path d="M30 10C17.85 10 8 19.85 8 32s9.85 22 22 22 22-9.85 22-22S42.15 10 30 10zm0 40c-9.94 0-18-8.06-18-18s8.06-18 18-18 18 8.06 18 18-8.06 18-18 18z" fill="white" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#booking-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Unlock your perfect smile today</h2>
                <p class="text-lg text-teal-100 mb-8">Take the first step towards the smile you've always wanted. Our team of experienced professionals is ready to provide you with personalized care and exceptional results.</p>
                <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-teal-700 bg-white shadow-md hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                    Book your next visit
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    Testimonials
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">What our patients say</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">Hear from our satisfied patients about their experiences at Clidenta</p>
            </div>
            
            <!-- Testimonial Slider -->
            <div class="testimonial-slider relative">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/testimonial-1.jpg" alt="Patient" class="h-14 w-14 rounded-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-secondary-900">Sarah Johnson</h4>
                                        <div class="flex text-yellow-400">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-secondary-600 italic">"I was extremely nervous about getting dental implants, but the team at Clidenta made me feel comfortable and confident throughout the entire process. The results are amazing, and I can finally smile with confidence again!"</p>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/testimonial-2.jpg" alt="Patient" class="h-14 w-14 rounded-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-secondary-900">Michael Thompson</h4>
                                        <div class="flex text-yellow-400">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-secondary-600 italic">"I traveled from the UK to Istanbul for dental treatment at Clidenta, and it was the best decision I've ever made. Not only did I save a significant amount of money, but the quality of care was exceptional. The staff was incredibly helpful with arranging my accommodation and transportation."</p>
                            </div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                <div class="flex items-center mb-6">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/testimonial-3.jpg" alt="Patient" class="h-14 w-14 rounded-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-secondary-900">Emily Rodriguez</h4>
                                        <div class="flex text-yellow-400">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-secondary-600 italic">"As someone who has always been terrified of dental visits, I can't express how grateful I am to have found Clidenta. The entire team was patient, gentle, and understanding of my anxiety. They explained every step of my treatment and made sure I was comfortable throughout."</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slider Navigation -->
                <div class="flex justify-center mt-8">
                    <button class="testimonial-prev mx-2 p-2 rounded-full bg-teal-100 text-teal-600 hover:bg-teal-200 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="testimonial-next mx-2 p-2 rounded-full bg-teal-100 text-teal-600 hover:bg-teal-200 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section id="appointment" class="py-20 pt-32 bg-white relative">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="scroll-reveal">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                        Schedule a Visit
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-6">Book Your Appointment</h2>
                    <p class="text-lg text-secondary-600 mb-8">Schedule your visit today. We offer flexible appointment times to accommodate your travel plans and busy schedule.</p>
                    
                    <form id="appointment-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-secondary-700 mb-1">Full Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition-all">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-secondary-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition-all">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-secondary-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition-all">
                            </div>
                            <div>
                                <label for="date" class="block text-sm font-medium text-secondary-700 mb-1">Preferred Date</label>
                                <input type="date" id="date" name="date" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition-all">
                            </div>
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-secondary-700 mb-1">Service Needed</label>
                            <select id="service" name="service" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition-all">
                                <option value="">Select a service</option>
                                <option value="implants">Dental Implants</option>
                                <option value="whitening">Teeth Whitening</option>
                                <option value="kids">Kids Dentistry</option>
                                <option value="rootcanal">Root Canal Treatment</option>
                                <option value="perio">Periodontology</option>
                                <option value="crowns">Zirconium Crowns</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-secondary-700 mb-1">Additional Information</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition-all"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-teal-600 to-emerald-600 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all group">
                                <span class="mr-2">Request Appointment</span>
                                <svg class="h-5 w-5 text-white group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div id="contact" class="bg-white rounded-xl shadow-soft p-8 scroll-reveal" data-delay="100">
                    <h3 class="text-2xl font-display font-bold text-secondary-900 mb-6">Contact Information</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-secondary-900">Our Location</p>
                                <p class="text-sm text-secondary-600">Kadıköy, Istanbul<br>Turkey</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-secondary-900">Phone Number</p>
                                <p class="text-sm text-secondary-600">+90 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-secondary-900">Email Address</p>
                                <p class="text-sm text-secondary-600">info@clidenta.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-secondary-900">Office Hours</p>
                                <p class="text-sm text-secondary-600">
                                    Monday - Friday: 9:00 AM - 6:00 PM<br>
                                    Saturday: 9:00 AM - 2:00 PM<br>
                                    Sunday: Closed
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="text-lg font-display font-semibold text-secondary-900 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center text-teal-600 hover:bg-teal-200 transition-all">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center text-teal-600 hover:bg-teal-200 transition-all">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-teal-100 rounded-full flex items-center justify-center text-teal-600 hover:bg-teal-200 transition-all">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Add JavaScript for testimonial slider and mobile menu -->
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
        
        // Scroll reveal animation
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        const revealOnScroll = function() {
            for (let i = 0; i < revealElements.length; i++) {
                const windowHeight = window.innerHeight;
                const elementTop = revealElements[i].getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < windowHeight - elementVisible) {
                    setTimeout(function() {
                        revealElements[i].classList.add('revealed');
                    }, revealElements[i].dataset.delay || 0);
                }
            }
        };
        
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll();
        
        // Simple testimonial slider (in a real implementation, you might want to use a library like Swiper.js)
        const testimonialSlides = document.querySelectorAll('.swiper-slide');
        const prevButton = document.querySelector('.testimonial-prev');
        const nextButton = document.querySelector('.testimonial-next');
        let currentSlide = 0;
        
        function showSlide(index) {
            testimonialSlides.forEach((slide, i) => {
                slide.style.display = i === index ? 'block' : 'none';
            });
        }
        
        if (testimonialSlides.length > 0) {
            showSlide(currentSlide);
            
            if (prevButton) {
                prevButton.addEventListener('click', function() {
                    currentSlide = (currentSlide - 1 + testimonialSlides.length) % testimonialSlides.length;
                    showSlide(currentSlide);
                });
            }
            
            if (nextButton) {
                nextButton.addEventListener('click', function() {
                    currentSlide = (currentSlide + 1) % testimonialSlides.length;
                    showSlide(currentSlide);
                });
            }
        }
    });
</script>

<?php include 'includes/footer.php'; ?>