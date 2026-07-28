<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'markets-hub';
$activePage = '';
$markets = pagesMarketRegistry();

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Markets</h1>
                <p>US-based · Serving the United States, Canada, and Australia with timezone-aware collaboration.</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="nap-card" data-aos="fade-up">
                <h2>Office NAP</h2>
                <p><?= sanitize(SITE_ADDRESS) ?></p>
                <p><?= emailLink() ?> · <?= sanitize(SITE_PHONE) ?></p>
            </div>
            <div class="services-core-grid">
                <?php foreach ($markets as $slug => $market) : ?>
                <a href="<?= pageUrl('markets/' . $slug) ?>" class="service-core-card" data-aos="fade-up">
                    <div class="service-core-icon"><i class="fas <?= sanitize((string) ($market['icon'] ?? 'fa-globe')) ?>"></i></div>
                    <h3><?= sanitize((string) $market['h1']) ?></h3>
                    <p><?= sanitize((string) $market['hero_sub']) ?></p>
                    <span class="service-core-link">Explore <?= sanitize((string) $market['h1']) ?> <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Collaborate Across <span class="gradient-text-light">Timezones?</span></h2>
                <p>Book a discovery call and we will confirm overlap hours and next steps.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
