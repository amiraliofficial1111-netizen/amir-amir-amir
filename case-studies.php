<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';
require_once 'includes/pages-registry.php';

$bodyClass = 'case-studies-hub';
$activePage = '';

$studies = pagesCaseStudyRegistry();

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Case Studies</h1>
                <p>Selected outcomes across healthcare, SaaS, and AI automation.</p>
            </div>
        </div>
    </section>

    <section class="portfolio portfolio--hub">
        <div class="container">
            <div class="portfolio-grid portfolio-grid--home">
                <?php foreach ($studies as $slug => $study) : ?>
                <a href="<?= pageUrl('case-studies/' . $slug) ?>" class="portfolio-item portfolio-item--link" data-aos="fade-up">
                    <div class="portfolio-card">
                        <div class="portfolio-image <?= sanitize((string) ($study['gradient'] ?? 'gradient-1')) ?>">
                            <div class="portfolio-icon"><i class="fas <?= sanitize((string) ($study['icon'] ?? 'fa-briefcase')) ?>"></i></div>
                        </div>
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category"><?= sanitize((string) ($study['industry'] ?? '')) ?></span>
                                <h3><?= sanitize((string) $study['h1']) ?></h3>
                                <p><?= sanitize((string) $study['tagline']) ?></p>
                                <div class="portfolio-tech">
                                    <?php foreach (array_slice((array) ($study['stack'] ?? []), 0, 3) as $tech) : ?>
                                    <span><?= sanitize((string) $tech) ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
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
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
