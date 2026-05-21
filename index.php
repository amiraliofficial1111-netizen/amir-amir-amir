<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'AppsDeddy - Daddy Knows Better';
$pageDescription = 'AppsDeddy - US-based Premium App Development Agency. We build world-class mobile apps, web applications, and digital solutions for businesses across the United States.';
$bodyClass = 'home';
$activePage = 'home';
$showPreloader = true;

require_once 'includes/header.php';
?>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-bg">
            <div class="particles" id="particles"></div>
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
            <div class="grid-pattern"></div>
        </div>
        
        <div class="hero-ellipse" aria-hidden="true"></div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    <span class="title-line">Innovate Create Succeed!!</span>
                </h1>
                
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                    Empowering your business with innovative solutions, delivering reliable, high-quality services, 
                    and partnering for seamless growth and success.
                </p>
                
                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="300">
                    <a href="contact.php" class="btn btn-primary btn-lg btn-glow">
                        <span>Contact Us</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="hero-stats hero-stats-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="hero-stats-inner">
                        <div class="stat-item">
                            <span class="stat-number" data-count="250">0</span><span class="stat-suffix">+</span>
                            <div class="stat-icon"><i class="fas fa-rocket"></i></div>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="120">0</span><span class="stat-suffix">+</span>
                            <div class="stat-icon"><i class="fas fa-smile"></i></div>
                            <span class="stat-label">Happy Clients</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="15">0</span><span class="stat-suffix">+</span>
                            <div class="stat-icon"><i class="fas fa-clock"></i></div>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="30">0</span><span class="stat-suffix">+</span>
                            <div class="stat-icon"><i class="fas fa-trophy"></i></div>
                            <span class="stat-label">Industry Awards</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="hero-visual" data-aos="fade-left" data-aos-delay="500">
                <div class="phone-mockup-container">
                    <div class="phone-glow"></div>
                    <div class="phone-mockup">
                        <div class="phone-notch"></div>
                        <div class="phone-screen">
                            <div class="app-demo">
                                <div class="app-status-bar">
                                    <span>9:41</span>
                                    <div class="status-icons">
                                        <i class="fas fa-signal"></i>
                                        <i class="fas fa-wifi"></i>
                                        <i class="fas fa-battery-full"></i>
                                    </div>
                                </div>
                                <div class="app-header-demo">
                                    <div class="app-logo-demo">
                                        <div class="logo-circle"></div>
                                        <span>AppsDeddy</span>
                                    </div>
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="app-greeting">
                                    <span class="greeting-small">Welcome back,</span>
                                    <span class="greeting-name">John Doe!</span>
                                </div>
                                <div class="app-cards-demo">
                                    <div class="demo-card card-purple floating-card">
                                        <i class="fas fa-chart-line"></i>
                                        <div class="card-text">
                                            <span class="card-value">$24,500</span>
                                            <span class="card-label">Revenue</span>
                                        </div>
                                    </div>
                                    <div class="demo-card card-blue floating-card">
                                        <i class="fas fa-users"></i>
                                        <div class="card-text">
                                            <span class="card-value">1,250</span>
                                            <span class="card-label">Users</span>
                                        </div>
                                    </div>
                                    <div class="demo-card card-green floating-card">
                                        <i class="fas fa-arrow-trend-up"></i>
                                        <div class="card-text">
                                            <span class="card-value">+24%</span>
                                            <span class="card-label">Growth</span>
                                        </div>
                                    </div>
                                    <div class="demo-card card-orange floating-card">
                                        <i class="fas fa-shopping-cart"></i>
                                        <div class="card-text">
                                            <span class="card-value">892</span>
                                            <span class="card-label">Orders</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="app-chart-demo">
                                    <div class="chart-bars">
                                        <div class="bar" style="height: 40%"></div>
                                        <div class="bar" style="height: 60%"></div>
                                        <div class="bar" style="height: 45%"></div>
                                        <div class="bar" style="height: 80%"></div>
                                        <div class="bar" style="height: 65%"></div>
                                        <div class="bar" style="height: 90%"></div>
                                        <div class="bar" style="height: 75%"></div>
                                    </div>
                                </div>
                                <div class="app-nav-demo">
                                    <div class="nav-item-demo active"><i class="fas fa-home"></i></div>
                                    <div class="nav-item-demo"><i class="fas fa-chart-pie"></i></div>
                                    <div class="nav-item-demo"><i class="fas fa-wallet"></i></div>
                                    <div class="nav-item-demo"><i class="fas fa-user"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="floating-element element-1">
                        <i class="fab fa-react"></i>
                        <span>React Native</span>
                    </div>
                    <div class="floating-element element-2">
                        <i class="fab fa-apple"></i>
                        <span>iOS</span>
                    </div>
                    <div class="floating-element element-3">
                        <i class="fab fa-android"></i>
                        <span>Android</span>
                    </div>
                    <div class="floating-element element-4">
                        <i class="fab fa-node-js"></i>
                        <span>Node.js</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="trusted-by">
        <div class="container">
            <p class="trusted-text">Trusted by <strong>150+</strong> companies worldwide</p>
            <div class="logo-marquee">
                <div class="marquee-content">
                    <div class="client-logo"><i class="fab fa-microsoft"></i></div>
                    <div class="client-logo"><i class="fab fa-google"></i></div>
                    <div class="client-logo"><i class="fab fa-amazon"></i></div>
                    <div class="client-logo"><i class="fab fa-spotify"></i></div>
                    <div class="client-logo"><i class="fab fa-slack"></i></div>
                    <div class="client-logo"><i class="fab fa-airbnb"></i></div>
                    <div class="client-logo"><i class="fab fa-uber"></i></div>
                    <div class="client-logo"><i class="fab fa-stripe"></i></div>
                    <div class="client-logo"><i class="fab fa-shopify"></i></div>
                    <div class="client-logo"><i class="fab fa-paypal"></i></div>
                    <div class="client-logo"><i class="fab fa-microsoft"></i></div>
                    <div class="client-logo"><i class="fab fa-google"></i></div>
                    <div class="client-logo"><i class="fab fa-amazon"></i></div>
                    <div class="client-logo"><i class="fab fa-spotify"></i></div>
                    <div class="client-logo"><i class="fab fa-slack"></i></div>
                    <div class="client-logo"><i class="fab fa-airbnb"></i></div>
                    <div class="client-logo"><i class="fab fa-uber"></i></div>
                    <div class="client-logo"><i class="fab fa-stripe"></i></div>
                    <div class="client-logo"><i class="fab fa-shopify"></i></div>
                    <div class="client-logo"><i class="fab fa-paypal"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">
                    <i class="fas fa-cogs"></i>
                    Our Services
                </span>
                <h2 class="section-title">
                    How We Run Our <span class="gradient-text">Business</span>
                </h2>
                <p class="section-description">
                    Innovation-driven, client-focused solutions tailored to transform your business 
                    and create exceptional user experiences across the United States.
                </p>
            </div>
            
            <div class="services-grid services-grid-4">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Web & Mobile App Development</h3>
                        <p>Custom, responsive, and scalable applications built with cutting-edge technologies for web and mobile platforms.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> iOS & Android</li>
                            <li><i class="fas fa-check-circle"></i> React Native & Flutter</li>
                            <li><i class="fas fa-check-circle"></i> Progressive Web Apps</li>
                        </ul>
                    </div>
                    <a href="web-mobile-app-development.php" class="service-link">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-number">01</div>
                </div>

                <div class="service-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-label">
                        <i class="fas fa-fire"></i>
                        <span>Most Popular</span>
                    </div>
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-database"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Data Engineering Solutions</h3>
                        <p>Comprehensive data architecture, processing, and analytics solutions to transform raw data into actionable insights.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> Data Pipelines</li>
                            <li><i class="fas fa-check-circle"></i> Big Data Analytics</li>
                            <li><i class="fas fa-check-circle"></i> Cloud Data Warehousing</li>
                        </ul>
                    </div>
                    <a href="data-engineering-solutions.php" class="service-link">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-number">02</div>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-robot"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Gen AI Integration</h3>
                        <p>Expert guidance and implementation of AI solutions to automate processes and enhance decision-making capabilities.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> AI Strategy</li>
                            <li><i class="fas fa-check-circle"></i> Custom AI Development</li>
                            <li><i class="fas fa-check-circle"></i> Process Automation</li>
                        </ul>
                    </div>
                    <a href="gen-ai-integration.php" class="service-link">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-number">03</div>
                </div>

                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>UX & UI Design</h3>
                        <p>User-centered design approach creating intuitive, engaging, and aesthetically pleasing digital experiences.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> User Research</li>
                            <li><i class="fas fa-check-circle"></i> Wireframing & Prototyping</li>
                            <li><i class="fas fa-check-circle"></i> Design Systems</li>
                        </ul>
                    </div>
                    <a href="ux-ui-design.php" class="service-link">
                        <span>Learn More</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <div class="service-number">04</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-visual" data-aos="fade-right">
                    <div class="about-image-wrapper">
                        <div class="about-img main-img" style="background-image: linear-gradient(135deg, rgba(99, 102, 241, 0.85) 0%, rgba(236, 72, 153, 0.75) 100%), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800');">
                            <div class="img-overlay"></div>
                        </div>
                        <div class="about-img secondary-img" style="background-image: linear-gradient(135deg, rgba(6, 182, 212, 0.8) 0%, rgba(99, 102, 241, 0.75) 100%), url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=600');">
                            <div class="img-overlay"></div>
                        </div>
                        
                        <div class="experience-badge">
                            <div class="exp-icon badge-img-wrap">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=200" alt="Years of Excellence" class="badge-professional-img">
                            </div>
                            <div class="exp-content">
                                <span class="exp-number">15+</span>
                                <span class="exp-text">Years of Excellence</span>
                            </div>
                        </div>
                        
                        <div class="projects-badge">
                            <div class="projects-icon badge-img-wrap">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=200" alt="Projects" class="badge-professional-img">
                            </div>
                            <span class="projects-number">250+</span>
                            <span class="projects-text">Projects</span>
                        </div>
                    </div>
                </div>
                
                <div class="about-content" data-aos="fade-left">
                    <span class="section-tag">
                        <i class="fas fa-info-circle"></i>
                        About AppsDeddy
                    </span>
                    <h2 class="section-title">
                        Building Digital <span class="gradient-text">Excellence</span>
                    </h2>
                    <p class="about-description">
                        Based in Indianapolis, US, we have been a leading app development agency since 2014, 
                        transforming ideas into powerful digital solutions. Our team of skilled professionals 
                        combines creativity with technical expertise to deliver exceptional results for businesses across the United States.
                    </p>
                    
                    <div class="about-features">
                        <div class="about-feature">
                            <div class="feature-icon"><i class="fas fa-lightbulb"></i></div>
                            <div class="feature-text">
                                <h4>Innovation-Driven</h4>
                                <p>We stay ahead of technology trends to deliver forward-thinking solutions.</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon"><i class="fas fa-users"></i></div>
                            <div class="feature-text">
                                <h4>Client-Focused</h4>
                                <p>Your success is our priority, with solutions tailored to your specific needs.</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon"><i class="fas fa-award"></i></div>
                            <div class="feature-text">
                                <h4>Quality-Obsessed</h4>
                                <p>We maintain rigorous standards throughout the development process.</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                            <div class="feature-text">
                                <h4>Result-Oriented</h4>
                                <p>We focus on delivering measurable outcomes that drive business value.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about-actions">
                        <a href="#contact" class="btn btn-primary btn-lg">
                            <span>Work With Us</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#portfolio" class="btn btn-outline btn-lg">
                            <span>View Portfolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag light">
                    <i class="fas fa-project-diagram"></i>
                    Our Process
                </span>
                <h2 class="section-title light">
                    How We <span class="gradient-text">Work</span>
                </h2>
                <p class="section-description light">
                    Our proven 4-step development process ensures successful project delivery every time.
                </p>
            </div>
            
            <div class="process-steps-wrapper process-grid-2">
                <div class="process-steps process-steps-row-1">
                    <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-icon-wrap">
                            <span class="step-number-inline">1</span>
                            <div class="step-icon"><i class="fas fa-search"></i></div>
                        </div>
                        <h3>Discovery</h3>
                        <p>We begin by understanding your business, goals, and challenges through in-depth consultations and research.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-icon-wrap">
                            <span class="step-number-inline">2</span>
                            <div class="step-icon"><i class="fas fa-pencil-ruler"></i></div>
                        </div>
                        <h3>Planning and Design</h3>
                        <p>We create detailed project plans and design prototypes that align with your vision and business requirements.</p>
                    </div>
                    <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-icon-wrap">
                            <span class="step-number-inline">3</span>
                            <div class="step-icon"><i class="fas fa-code"></i></div>
                        </div>
                        <h3>Development</h3>
                        <p>Our skilled developers bring designs to life using the latest technologies and best coding practices.</p>
                    </div>
                </div>
                <div class="process-steps process-steps-row-2">
                    <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-icon-wrap">
                            <span class="step-number-inline">4</span>
                            <div class="step-icon"><i class="fas fa-rocket"></i></div>
                        </div>
                        <h3>Testing & Launch</h3>
                        <p>We conduct thorough testing to ensure quality, then deploy and provide ongoing support for your solution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">
                    <i class="fas fa-briefcase"></i>
                    Featured Projects
                </span>
                <h2 class="section-title">
                    Our Case <span class="gradient-text">Studies</span>
                </h2>
                <p class="section-description">
                    Explore our case studies and see how we've helped businesses across the United States achieve their goals.
                </p>
            </div>
            
            <div class="portfolio-filters" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th"></i>
                    <span>All</span>
                </button>
                <button class="filter-btn" data-filter="mobile">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Mobile Apps</span>
                </button>
                <button class="filter-btn" data-filter="web">
                    <i class="fas fa-globe"></i>
                    <span>Web Apps</span>
                </button>
                <button class="filter-btn" data-filter="design">
                    <i class="fas fa-palette"></i>
                    <span>UI/UX</span>
                </button>
            </div>
            
            <div class="portfolio-grid">
                <div class="portfolio-item" data-category="mobile" data-aos="fade-up">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-1">
                            <div class="portfolio-icon"><i class="fas fa-leaf"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">Web App</span>
                                <h3>Green Platter</h3>
                                <p>Client: Greenplate Foundation</p>
                                <div class="portfolio-tech">
                                    <span>React Native</span><span>Node.js</span><span>MongoDB</span>
                                </div>
                                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="portfolio-btn" aria-label="View on Behance"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-2">
                            <div class="portfolio-icon"><i class="fas fa-shopping-cart"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">Publishing</span>
                                <h3>Aurora Tales</h3>
                                <p>Client: IndieWriters Collective</p>
                                <div class="portfolio-tech">
                                    <span>Next.js</span><span>Stripe</span><span>PostgreSQL</span>
                                </div>
                                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="portfolio-btn" aria-label="View on Behance"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-3">
                            <div class="portfolio-icon"><i class="fas fa-heartbeat"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">UI/UX Design</span>
                                <h3>HealthHub</h3>
                                <p>Healthcare Dashboard for 50+ Hospitals</p>
                                <div class="portfolio-tech">
                                    <span>Figma</span><span>React</span><span>D3.js</span>
                                </div>
                                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="portfolio-btn" aria-label="View on Behance"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-4">
                            <div class="portfolio-icon"><i class="fas fa-utensils"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">Mobile App</span>
                                <h3>FoodieGo</h3>
                                <p>Food Delivery App serving 200+ restaurants</p>
                                <div class="portfolio-tech">
                                    <span>Flutter</span><span>Firebase</span><span>Stripe</span>
                                </div>
                                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="portfolio-btn" aria-label="View on Behance"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-5">
                            <div class="portfolio-icon"><i class="fas fa-graduation-cap"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">Web App</span>
                                <h3>LearnPro</h3>
                                <p>E-learning Platform with 50K+ students</p>
                                <div class="portfolio-tech">
                                    <span>Vue.js</span><span>Laravel</span><span>MySQL</span>
                                </div>
                                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="portfolio-btn" aria-label="View on Behance"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-6">
                            <div class="portfolio-icon"><i class="fas fa-plane"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">UI/UX Design</span>
                                <h3>TravelMate</h3>
                                <p>Travel Booking App with 5-star rating</p>
                                <div class="portfolio-tech">
                                    <span>Sketch</span><span>Swift</span><span>Kotlin</span>
                                </div>
                                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="portfolio-btn" aria-label="View on Behance"><i class="fas fa-external-link-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="portfolio-cta" data-aos="fade-up">
                <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-lg portfolio-cta-behance">
                    <i class="fab fa-behance"></i>
                    <span>View on Behance</span>
                    <i class="fas fa-external-link-alt"></i>
                </a>
                <a href="#contact" class="btn btn-primary btn-lg">
                    <span>Start Your Project</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">
                    <i class="fas fa-quote-left"></i>
                    Testimonials
                </span>
                <h2 class="section-title">
                    What Clients <span class="gradient-text">Say</span>
                </h2>
                <p class="section-description">
                    Don't just take our word for it - hear from our satisfied clients.
                </p>
            </div>
            
            <div class="testimonials-wrapper">
                <div class="testimonial-slider" id="testimonialSlider">
                    <div class="testimonial-track">
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-text">"AppsDeddy's IT services have been exceptional! Their proactive approach, personalized service, and commitment to cybersecurity have been a game-changer for our business. Their knowledgeable team has helped us optimize our IT infrastructure."</p>
                                <div class="testimonial-author">
                                    <div class="author-image gradient-1"><i class="fas fa-user"></i></div>
                                    <div class="author-info">
                                        <h4>Jackson Matthews</h4>
                                        <p>CEO of TechSolutions Pro</p>
                                    </div>
                                    <div class="company-logo"><i class="fas fa-building"></i></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-text">"AppsDeddy's IT services have been instrumental in helping our business operate smoothly and efficiently. Their team is highly responsive and knowledgeable, and we're thrilled with the results."</p>
                                <div class="testimonial-author">
                                    <div class="author-image gradient-2"><i class="fas fa-user"></i></div>
                                    <div class="author-info">
                                        <h4>Mark Davis</h4>
                                        <p>CEO of Fast-Rush</p>
                                    </div>
                                    <div class="company-logo"><i class="fas fa-shopping-bag"></i></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-text">"AppsDeddy's IT services have been exceptional! Their proactive approach, personalized service, and commitment to cybersecurity have been a game-changer for our business."</p>
                                <div class="testimonial-author">
                                    <div class="author-image gradient-3"><i class="fas fa-user"></i></div>
                                    <div class="author-info">
                                        <h4>Jackson Matthews</h4>
                                        <p>CEO of TechSolutions Pro</p>
                                    </div>
                                    <div class="company-logo"><i class="fas fa-chart-line"></i></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <div class="testimonial-card-inner">
                                <div class="testimonial-rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="testimonial-text">"From concept to launch, AppsDeddy delivered on every promise. Their attention to detail and clear communication made the entire process smooth and stress-free."</p>
                                <div class="testimonial-author">
                                    <div class="author-image gradient-1"><i class="fas fa-user"></i></div>
                                    <div class="author-info">
                                        <h4>Emily Rodriguez</h4>
                                        <p>Product Lead, ScaleUp</p>
                                    </div>
                                    <div class="company-logo"><i class="fas fa-building"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-controls">
                    <button class="testimonial-btn prev" id="prevTestimonial"><i class="fas fa-arrow-left"></i></button>
                    <div class="testimonial-dots" id="testimonialDots">
                        <span class="dot active"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
                    </div>
                    <button class="testimonial-btn next" id="nextTestimonial"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-content" data-aos="fade-right">
                    <span class="section-tag">
                        <i class="fas fa-question-circle"></i>
                        FAQ
                    </span>
                    <h2 class="section-title">
                        Frequently Asked <span class="gradient-text">Questions</span>
                    </h2>
                    <p class="faq-description">
                        Can't find the answer you're looking for? 
                        <a href="#contact">Contact our support team</a>.
                    </p>
                    
                    <div class="faq-stats">
                        <div class="faq-stat">
                            <div class="stat-icon"><i class="fas fa-comments"></i></div>
                            <div class="stat-text">
                                <span class="stat-value">24/7</span>
                                <span class="stat-label">Support</span>
                            </div>
                        </div>
                        <div class="faq-stat">
                            <div class="stat-icon"><i class="fas fa-clock"></i></div>
                            <div class="stat-text">
                                <span class="stat-value">&lt;2hrs</span>
                                <span class="stat-label">Response Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="faq-accordion" data-aos="fade-left">
                    <div class="accordion-item active">
                        <button class="accordion-header">
                            <span>How long does it take to build an app?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="accordion-content">
                            <p>The timeline depends on the complexity of your project. A simple MVP can take 4-8 weeks, while a complex enterprise app might take 3-6 months. We'll provide a detailed timeline after our initial consultation.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>What technologies do you use?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="accordion-content">
                            <p>We use cutting-edge technologies including React Native, Flutter, Swift, Kotlin for mobile; React, Vue.js, Next.js for web; Node.js and Python for backend; and AWS, Google Cloud for infrastructure.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>Do you provide post-launch support?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="accordion-content">
                            <p>Yes! All our packages include post-launch support. We offer maintenance plans ranging from 1 to 12 months, including bug fixes, updates, and feature enhancements to ensure your app runs smoothly.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>How much does app development cost?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="accordion-content">
                            <p>Costs vary based on complexity, features, and platforms. Basic apps start around $2,999, while complex apps can range from $15,000+. We offer free consultations to provide accurate quotes based on your requirements.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span>Will I own the source code?</span>
                            <i class="fas fa-plus"></i>
                        </button>
                        <div class="accordion-content">
                            <p>Absolutely! Upon project completion and final payment, you receive full ownership of all source code, designs, and assets. We also provide documentation for easy handover or future development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="cta-bg">
            <div class="cta-shape shape-1"></div>
            <div class="cta-shape shape-2"></div>
        </div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Invest in Tailored <span class="gradient-text-light">Software Solutions</span></h2>
                <p>Partner with us to drive your business forward with custom-built, high-performance software. Elevate your digital capabilities with our strategic, custom-crafted software. Start transforming your business today!</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-white btn-lg">
                        <span>Start Your Project</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="cta-features">
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Free Consultation</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>No Hidden Fees</span>
                    </div>
                    <div class="cta-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Money-Back Guarantee</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag">
                    <i class="fas fa-envelope"></i>
                    Contact Us
                </span>
                <h2 class="section-title">
                    Get In <span class="gradient-text">Touch</span>
                </h2>
                <p class="section-description">
                    Have a project in mind? Let's discuss how we can help you achieve your goals.
                </p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <div class="info-card">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info-content">
                            <h4>Our Office</h4>
                            <p>8520 Allison Pointe Blvd Ste 223<br>Indianapolis, IN, US 46250</p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="info-content">
                            <h4>Email Us</h4>
                            <p><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
                        </div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                        <div class="info-content">
                            <h4>Working Hours</h4>
                            <p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="<?= SOCIAL_FACEBOOK ?>" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= SOCIAL_TWITTER ?>" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="<?= SOCIAL_INSTAGRAM ?>" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="<?= SOCIAL_LINKEDIN ?>" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?= SOCIAL_YOUTUBE ?>" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="contact-form-wrapper" data-aos="fade-left">
                    <form class="contact-form" id="contactForm" action="includes/mail-handler.php" method="POST">
                        <input type="hidden" name="csrf_token" value="<?= $csrfToken ?>">
                        <div style="position:absolute;left:-9999px;"><input type="text" name="website_url" tabindex="-1" autocomplete="off"></div>
                        
                        <div class="form-header">
                            <h3>Send us a message</h3>
                            <p>We'll get back to you within 24 hours</p>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="service">Service Needed</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-cog"></i>
                                    <select id="service" name="service" required>
                                        <option value="" disabled selected>Select a service</option>
                                        <option value="mobile">Mobile App Development</option>
                                        <option value="web">Web Development</option>
                                        <option value="design">UI/UX Design</option>
                                        <option value="cloud">Cloud Solutions</option>
                                        <option value="ai">AI & Machine Learning</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group full-width">
                                <label for="budget">Estimated Budget</label>
                                <div class="budget-options">
                                    <label class="budget-option"><input type="radio" name="budget" value="2k-5k"><span>$2K - $5K</span></label>
                                    <label class="budget-option"><input type="radio" name="budget" value="5k-10k"><span>$5K - $10K</span></label>
                                    <label class="budget-option"><input type="radio" name="budget" value="10k-25k"><span>$10K - $25K</span></label>
                                    <label class="budget-option"><input type="radio" name="budget" value="25k+"><span>$25K+</span></label>
                                </div>
                            </div>
                            <div class="form-group full-width">
                                <label for="message">Project Details</label>
                                <div class="input-wrapper textarea-wrapper">
                                    <i class="fas fa-comment-alt"></i>
                                    <textarea id="message" name="message" placeholder="Tell us about your project..." rows="4" required></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg btn-full">
                            <span>Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        
                        <p class="form-note">
                            <i class="fas fa-lock"></i>
                            Your information is secure and will never be shared.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
