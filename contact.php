<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Contact Us | AppsDeddy - Daddy Knows Better';
$pageDescription = 'Contact AppsDeddy - Get a free quote for your mobile app or web development project. We\'re here to help.';
$bodyClass = '';
$activePage = 'contact';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'ContactPage',
    'name'     => 'Contact AppsDeddy',
    'url'      => rtrim(SITE_URL, '/') . '/contact',
    'about'    => ['@id' => SITE_URL . '/#organization'],
];

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Get In Touch</h1>
                <p>Have a project in mind? Let's discuss how we can help you achieve your goals.</p>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <div class="info-card">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="info-content"><h3>Our Office</h3><p>8520 Allison Pointe Blvd Ste 223<br>Indianapolis, IN, US 46250</p></div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon"><i class="fas fa-envelope"></i></div>
                        <div class="info-content"><h3>Email Us</h3><p><?= emailLink() ?></p></div>
                    </div>
                    <div class="info-card">
                        <div class="info-icon"><i class="fas fa-clock"></i></div>
                        <div class="info-content"><h3>Working Hours</h3><p>Mon - Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 2:00 PM</p></div>
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
                        <div class="hp-field" aria-hidden="true">
                            <label for="website_url_contact">Leave this field empty</label>
                            <input type="text" id="website_url_contact" name="website_url" class="hp-field" tabindex="-1" autocomplete="off">
                        </div>
                        
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
                                <label for="phone">Phone Number</label>
                                <div class="input-wrapper">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000">
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
                                <fieldset class="budget-fieldset">
                                    <legend id="budget-legend-contact">Estimated Budget</legend>
                                    <div class="budget-options" role="radiogroup" aria-labelledby="budget-legend-contact">
                                        <label class="budget-option" for="budget-contact-2k-5k"><input type="radio" id="budget-contact-2k-5k" name="budget" value="2k-5k"><span>$2K - $5K</span></label>
                                        <label class="budget-option" for="budget-contact-5k-10k"><input type="radio" id="budget-contact-5k-10k" name="budget" value="5k-10k"><span>$5K - $10K</span></label>
                                        <label class="budget-option" for="budget-contact-10k-25k"><input type="radio" id="budget-contact-10k-25k" name="budget" value="10k-25k"><span>$10K - $25K</span></label>
                                        <label class="budget-option" for="budget-contact-25k"><input type="radio" id="budget-contact-25k" name="budget" value="25k+"><span>$25K+</span></label>
                                    </div>
                                </fieldset>
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
                        <p class="form-note"><i class="fas fa-lock"></i> Your information is secure and will never be shared.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
