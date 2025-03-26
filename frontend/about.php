<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-teal-50 to-emerald-50 py-20 md:py-28">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="dental-pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M0 20h40M20 0v40" stroke="#6B7280" stroke-width="0.5" fill="none" />
                        <circle cx="20" cy="20" r="2" fill="#0D9488" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#dental-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text content -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                        <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                        About Clidenta
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold text-secondary-900 mb-6 leading-tight">Your Partner for <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-emerald-600">Better Smiles</span></h1>
                    <p class="text-xl text-secondary-600 mb-8 max-w-lg mx-auto lg:mx-0">Clidenta's connection to Istanbul runs deep, and we strive to make an impact that extends far beyond our dental practice. Discover how our experienced team can transform your smile.</p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#services" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-teal-600 to-emerald-600 shadow-md hover:shadow-lg transition-all">
                            Our Services
                        </a>
                        <a href="#appointment" class="inline-flex items-center justify-center px-6 py-3 border border-teal-600 text-base font-medium rounded-md text-teal-700 bg-white hover:bg-teal-50 shadow-sm transition-all">
                            Book Appointment
                        </a>
                    </div>
                    
                    <!-- Trust indicators -->
                    <div class="mt-10 grid grid-cols-3 gap-4 max-w-md mx-auto lg:mx-0">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-teal-600">20+</div>
                            <div class="text-sm text-secondary-500">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-teal-600">5,000+</div>
                            <div class="text-sm text-secondary-500">Happy Patients</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-teal-600">12</div>
                            <div class="text-sm text-secondary-500">Specialists</div>
                        </div>
                    </div>
                </div>
                
                <!-- Image with overlapping elements -->
                <div class="relative">
                    <!-- Decorative elements -->
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-teal-100 rounded-full opacity-70 z-0"></div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-emerald-100 rounded-full opacity-70 z-0"></div>
                    
                    <!-- Main image -->
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <img src="assets/images/team.jpg" alt="Clidenta Dental Team" class="w-full h-auto">
                    </div>
                    
                    <!-- Floating badge -->
                    <div class="absolute -bottom-5 -left-5 bg-white rounded-lg shadow-lg px-4 py-3 z-20">
                        <div class="flex items-center space-x-2">
                            <div class="flex text-yellow-400">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-secondary-900">4.9/5</div>
                        </div>
                        <div class="text-xs text-secondary-500 mt-1">Based on 350+ reviews</div>
                    </div>
                    
                    <!-- Certificate badge -->
                    <div class="absolute -top-5 -right-5 bg-white rounded-lg shadow-lg p-2 z-20">
                        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 rounded-md p-2">
                            <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- General and Family Dentistry Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    Our Expertise
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">General & Family Dentistry</h2>
                <div class="w-20 h-1 bg-teal-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Experience -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4">30 Years Combined Experience</h3>
                    <p class="text-secondary-600">We bring a wealth of knowledge and expertise to every treatment. You can trust in our years of practice and skill to provide you with the highest standard of dental care.</p>
                </div>
                
                <!-- Patient-Centered Experience -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal" data-delay="100">
                    <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4">Your Experience Matters</h3>
                    <p class="text-secondary-600">Our patient-centered approach means that we take the time to get to know you, to listen, understand, and address your concerns, ensuring a positive and personalized dental experience.</p>
                </div>
                
                <!-- We Love to See You Smile -->
                <div class="bg-gray-50 rounded-xl p-8 text-center shadow-soft hover-lift scroll-reveal" data-delay="200">
                    <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="h-8 w-8 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4">We Love To See Your Smile</h3>
                    <p class="text-secondary-600">No judgement, no pain, no fear! We are passionate about helping you achieve and maintain a healthy, beautiful smile that you can be proud of.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Difference, Mission, and Values Section -->
    <section class="py-20 bg-gradient-to-br from-teal-50 to-emerald-50 relative">
        <div class="absolute inset-0 opacity-10">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle cx="10" cy="10" r="1.5" fill="#0E7490" opacity="0.3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#dot-pattern)" />
            </svg>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-teal-100 rounded-full opacity-70"></div>
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-emerald-100 rounded-full opacity-70"></div>
                    <div class="relative z-10 rounded-xl overflow-hidden shadow-elegant">
                        <img src="assets/images/hero-img.jpeg" alt="Clidenta waiting area" class="w-full h-auto">
                    </div>
                </div>
                
                <div>
                    <div class="space-y-12">
                        <!-- Our Difference -->
                        <div>
                            <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4 border-b border-teal-200 pb-2">Our Difference</h3>
                            <p class="text-secondary-600">While our dedication to delivering top-notch services is what sets us apart, it's our commitment to offering the best care that truly makes a difference! At our dental practice, we go beyond the standard dental experience. We take the time to get to know you as a person; to listen, understand, and tailor your treatment to what your dental goals and needs are.</p>
                        </div>
                        
                        <!-- Our Mission -->
                        <div>
                            <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4 border-b border-teal-200 pb-2">Our Mission</h3>
                            <p class="text-secondary-600">Our mission is to provide exceptional dental care in a comfortable and welcoming environment. We are committed to improving the oral health of our patients through preventive care, education, and personalized treatment plans. We strive to make each visit a positive experience, building lasting relationships based on trust and quality care.</p>
                        </div>
                        
                        <!-- Our Values -->
                        <div>
                            <h3 class="text-2xl font-display font-bold text-secondary-900 mb-4 border-b border-teal-200 pb-2">Our Values</h3>
                            <ul class="space-y-2 text-secondary-600">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Excellence:</strong> We are committed to providing the highest quality dental care.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Compassion:</strong> We treat each patient with empathy, respect, and understanding.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Integrity:</strong> We adhere to the highest ethical standards in all aspects of our practice.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-teal-600 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span><strong>Innovation:</strong> We continuously seek to improve our services through education and technology.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action (CTA) Section -->
    <section class="py-20 bg-gradient-to-r from-teal-600 to-emerald-600 relative">
        <div class="absolute inset-0 opacity-20">
            <img src="assets/images/smile-bg.jpg" alt="" class="w-full h-full object-cover">
        </div>
        
        <div class="absolute inset-0 bg-gradient-to-r from-teal-600/80 to-emerald-600/80"></div>
        
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

    <!-- Our People Section -->
    <section id="our-people" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    Meet Our Team
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">OUR SPECIALISTS IN CLIDENTA</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">Keeping your smile beautiful and your teeth healthy is the mission of our team with more than 20 years of experience</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Doctor 1 - Dr. Tuğba Temur -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-full h-64 overflow-hidden">
                        <img src="assets/images/dr-tugba-temur.jpeg" alt="Dr. Tuğba Temur" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-display font-bold text-secondary-900">DT. Tuğba Temur</h3>
                        <p class="text-teal-600 font-medium mb-3">Dental Hygienist</p>
                        <p class="text-secondary-600 text-sm mb-4">She graduated from Çukurova University Faculty of Dentistry and worked in various institutions including Adana Numune Hospital. Since 2013, she has been practising at the Private Clidenta Oral and Dental Health Clinic.</p>
                    </div>
                </div>
                
                <!-- Doctor 2 - Dr. Fatoş Ezgi Dökme -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-full h-64 overflow-hidden">
                        <img src="assets/images/dr-ezgi.png" alt="Dr. Fatoş Ezgi Dökme" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-display font-bold text-secondary-900">DT. Fatoş Ezgi Dökme</h3>
                        <p class="text-teal-600 font-medium mb-3">Dental Hygienist</p>
                        <p class="text-secondary-600 text-sm mb-4">She graduated in 1999 from Hacettepe University Faculty of Dentistry. Specializes in aesthetic fillings, smile design, and pediatric dentistry. Co-founder of Clidenta Oral and Dental Health Polyclinic since 2013.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#appointment" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gradient-to-r from-teal-600 to-emerald-600 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500 transition-all">
                    Schedule a Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-teal-100 text-teal-800 mb-4">
                    <span class="flex h-2 w-2 rounded-full bg-teal-600 mr-2"></span>
                    Testimonials
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-secondary-900 mb-4">What Our Patients Say</h2>
                <p class="text-lg text-secondary-600 max-w-3xl mx-auto">From the moment you walk through the door, and all the way through to aftercare, we aim to deliver a personalised and exceptional experience, helping you get the smile you deserve.</p>
            </div>
            
            <div class="testimonial-slider relative max-w-5xl mx-auto">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Testimonial 1 -->
                        <div class="swiper-slide">
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
                                <p class="text-secondary-600 italic mb-6">As much as I dislike going to the dentist, Dr Renee and all the team make the visits exceptionally pleasing! From the friendliness to the knowledge to the expense, they really do care. Even my teenagers don't hesitate going for their 6 monthly check ups, so that speaks for itself. Highly recommend this practice!</p>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/testimonial-1.jpg" alt="Erica Window" class="h-12 w-12 rounded-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-secondary-900">Erica Window</h4>
                                        <p class="text-sm text-secondary-600">Patient since 2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="swiper-slide">
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
                                <p class="text-secondary-600 italic mb-6">Rene and his team are always friendly and efficient. Rene and the girls go out of their way to put me at ease so that even having root canal treatment is bearable! Many thanks to all at Atelier Dental for looking after me these last few years.</p>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/testimonial-2.jpg" alt="Rachel F" class="h-12 w-12 rounded-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-secondary-900">Rachel F</h4>
                                        <p class="text-sm text-secondary-600">Patient since 2020</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="swiper-slide">
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
                                <p class="text-secondary-600 italic mb-6">I came to Istanbul for dental work and chose Clidenta based on their excellent reviews. The quality of care was outstanding, and the cost was significantly less than what I would have paid back home. The staff was incredibly helpful with arranging my accommodation and transportation. I highly recommend them for dental tourism!</p>
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/testimonial-3.jpg" alt="Michael T" class="h-12 w-12 rounded-full object-cover">
                                    </div>
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold text-secondary-900">Michael T</h4>
                                        <p class="text-sm text-secondary-600">International Patient</p>
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
</main>

<!-- Add JavaScript for testimonial slider and scroll reveal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
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

<?php include 'includes/footer.php'; ?>