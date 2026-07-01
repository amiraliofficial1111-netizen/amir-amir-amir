<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'About Us | AppsDeddy - Engineering Smart Solutions';
$pageDescription = 'Learn about AppsDeddy, a US digital agency since 2014. AI integration, mobile and web apps, data engineering, and UX design with agile delivery and 24/7 support from Indianapolis.';
$pageKeywords = 'about AppsDeddy, digital agency Indianapolis, AI app development team, software company USA, web development agency, AppsDeddy';
$bodyClass = '';
$activePage = 'about';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>About AppsDeddy</h1>
                <p>Building digital excellence since 2014. US-based Premium App Development Agency.</p>
            </div>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="about-intro-grid">
                <div class="about-intro-content" data-aos="fade-right">
                    <span class="section-tag"><i class="fas fa-building"></i> About AppsDeddy</span>
                    <h2 class="section-title">We Are a Digital Agency That <span class="gradient-text">Drives Results</span></h2>
                    <p class="about-intro-text"><strong>AppsDeddy</strong> is a digital agency that specializes in helping businesses improve their online presence. Our team of experts has years of experience in website design and development. We are passionate about helping our clients succeed and we take pride in delivering high quality work.</p>
                    <div class="about-intro-actions">
                        <a href="contact.php" class="btn btn-primary btn-lg"><span>Get Started</span><i class="fas fa-arrow-right"></i></a>
                        <a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-lg"><span>View Portfolio</span></a>
                    </div>
                </div>
                <div class="about-intro-visual" data-aos="fade-left">
                    <div class="about-intro-image">
                        <div class="intro-img-wrapper intro-img-team">
                            <div class="intro-img-overlay"></div>
                            <i class="fas fa-play-circle play-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-founder-editorial" aria-labelledby="founder-heading">
        <div class="founder-editorial-grid">
            <div class="founder-editorial-visual" data-aos="fade-right">
                <div class="founder-editorial-photo">
                    <img src="<?= assetImage(FOUNDER_PHOTO) ?>" alt="<?= sanitize(FOUNDER_NAME) ?>, <?= sanitize(FOUNDER_TITLE) ?> of <?= SITE_NAME ?>" width="720" height="900" loading="lazy" decoding="async">
                </div>
                <p class="founder-editorial-caption"><?= sanitize(SITE_TAGLINE) ?>.</p>
            </div>
            <div class="founder-editorial-content" data-aos="fade-left">
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
                <h2 class="section-title">Save Time and Effort with <span class="gradient-text">AppsDeddy</span></h2>
            </div>
            <div class="why-choose-grid">
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-choose-icon"><i class="fas fa-medal"></i></div>
                    <h3>Experience and Expertise</h3>
                    <p>We have years of experience and a team of experts in development services who are dedicated to providing you with top-notch service.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-choose-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Customized Solutions</h3>
                    <p>We understand that every client is unique, which is why we offer customized solutions tailored to your specific needs.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-choose-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Trust and Reliability</h3>
                    <p>We take pride in being a trusted and reliable partner for our clients. You can count on us to deliver on our promises.</p>
                </div>
                <div class="why-choose-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-choose-icon"><i class="fas fa-headset"></i></div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock assistance and dedicated support so your projects stay on track and you're never left without answers.</p>
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
                    <div class="stat-number" data-count="15">15+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-number" data-count="30">30+</div>
                    <div class="stat-label">Industry Awards</div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-process">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-project-diagram"></i> Work Process</span>
                <h2 class="section-title">How to Get <span class="gradient-text">Started</span></h2>
            </div>
            <div class="work-process-grid">
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card-icon"><i class="fas fa-chess"></i></div>
                    <h3>Strategy</h3>
                    <p>Based on the insights gathered, we develop a comprehensive strategy tailored to your business's unique needs and objectives.</p>
                </div>
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Implementation</h3>
                    <p>AppsDeddy's team of experts executes the plan, leveraging the latest technology and tools to deliver measurable results.</p>
                </div>
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Analysis</h3>
                    <p>We conduct in-depth analysis and track every key performance indicator to evaluate the effectiveness of our strategies.</p>
                </div>
                <div class="work-process-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-card-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Reporting</h3>
                    <p>We provide regular, transparent reports that detail the results achieved and the impact of our efforts on your business's bottom line.</p>
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
                    <p class="testimonial-text">"AppsDeddy helped us improve our online visibility and we saw a significant increase in website traffic. They are great to work with and I highly recommend their services."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Johannes Times</h4><p>CEO of REx Company</p></div></div>
                </div>
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"Working with AppsDeddy transformed our business completely. Their expertise in mobile development is unmatched and the results speak for themselves."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Sarah Mitchell</h4><p>Founder, TechVentures</p></div></div>
                </div>
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"Professional team, exceptional delivery, and outstanding support. AppsDeddy exceeded all our expectations with their innovative solutions."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Michael Chen</h4><p>CTO, InnovateCorp</p></div></div>
                </div>
                <div class="about-testimonial-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="testimonial-text">"From concept to launch, AppsDeddy delivered on every promise. Their attention to detail and clear communication made the entire process smooth and stress-free."</p>
                    <div class="testimonial-author"><div class="author-avatar"><i class="fas fa-user"></i></div><div class="author-info"><h4>Emily Rodriguez</h4><p>Product Lead, ScaleUp</p></div></div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Build Something <span class="gradient-text-light">Amazing?</span></h2>
                <p>Let's turn your idea into a reality. Get a free consultation today.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg"><span>Start Your Project</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
