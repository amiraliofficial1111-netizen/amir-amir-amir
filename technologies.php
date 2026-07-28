<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'technologies-hub';
$activePage = '';
$technologies = pagesTechnologyRegistry();

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Technologies</h1>
                <p>Stack pages for .NET, Azure, and production AI. Pair with our delivery services for scoped engagements.</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services-core-grid">
                <?php foreach ($technologies as $slug => $tech) : ?>
                <a href="<?= pageUrl('technologies/' . $slug) ?>" class="service-core-card" data-aos="fade-up">
                    <div class="service-core-icon"><i class="fas <?= sanitize((string) ($tech['icon'] ?? 'fa-microchip')) ?>"></i></div>
                    <h3><?= sanitize((string) $tech['h1']) ?></h3>
                    <p><?= sanitize((string) $tech['hero_sub']) ?></p>
                    <span class="service-core-link">Explore <?= sanitize((string) $tech['h1']) ?> <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Need Help Choosing a <span class="gradient-text-light">Stack?</span></h2>
                <p>Book a discovery call to map architecture options and delivery approach.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                    <a href="<?= pageUrl('services') ?>" class="btn btn-outline btn-lg btn-white-outline"><span>View Services</span></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
