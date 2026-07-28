<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = '';
$activePage = '';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Client Reviews</h1>
                <p>What product and engineering leaders say about working with AppsDeddy.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-quote-left"></i> Testimonials</span>
                <h2 class="section-title">What Clients <span class="gradient-text">Say</span></h2>
                <p class="section-description">Feedback from teams we have partnered with on AI, SaaS, healthcare, and enterprise platforms.</p>
            </div>
            <div class="testimonials-wrapper">
                <div class="testimonial-slider" id="testimonialSlider">
                    <div class="testimonial-track">
                        <div class="testimonial-card">
                            <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-text">"Clear scope, senior engineers, and measurable delivery, not demo-ware. AppsDeddy helped us ship a SaaS platform on time and on budget."</p>
                            <div class="testimonial-author">
                                <div class="author-image gradient-1"><i class="fas fa-user"></i></div>
                                <div class="author-info"><h4>Sarah Mitchell</h4><p>Founder, TechVentures</p></div>
                                <div class="company-logo"><i class="fas fa-building"></i></div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-text">"They understood HIPAA requirements from day one and built a clinical reporting system our facilities actually use. Professional from discovery through launch."</p>
                            <div class="testimonial-author">
                                <div class="author-image gradient-2"><i class="fas fa-user"></i></div>
                                <div class="author-info"><h4>Michael Chen</h4><p>CTO, Health Systems Partner</p></div>
                                <div class="company-logo"><i class="fas fa-heartbeat"></i></div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-text">"Our AI automation rollout cut manual processing time significantly. The team communicated clearly and integrated with our existing Azure stack."</p>
                            <div class="testimonial-author">
                                <div class="author-image gradient-3"><i class="fas fa-user"></i></div>
                                <div class="author-info"><h4>Emily Rodriguez</h4><p>VP Product, Operations Platform</p></div>
                                <div class="company-logo"><i class="fas fa-robot"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-controls">
                    <button type="button" class="testimonial-btn prev" id="prevTestimonial" aria-label="Previous testimonial"><i class="fas fa-arrow-left" aria-hidden="true"></i></button>
                    <div class="testimonial-dots" id="testimonialDots">
                        <span class="dot active"></span><span class="dot"></span><span class="dot"></span>
                    </div>
                    <button type="button" class="testimonial-btn next" id="nextTestimonial" aria-label="Next testimonial"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-platforms" aria-labelledby="reviews-heading">
        <div class="container">
            <div class="reviews-platforms-inner" data-aos="fade-up">
                <h2 id="reviews-heading" class="section-title">Independent <span class="gradient-text">Reviews</span></h2>
                <p class="section-description">After an engagement, we invite clients to share feedback on major B2B review platforms.</p>
                <div class="reviews-platforms-actions">
                    <a href="<?= REVIEW_CLUTCH_URL ?>" class="btn btn-outline btn-lg" target="_blank" rel="noopener noreferrer"><span>Clutch</span><i class="fas fa-external-link-alt"></i></a>
                    <a href="<?= REVIEW_GOODFIRMS_URL ?>" class="btn btn-outline btn-lg" target="_blank" rel="noopener noreferrer"><span>GoodFirms</span><i class="fas fa-external-link-alt"></i></a>
                    <a href="<?= pageUrl('case-studies') ?>" class="btn btn-primary btn-lg"><span>View Case Studies</span></a>
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
