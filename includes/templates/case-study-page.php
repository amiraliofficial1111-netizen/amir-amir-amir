<?php
/**
 * @var array<string, mixed> $page
 * @var string $slug
 */
if (!defined('APPSDEDDY') || empty($page)) {
    exit;
}

$serviceLink = pageUrl((string) ($page['service_link'] ?? 'services'));
?>
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <span class="case-study-industry"><?= sanitize((string) ($page['industry'] ?? '')) ?></span>
                <h1><?= sanitize((string) $page['h1']) ?></h1>
                <p><?= sanitize((string) $page['tagline']) ?></p>
            </div>
        </div>
    </section>

    <section class="case-study-detail">
        <div class="container">
            <div class="case-study-grid">
                <div class="case-study-main" data-aos="fade-up">
                    <div class="case-study-hero-card <?= sanitize((string) ($page['gradient'] ?? 'gradient-1')) ?>">
                        <div class="portfolio-icon"><i class="fas <?= sanitize((string) ($page['icon'] ?? 'fa-briefcase')) ?>"></i></div>
                    </div>

                    <div class="case-study-block">
                        <h2>The Challenge</h2>
                        <p><?= sanitize((string) $page['challenge']) ?></p>
                    </div>
                    <div class="case-study-block">
                        <h2>Our Solution</h2>
                        <p><?= sanitize((string) $page['solution']) ?></p>
                    </div>

                    <div class="case-study-stack">
                        <h3>Technology Stack</h3>
                        <div class="portfolio-tech">
                            <?php foreach (($page['stack'] ?? []) as $tech) : ?>
                            <span><?= sanitize((string) $tech) ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <aside class="case-study-sidebar" data-aos="fade-left">
                    <div class="case-study-sidebar-card">
                        <h3>Results</h3>
                        <ul class="case-study-results">
                            <?php foreach (($page['results'] ?? []) as $result) : ?>
                            <li>
                                <span class="case-study-metric"><?= sanitize((string) $result['metric']) ?></span>
                                <span class="case-study-metric-label"><?= sanitize((string) $result['label']) ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="case-study-sidebar-card">
                        <h3>Client</h3>
                        <p><?= sanitize((string) ($page['client'] ?? '')) ?></p>
                    </div>
                    <a href="<?= sanitize($serviceLink) ?>" class="btn btn-outline btn-lg btn-full">Related Capability</a>
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-primary btn-lg btn-full">Book a Discovery Call</a>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Discuss a Similar <span class="gradient-text-light">Project</span></h2>
                <p>Book a discovery call to explore scope, timeline, and team shape.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                    <a href="<?= pageUrl('case-studies') ?>" class="btn btn-outline btn-lg btn-white-outline"><span>More Case Studies</span></a>
                </div>
            </div>
        </div>
    </section>
