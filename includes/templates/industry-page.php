<?php
/**
 * @var array<string, mixed> $page
 * @var string $slug
 */
if (!defined('APPSDEDDY') || empty($page)) {
    exit;
}

$contactUrl = pageUrl('contact') . '?service=' . rawurlencode((string) ($page['related_service'] ?? 'other'));
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
                    <span class="section-tag"><i class="fas <?= sanitize((string) ($page['icon'] ?? 'fa-industry')) ?>"></i> Industry</span>
                    <h2 class="section-title">Software for <span class="gradient-text"><?= sanitize((string) $page['h1']) ?></span> Leaders</h2>
                    <p class="about-intro-text"><?= sanitize((string) $page['intro_body']) ?></p>
                    <div class="about-intro-actions">
                        <a href="<?= sanitize($contactUrl) ?>" class="btn btn-primary btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                        <a href="<?= pageUrl('services/' . ($page['related_service'] ?? 'custom-saas')) ?>" class="btn btn-outline btn-lg"><span>Related Service</span></a>
                    </div>
                </div>
                <div class="about-intro-visual" data-aos="fade-left">
                    <div class="industry-challenges-card">
                        <h3>Common Challenges</h3>
                        <ul class="industry-challenge-list">
                            <?php foreach (($page['challenges'] ?? []) as $item) : ?>
                            <li>
                                <strong><?= sanitize((string) $item['title']) ?></strong>
                                <span><?= sanitize((string) $item['text']) ?></span>
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
                <h2 class="section-title">How We <span class="gradient-text">Help</span></h2>
            </div>
            <div class="services-core-grid">
                <?php foreach (($page['solutions'] ?? []) as $i => $solution) : ?>
                <a href="<?= pageUrl((string) ($solution['link'] ?? 'services')) ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="<?= (int) (($i + 1) * 100) ?>">
                    <div class="service-core-icon"><i class="fas <?= sanitize((string) ($solution['icon'] ?? 'fa-check')) ?>"></i></div>
                    <h3><?= sanitize((string) $solution['title']) ?></h3>
                    <span class="service-core-link">Learn more <i class="fas fa-arrow-right"></i></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Discuss Your <span class="gradient-text-light"><?= sanitize((string) $page['h1']) ?> Roadmap</span></h2>
                <p>Book a discovery call to map scope, compliance needs, and delivery approach.</p>
                <div class="cta-buttons">
                    <a href="<?= sanitize($contactUrl) ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
