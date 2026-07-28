<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = '';
$activePage = 'about';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>About AppsDeddy</h1>
                <p>US-based software engineering partner for AI, FinTech, healthcare, and SaaS teams across the US, Canada, and Australia.</p>
            </div>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="about-intro-grid">
                <div class="about-intro-content" data-aos="fade-right">
                    <span class="section-tag"><i class="fas fa-building"></i> About AppsDeddy</span>
                    <h2 class="section-title">Enterprise Software, <span class="gradient-text">Built to Ship</span></h2>
                    <p class="about-intro-text"><strong>AppsDeddy</strong> helps product and engineering leaders build production-grade platforms: AI automation, regulated FinTech and healthcare systems, multi-tenant SaaS, and enterprise .NET on Azure and AWS. Founded in Indianapolis in 2014, we partner with teams who need clear scope, senior delivery, and measurable outcomes, not demo-ware.</p>
                    <div class="about-intro-actions">
                        <a href="<?= pageUrl('contact') ?>" class="btn btn-primary btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                        <a href="<?= pageUrl('how-we-work') ?>" class="btn btn-outline btn-lg"><span>How We Work</span></a>
                    </div>
                </div>
                <div class="about-intro-visual" data-aos="fade-left">
                    <div class="about-intro-image">
                        <div class="intro-img-wrapper intro-img-team">
                            <div class="intro-img-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-founder-editorial" aria-labelledby="founder-heading">
        <div class="founder-editorial-grid">
            <div class="founder-editorial-visual">
                <div class="founder-editorial-photo">
                    <img src="<?= assetImage(FOUNDER_PHOTO) ?>" alt="<?= sanitize(FOUNDER_NAME) ?>, <?= sanitize(FOUNDER_TITLE) ?> of <?= SITE_NAME ?>" width="720" height="900" loading="lazy" decoding="async">
                </div>
                <p class="founder-editorial-caption"><?= sanitize(SITE_TAGLINE) ?>.</p>
            </div>
            <div class="founder-editorial-content">
                <div class="founder-editorial-inner">
                    <span class="section-tag"><i class="fas fa-user-tie"></i> Our Founder</span>
                    <h2 class="section-title" id="founder-heading">Meet <span class="gradient-text">Our Founder</span></h2>
                    <div class="founder-editorial-copy">
                        <p class="about-intro-text"><?= sanitize(FOUNDER_BIO_1) ?></p>
                        <p class="about-intro-text"><?= sanitize(FOUNDER_BIO_2) ?></p>
                        <p class="about-intro-text"><strong><?= sanitize(SITE_NAME) ?></strong> <?= sanitize(FOUNDER_BIO_3) ?></p>
                    </div>
                    <div class="about-intro-actions">
                        <a href="<?= FOUNDER_LINKEDIN ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-lg">
                            <span><?= sanitize(FOUNDER_NAME) ?> on LinkedIn</span>
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-check-circle"></i> Why Choose Us</span>
                <h2 class="section-title">Why Teams Choose <span class="gradient-text">AppsDeddy</span></h2>
            </div>
            <div class="why-choose-grid">
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-choose-icon"><i class="fas fa-medal"></i></div>
                    <h3>Senior Engineering</h3>
                    <p>Architects and leads who have shipped production systems in regulated and high-scale environments.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-choose-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Scoped Engagements</h3>
                    <p>Discovery-first delivery with fixed-scope, milestone, or dedicated squad models matched to your risk profile.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-choose-icon"><i class="fas fa-handshake"></i></div>
                    <h3>US Leadership, Global Delivery</h3>
                    <p>Indianapolis-based account leadership with overlap for US, Canada, and Australia stakeholders.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-choose-icon"><i class="fas fa-headset"></i></div>
                    <h3>Long-Term Partnership</h3>
                    <p>We stay accountable after launch with support, iteration, and clear communication throughout.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-counter">
        <div class="stats-bg"></div>
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number" data-count="250">250+</div>
                    <div class="stat-label">Projects</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number" data-count="120">120+</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number" data-count="12">12+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-number" data-count="3">3</div>
                    <div class="stat-label">Markets Served</div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-process">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-project-diagram"></i> Work Process</span>
                <h2 class="section-title">How Engagements <span class="gradient-text">Start</span></h2>
            </div>
            <div class="work-process-grid">
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card-icon"><i class="fas fa-chess"></i></div>
                    <h3>Discovery</h3>
                    <p>We map goals, constraints, compliance needs, and success metrics before recommending a team shape.</p>
                </div>
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Delivery</h3>
                    <p>Agile sprints with transparent reporting, architecture reviews, and stakeholder demos at every milestone.</p>
                </div>
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Quality</h3>
                    <p>Automated testing, security review, and performance validation before production release.</p>
                </div>
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-card-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Handoff &amp; Support</h3>
                    <p>Documentation, knowledge transfer, and optional ongoing support so your team owns the platform long term.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-quote-left"></i> Testimonials</span>
                <h2 class="section-title">What Our <span class="gradient-text">Clients Say</span></h2>
            </div>
            <div class="about-testimonials-grid">
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"Clear scope, senior engineers, and measurable delivery, not demo-ware. AppsDeddy helped us ship a SaaS platform on time and on budget."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Sarah Mitchell</h4><p>Founder, TechVentures</p></div></div>
                </div>
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"They understood HIPAA requirements from day one and built a clinical reporting system our facilities actually use. Professional from discovery through launch."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Michael Chen</h4><p>CTO, Health Systems Partner</p></div></div>
                </div>
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"Our AI automation rollout cut manual processing time significantly. The team communicated clearly and integrated with our existing Azure stack."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Emily Rodriguez</h4><p>VP Product, Operations Platform</p></div></div>
                </div>
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"From architecture review to production, AppsDeddy delivered enterprise .NET work we could trust. Transparent milestones and no surprises."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>James Walsh</h4><p>Director of Engineering, FinTech Scale-up</p></div></div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Build Something <span class="gradient-text-light">Amazing?</span></h2>
                <p>Book a discovery call to map clear scope, risks, and next steps.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
