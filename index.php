<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'home';
$activePage = 'home';
$showPreloader = false;

require_once 'includes/header.php';
?>

    <!-- Hero -->
    <section id="home" class="hero hero--solo">
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
                <p class="hero-eyebrow" data-aos="fade-up">US · Canada · Australia</p>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    <span class="title-line">Enterprise Software for AI, FinTech, Healthcare &amp; SaaS</span>
                </h1>
                <p class="hero-tagline" data-aos="fade-up" data-aos-delay="150">
                    We design and build mission-critical platforms for product and engineering leaders: AI automation, regulated products, custom SaaS, .NET, and cloud.
                </p>

                <div class="hero-buttons" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-primary btn-lg btn-glow">
                        <span>Book a Discovery Call</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="<?= pageUrl('case-studies') ?>" class="btn btn-outline btn-lg">
                        <span>View Case Studies</span>
                    </a>
                </div>
                <p class="hero-microcopy" data-aos="fade-up" data-aos-delay="250">30-min call · Proposal within 5 business days</p>

                <div class="hero-stats hero-stats-card hero-stats--compact" data-aos="fade-up" data-aos-delay="300">
                    <div class="hero-stats-inner">
                        <div class="stat-item">
                            <span class="stat-number" data-count="250">250</span><span class="stat-suffix">+</span>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="12">12</span><span class="stat-suffix">+</span>
                            <span class="stat-label">Years</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-count="3">3</span>
                            <span class="stat-label">Markets</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="services services--home">
        <div class="container">
            <div class="section-header section-header--compact" data-aos="fade-up">
                <h2 class="section-title">What We <span class="gradient-text">Build</span></h2>
                <p class="section-description"><a href="<?= pageUrl('services') ?>">View all services</a></p>
            </div>

            <div class="services-core-grid services-core-grid--home">
                <a href="<?= pageUrl('services/ai-automation') ?>" class="service-core-card" data-aos="fade-up">
                    <div class="service-core-icon"><i class="fas fa-robot"></i></div>
                    <h3>AI Automation</h3>
                    <p>Production AI, agents, and workflow automation.</p>
                </a>
                <a href="<?= pageUrl('services/fintech') ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-core-icon"><i class="fas fa-university"></i></div>
                    <h3>FinTech</h3>
                    <p>Payments, lending, and compliance-ready platforms.</p>
                </a>
                <a href="<?= pageUrl('services/healthcare') ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-core-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>Healthcare</h3>
                    <p>EHR integrations and HIPAA-aware systems.</p>
                </a>
                <a href="<?= pageUrl('services/custom-saas') ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="service-core-icon"><i class="fas fa-cloud"></i></div>
                    <h3>Custom SaaS</h3>
                    <p>Multi-tenant products from MVP to scale.</p>
                </a>
                <a href="<?= pageUrl('services/enterprise-dotnet') ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-core-icon"><i class="fas fa-server"></i></div>
                    <h3>Enterprise .NET</h3>
                    <p>ASP.NET Core, Azure, and modernization.</p>
                </a>
                <a href="<?= pageUrl('services/cloud-solutions') ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="service-core-icon"><i class="fas fa-network-wired"></i></div>
                    <h3>Cloud</h3>
                    <p>Azure/AWS architecture, DevOps, and security.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section id="portfolio" class="portfolio portfolio--home">
        <div class="container">
            <div class="section-header section-header--compact" data-aos="fade-up">
                <h2 class="section-title">Selected <span class="gradient-text">Work</span></h2>
                <p class="section-description"><a href="<?= pageUrl('case-studies') ?>">View all case studies</a></p>
            </div>

            <div class="portfolio-grid portfolio-grid--home">
                <a href="<?= pageUrl('case-studies/healthhub') ?>" class="portfolio-item portfolio-item--link" data-aos="fade-up">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-3">
                            <div class="portfolio-icon"><i class="fas fa-heartbeat"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">Healthcare</span>
                                <h3>HealthHub</h3>
                                <p>40% faster clinical reporting · 50+ facilities</p>
                                <div class="portfolio-tech"><span>.NET</span><span>React</span><span>Azure</span></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?= pageUrl('case-studies/aurora-tales') ?>" class="portfolio-item portfolio-item--link" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-2">
                            <div class="portfolio-icon"><i class="fas fa-book-open"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">SaaS</span>
                                <h3>Aurora Tales</h3>
                                <p>Publishing platform with payments &amp; workflows</p>
                                <div class="portfolio-tech"><span>Next.js</span><span>Stripe</span></div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?= pageUrl('case-studies/operations-automation') ?>" class="portfolio-item portfolio-item--link" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="portfolio-image gradient-1">
                            <div class="portfolio-icon"><i class="fas fa-robot"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category">AI</span>
                                <h3>Operations Automation</h3>
                                <p>LLM workflows that cut manual processing time</p>
                                <div class="portfolio-tech"><span>Python</span><span>Azure</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="section-cta-inline" data-aos="fade-up">
                <a href="<?= pageUrl('case-studies') ?>" class="btn btn-outline btn-lg">View All Case Studies</a>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonials testimonials--home">
        <div class="container">
            <blockquote class="home-quote" data-aos="fade-up">
                <p>"Clear scope, senior engineers, and measurable delivery, not demo-ware."</p>
                <footer>
                    <strong>Sarah Mitchell</strong> · Founder, TechVentures
                    <a href="<?= pageUrl('testimonials') ?>">More reviews</a>
                </footer>
            </blockquote>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq" class="faq faq--home">
        <div class="container">
            <div class="section-header section-header--compact" data-aos="fade-up">
                <h2 class="section-title">Common <span class="gradient-text">Questions</span></h2>
            </div>

            <div class="faq-accordion faq-accordion--home" data-aos="fade-up">
                <div class="accordion-item active">
                    <button type="button" class="accordion-header" aria-expanded="true" aria-controls="faq-panel-1" id="faq-trigger-1">
                        <span>How much does a typical engagement cost?</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </button>
                    <div class="accordion-content" id="faq-panel-1" role="region" aria-labelledby="faq-trigger-1">
                        <p>Most builds start in the tens of thousands and scale with complexity and compliance. We scope after a discovery call.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-panel-2" id="faq-trigger-2">
                        <span>Do you work with Canada and Australia?</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </button>
                    <div class="accordion-content" id="faq-panel-2" role="region" aria-labelledby="faq-trigger-2">
                        <p>Yes. We are US-based with overlap for EST/CST and support for AEST/AEDT stakeholders.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-panel-3" id="faq-trigger-3">
                        <span>Will we own the source code?</span>
                        <i class="fas fa-plus" aria-hidden="true"></i>
                    </button>
                    <div class="accordion-content" id="faq-panel-3" role="region" aria-labelledby="faq-trigger-3">
                        <p>Yes. Upon completion and final payment, you receive the agreed code, designs, and assets.</p>
                    </div>
                </div>
            </div>

            <p class="section-cta-inline" data-aos="fade-up">
                <a href="<?= pageUrl('faq') ?>">View all FAQs</a>
            </p>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="cta cta--home">
        <div class="cta-bg">
            <div class="cta-shape shape-1"></div>
            <div class="cta-shape shape-2"></div>
        </div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Book a <span class="gradient-text-light">Discovery Call</span></h2>
                <p>Tell us what you're building. We'll map scope and next steps within one working day.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg">
                        <span>Request a Proposal</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <p class="cta-email"><?= emailLink() ?></p>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
