<?php
/**
 * @var array<string, mixed> $page
 * @var string $slug
 */
if (!defined('APPSDEDDY') || empty($page)) {
    exit;
}
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

    <section class="about-intro">
        <div class="container">
            <div class="about-intro-grid">
                <div class="about-intro-content" data-aos="fade-right">
                    <span class="section-tag"><i class="fas <?= sanitize((string) ($page['icon'] ?? 'fa-globe')) ?>"></i> Market</span>
                    <h2 class="section-title">How We Work With <span class="gradient-text"><?= sanitize((string) $page['h1']) ?></span></h2>
                    <p class="about-intro-text"><?= sanitize((string) $page['intro_body']) ?></p>
                    <div class="about-intro-actions">
                        <a href="<?= pageUrl('contact') ?>" class="btn btn-primary btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                        <a href="<?= pageUrl('how-we-work') ?>" class="btn btn-outline btn-lg"><span>How We Work</span></a>
                    </div>
                </div>
                <div class="about-intro-visual" data-aos="fade-left">
                    <div class="industry-challenges-card">
                        <h3>What To Expect</h3>
                        <ul class="industry-challenge-list">
                            <?php foreach (($page['points'] ?? []) as $point) : ?>
                            <li>
                                <strong><?= sanitize((string) $point['title']) ?></strong>
                                <span><?= sanitize((string) $point['text']) ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Useful <span class="gradient-text">Next Steps</span></h2>
            </div>
            <div class="services-core-grid services-core-grid--compact">
                <?php foreach (($page['related'] ?? []) as $i => $link) : ?>
                <a href="<?= pageUrl((string) $link['path']) ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="<?= (int) (($i + 1) * 50) ?>">
                    <div class="service-core-icon"><i class="fas fa-arrow-right"></i></div>
                    <h3><?= sanitize((string) $link['label']) ?></h3>
                    <span class="service-core-link">Continue <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Talk With a <span class="gradient-text-light">US-Based Team</span></h2>
                <p>Book a discovery call. We map scope, risks, and collaboration hours for your market.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
