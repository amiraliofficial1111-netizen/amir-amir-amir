<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Gen AI Integration & Consulting | AppsDeddy - Engineering Smart Solutions';
$pageDescription = 'Custom AI integration and automation services for US businesses. We build AI agents, RAG pipelines, LLM integrations, and workflow automation. Based in Indianapolis.';
$pageKeywords = 'gen AI integration, AI automation agency, custom AI development, LLM integration, AI consulting Indianapolis, workflow automation AI';
$bodyClass = 'service-page';
$activePage = 'services';
$pagePreloadImage = SITE_BASE . serviceImage('hero-gen-ai');

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
                    <?= serviceImg('hero-gen-ai', 'Gen AI Integration', ['eager' => true, 'width' => 800, 'height' => 500]) ?>
                </div>
            </div>
        </div>
    </section>

    <section class="service-offerings">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">AI Solutions for <span class="gradient-text">Real Business Problems</span></h2>
            <div class="offerings-grid">
                <div class="offering-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="offering-image"><?= serviceImg('offering-1', 'AI Document Processing') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-file-invoice"></i></div>
                        <h3>AI Document Processing</h3>
                        <p>Extract data from invoices, contracts, and forms automatically — no more manual data entry.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="offering-image"><?= serviceImg('offering-2', 'Custom AI Chatbots') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-comments"></i></div>
                        <h3>Custom AI Chatbots</h3>
                        <p>Train on your data, answer your customers 24/7 — support, sales, and internal help desks.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="offering-image"><?= serviceImg('offering-3', 'AI Workflow Automation') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-project-diagram"></i></div>
                        <h3>AI Workflow Automation</h3>
                        <p>Connect your tools and remove manual steps — from lead routing to report generation.</p>
                    </div>
                </div>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="offering-image"><?= serviceImg('offering-4', 'LLM Integration') ?></div>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas fa-plug"></i></div>
                        <h3>LLM Integration</h3>
                        <p>Add GPT-4, Claude, or Gemini into your existing product — without rebuilding from scratch.</p>
                    </div>
                </div>
            </div>
            <div class="pricing-note" data-aos="fade-up">
                <i class="fas fa-tag" aria-hidden="true"></i>
                <p>AI projects typically start at <strong>$3,500</strong> for a focused automation. Enterprise integrations from <strong>$15,000</strong>. <a href="contact.php">Free scoping call</a> to get an accurate quote for your project.</p>
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
                    <?= serviceImg('custom-gen-ai', 'Gen AI') ?>
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
                <p>Let's discuss how generative AI can transform your business. Projects start at $3,500 — book a free scoping call for a quote tailored to you.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg"><span>Get Free Quote</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
