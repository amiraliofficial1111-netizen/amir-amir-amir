<?php
/**
 * Render a service page from registry data.
 * @var array<string, mixed> $page
 * @var string $slug
 */
if (!defined('APPSDEDDY') || empty($page)) {
    exit;
}

$contactUrl = pageUrl('contact') . '?service=' . rawurlencode((string) ($page['contact_key'] ?? 'other'));
$heroImage  = (string) ($page['hero_image'] ?? '');
$customImage = (string) ($page['custom_image'] ?? $heroImage);
?>
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1><?= sanitize((string) $page['h1']) ?></h1>
                <p><?= sanitize((string) $page['hero_sub']) ?></p>
            </div>
        </div>
    </section>

    <section class="service-why-choose">
        <div class="container">
            <div class="service-content-wrapper">
                <div class="service-content-text" data-aos="fade-right">
                    <h2 class="section-title"><?= sanitize((string) $page['intro_title']) ?> <span class="gradient-text"><?= sanitize((string) ($page['intro_sub'] ?? '')) ?></span></h2>
                    <p><?= sanitize((string) $page['intro_body']) ?></p>
                </div>
                <?php if ($heroImage !== '') : ?>
                <div class="service-content-image" data-aos="fade-left">
                    <?= serviceImg($heroImage, (string) $page['h1'], ['eager' => true, 'width' => 800, 'height' => 500]) ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if (!empty($page['offerings']) && is_array($page['offerings'])) : ?>
    <section class="service-offerings">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Capabilities <span class="gradient-text">Overview</span></h2>
            <div class="offerings-grid">
                <?php foreach ($page['offerings'] as $i => $offering) : ?>
                <div class="offering-card" data-aos="fade-up" data-aos-delay="<?= (int) (($i + 1) * 100) ?>">
                    <?php if (!empty($offering['image'])) : ?>
                    <div class="offering-image"><?= serviceImg((string) $offering['image'], (string) $offering['title']) ?></div>
                    <?php endif; ?>
                    <div class="offering-content">
                        <div class="offering-icon"><i class="fas <?= sanitize((string) ($offering['icon'] ?? 'fa-check')) ?>"></i></div>
                        <h3><?= sanitize((string) $offering['title']) ?></h3>
                        <p><?= sanitize((string) $offering['text']) ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="pricing-note" data-aos="fade-up">
                <i class="fas fa-tag" aria-hidden="true"></i>
                <p>Engagements are scoped after discovery. <a href="<?= sanitize($contactUrl) ?>">Book a discovery call</a> for a tailored estimate.</p>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="service-custom-solutions">
        <div class="container">
            <div class="service-content-wrapper reverse">
                <?php if ($customImage !== '') : ?>
                <div class="service-content-image" data-aos="fade-right">
                    <?= serviceImg($customImage, (string) $page['h1']) ?>
                </div>
                <?php endif; ?>
                <div class="service-content-text" data-aos="fade-left">
                    <h2 class="section-title"><?= sanitize((string) ($page['why_title'] ?? 'Why AppsDeddy?')) ?></h2>
                    <p><?= sanitize((string) ($page['why_body'] ?? '')) ?></p>
                    <a href="<?= sanitize($contactUrl) ?>" class="btn btn-primary btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2><?= sanitize((string) ($page['cta_title'] ?? 'Ready to Get Started?')) ?></h2>
                <p><?= sanitize((string) ($page['cta_sub'] ?? 'Book a discovery call to map scope and next steps.')) ?></p>
                <div class="cta-buttons">
                    <a href="<?= sanitize($contactUrl) ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
