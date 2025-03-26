<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-gray-100 to-teal-50 py-16 md:py-24">
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="dental-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M0 20h40M20 0v40" stroke="#6B7280" stroke-width="0.5" fill="none" />
                        <circle cx="20" cy="20" r="2" fill="#0D9488" opacity="0.2" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#dental-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="max-w-lg">
                    <h1 class="text-4xl md:text-5xl font-display font-bold tracking-tight text-secondary-900 mb-6 leading-tight">
                        Check-Up And Clean
                    </h1>
                    <p class="text-lg text-secondary-600 mb-8 leading-relaxed">
                        Maintain optimal oral health and a bright smile with our comprehensive check-up and cleaning services.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-teal-600 to-emerald-600 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all">
                            Book An Appointment
                        </a>
                        <a href="#contact" class="inline-flex justify-center items-center px-6 py-3 border border-teal-200 text-base font-medium rounded-md text-teal-700 bg-white hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all">
                            Or Contact Us
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-teal-100 rounded-full opacity-50 mix-blend-multiply filter blur-xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-emerald-200 rounded-full opacity-50 mix-blend-multiply filter blur-xl"></div>
                    
                    <div class="relative rounded-2xl overflow-hidden shadow-elegant">
                        <img src="../assets/images/mission.jpg" alt="Dental checkup procedure" class="w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Cleaning Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative order-2 lg:order-1">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-teal-100 rounded-full opacity-70"></div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-emerald-100 rounded-full opacity-70"></div>
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <img src="../assets/images/crown.jpeg" alt="Dental cleaning demonstration" class="w-full h-auto">
                    </div>
                </div>
                
                <div class="order-1 lg:order-2">
                    <div class="mb-6">
                        <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-6">Comprehensive Cleaning: Beyond the Surface</h2>
                        <p class="text-lg text-secondary-600 mb-6">
                            Our check-ups extend beyond visual examinations. Leveraging cutting-edge technology, including ultrasonics, and chemical therapies, we provide the most thorough cleaning experience. This involves the removal of soft plaque, external stains, and hard tartar buildup for a comprehensive oral hygiene approach.
                        </p>
                        <p class="text-lg text-secondary-600 mb-6">
                            Our professional cleaning includes:
                        </p>
                        <ul class="space-y-3 text-secondary-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Plaque Removal:</strong> Eliminating the sticky film that harbors bacteria</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Tartar Removal:</strong> Scaling away hardened plaque that can't be removed by brushing</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Teeth Polishing:</strong> Removing surface stains and creating a smooth finish</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Fluoride Treatment:</strong> Strengthening enamel and preventing decay</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span><strong>Personalized Oral Hygiene Guidance:</strong> Tailored advice for your specific needs</span>
                            </li>
                        </ul>
                        <div class="mt-8">
                            <a href="#contact" class="inline-flex items-center text-teal-600 hover:text-teal-700 font-medium">
                                Speak to A Specialist
                                <svg class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Unique Green Section -->
    <section class="py-20 bg-green-900 text-white relative">
        <div class="absolute inset-0 opacity-10">
            <img src="assets/images/leaf-pattern.jpg" alt="" class="w-full h-full object-cover">
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-display font-bold mb-8 text-center">Trusted Dental Experts: Your Partners in Oral Well-being</h2>
                <p class="text-lg text-green-100 mb-12 text-center">
                    Our dedicated team of trusted dental experts prioritises your oral well-being. With an unwavering commitment to excellence, we aim to deliver the highest standard of care during every check-up and cleaning session.
                </p>
                
                <div class="bg-green-800/50 rounded-xl p-8 backdrop-blur-sm shadow-lg mb-12">
                    <h3 class="text-2xl font-display font-bold mb-4">Proactive Oral Health Maintenance: Partner with Us</h3>
                    <p class="text-green-100 mb-6">
                        Take the proactive step in maintaining your oral health by scheduling routine check-ups and cleans with our experienced team. Let us be your partners in keeping your smile healthy and vibrant. Contact us today to book your next appointment and embark on a journey to optimal oral well-being.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <div class="bg-green-800/70 rounded-lg p-6 backdrop-blur-sm">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Preventive Care</h4>
                            <p class="text-green-100">Regular check-ups help prevent serious dental issues before they develop.</p>
                        </div>
                        
                        <div class="bg-green-800/70 rounded-lg p-6 backdrop-blur-sm">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Time-Efficient</h4>
                            <p class="text-green-100">Our streamlined process ensures thorough cleaning without taking up your entire day.</p>
                        </div>
                        
                        <div class="bg-green-800/70 rounded-lg p-6 backdrop-blur-sm">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h4 class="text-xl font-bold mb-2">Comfortable Experience</h4>
                            <p class="text-green-100">We prioritize your comfort with gentle techniques and a relaxing environment.</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-white text-base font-medium rounded-md text-green-900 bg-white shadow-md hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                        Schedule Your Check-up
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Patient Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    Testimonials
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">What Our Patients Say</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">From the moment you walk through the door, and all the way through to aftercare, we aim to deliver a personalised and exceptional experience.</p>
            </div>
            
            <div class="testimonial-slider relative max-w-6xl mx-auto">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Testimonial Slide 1 (contains 2 testimonials) -->
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Testimonial 1 -->
                                <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                    <div class="flex text-yellow-400 mb-4">
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
                                    <p class="text-secondary-600 italic mb-6">"I've always been anxious about dental visits, but the team here makes the check-up and cleaning process so comfortable. They explain everything they're doing and are incredibly gentle. My teeth have never felt cleaner!"</p>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/testimonial-1.jpg" alt="Sarah Johnson" class="h-12 w-12 rounded-full object-cover">
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-bold text-secondary-900">Sarah Johnson</h4>
                                            <p class="text-sm text-secondary-600">Regular patient for 3 years</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial 2 -->
                                <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                    <div class="flex text-yellow-400 mb-4">
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
                                    <p class="text-secondary-600 italic mb-6">"The thoroughness of their cleaning is impressive. They don't rush through the process and take the time to ensure every surface is properly cleaned. The hygienist also provided excellent advice on improving my brushing technique. Highly recommend!"</p>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/testimonial-2.jpg" alt="Michael Thompson" class="h-12 w-12 rounded-full object-cover">
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-bold text-secondary-900">Michael Thompson</h4>
                                            <p class="text-sm text-secondary-600">Patient since 2021</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial Slide 2 (contains 2 testimonials) -->
                        <div class="swiper-slide">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <!-- Testimonial 3 -->
                                <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                    <div class="flex text-yellow-400 mb-4">
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
                                    <p class="text-secondary-600 italic mb-6">"I've been coming here for my regular check-ups for years, and I'm always impressed by how thorough they are. They caught a small cavity early before it became a bigger problem. The cleaning is always gentle yet effective. My teeth feel amazing afterward!"</p>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/testimonial-3.jpg" alt="Emily Rodriguez" class="h-12 w-12 rounded-full object-cover">
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-bold text-secondary-900">Emily Rodriguez</h4>
                                            <p class="text-sm text-secondary-600">Patient since 2019</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimonial 4 -->
                                <div class="bg-white rounded-xl p-8 shadow-soft border border-gray-100">
                                    <div class="flex text-yellow-400 mb-4">
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
                                    <p class="text-secondary-600 italic mb-6">"As someone who had neglected dental check-ups for years, I was nervous about what they might find. The team was non-judgmental and created a comfortable environment. They explained everything clearly and provided a personalized plan to get my oral health back on track. The cleaning was thorough but gentle."</p>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/testimonial-4.jpg" alt="David Wilson" class="h-12 w-12 rounded-full object-cover">
                                        </div>
                                        <div class="ml-4">
                                            <h4 class="text-lg font-bold text-secondary-900">David Wilson</h4>
                                            <p class="text-sm text-secondary-600">New patient</p>
                                        </div>
                                    </div>
                                </div>
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

    <!-- Call to Action (CTA) Section -->
    <section class="py-20 bg-gradient-to-r from-teal-600 to-emerald-600 relative">
        <div class="absolute inset-0 opacity-20">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="smile-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0,50 C20,30 50,0 100,50 C50,100 20,70 0,50 Z" stroke="white" stroke-width="0.5" fill="none" opacity="0.7" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#smile-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Schedule Your Checkup Today</h2>
                <p class="text-lg text-teal-100 mb-8">Regular dental check-ups and cleanings are essential for maintaining optimal oral health. Don't wait until you have a problem – preventive care is the key to a lifetime of healthy smiles.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#appointment" class="inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-teal-700 bg-white shadow-md hover:bg-teal-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                        Book Your Appointment
                    </a>
                    <a href="tel:+1234567890" class="inline-flex justify-center items-center px-6 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all">
                        Call Us Now
                    </a>
                </div>
                <p class="text-teal-100 mt-6">Have questions? We're here to help. Contact us for more information about our check-up and cleaning services.</p>
            </div>
        </div>
    </section>
</main>

<!-- Add JavaScript for testimonial slider -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Simple testimonial slider
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

<?php include '../includes/footer.php'; ?>