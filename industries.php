<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';
require_once 'includes/pages-registry.php';

$bodyClass = 'industries-hub';
$activePage = '';

$industries = pagesIndustryRegistry();

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Industries</h1>
                <p>Domain expertise for regulated and high-growth product teams.</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services-core-grid">
                <?php foreach ($industries as $slug => $industry) : ?>
                <a href="<?= pageUrl('industries/' . $slug) ?>" class="service-core-card" data-aos="fade-up">
                    <div class="service-core-icon"><i class="fas <?= sanitize((string) ($industry['icon'] ?? 'fa-building')) ?>"></i></div>
                    <h3><?= sanitize((string) $industry['h1']) ?></h3>
                    <p><?= sanitize((string) $industry['hero_sub']) ?></p>
                    <span class="service-core-link">Explore <?= sanitize((string) $industry['h1']) ?> <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Not Sure Where to <span class="gradient-text-light">Start?</span></h2>
                <p>Book a discovery call and we'll map the right capability and engagement model.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                    <a href="<?= pageUrl('services') ?>" class="btn btn-outline btn-lg btn-white-outline"><span>View Services</span></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
