<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'insights-hub';
$activePage = '';
$insights = pagesInsightRegistry();

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Insights</h1>
                <p>Pillar guides on AI, healthcare, FinTech, SaaS, .NET, and Azure. Linked to the services they support.</p>
            </div>
        </div>
    </section>

    <section class="portfolio portfolio--hub">
        <div class="container">
            <div class="insights-grid">
                <?php foreach ($insights as $slug => $insight) : ?>
                <a href="<?= pageUrl('insights/' . $slug) ?>" class="insight-card" data-aos="fade-up">
                    <span class="insight-card-meta"><?= sanitize((string) ($insight['category'] ?? '')) ?> · <?= sanitize((string) ($insight['read_time'] ?? '')) ?></span>
                    <h3><?= sanitize((string) $insight['h1']) ?></h3>
                    <p><?= sanitize((string) $insight['hero_sub']) ?></p>
                    <span class="service-core-link">Read guide <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="content-clusters" data-aos="fade-up">
                <h2 class="section-title">Content <span class="gradient-text">Clusters</span></h2>
                <p class="section-description">Use these hubs when planning the next two posts per month (Phase D cadence).</p>
                <div class="services-core-grid services-core-grid--compact">
                    <a href="<?= pageUrl('services/ai-automation') ?>" class="service-core-card"><h3>AI cluster</h3><p>Service + tech + production playbook.</p></a>
                    <a href="<?= pageUrl('services/healthcare') ?>" class="service-core-card"><h3>Healthcare cluster</h3><p>Service + industry + HIPAA checklist.</p></a>
                    <a href="<?= pageUrl('services/fintech') ?>" class="service-core-card"><h3>FinTech cluster</h3><p>Service + industry + compliance architecture.</p></a>
                    <a href="<?= pageUrl('services/custom-saas') ?>" class="service-core-card"><h3>SaaS / Cloud cluster</h3><p>SaaS + Azure tech + landing zones.</p></a>
                </div>
            </div>

            <p class="section-cta-inline" data-aos="fade-up">
                Looking for news and shorter updates? <a href="<?= SITE_BASE ?>blog/">Visit the blog</a>.
            </p>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Put These Ideas Into <span class="gradient-text-light">Production</span></h2>
                <p>Book a discovery call to map a playbook to your roadmap.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
