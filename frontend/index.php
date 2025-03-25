<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <!-- Hero Section -->
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
        
        <!-- Add soft gradient overlays -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-2/3 h-2/3 bg-gradient-to-bl from-primary-100 to-transparent opacity-30"></div>
            <div class="absolute bottom-0 left-0 w-2/3 h-2/3 bg-gradient-to-tr from-primary-200 to-transparent opacity-30"></div>
        </div>
        
        <!-- Remove the wave shapes section -->
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="max-w-lg animate-slide-up">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800 mb-6">
                        <span class="flex h-2 w-2 rounded-full bg-primary-600 mr-2"></span>
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
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary-100 rounded-full opacity-50 mix-blend-multiply filter blur-xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary-200 rounded-full opacity-50 mix-blend-multiply filter blur-xl"></div>
                    
                    <div class="relative rounded-2xl overflow-hidden shadow-elegant">
                        <img src="assets/images/hero-img.jpeg" alt="Modern dental office" class="w-full h-auto object-cover">
                    </div>
                    
                    <div class="absolute -bottom-6 -left-6 glass-effect rounded-lg shadow-soft p-4 max-w-xs hidden md:block animate-fade-in">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-primary-600 rounded-full p-2">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-secondary-900">Trusted by over</p>
                                <p class="text-lg font-bold text-primary-600">1,230+ patients</p>
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
                <div class="w-20 h-1 bg-primary-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Stat 1 -->
                <div class="bg-white rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-5xl font-display font-bold text-primary-600 mb-2">25+</h3>
                    <p class="text-lg text-secondary-600 font-medium">Dental Practices</p>
                </div>
                
                <!-- Stat 2 -->
                <div class="bg-white rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-5xl font-display font-bold text-primary-600 mb-2">5+</h3>
                    <p class="text-lg text-secondary-600 font-medium">Professionals</p>
                </div>
                
                <!-- Stat 3 -->
                <div class="bg-white rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-5xl font-display font-bold text-primary-600 mb-2">1,230+</h3>
                    <p class="text-lg text-secondary-600 font-medium">Happy Customers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section with new pattern -->
    <section class="py-16 bg-gradient relative">
        <!-- Add diagonal pattern background -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="features-pattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                        <path d="M0 0L60 60M60 0L0 60" stroke="#6B7280" stroke-width="0.5" fill="none" />
                        <circle cx="30" cy="30" r="1.5" fill="#4F46E5" opacity="0.2" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#features-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal">
                    <div class="h-48 overflow-hidden">
                        <img src="assets/images/hero-img.jpeg" alt="Antiseptic sterility" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Antiseptic Sterility</h3>
                        <p class="text-secondary-600">We maintain the highest standards of cleanliness and sterilization to ensure your safety and comfort during all procedures.</p>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="h-48 overflow-hidden">
                        <img src=assets/images/warm.jpeg alt="Warm atmosphere" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Warm Atmosphere</h3>
                        <p class="text-secondary-600">Our clinic is designed to provide a calming and comfortable environment, helping you feel relaxed during your visit.</p>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="h-48 overflow-hidden">
                        <img src="assets/images/original.jpeg" alt="Innovative equipment" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Innovative Equipment</h3>
                        <p class="text-secondary-600">We invest in the latest dental technology to provide efficient, precise, and comfortable treatments for all our patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative scroll-reveal">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary-100 rounded-full"></div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-primary-100 rounded-full"></div>
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <!-- <img src="https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Dental team" class="w-full h-auto"> -->
                        <img src="assets/images/20years.jpeg" alt="Dental team" class="w-full h-auto">
                    </div>
                </div>
                
                <div class="scroll-reveal" data-delay="100">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-primary-600 mr-2"></span>
                        Our Story
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-6">Over 20 Years of Dental Practice</h2>
                    <div class="space-y-4 text-secondary-600">
                        <p>Our staff participates in numerous trainings, courses, and seminars both in America and abroad. We use the best materials in our clinic. The work is carried out with maximum precision, on time, and according to international standards.</p>
                        
                        <p>At Clidenta with the latest technology, and a great team of dentists and specialists, you will get great, quality dental care. Our friendly dental clinic Clidenta, situated in the heart of Istanbul – Kadikoy with an incredible view of the Bosphorus.</p>
                        
                        <p>In addition to dental treatments, we provide services including free airport transfer and help with accommodation booking, even booking your sightseeing tours. We are happy to help!</p>
                    </div>
                    <div class="mt-8">
                        <a href="about.php" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all">
                            More About Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Cards Section with new pattern -->
    <section class="py-16 bg-gradient relative">
        <!-- Add dot pattern background -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1.5" fill="#4F46E5" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#dot-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Info Card 1 -->
                <div class="bg-white rounded-xl p-8 shadow-soft hover-lift scroll-reveal">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-display font-bold text-secondary-900 mb-2">Premium Dental Clinic in Istanbul</h3>
                            <p class="text-secondary-600">At Clidenta with the latest technology, and a great team of dentists and specialists, you will get great, quality dental care.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Info Card 2 -->
                <div class="bg-white rounded-xl p-8 shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-display font-bold text-secondary-900 mb-2">Dental Treatment Cost</h3>
                            <p class="text-secondary-600">You will get more than 60% price advantage compared to Europe and UK countries.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Info Card 3 -->
                <div class="bg-white rounded-xl p-8 shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-display font-bold text-secondary-900 mb-2">Same Day Dentistry</h3>
                            <p class="text-secondary-600">We provide permanent results to patients in a short vacation period. Procedures such as a root canal & crown, extraction & implant, and bone graft/sinus lift normally take 3-5 visits. We can do it in one!</p>
                        </div>
                    </div>
                </div>
                
                <!-- Info Card 4 -->
                <div class="bg-white rounded-xl p-8 shadow-soft hover-lift scroll-reveal" data-delay="300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-display font-bold text-secondary-900 mb-2">Expert Dentist Centre in Istanbul</h3>
                            <p class="text-secondary-600">The average work experience of doctors at our clinic Clidenta is more than 20 years. We guide you within developing an effective treatment plan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary-600 relative">
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse">
                        <path d="M 0 10 L 20 10 M 10 0 L 10 20" stroke="white" stroke-width="0.5" fill="none" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Ready to Transform Your Smile?</h2>
                <p class="text-lg text-primary-100 mb-8">Contact us today to schedule your consultation and learn more about our dental treatments. Our team is ready to help you achieve the smile you've always wanted.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="index.php#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary-700 bg-white shadow-md hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                        Book Appointment
                    </a>
                    <a href="index.php#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Services Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-primary-600 mr-2"></span>
                    Complimentary Services
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">Your Free Services</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">We go beyond dental care to ensure your visit to Istanbul is comfortable and enjoyable.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl p-6 shadow-soft hover-lift scroll-reveal border border-gray-100">
                    <div class="w-14 h-14 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Free Consultation</h3>
                    <p class="text-secondary-600 mb-4">Call us for any info about our dental treatment. You can send us your X-ray by email and we'll give you advice and help organize your trip.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white rounded-xl p-6 shadow-soft hover-lift scroll-reveal border border-gray-100" data-delay="100">
                    <div class="w-14 h-14 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Free Airport Pickup</h3>
                    <p class="text-secondary-600 mb-4">We will pick you up from the airport, your hotel or your host and after the treatment leave at the place you want to be.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white rounded-xl p-6 shadow-soft hover-lift scroll-reveal border border-gray-100" data-delay="200">
                    <div class="w-14 h-14 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Flight & Hotel Booking</h3>
                    <p class="text-secondary-600 mb-4">We can assist you with booking your flights and accommodations to make your dental tourism experience seamless.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="bg-white rounded-xl p-6 shadow-soft hover-lift scroll-reveal border border-gray-100" data-delay="300">
                    <div class="w-14 h-14 bg-primary-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="h-7 w-7 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-display font-bold text-secondary-900 mb-3">Translation Services</h3>
                    <p class="text-secondary-600 mb-4">We provide professional translation services to ensure clear communication throughout your treatment and stay in Istanbul.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Tech Section with new pattern -->
    <section class="py-20 bg-gradient relative">
        <!-- Add hexagonal pattern background -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="hex-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M20 10L10 20L20 30L30 20Z" stroke="#6B7280" stroke-width="0.5" fill="none" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hex-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="scroll-reveal">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-primary-600 mr-2"></span>
                        Advanced Technology
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-6">State-of-the-Art Dental Equipment</h2>
                    <p class="text-lg text-secondary-600 mb-8">At Clidenta, we invest in the latest dental technology to provide you with the most comfortable and effective treatments available. Our modern equipment allows us to perform precise procedures with minimal discomfort and faster recovery times.</p>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-secondary-700 font-medium">Digital X-rays with reduced radiation exposure</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-secondary-700 font-medium">3D scanning for precise treatment planning</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-secondary-700 font-medium">Laser dentistry for minimally invasive procedures</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-secondary-700 font-medium">CAD/CAM technology for same-day restorations</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative scroll-reveal" data-delay="100">
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-primary-100 rounded-full"></div>
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-primary-100 rounded-full"></div>
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <video 
                            class="w-full h-auto" 
                            autoplay 
                            loop 
                            muted 
                            playsinline>
                            <source src="assets/images/equipment.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment Section -->
    <section id="appointment" class="py-20 pt-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="scroll-reveal">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-primary-600 mr-2"></span>
                        Schedule a Visit
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-6">Book Your Appointment</h2>
                    <p class="text-lg text-secondary-600 mb-8">Schedule your visit today. We offer flexible appointment times to accommodate your travel plans and busy schedule.</p>
                    
                    <form id="appointment-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-secondary-700 mb-1">Full Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-secondary-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-secondary-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all">
                            </div>
                            <div>
                                <label for="date" class="block text-sm font-medium text-secondary-700 mb-1">Preferred Date</label>
                                <input type="date" id="date" name="date" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all">
                            </div>
                        </div>
                        
                        <div>
                            <label for="service" class="block text-sm font-medium text-secondary-700 mb-1">Service Needed</label>
                            <select id="service" name="service" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all">
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
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 transition-all"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all group">
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
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-secondary-900">Phone Number</p>
                                <p class="text-sm text-secondary-600">+90 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-bold text-secondary-900">Email Address</p>
                                <p class="text-sm text-secondary-600">info@clidenta.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                <svg class="h-5 w-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-all">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-all">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path>
                                </svg>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-all">
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

    <!-- What We Do Section - Popular Services -->
    <section id="services" class="py-20 bg-white relative">
        <!-- Add curved pattern background -->
        <div class="absolute inset-0 opacity-5">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="services-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M25,50 a25,25 0 1,1 50,0 a25,25 0 1,1 -50,0" stroke="#4F46E5" stroke-width="0.5" fill="none" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#services-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-primary-100 text-primary-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-primary-600 mr-2"></span>
                    Our Expertise
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">What We Do</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">Our comprehensive range of dental services to meet all your oral health needs.</p>
            </div>
            
            <!-- Services Categories -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Category 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal">
                    <div class="h-56 bg-primary-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-display font-bold">Pediatric Dentistry</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-secondary-600 mb-4">Paediatric dentistry is the branch of dentistry specialising in the dental health of the 0-13 age group. We create a child-friendly environment to ensure your little ones develop positive associations with dental care.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Child-friendly examinations</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Preventive treatments</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Education on oral hygiene</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-primary-600 hover:text-primary-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="h-56 bg-primary-700 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-display font-bold">Preventative Care</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-secondary-600 mb-4">Endodontics is the medical name given to the process of cleaning and refilling root canals infected by microorganisms. Our preventative care helps maintain oral health and avoid costly treatments in the future.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Regular check-ups</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Professional cleaning</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Root canal treatments</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-primary-600 hover:text-primary-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="h-56 bg-primary-800 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-display font-bold">Teeth Whitening</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-secondary-600 mb-4">Our professional teeth whitening treatments can dramatically improve the appearance of discolored teeth, giving you a brighter, more confident smile in just one visit to our clinic.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">In-office treatments</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">At-home whitening kits</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Stain removal</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-primary-600 hover:text-primary-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="300">
                    <div class="h-56 bg-primary-600 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-display font-bold">Restorative Solutions</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-secondary-600 mb-4">We offer comprehensive restorative dental treatments to repair damaged teeth and restore functionality. Our solutions include fillings, crowns, bridges, and dentures crafted with precision and care.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Dental fillings</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Dental bridges</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Custom dentures</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-primary-600 hover:text-primary-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="400">
                    <div class="h-56 bg-primary-700 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-display font-bold">Zirconium Crowns</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-secondary-600 mb-4">Zirconium crowns offer superior aesthetics and durability. Made from biocompatible materials, these crowns provide a natural appearance while maintaining exceptional strength for long-lasting results.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Natural appearance</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Exceptional durability</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Biocompatible material</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-primary-600 hover:text-primary-700 font-medium">
                            Learn more
                            <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Category 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift scroll-reveal" data-delay="500">
                    <div class="h-56 bg-primary-800 relative">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg class="h-24 w-24 text-white opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 00-2-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                            <h3 class="text-2xl font-display font-bold">Dental Implants</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-secondary-600 mb-4">Dental implants provide a permanent solution for missing teeth. These titanium posts act as artificial tooth roots, providing a strong foundation for fixed replacement teeth designed to match your natural teeth.</p>
                        <div class="mt-2 space-y-2">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Permanent tooth replacement</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Prevents bone loss</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-4 w-4 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-secondary-700">Natural feel and function</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="inline-flex items-center mt-6 text-primary-600 hover:text-primary-700 font-medium">
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
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-primary shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all group">
                    <span class="mr-2">View All Services</span>
                    <svg class="h-5 w-5 text-white group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

