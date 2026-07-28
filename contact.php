<?php

define('APPSDEDDY', true);

require_once 'includes/config.php';



$pageTitle = 'Contact AppsDeddy | Book a Software Discovery Call';

$pageDescription = 'Book a 30-minute discovery call. AppsDeddy delivers enterprise software across AI, FinTech, Healthcare, SaaS, and .NET.';

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

                <h1>Book a Discovery Call</h1>

                <p>Tell us what you're building. We'll map scope, risks, and a recommended engagement, usually within one working day.</p>

            </div>

        </div>

    </section>



    <section class="contact">

        <div class="container">

            <div class="contact-grid">

                <div class="contact-info" data-aos="fade-right">

                    <div class="info-card">

                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>

                        <div class="info-content"><h3>Our Office</h3><p><?= sanitize(SITE_NAP_STREET) ?><br><?= sanitize(SITE_NAP_CITY) ?>, <?= sanitize(SITE_NAP_REGION) ?> <?= sanitize(SITE_NAP_POSTAL) ?>, United States</p></div>

                    </div>

                    <div class="info-card">

                        <div class="info-icon"><i class="fas fa-envelope"></i></div>

                        <div class="info-content"><h3>Email Us</h3><p><?= emailLink() ?></p></div>

                    </div>

                    <div class="info-card">

                        <div class="info-icon"><i class="fas fa-globe-americas"></i></div>

                        <div class="info-content"><h3>Markets</h3><p><a href="<?= pageUrl('markets/united-states') ?>">United States</a> · <a href="<?= pageUrl('markets/canada') ?>">Canada</a> · <a href="<?= pageUrl('markets/australia') ?>">Australia</a><br>EST/CST overlap · AU support hours</p></div>

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

                            <h3>Request a Proposal</h3>

                            <p>Prefer email? <?= emailLink() ?></p>

                        </div>

                        <div class="form-grid">

                            <div class="form-group">

                                <label for="name">Full Name</label>

                                <div class="input-wrapper">

                                    <i class="fas fa-user"></i>

                                    <input type="text" id="name" name="name" placeholder="Your name" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="email">Work Email</label>

                                <div class="input-wrapper">

                                    <i class="fas fa-envelope"></i>

                                    <input type="email" id="email" name="email" placeholder="you@company.com" required>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="company">Company</label>

                                <div class="input-wrapper">

                                    <i class="fas fa-building"></i>

                                    <input type="text" id="company" name="company" placeholder="Company name">

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="role">Role</label>

                                <div class="input-wrapper">

                                    <i class="fas fa-user-tie"></i>

                                    <select id="role" name="role">

                                        <option value="" disabled selected>Select your role</option>

                                        <option value="founder">Founder</option>

                                        <option value="ceo">CEO</option>

                                        <option value="cto">CTO</option>

                                        <option value="pm">Product Manager</option>

                                        <option value="other">Other</option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="country">Country</label>

                                <div class="input-wrapper">

                                    <i class="fas fa-globe"></i>

                                    <select id="country" name="country">

                                        <option value="" disabled selected>Select country</option>

                                        <option value="us">United States</option>

                                        <option value="ca">Canada</option>

                                        <option value="au">Australia</option>

                                        <option value="other">Other</option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="service">Need</label>

                                <div class="input-wrapper">

                                    <i class="fas fa-cog"></i>

                                    <select id="service" name="service" required>

                                        <option value="" disabled selected>Select a capability</option>

                                        <option value="ai">AI Automation</option>

                                        <option value="fintech">FinTech Solutions</option>

                                        <option value="healthcare">Healthcare Software</option>

                                        <option value="saas">Custom SaaS</option>

                                        <option value="dotnet">Enterprise .NET</option>

                                        <option value="cloud">Cloud Solutions</option>

                                        <option value="other">Other</option>

                                    </select>

                                </div>

                            </div>

                            <div class="form-group full-width">

                                <fieldset class="budget-fieldset">

                                    <legend id="budget-legend-contact">Estimated Budget</legend>

                                    <div class="budget-options" role="radiogroup" aria-labelledby="budget-legend-contact">

                                        <label class="budget-option" for="budget-contact-25k-50k"><input type="radio" id="budget-contact-25k-50k" name="budget" value="25k-50k"><span>$25K – $50K</span></label>

                                        <label class="budget-option" for="budget-contact-50k-100k"><input type="radio" id="budget-contact-50k-100k" name="budget" value="50k-100k"><span>$50K – $100K</span></label>

                                        <label class="budget-option" for="budget-contact-100k-250k"><input type="radio" id="budget-contact-100k-250k" name="budget" value="100k-250k"><span>$100K – $250K</span></label>

                                        <label class="budget-option" for="budget-contact-250k"><input type="radio" id="budget-contact-250k" name="budget" value="250k+"><span>$250K+</span></label>

                                        <label class="budget-option" for="budget-contact-unsure"><input type="radio" id="budget-contact-unsure" name="budget" value="unsure"><span>Not sure</span></label>

                                    </div>

                                </fieldset>

                            </div>

                            <div class="form-group full-width">

                                <label for="message">Project Summary</label>

                                <div class="input-wrapper textarea-wrapper">

                                    <i class="fas fa-comment-alt"></i>

                                    <textarea id="message" name="message" placeholder="Goals, timeline, and any compliance needs..." rows="4" required></textarea>

                                </div>

                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-full">

                            <span>Request a Proposal</span>

                            <i class="fas fa-paper-plane"></i>

                        </button>

                        <p class="form-note"><i class="fas fa-lock"></i> Your information is secure and will never be shared.</p>

                    </form>

                </div>

            </div>

        </div>

    </section>



    <?php if (defined('CALENDLY_EMBED_URL') && CALENDLY_EMBED_URL !== '') : ?>

    <section class="contact-calendar" aria-labelledby="calendar-heading">

        <div class="container">

            <div class="contact-calendar-header" data-aos="fade-up">

                <h2 id="calendar-heading" class="section-title">Or <span class="gradient-text">Pick a Time</span></h2>

                <p class="section-description">Schedule a 30-minute discovery call directly on our calendar.</p>

            </div>

            <div class="calendly-embed-wrap" data-aos="fade-up">

                <iframe

                    src="<?= sanitize(CALENDLY_EMBED_URL) ?>"

                    title="Book a discovery call with AppsDeddy"

                    loading="lazy"

                    referrerpolicy="no-referrer-when-downgrade"

                ></iframe>

            </div>

        </div>

    </section>

    <?php endif; ?>



<?php require_once 'includes/footer.php'; ?>

