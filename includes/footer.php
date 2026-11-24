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
                        <span class="footer-tagline">ENTERPRISE SOFTWARE PARTNER</span>
                        <p>US-based enterprise software partner since 2014. AI automation, FinTech, healthcare, SaaS, .NET, and cloud, serving the United States, Canada, and Australia from Indianapolis, IN.</p>
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
                                <li><a href="<?= pageUrl('services') ?>">Services</a></li>
                                <li><a href="<?= pageUrl('how-we-work') ?>">How We Work</a></li>
                                <li><a href="<?= pageUrl('about') ?>">About Us</a></li>
                                <li><a href="<?= pageUrl('industries') ?>">Industries</a></li>
                                <li><a href="<?= pageUrl('technologies') ?>">Technologies</a></li>
                                <li><a href="<?= pageUrl('markets') ?>">Markets</a></li>
                                <li><a href="<?= pageUrl('case-studies') ?>">Case Studies</a></li>
                                <li><a href="<?= pageUrl('insights') ?>">Insights</a></li>
                                <li><a href="<?= SITE_BASE ?>blog/">Blog</a></li>
                                <li><a href="<?= pageUrl('contact') ?>">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-links-col">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="<?= pageUrl('services/ai-automation') ?>">AI Automation</a></li>
                                <li><a href="<?= pageUrl('services/fintech') ?>">FinTech Solutions</a></li>
                                <li><a href="<?= pageUrl('services/healthcare') ?>">Healthcare Software</a></li>
                                <li><a href="<?= pageUrl('services/custom-saas') ?>">Custom SaaS</a></li>
                                <li><a href="<?= pageUrl('services/enterprise-dotnet') ?>">Enterprise .NET</a></li>
                                <li><a href="<?= pageUrl('services/cloud-solutions') ?>">Cloud Solutions</a></li>
                                <li><a href="<?= pageUrl('technologies') ?>">Technologies</a></li>
                            </ul>
                        </div>
                        <div class="footer-links-col">
                            <h4>Legal</h4>
                            <ul>
                                <li><a href="<?= pageUrl('privacy-policy') ?>">Privacy Policy</a></li>
                                <li><a href="<?= pageUrl('terms-conditions') ?>">Terms & Conditions</a></li>
                                <li><a href="<?= pageUrl('cookie-policy') ?>">Cookie Policy</a></li>
                                <li><a href="<?= pageUrl('faq') ?>">FAQ</a></li>
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
                            <?= emailLink() ?>
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
                    <h3>Ready to Build Something That Scales?</h3>
                    <p>Book a discovery call to map scope, risks, and a clear next step for US, Canada, and Australia teams.</p>
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-primary btn-lg">
                        <span>Book a Discovery Call</span>
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

    <script>window.SITE_BASE = <?= json_encode(SITE_BASE) ?>;</script>
    <?php $jsSrc = function_exists('seoAsset') ? seoAsset('js/script.js') : SITE_BASE . 'js/script.js?v=' . rawurlencode(ASSET_VERSION); ?>
    <script src="<?= $jsSrc ?>" defer></script>
    <?php if (!empty($loadHeroLaptop)) :
        $hero3dSrc = function_exists('seoAsset') ? seoAsset('js/hero-laptop-stage.js') : SITE_BASE . 'js/hero-laptop-stage.js?v=' . rawurlencode(ASSET_VERSION);
    ?>
    <script type="importmap">
    {
      "imports": {
        "three": "https://cdn.jsdelivr.net/npm/three@0.170.0/build/three.module.js",
        "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.170.0/examples/jsm/"
      }
    }
    </script>
    <script type="module" src="<?= $hero3dSrc ?>"></script>
    <?php endif; ?>
    <?php if (defined('ABSPATH') && function_exists('wp_footer')) {
        wp_footer();
    } ?>
</body>
</html>
