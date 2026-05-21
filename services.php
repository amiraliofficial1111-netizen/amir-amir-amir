<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Our Services | AppsDeddy - Daddy Knows Better';
$pageDescription = 'AppsDeddy Services - Mobile App Development, Web Development, UI/UX Design, Cloud Solutions, AI & Cybersecurity.';
$bodyClass = 'service-page';
$activePage = 'services';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Our Services</h1>
                <p>Comprehensive digital services tailored to transform your business and create exceptional user experiences.</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-cogs"></i> Our Core Services</span>
                <h2 class="section-title">Solutions That <span class="gradient-text">Drive Growth</span></h2>
                <p class="section-description">Comprehensive digital services tailored to transform your business and create exceptional user experiences.</p>
            </div>
            <div class="services-core-grid">
                <a href="web-mobile-app-development.php" class="service-core-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-core-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Web & Mobile App Development</h3>
                    <p>Native and cross-platform apps, web applications, and cloud integration for iOS, Android, and web.</p>
                    <span class="service-core-link">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="data-engineering-solutions.php" class="service-core-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-core-icon"><i class="fas fa-database"></i></div>
                    <h3>Data Engineering Solutions</h3>
                    <p>Data pipelines, integration, security, and big data analytics with modern tools and frameworks.</p>
                    <span class="service-core-link">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="gen-ai-integration.php" class="service-core-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-core-icon"><i class="fas fa-robot"></i></div>
                    <h3>Gen AI Integration & Consulting</h3>
                    <p>AI strategy, generative AI integration, custom AI development, and AI security & ethics.</p>
                    <span class="service-core-link">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="ux-ui-design.php" class="service-core-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-core-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>UX & UI Design</h3>
                    <p>User research, wireframing, prototyping, UI design, branding, and responsive design.</p>
                    <span class="service-core-link">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
            <div class="section-header" data-aos="fade-up" style="margin-top: 80px;">
                <span class="section-tag"><i class="fas fa-th-large"></i> All Services</span>
                <h2 class="section-title">Complete <span class="gradient-text">Service Portfolio</span></h2>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Mobile App Development</h3>
                        <p>Native and cross-platform mobile applications for iOS and Android that deliver exceptional user experiences.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> iOS & Android Native</li>
                            <li><i class="fas fa-check-circle"></i> React Native & Flutter</li>
                            <li><i class="fas fa-check-circle"></i> App Store Optimization</li>
                        </ul>
                    </div>
                    <a href="web-mobile-app-development.php" class="service-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                    <div class="service-number">01</div>
                </div>
                <div class="service-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-label"><i class="fas fa-fire"></i><span>Most Popular</span></div>
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Web Development</h3>
                        <p>Stunning, responsive websites and web applications built with cutting-edge technologies.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> Custom Web Apps</li>
                            <li><i class="fas fa-check-circle"></i> E-commerce Solutions</li>
                            <li><i class="fas fa-check-circle"></i> Progressive Web Apps</li>
                        </ul>
                    </div>
                    <a href="web-mobile-app-development.php" class="service-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                    <div class="service-number">02</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>UI/UX Design</h3>
                        <p>Beautiful, intuitive designs that captivate users and provide seamless experiences.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> User Research</li>
                            <li><i class="fas fa-check-circle"></i> Wireframing & Prototyping</li>
                            <li><i class="fas fa-check-circle"></i> Design Systems</li>
                        </ul>
                    </div>
                    <a href="ux-ui-design.php" class="service-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                    <div class="service-number">03</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-cloud"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Cloud Solutions</h3>
                        <p>Scalable cloud infrastructure that powers your applications with reliability.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> AWS & Azure</li>
                            <li><i class="fas fa-check-circle"></i> DevOps & CI/CD</li>
                            <li><i class="fas fa-check-circle"></i> Cloud Migration</li>
                        </ul>
                    </div>
                    <a href="web-mobile-app-development.php" class="service-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                    <div class="service-number">04</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-robot"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>AI & Machine Learning</h3>
                        <p>Intelligent solutions powered by AI to automate processes and gain insights.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> AI Chatbots</li>
                            <li><i class="fas fa-check-circle"></i> Predictive Analytics</li>
                            <li><i class="fas fa-check-circle"></i> Computer Vision</li>
                        </ul>
                    </div>
                    <a href="gen-ai-integration.php" class="service-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                    <div class="service-number">05</div>
                </div>
                <div class="service-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-icon-wrapper">
                        <div class="service-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="icon-bg"></div>
                    </div>
                    <div class="service-content">
                        <h3>Cybersecurity</h3>
                        <p>Protect your digital assets with comprehensive security solutions.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check-circle"></i> Security Audits</li>
                            <li><i class="fas fa-check-circle"></i> Penetration Testing</li>
                            <li><i class="fas fa-check-circle"></i> Compliance</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="service-link"><span>Get Started</span><i class="fas fa-arrow-right"></i></a>
                    <div class="service-number">06</div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Build Something <span class="gradient-text-light">Amazing?</span></h2>
                <p>Let's turn your idea into a reality. Get a free consultation and project estimate today.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg"><span>Start Your Project</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
