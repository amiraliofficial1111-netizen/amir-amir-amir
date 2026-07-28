<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'service-page';
$activePage = 'services';

require_once 'includes/header.php';

$services = pagesServiceRegistry();
$coreSlugs = ['ai-automation', 'fintech', 'healthcare', 'custom-saas', 'enterprise-dotnet', 'cloud-solutions'];
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Enterprise Software Capabilities</h1>
                <p>Outcome-led engineering for AI, FinTech, healthcare, SaaS, .NET, and cloud for teams in the US, Canada, and Australia.</p>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-tag"><i class="fas fa-cogs"></i> Our Core Services</span>
                <h2 class="section-title">Capabilities That <span class="gradient-text">Close Deals</span></h2>
                <p class="section-description">Six specialties aligned to how enterprise buyers self-select. <a href="<?= pageUrl('industries') ?>">Browse by industry</a> or book a discovery call.</p>
            </div>
            <div class="services-core-grid">
                <?php foreach ($coreSlugs as $i => $slug) :
                    $svc = $services[$slug] ?? null;
                    if (!$svc) continue;
                ?>
                <a href="<?= pageUrl('services/' . $slug) ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="<?= (int) (($i + 1) * 50) ?>">
                    <div class="service-core-icon"><i class="fas <?= sanitize((string) ($svc['icon'] ?? 'fa-cog')) ?>"></i></div>
                    <h3><?= sanitize((string) $svc['h1']) ?></h3>
                    <p><?= sanitize((string) ($svc['hero_sub'] ?? '')) ?></p>
                    <span class="service-core-link">Explore <?= sanitize((string) $svc['h1']) ?> <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="section-header section-header--compact" data-aos="fade-up" style="margin-top: 3rem;">
                <h2 class="section-title">Additional <span class="gradient-text">Capabilities</span></h2>
            </div>
            <div class="services-core-grid services-core-grid--compact">
                <a href="<?= pageUrl('services/data-engineering') ?>" class="service-core-card" data-aos="fade-up">
                    <div class="service-core-icon"><i class="fas fa-database"></i></div>
                    <h3>Data Engineering</h3>
                    <p>Pipelines, ETL, warehousing, and analytics.</p>
                    <span class="service-core-link">Learn more <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="<?= pageUrl('services/ux-ui-design') ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-core-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>UX &amp; UI Design</h3>
                    <p>Research, design systems, and production UI.</p>
                    <span class="service-core-link">Learn more <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Scope Your <span class="gradient-text-light">Next Platform?</span></h2>
                <p>Book a discovery call to map goals, risks, and the right engagement model.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
