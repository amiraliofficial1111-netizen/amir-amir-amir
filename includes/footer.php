<?php
// WordPress admin/login — native UI only (no marketing footer)
if (defined('ABSPATH')) {
    global $pagenow;
    $isWpLogin = (isset($pagenow) && $pagenow === 'wp-login.php')
        || (isset($_SERVER['SCRIPT_NAME']) && str_contains($_SERVER['SCRIPT_NAME'], 'wp-login.php'));
    if (is_admin() || $isWpLogin || (defined('DOING_LOGIN') && DOING_LOGIN)) {
        return;
    }
}
?>
    </main>

    <footer class="footer">
        <div class="footer-top">
            <div class="footer-bg-shapes" aria-hidden="true">
                <div class="footer-orb footer-orb-1"></div>
                <div class="footer-orb footer-orb-2"></div>
                <div class="footer-grid-pattern"></div>
            </div>
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-brand">
                        <a href="<?= SITE_BASE ?>" class="logo">
                            <?= brandLogo(SITE_NAME, 'logo-img') ?>
                        </a>
                        <span class="footer-tagline">ENGINEERING SMART SOLUTIONS</span>
                        <p>US-based Premium App Development Agency. Transforming ideas into innovative digital solutions since 2014. Serving businesses across the United States from Indianapolis, IN.</p>
                        <div class="footer-social">
                            <a href="<?= SOCIAL_FACEBOOK ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?= SOCIAL_TWITTER ?>" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="<?= SOCIAL_INSTAGRAM ?>" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="<?= SOCIAL_LINKEDIN ?>" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="<?= SOCIAL_YOUTUBE ?>" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    
                    <div class="footer-links-row">
                        <div class="footer-links-col">
                            <h4>Menu</h4>
                            <ul>
                                <li><a href="<?= SITE_BASE ?>">Home</a></li>
                                <li><a href="<?= SITE_BASE ?>services.php">Services</a></li>
                                <li><a href="<?= SITE_BASE ?>how-we-work.php">How We Work</a></li>
                                <li><a href="<?= SITE_BASE ?>about.php">About Us</a></li>
                                <li><a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer">Portfolio</a></li>
                                <li><a href="<?= SITE_BASE ?>blog/">Blog</a></li>
                                <li><a href="<?= SITE_BASE ?>contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-links-col">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="<?= SITE_BASE ?>web-mobile-app-development.php">Web & Mobile App Development</a></li>
                                <li><a href="<?= SITE_BASE ?>data-engineering-solutions.php">Data Engineering Solutions</a></li>
                                <li><a href="<?= SITE_BASE ?>gen-ai-integration.php">Gen AI Integration & Consulting</a></li>
                                <li><a href="<?= SITE_BASE ?>ux-ui-design.php">UX & UI Design</a></li>
                            </ul>
                        </div>
                        <div class="footer-links-col">
                            <h4>Legal</h4>
                            <ul>
                                <li><a href="<?= SITE_BASE ?>privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="<?= SITE_BASE ?>terms-conditions.php">Terms & Conditions</a></li>
                                <li><a href="<?= SITE_BASE ?>cookie-policy.php">Cookie Policy</a></li>
                                <li><a href="<?= SITE_BASE ?>faq.php">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="footer-contact">
                        <h4>Contact</h4>
                        <div class="footer-contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?= SITE_ADDRESS ?></span>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
                        </div>
                        <div class="footer-contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Mon - Fri: 9:00 AM - 6:00 PM, Sat: 10:00 AM - 2:00 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-cta">
            <div class="container">
                <div class="footer-cta-inner">
                    <h3>Ready to Build Something Amazing?</h3>
                    <p>Let's turn your idea into reality. Get a free consultation today.</p>
                    <a href="<?= SITE_BASE ?>contact.php" class="btn btn-primary btn-lg">
                        <span>Start Your Project</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p>&copy; <?= SITE_YEAR ?> <?= SITE_NAME ?>. All rights reserved by <?= SITE_NAME ?>.</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <div class="video-modal" id="videoModal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close" id="closeModal">
                <i class="fas fa-times"></i>
            </button>
            <div class="video-placeholder">
                <i class="fas fa-play-circle"></i>
                <p>Video Player Would Load Here</p>
            </div>
        </div>
    </div>

    <script src="<?= SITE_BASE ?>js/script.js<?= defined('ASSET_VERSION') ? '?v=' . rawurlencode(ASSET_VERSION) : '' ?>" defer></script>
    <?php if (defined('ABSPATH') && function_exists('wp_footer')) {
        wp_footer();
    } ?>
</body>
</html>
