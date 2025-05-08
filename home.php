<html class="">
   <head>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&display=swap" rel="stylesheet">
      <link src="assets/css/style.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="assets/js/script.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <style>
         * {
         font-family: "Inter", sans-serif;
         }
         html {
         scroll-behavior: smooth;
         }
      </style>
      <title>AppsDeddy - Daddy Knows Better</title>
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <meta name="robots" content="noindex">
   </head>
   <body class="h-full text-base-content">
      <header id="header" class="fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
               <div class="flex items-center">
                  <span class="text-2xl font-bold flex items-center cursor-pointer">
                  <img src="assets/images/logo.svg" alt="Logo" class="w-[200px]">
                  </span>
               </div>
               <div class="hidden lg:flex items-center space-x-8">
                  <a href="#home" class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors cursor-pointer">Home</a>
                  <a href="#services" class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors cursor-pointer">Services</a>
                  <a href="#about" class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors cursor-pointer">About Us</a>
                  <a href="#how-we-work" class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors cursor-pointer">How We Work</a>
                  <a href="#portfolio" class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors cursor-pointer">Portfolio</a>
                  <a href="#contact" class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors cursor-pointer">Contact Us</a>
               </div>
               <div class="hidden lg:block">
                  <span class="bg-[#5738d9] text-white px-6 py-3 rounded-full font-medium hover:bg-[#4328b9] transition-colors cursor-pointer">Get in Touch</span>
               </div>
               <div class="lg:hidden">
                  <button id="mobile-menu-button" class="text-gray-800">
                  <i class="fa-solid fa-bars text-2xl"></i>
                  </button>
               </div>
            </div>
         </div>
         <!-- Mobile Menu -->
         <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-lg absolute w-full">
            <div class="container mx-auto px-4 py-4 flex flex-col space-y-4">
               <span class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors py-2 cursor-pointer">Home</span>
               <span class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors py-2 cursor-pointer">Services</span>
               <span class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors py-2 cursor-pointer">About Us</span>
               <span class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors py-2 cursor-pointer">How We Work</span>
               <span class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors py-2 cursor-pointer">Portfolio</span>
               <span class="font-medium text-gray-800 hover:text-[#5738d9] transition-colors py-2 cursor-pointer">Contact Us</span>
               <span class="bg-[#5738d9] text-white px-6 py-3 rounded-full font-medium hover:bg-[#4328b9] transition-colors text-center cursor-pointer">Get in Touch</span>
            </div>
         </div>
      </header>
      <main>
      <!-- Hero Section -->
      <section id="home" class="pt-28 md:pt-32 pb-16 md:pb-24">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="relative overflow-hidden">
               <div id="hero-slider" class="relative h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden rounded-2xl">
                  <!-- Slide 1 -->
                  <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-100">
                     <div class="absolute inset-0 bg-gradient-to-r from-[#5738d9]/80 to-[#1b36c9]/80 z-10"></div>
                     <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/672a8efc61-e9201ba760ec1fcea2a9.png" alt="3D futuristic digital landscape with purple and blue technology elements, modern and innovative" />
                     <div class="absolute inset-0 z-20 flex items-center justify-center">
                        <div class="text-center px-4 md:px-0 max-w-4xl mx-auto">
                           <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 slide-up">
                              <span class="block">Innovate. Create.</span>
                              <span class="block">Succeed.</span>
                           </h1>
                           <p class="text-xl md:text-2xl text-white/90 mb-8 slide-up-delay">We build cutting-edge software solutions to empower your business.</p>
                           <span class="inline-block bg-white text-[#5738d9] px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-colors shadow-lg slide-up-delay-2 cursor-pointer">Get Started</span>
                        </div>
                     </div>
                  </div>
                  <!-- Slide 2 -->
                  <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                     <div class="absolute inset-0 bg-gradient-to-r from-[#1b36c9]/80 to-[#5738d9]/80 z-10"></div>
                     <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/9cf0334c61-cc5c14618f41c4d1c858.png" alt="3D visualization of AI and machine learning concepts with glowing data streams in purple and blue, modern tech" />
                     <div class="absolute inset-0 z-20 flex items-center justify-center">
                        <div class="text-center px-4 md:px-0 max-w-4xl mx-auto">
                           <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 slide-up">
                              <span class="block">Transforming Ideas</span>
                              <span class="block">Into Reality</span>
                           </h1>
                           <p class="text-xl md:text-2xl text-white/90 mb-8 slide-up-delay">Leverage our expertise to turn your vision into powerful digital solutions.</p>
                           <span class="inline-block bg-white text-[#5738d9] px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-colors shadow-lg slide-up-delay-2 cursor-pointer">Explore Services</span>
                        </div>
                     </div>
                  </div>
                  <!-- Slide 3 -->
                  <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                     <div class="absolute inset-0 bg-gradient-to-r from-[#5738d9]/80 to-[#1b36c9]/80 z-10"></div>
                     <img class="w-full h-full object-cover" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/16a39a24ec-dc5dcb95e38bc84fbdf8.png" alt="3D abstract digital workspace with floating screens and data visualization, futuristic office concept" />
                     <div class="absolute inset-0 z-20 flex items-center justify-center">
                        <div class="text-center px-4 md:px-0 max-w-4xl mx-auto">
                           <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 slide-up">
                              <span class="block">Future-Ready</span>
                              <span class="block">Solutions</span>
                           </h1>
                           <p class="text-xl md:text-2xl text-white/90 mb-8 slide-up-delay">Stay ahead with our innovative technologies and strategic implementations.</p>
                           <span class="inline-block bg-white text-[#5738d9] px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-colors shadow-lg slide-up-delay-2 cursor-pointer">Partner With Us</span>
                        </div>
                     </div>
                  </div>
                  <!-- Navigation dots -->
                  <div class="absolute bottom-8 left-0 right-0 z-30 flex justify-center space-x-3">
                     <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none active" data-index="0"></button>
                     <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-index="1"></button>
                     <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-index="2"></button>
                  </div>
               </div>
            </div>
            <!-- Stats -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
               <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                  <div class="text-[#5738d9] mb-3">
                     <i class="fa-solid fa-rocket text-4xl"></i>
                  </div>
                  <h3 class="text-4xl font-bold mb-2 text-gray-800">250+</h3>
                  <p class="text-gray-600">Projects Completed</p>
               </div>
               <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                  <div class="text-[#5738d9] mb-3">
                     <i class="fa-solid fa-users text-4xl"></i>
                  </div>
                  <h3 class="text-4xl font-bold mb-2 text-gray-800">120+</h3>
                  <p class="text-gray-600">Happy Clients</p>
               </div>
               <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                  <div class="text-[#5738d9] mb-3">
                     <i class="fa-solid fa-code text-4xl"></i>
                  </div>
                  <h3 class="text-4xl font-bold mb-2 text-gray-800">15+</h3>
                  <p class="text-gray-600">Years Experience</p>
               </div>
               <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                  <div class="text-[#5738d9] mb-3">
                     <i class="fa-solid fa-award text-4xl"></i>
                  </div>
                  <h3 class="text-4xl font-bold mb-2 text-gray-800">30+</h3>
                  <p class="text-gray-600">Industry Awards</p>
               </div>
            </div>
         </div>
      </section>
      <!-- Services Section -->
      <section id="services" class="py-16 md:py-24 bg-gray-50">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Our Services</h2>
               <p class="text-lg text-gray-600 max-w-3xl mx-auto">We offer comprehensive software solutions tailored to your business needs, ensuring innovation and excellence at every step.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
               <!-- Service 1 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                  <div class="h-3 bg-[#5738d9]"></div>
                  <div class="p-8">
                     <div class="w-14 h-14 rounded-lg bg-[#5738d9]/10 flex items-center justify-center mb-6 group-hover:bg-[#5738d9] transition-colors">
                        <i class="fa-solid fa-mobile-screen-button text-2xl text-[#5738d9] group-hover:text-white transition-colors"></i>
                     </div>
                     <h3 class="text-xl font-bold text-gray-800 mb-4">Web & Mobile App Development</h3>
                     <p class="text-gray-600 mb-6">Custom, responsive, and scalable applications built with cutting-edge technologies for web and mobile platforms.</p>
                     <span class="inline-flex items-center text-[#5738d9] font-medium cursor-pointer">
                     Learn More
                     <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                     </span>
                  </div>
               </div>
               <!-- Service 2 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                  <div class="h-3 bg-[#5738d9]"></div>
                  <div class="p-8">
                     <div class="w-14 h-14 rounded-lg bg-[#5738d9]/10 flex items-center justify-center mb-6 group-hover:bg-[#5738d9] transition-colors">
                        <i class="fa-solid fa-database text-2xl text-[#5738d9] group-hover:text-white transition-colors"></i>
                     </div>
                     <h3 class="text-xl font-bold text-gray-800 mb-4">Data Engineering Solutions</h3>
                     <p class="text-gray-600 mb-6">Comprehensive data architecture, processing, and analytics solutions to transform raw data into actionable insights.</p>
                     <span class="inline-flex items-center text-[#5738d9] font-medium cursor-pointer">
                     Learn More
                     <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                     </span>
                  </div>
               </div>
               <!-- Service 3 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                  <div class="h-3 bg-[#5738d9]"></div>
                  <div class="p-8">
                     <div class="w-14 h-14 rounded-lg bg-[#5738d9]/10 flex items-center justify-center mb-6 group-hover:bg-[#5738d9] transition-colors">
                        <i class="fa-solid fa-brain text-2xl text-[#5738d9] group-hover:text-white transition-colors"></i>
                     </div>
                     <h3 class="text-xl font-bold text-gray-800 mb-4">Gen AI Integration & Consulting</h3>
                     <p class="text-gray-600 mb-6">Expert guidance and implementation of AI solutions to automate processes and enhance decision-making capabilities.</p>
                     <span class="inline-flex items-center text-[#5738d9] font-medium cursor-pointer">
                     Learn More
                     <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                     </span>
                  </div>
               </div>
               <!-- Service 4 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                  <div class="h-3 bg-[#5738d9]"></div>
                  <div class="p-8">
                     <div class="w-14 h-14 rounded-lg bg-[#5738d9]/10 flex items-center justify-center mb-6 group-hover:bg-[#5738d9] transition-colors">
                        <i class="fa-solid fa-palette text-2xl text-[#5738d9] group-hover:text-white transition-colors"></i>
                     </div>
                     <h3 class="text-xl font-bold text-gray-800 mb-4">UX & UI Design</h3>
                     <p class="text-gray-600 mb-6">User-centered design approach creating intuitive, engaging, and aesthetically pleasing digital experiences.</p>
                     <span class="inline-flex items-center text-[#5738d9] font-medium cursor-pointer">
                     Learn More
                     <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                     </span>
                  </div>
               </div>
            </div>
            <div class="mt-16 text-center">
               <span class="inline-block bg-[#5738d9] text-white px-8 py-4 rounded-full font-bold hover:bg-[#4328b9] transition-colors shadow-lg cursor-pointer">Discuss Your Project</span>
            </div>
         </div>
      </section>
      <!-- About Us Section -->
      <section id="about" class="py-16 md:py-24">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
               <div>
                  <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">About Xeon Solutions</div>
                  <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">We Create Software That Makes a Difference</h2>
                  <p class="text-lg text-gray-600 mb-6">Founded in 2010, Xeon Solutions has been at the forefront of digital innovation, helping businesses transform their operations through cutting-edge technology solutions.</p>
                  <p class="text-lg text-gray-600 mb-8">Our mission is to empower organizations with custom software that drives growth, enhances efficiency, and creates exceptional user experiences. We combine technical expertise with strategic thinking to deliver solutions that truly make a difference.</p>
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     <div class="flex items-start">
                        <div class="mr-4 text-[#5738d9]">
                           <i class="fa-solid fa-check-circle text-xl"></i>
                        </div>
                        <div>
                           <h4 class="font-bold text-gray-800 mb-1">Innovation-Driven</h4>
                           <p class="text-gray-600">We stay ahead of technology trends to deliver forward-thinking solutions.</p>
                        </div>
                     </div>
                     <div class="flex items-start">
                        <div class="mr-4 text-[#5738d9]">
                           <i class="fa-solid fa-check-circle text-xl"></i>
                        </div>
                        <div>
                           <h4 class="font-bold text-gray-800 mb-1">Client-Focused</h4>
                           <p class="text-gray-600">Your success is our priority, with solutions tailored to your specific needs.</p>
                        </div>
                     </div>
                     <div class="flex items-start">
                        <div class="mr-4 text-[#5738d9]">
                           <i class="fa-solid fa-check-circle text-xl"></i>
                        </div>
                        <div>
                           <h4 class="font-bold text-gray-800 mb-1">Quality-Obsessed</h4>
                           <p class="text-gray-600">We maintain rigorous standards throughout the development process.</p>
                        </div>
                     </div>
                     <div class="flex items-start">
                        <div class="mr-4 text-[#5738d9]">
                           <i class="fa-solid fa-check-circle text-xl"></i>
                        </div>
                        <div>
                           <h4 class="font-bold text-gray-800 mb-1">Result-Oriented</h4>
                           <p class="text-gray-600">We focus on delivering measurable outcomes that drive business value.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="relative">
                  <div class="absolute -top-10 -left-10 w-32 h-32 bg-[#5738d9]/10 rounded-full z-0"></div>
                  <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-[#1b36c9]/10 rounded-full z-0"></div>
                  <div class="relative z-10">
                     <img class="w-full h-auto rounded-2xl shadow-xl" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/eda0a89c25-1adc7edf259a4048df0d.png" alt="modern tech office with diverse team collaborating, software development company workspace with purple and blue accent colors" />
                  </div>
               </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
               <div class="order-2 lg:order-1 relative">
                  <div class="absolute -top-10 -right-10 w-32 h-32 bg-[#5738d9]/10 rounded-full z-0"></div>
                  <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-[#1b36c9]/10 rounded-full z-0"></div>
                  <div class="relative z-10">
                     <img class="w-full h-auto rounded-2xl shadow-xl" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/71ba0be513-973e9dec3119d9fe0bca.png" alt="futuristic digital transformation concept with people working with advanced technology, professional tech environment" />
                  </div>
               </div>
               <div class="order-1 lg:order-2">
                  <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">Our Approach</div>
                  <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Driving Digital Transformation Through Innovation</h2>
                  <p class="text-lg text-gray-600 mb-6">At Xeon Solutions, we believe that successful digital transformation begins with understanding your unique business challenges and objectives.</p>
                  <p class="text-lg text-gray-600 mb-8">Our approach combines technical expertise, creative thinking, and strategic insight to develop solutions that not only address your current needs but also position your business for future growth and success.</p>
                  <div class="space-y-4">
                     <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-[#5738d9]/10 flex items-center justify-center mr-4">
                           <i class="fa-solid fa-lightbulb text-[#5738d9]"></i>
                        </div>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                           <div class="h-full bg-[#5738d9] rounded-full" style="width: 95%"></div>
                        </div>
                        <span class="ml-4 font-bold text-gray-800">Innovation</span>
                     </div>
                     <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-[#5738d9]/10 flex items-center justify-center mr-4">
                           <i class="fa-solid fa-code text-[#5738d9]"></i>
                        </div>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                           <div class="h-full bg-[#5738d9] rounded-full" style="width: 90%"></div>
                        </div>
                        <span class="ml-4 font-bold text-gray-800">Technology</span>
                     </div>
                     <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-[#5738d9]/10 flex items-center justify-center mr-4">
                           <i class="fa-solid fa-users text-[#5738d9]"></i>
                        </div>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                           <div class="h-full bg-[#5738d9] rounded-full" style="width: 85%"></div>
                        </div>
                        <span class="ml-4 font-bold text-gray-800">Collaboration</span>
                     </div>
                     <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-[#5738d9]/10 flex items-center justify-center mr-4">
                           <i class="fa-solid fa-chart-line text-[#5738d9]"></i>
                        </div>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                           <div class="h-full bg-[#5738d9] rounded-full" style="width: 92%"></div>
                        </div>
                        <span class="ml-4 font-bold text-gray-800">Results</span>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Team Section -->
            <div class="text-center mb-16">
               <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">Our Team</div>
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Meet Our Experts</h2>
               <p class="text-lg text-gray-600 max-w-3xl mx-auto">Our diverse team of talented professionals brings together expertise from various domains to deliver exceptional software solutions.</p>
            </div>
            <div id="team-slider" class="relative">
               <div class="team-slider-container overflow-hidden">
                  <div class="team-slider-wrapper flex transition-transform duration-500 ease-in-out">
                     <!-- Team Member 1 -->
                     <div class="team-slide w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 flex-shrink-0">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                           <div class="relative overflow-hidden">
                              <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-3.jpg" alt="Team Member" class="w-full h-64 object-cover object-center">
                              <div class="absolute inset-0 bg-[#5738d9]/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                 <div class="flex space-x-3">
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-solid fa-envelope"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="p-6 text-center">
                              <h4 class="text-xl font-bold text-gray-800 mb-1">David Chen</h4>
                              <p class="text-[#5738d9] font-medium mb-3">Chief Technology Officer</p>
                              <p class="text-gray-600">15+ years of experience in software architecture and technical leadership.</p>
                           </div>
                        </div>
                     </div>
                     <!-- Team Member 2 -->
                     <div class="team-slide w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 flex-shrink-0">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                           <div class="relative overflow-hidden">
                              <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-5.jpg" alt="Team Member" class="w-full h-64 object-cover object-center">
                              <div class="absolute inset-0 bg-[#5738d9]/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                 <div class="flex space-x-3">
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-solid fa-envelope"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="p-6 text-center">
                              <h4 class="text-xl font-bold text-gray-800 mb-1">Sarah Johnson</h4>
                              <p class="text-[#5738d9] font-medium mb-3">UX/UI Design Lead</p>
                              <p class="text-gray-600">Expert in creating intuitive and engaging user experiences for digital products.</p>
                           </div>
                        </div>
                     </div>
                     <!-- Team Member 3 -->
                     <div class="team-slide w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 flex-shrink-0">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                           <div class="relative overflow-hidden">
                              <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-8.jpg" alt="Team Member" class="w-full h-64 object-cover object-center">
                              <div class="absolute inset-0 bg-[#5738d9]/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                 <div class="flex space-x-3">
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-solid fa-envelope"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="p-6 text-center">
                              <h4 class="text-xl font-bold text-gray-800 mb-1">Michael Rodriguez</h4>
                              <p class="text-[#5738d9] font-medium mb-3">AI & Data Science Director</p>
                              <p class="text-gray-600">Specializes in AI/ML implementations and data-driven solution development.</p>
                           </div>
                        </div>
                     </div>
                     <!-- Team Member 4 -->
                     <div class="team-slide w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 flex-shrink-0">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                           <div class="relative overflow-hidden">
                              <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg" alt="Team Member" class="w-full h-64 object-cover object-center">
                              <div class="absolute inset-0 bg-[#5738d9]/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                 <div class="flex space-x-3">
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-solid fa-envelope"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="p-6 text-center">
                              <h4 class="text-xl font-bold text-gray-800 mb-1">Emily Zhang</h4>
                              <p class="text-[#5738d9] font-medium mb-3">Project Management Lead</p>
                              <p class="text-gray-600">Expert in agile methodologies and complex project delivery management.</p>
                           </div>
                        </div>
                     </div>
                     <!-- Team Member 5 -->
                     <div class="team-slide w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 flex-shrink-0">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                           <div class="relative overflow-hidden">
                              <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-4.jpg" alt="Team Member" class="w-full h-64 object-cover object-center">
                              <div class="absolute inset-0 bg-[#5738d9]/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                 <div class="flex space-x-3">
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-brands fa-twitter"></i>
                                    </span>
                                    <span class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#5738d9] cursor-pointer">
                                    <i class="fa-solid fa-envelope"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="p-6 text-center">
                              <h4 class="text-xl font-bold text-gray-800 mb-1">James Wilson</h4>
                              <p class="text-[#5738d9] font-medium mb-3">Mobile Development Lead</p>
                              <p class="text-gray-600">Specialized in creating high-performance native and cross-platform mobile apps.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Navigation buttons -->
               <button id="team-prev" class="absolute top-1/2 left-2 -translate-y-1/2 w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-[#5738d9] z-10 focus:outline-none">
               <i class="fa-solid fa-chevron-left"></i>
               </button>
               <button id="team-next" class="absolute top-1/2 right-2 -translate-y-1/2 w-12 h-12 rounded-full bg-white shadow-lg flex items-center justify-center text-[#5738d9] z-10 focus:outline-none">
               <i class="fa-solid fa-chevron-right"></i>
               </button>
            </div>
         </div>
      </section>
      <!-- How We Work Section -->
      <section id="how-we-work" class="py-16 md:py-24 bg-gray-50">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
               <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">Our Process</div>
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">How We Work</h2>
               <p class="text-lg text-gray-600 max-w-3xl mx-auto">Our systematic approach ensures efficient delivery of high-quality solutions that meet your business objectives.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
               <!-- Step 1 -->
               <div id="step-1" class="bg-white rounded-xl shadow-lg p-8 relative process-step">
                  <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full bg-[#5738d9] text-white flex items-center justify-center font-bold text-lg shadow-lg">
                     1
                  </div>
                  <div class="w-16 h-16 rounded-full bg-[#5738d9]/10 flex items-center justify-center mb-6">
                     <i class="fa-solid fa-lightbulb text-2xl text-[#5738d9]"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Discovery</h3>
                  <p class="text-gray-600">We begin by understanding your business, goals, and challenges through in-depth consultations and research.</p>
                  <div class="step-animation hidden absolute inset-0 bg-[#5738d9]/5 rounded-xl flex items-center justify-center">
                     <div class="text-[#5738d9]">
                        <i class="fa-solid fa-magnifying-glass-chart text-4xl animate-pulse"></i>
                     </div>
                  </div>
               </div>
               <!-- Step 2 -->
               <div id="step-2" class="bg-white rounded-xl shadow-lg p-8 relative process-step">
                  <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full bg-[#5738d9] text-white flex items-center justify-center font-bold text-lg shadow-lg">
                     2
                  </div>
                  <div class="w-16 h-16 rounded-full bg-[#5738d9]/10 flex items-center justify-center mb-6">
                     <i class="fa-solid fa-pen-ruler text-2xl text-[#5738d9]"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Planning & Design</h3>
                  <p class="text-gray-600">We create detailed project plans and design prototypes that align with your vision and business requirements.</p>
                  <div class="step-animation hidden absolute inset-0 bg-[#5738d9]/5 rounded-xl flex items-center justify-center">
                     <div class="text-[#5738d9]">
                        <i class="fa-solid fa-bezier-curve text-4xl animate-pulse"></i>
                     </div>
                  </div>
               </div>
               <!-- Step 3 -->
               <div id="step-3" class="bg-white rounded-xl shadow-lg p-8 relative process-step">
                  <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full bg-[#5738d9] text-white flex items-center justify-center font-bold text-lg shadow-lg">
                     3
                  </div>
                  <div class="w-16 h-16 rounded-full bg-[#5738d9]/10 flex items-center justify-center mb-6">
                     <i class="fa-solid fa-code text-2xl text-[#5738d9]"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Development</h3>
                  <p class="text-gray-600">Our skilled developers bring designs to life using the latest technologies and best coding practices.</p>
                  <div class="step-animation hidden absolute inset-0 bg-[#5738d9]/5 rounded-xl flex items-center justify-center">
                     <div class="text-[#5738d9]">
                        <i class="fa-solid fa-code-branch text-4xl animate-pulse"></i>
                     </div>
                  </div>
               </div>
               <!-- Step 4 -->
               <div id="step-4" class="bg-white rounded-xl shadow-lg p-8 relative process-step">
                  <div class="absolute -top-4 -right-4 w-12 h-12 rounded-full bg-[#5738d9] text-white flex items-center justify-center font-bold text-lg shadow-lg">
                     4
                  </div>
                  <div class="w-16 h-16 rounded-full bg-[#5738d9]/10 flex items-center justify-center mb-6">
                     <i class="fa-solid fa-rocket text-2xl text-[#5738d9]"></i>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 mb-4">Testing & Launch</h3>
                  <p class="text-gray-600">We conduct thorough testing to ensure quality, then deploy and provide ongoing support for your solution.</p>
                  <div class="step-animation hidden absolute inset-0 bg-[#5738d9]/5 rounded-xl flex items-center justify-center">
                     <div class="text-[#5738d9]">
                        <i class="fa-solid fa-rocket-launch text-4xl animate-pulse"></i>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-16 text-center">
               <span class="inline-block bg-[#5738d9] text-white px-8 py-4 rounded-full font-bold hover:bg-[#4328b9] transition-colors shadow-lg cursor-pointer">Start Your Project</span>
            </div>
         </div>
      </section>
      <!-- Portfolio Section -->
      <section id="portfolio" class="py-16 md:py-24">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
               <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">Our Work</div>
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Featured Projects</h2>
               <p class="text-lg text-gray-600 max-w-3xl mx-auto">Explore our portfolio of successful projects that showcase our expertise and commitment to excellence.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <!-- Project 1 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                  <div class="relative overflow-hidden h-64">
                     <img class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/f7a8fb206c-8cca62d5c5a0a8d4dc13.png" alt="modern e-commerce website interface with shopping cart and payment gateway, professional online store" />
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-6">
                           <span class="text-white font-bold text-xl hover:text-[#5738d9] transition-colors cursor-pointer">View Project</span>
                        </div>
                     </div>
                  </div>
                  <div class="p-6">
                     <h3 class="text-xl font-bold text-gray-800 mb-2">E-Commerce Platform</h3>
                     <p class="text-gray-600 mb-4">A scalable online store with advanced payment integrations.</p>
                     <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">React</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Node.js</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Stripe</span>
                     </div>
                  </div>
               </div>
               <!-- Project 2 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                  <div class="relative overflow-hidden h-64">
                     <img class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/45faf12214-5564797e75b562187b42.png" alt="healthcare mobile app interface with patient management and telehealth features, medical application UI" />
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-6">
                           <span class="text-white font-bold text-xl hover:text-[#5738d9] transition-colors cursor-pointer">View Project</span>
                        </div>
                     </div>
                  </div>
                  <div class="p-6">
                     <h3 class="text-xl font-bold text-gray-800 mb-2">Healthcare App</h3>
                     <p class="text-gray-600 mb-4">A mobile app for patient management and telehealth services.</p>
                     <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Flutter</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Firebase</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">HIPAA</span>
                     </div>
                  </div>
               </div>
               <!-- Project 3 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                  <div class="relative overflow-hidden h-64">
                     <img class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/1c5ff04c61-4c6a723e9e1af7cbe011.png" alt="business analytics dashboard with data visualization charts and graphs, SaaS platform interface" />
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-6">
                           <span class="text-white font-bold text-xl hover:text-[#5738d9] transition-colors cursor-pointer">View Project</span>
                        </div>
                     </div>
                  </div>
                  <div class="p-6">
                     <h3 class="text-xl font-bold text-gray-800 mb-2">SaaS Dashboard</h3>
                     <p class="text-gray-600 mb-4">A cloud-based dashboard for real-time business analytics.</p>
                     <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">D3.js</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">AWS</span>
                     </div>
                  </div>
               </div>
               <!-- Project 4 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                  <div class="relative overflow-hidden h-64">
                     <img class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/641febf4ec-84f05e7b62e74d1bf8fb.png" alt="inventory management system interface with tracking features and warehouse visualization, retail management software" />
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-6">
                           <span class="text-white font-bold text-xl hover:text-[#5738d9] transition-colors cursor-pointer">View Project</span>
                        </div>
                     </div>
                  </div>
                  <div class="p-6">
                     <h3 class="text-xl font-bold text-gray-800 mb-2">Inventory Management System</h3>
                     <p class="text-gray-600 mb-4">A robust system for real-time inventory tracking and automated restocking.</p>
                     <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Angular</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">.NET Core</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">SQL Server</span>
                     </div>
                  </div>
               </div>
               <!-- Project 5 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                  <div class="relative overflow-hidden h-64">
                     <img class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/445d9a7f48-3220312a2c188ed9e9d8.png" alt="educational technology platform with gamified learning elements and progress tracking, online course interface" />
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-6">
                           <span class="text-white font-bold text-xl hover:text-[#5738d9] transition-colors cursor-pointer">View Project</span>
                        </div>
                     </div>
                  </div>
                  <div class="p-6">
                     <h3 class="text-xl font-bold text-gray-800 mb-2">EdTech Learning Platform</h3>
                     <p class="text-gray-600 mb-4">An interactive platform for online courses with gamified learning.</p>
                     <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">React</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Django</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">PostgreSQL</span>
                     </div>
                  </div>
               </div>
               <!-- Project 6 -->
               <div class="bg-white rounded-xl shadow-lg overflow-hidden group">
                  <div class="relative overflow-hidden h-64">
                     <img class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110" src="https://storage.googleapis.com/uxpilot-auth.appspot.com/9ee53b0ccf-c8a909c7e1b857138023.png" alt="AI chatbot interface with natural language processing visualization, customer support automation system" />
                     <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end">
                        <div class="p-6">
                           <span class="text-white font-bold text-xl hover:text-[#5738d9] transition-colors cursor-pointer">View Project</span>
                        </div>
                     </div>
                  </div>
                  <div class="p-6">
                     <h3 class="text-xl font-bold text-gray-800 mb-2">AI-Powered Chatbot</h3>
                     <p class="text-gray-600 mb-4">A smart chatbot for customer support, integrating NLP for personalized assistance.</p>
                     <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">Python</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">TensorFlow</span>
                        <span class="px-3 py-1 bg-[#5738d9]/10 text-[#5738d9] text-sm font-medium rounded-full">NLP</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="mt-16 text-center">
               <span class="inline-block bg-[#5738d9] text-white px-8 py-4 rounded-full font-bold hover:bg-[#4328b9] transition-colors shadow-lg cursor-pointer">View All Projects</span>
            </div>
         </div>
      </section>
      <!-- Clients Section -->
      <section id="clients" class="py-16 md:py-20 bg-gray-50">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
               <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">Our Clients</div>
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Trusted by Leading Companies</h2>
               <p class="text-lg text-gray-600 max-w-3xl mx-auto">We're proud to collaborate with forward-thinking organizations across various industries.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-microsoft text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-google text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-ibm text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-stripe text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-paypal text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-amazon text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
            </div>
         </div>
      </section>
      <!-- Technology Partners Section -->
      <section id="partners" class="py-16 md:py-20">
         <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="text-center mb-16">
               <div class="inline-block px-4 py-2 bg-[#5738d9]/10 text-[#5738d9] font-medium rounded-full mb-4">Our Tech Stack</div>
               <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Technology Partners</h2>
               <p class="text-lg text-gray-600 max-w-3xl mx-auto">We leverage industry-leading technologies to build robust and scalable solutions.</p>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-react text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-node-js text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-angular text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-python text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-aws text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
               <div class="flex items-center justify-center p-4 grayscale hover:grayscale-0 transition-all">
                  <i class="fa-brands fa-docker text-5xl text-gray-400 hover:text-[#5738d9]"></i>
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Section -->
      <section id="contact" class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Contact Us</h2>
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg">
            <form id="contactForm" action="contact" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="business_name" class="block text-sm font-medium text-gray-700">Business Name (Optional)</label>
                        <input type="text" id="business_name" name="business_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-[#5738d9] text-white px-6 py-3 rounded-full font-medium hover:bg-[#4328b9] transition-colors cursor-pointer">Send Message</button>
                </div>
                <div id="thankYouMessage" class="hidden text-green-600 text-center mt-4">Thank you for your submission!</div>
            </form>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = new FormData(this); // Gather form data

        fetch('contact', { // Make sure this matches your endpoint  
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('thankYouMessage').classList.remove('hidden'); // Show thank you message  
                this.reset(); // Optionally reset the form  
            } else {
                alert('An error occurred: ' + data.message); // Handle errors  
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while sending your message.');
        });
    });
</script>
   </body>
</html>
