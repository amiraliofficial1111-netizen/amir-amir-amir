<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Client Reviews | AppsDeddy - Engineering Smart Solutions';
$pageDescription = 'Real client reviews of AppsDeddy AI, mobile, and web development projects. See what US businesses say about our delivery and support.';
$pageKeywords = 'AppsDeddy reviews, app development testimonials, client reviews software agency, AI development reviews Indianapolis';
$bodyClass = '';
$activePage = '';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Client Reviews</h1>
                <p>Don't just take our word for it - hear from our satisfied clients.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-quote-left"></i> Testimonials</span>
                <h2 class="section-title">What Clients <span class="gradient-text">Say</span></h2>
                <p class="section-description">Don't just take our word for it - hear from our satisfied clients.</p>
            </div>
            <div class="testimonials-wrapper">
                <div class="testimonial-slider" id="testimonialSlider">
                    <div class="testimonial-track">
                        <div class="testimonial-card">
                            <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-text">"AppsDeddy transformed our business with their incredible mobile app. The team was professional, responsive, and delivered beyond our expectations. Highly recommended!"</p>
                            <div class="testimonial-author">
                                <div class="author-image gradient-1"><i class="fas fa-user"></i></div>
                                <div class="author-info"><h4>Muhammad Ali</h4><p>CEO, TechStart Inc.</p></div>
                                <div class="company-logo"><i class="fas fa-building"></i></div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-text">"Working with AppsDeddy was a game-changer for our startup. They understood our vision perfectly and created an amazing product that our users absolutely love."</p>
                            <div class="testimonial-author">
                                <div class="author-image gradient-2"><i class="fas fa-user"></i></div>
                                <div class="author-info"><h4>Ayesha Malik</h4><p>Founder, ShopEase</p></div>
                                <div class="company-logo"><i class="fas fa-shopping-bag"></i></div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <p class="testimonial-text">"The best development agency we've ever worked with. Their attention to detail and commitment to quality is unmatched. Our app is now featured in the App Store!"</p>
                            <div class="testimonial-author">
                                <div class="author-image gradient-3"><i class="fas fa-user"></i></div>
                                <div class="author-info"><h4>Hassan Ahmed</h4><p>CTO, FinanceFlow</p></div>
                                <div class="company-logo"><i class="fas fa-chart-line"></i></div>
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

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Build Something <span class="gradient-text-light">Amazing?</span></h2>
                <p>Join our satisfied clients. Get a free consultation today.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Start Your Project</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
