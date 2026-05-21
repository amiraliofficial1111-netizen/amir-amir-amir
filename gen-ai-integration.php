<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Gen AI Integration & Consulting | AppsDeddy - Daddy Knows Better';
$pageDescription = 'Gen AI integration and consulting. Automate processes and enhance decision-making with expert AI solutions from AppsDeddy.';
$bodyClass = 'service-page';
$activePage = 'services';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Gen AI Integration & Consulting</h1>
                <p>Transform your business with generative AI solutions that drive innovation and streamline operations.</p>
            </div>
        </div>
    </section>

    <section class="service-why-choose">
        <div class="container">
            <div class="service-content-wrapper">
                <div class="service-content-text" data-aos="fade-right">
                    <h2 class="section-title">Transform Your Business with <span class="gradient-text">Generative AI</span></h2>
                    <h3 class="service-subtitle">Experience and Expertise</h3>
                    <p>At Appsdeddy, we specialize in integrating generative AI solutions that drive innovation, streamline operations, and enhance user experiences. Our expert consultants work closely with you to design, develop, and deploy AI-powered systems that align with your business objectives. From startups to enterprises, we help you harness the power of generative AI to stay ahead in a competitive landscape.</p>
                </div>
                <div class="service-content-image" data-aos="fade-left">
                    <img src="<?= serviceImage('hero-gen-ai.jpg') ?>" alt="Gen AI Integration">
                </div>
            </div>
        </div>
    </section>

    <section class="service-offerings">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Generative AI <span class="gradient-text">Services</span></h2>
            <div class="offerings-grid">
                <div class="offering-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="offering-image"><img src="<?= serviceImage('offering-1.jpg') ?>" alt="AI Strategy Consulting"></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-bullseye"></i></div>
                        <h3>AI Strategy Consulting</h3>
                        <p>Develop a tailored AI roadmap to align generative AI with your business goals and maximize ROI.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="offering-image"><img src="<?= serviceImage('offering-2.jpg') ?>" alt="Generative AI Integration"></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-robot"></i></div>
                        <h3>Generative AI Integration</h3>
                        <p>Integrate advanced AI models (e.g., GPT, DALL-E, Stable Diffusion) into your applications for enhanced functionality.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="offering-image"><img src="<?= serviceImage('offering-3.jpg') ?>" alt="Custom AI Development"></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-cog"></i></div>
                        <h3>Custom AI Development</h3>
                        <p>Build bespoke generative AI solutions using Python, TensorFlow, and PyTorch for unique business needs.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="offering-image"><img src="<?= serviceImage('offering-4.jpg') ?>" alt="AI Security & Ethics"></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3>AI Security & Ethics</h3>
                        <p>Ensure secure, compliant, and ethical AI systems with robust encryption and responsible AI practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-process">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">AI Integration <span class="gradient-text">Process</span></h2>
            <p class="section-subtitle" data-aos="fade-up">We follow a structured, client-centric approach to deliver impactful AI solutions</p>
            <div class="process-steps-wrapper service-process-steps">
                <div class="process-steps-row process-steps-row-1">
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">1</div>
                        <div class="process-content"><h4>Discovery & Strategy</h4><p>Assess your needs and define a generative AI strategy tailored to your goals.</p></div>
                    </div>
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">2</div>
                        <div class="process-content"><h4>Prototyping & Design</h4><p>Create AI prototypes and validate use cases for optimal performance.</p></div>
                    </div>
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">3</div>
                        <div class="process-content"><h4>Development & Integration</h4><p>Build and integrate AI models using modern frameworks and APIs.</p></div>
                    </div>
                </div>
                <div class="process-steps-row process-steps-row-2">
                    <div class="process-item process-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="process-number">4</div>
                        <div class="process-content"><h4>Testing & Validation</h4><p>Ensure accuracy, security, and scalability through rigorous testing.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service-custom-solutions">
        <div class="container">
            <div class="service-content-wrapper reverse">
                <div class="service-content-image" data-aos="fade-right">
                    <img src="<?= serviceImage('custom-gen-ai.jpg') ?>" alt="Gen AI">
                </div>
                <div class="service-content-text" data-aos="fade-left">
                    <h2 class="section-title">Why Appsdeddy for <span class="gradient-text">Generative AI?</span></h2>
                    <h3 class="service-subtitle">Experience and Expertise</h3>
                    <p>Our generative AI solutions are custom-built to integrate seamlessly with your existing systems, ensuring scalability, security, and efficiency. With expertise in cutting-edge AI frameworks and a commitment to ethical practices, we deliver solutions that drive innovation and business value. Our nearshore model offers cost-effective, high-quality services tailored to your needs.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg"><span>Get Started Today</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Harness <span class="gradient-text-light">AI Power?</span></h2>
                <p>Let's discuss how generative AI can transform your business.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg"><span>Get Free Quote</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
