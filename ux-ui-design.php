<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'UX & UI Design | AppsDeddy - Engineering Smart Solutions';
$pageDescription = 'User-centered UX research, wireframes, prototypes, and polished UI design for web and mobile products. Create engaging digital experiences with AppsDeddy.';
$pageKeywords = 'UX UI design services, user experience design, UI design agency, wireframing prototyping, mobile app design, web design Indianapolis';
$bodyClass = 'service-page';
$activePage = 'services';
$pagePreloadImage = SITE_BASE . serviceImage('hero-ux-ui');

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>UX & UI Design</h1>
                <p>Create intuitive, engaging digital experiences that resonate with your audience.</p>
            </div>
        </div>
    </section>

    <section class="service-why-choose">
        <div class="container">
            <div class="service-content-wrapper">
                <div class="service-content-text" data-aos="fade-right">
                    <h2 class="section-title">Create Intuitive <span class="gradient-text">Digital Experiences</span></h2>
                    <h3 class="service-subtitle">Experience and Expertise</h3>
                    <p>At Appsdeddy, we specialize in creating user-centered designs that combine aesthetics with functionality. Our UX/UI design team crafts intuitive, engaging, and visually stunning digital experiences that resonate with your audience. From wireframes to pixel-perfect interfaces, we transform ideas into beautiful, user-friendly designs that drive engagement and conversions.</p>
                </div>
                <div class="service-content-image" data-aos="fade-left">
                    <?= serviceImg('hero-ux-ui', 'UX & UI Design', ['eager' => true, 'width' => 800, 'height' => 500]) ?>
                </div>
            </div>
        </div>
    </section>

    <section class="service-offerings">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">UX & UI Design <span class="gradient-text">Services</span></h2>
            <div class="offerings-grid">
                <div class="offering-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="offering-image"><?= serviceImg('offering-5', 'User Research & Analysis') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-palette"></i></div>
                        <h3>User Research & Analysis</h3>
                        <p>Conduct comprehensive user research to understand behaviors, needs, and pain points for informed design decisions.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="offering-image"><?= serviceImg('offering-6', 'Wireframing & Prototyping') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-drafting-compass"></i></div>
                        <h3>Wireframing & Prototyping</h3>
                        <p>Create detailed wireframes and interactive prototypes to visualize and test design concepts before development.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="offering-image"><?= serviceImg('offering-7', 'UI Design & Branding') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-paint-brush"></i></div>
                        <h3>UI Design & Branding</h3>
                        <p>Design beautiful, cohesive interfaces that align with your brand identity and enhance user experience.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="offering-image"><?= serviceImg('offering-8', 'Responsive Design') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Responsive Design</h3>
                        <p>Ensure seamless experiences across all devices with mobile-first, responsive design principles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-process">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Design <span class="gradient-text">Process</span></h2>
            <p class="section-subtitle" data-aos="fade-up">We follow a user-centric, iterative approach to deliver exceptional designs</p>
            <div class="process-steps-wrapper service-process-steps">
                <div class="process-steps-row process-steps-row-1">
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">1</div>
                        <div class="process-content"><h4>Research & Discovery</h4><p>Understand your users, business goals, and market landscape through comprehensive research.</p></div>
                    </div>
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">2</div>
                        <div class="process-content"><h4>Information Architecture</h4><p>Structure content and features logically to create intuitive navigation and user flows.</p></div>
                    </div>
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">3</div>
                        <div class="process-content"><h4>Wireframing & Prototyping</h4><p>Create low and high-fidelity prototypes to visualize and test design concepts.</p></div>
                    </div>
                </div>
                <div class="process-steps-row process-steps-row-2">
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="process-number">4</div>
                        <div class="process-content"><h4>Visual Design</h4><p>Develop pixel-perfect UI designs with attention to typography, color, and visual hierarchy.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-custom-solutions">
        <div class="container">
            <div class="service-content-wrapper reverse">
                <div class="service-content-image" data-aos="fade-right">
                    <?= serviceImg('custom-ux-ui', 'UX UI Design') ?>
                </div>
                <div class="service-content-text" data-aos="fade-left">
                    <h2 class="section-title">Why Choose Appsdeddy for <span class="gradient-text">UX/UI Design?</span></h2>
                    <h3 class="service-subtitle">Experience and Expertise</h3>
                    <p>Our design solutions are crafted with a deep understanding of user psychology and modern design principles. We combine creativity with data-driven insights to create interfaces that not only look beautiful but also drive business results. With expertise in the latest design tools and trends, we deliver designs that are both timeless and cutting-edge, ensuring your digital products stand out in the market.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg"><span>Get Started Today</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready for Beautiful <span class="gradient-text-light">Designs?</span></h2>
                <p>Let's create digital experiences that users love.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg"><span>Get Free Quote</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
