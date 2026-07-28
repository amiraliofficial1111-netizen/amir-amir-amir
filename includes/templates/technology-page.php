<?php
/**
 * @var array<string, mixed> $page
 * @var string $slug
 */
if (!defined('APPSDEDDY') || empty($page)) {
    exit;
}

$servicePath = 'services/' . ($page['related_service'] ?? 'custom-saas');
$insightPath = !empty($page['related_insight']) ? 'insights/' . $page['related_insight'] : 'insights';
$contactUrl  = pageUrl('contact');
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
                    <span class="section-tag"><i class="fas <?= sanitize((string) ($page['icon'] ?? 'fa-microchip')) ?>"></i> Technology</span>
                    <h2 class="section-title">Stack Fit for <span class="gradient-text">Enterprise Delivery</span></h2>
                    <p class="about-intro-text"><?= sanitize((string) $page['intro_body']) ?></p>
                    <div class="about-intro-actions">
                        <a href="<?= pageUrl($servicePath) ?>" class="btn btn-primary btn-lg"><span>Related Service</span><i class="fas fa-arrow-right"></i></a>
                        <a href="<?= sanitize($contactUrl) ?>" class="btn btn-outline btn-lg"><span>Book a Discovery Call</span></a>
                    </div>
                </div>
                <div class="about-intro-visual" data-aos="fade-left">
                    <div class="industry-challenges-card">
                        <h3>What We Cover</h3>
                        <ul class="industry-challenge-list">
                            <?php foreach (($page['topics'] ?? []) as $topic) : ?>
                            <li>
                                <strong><?= sanitize((string) $topic['title']) ?></strong>
                                <span><?= sanitize((string) $topic['text']) ?></span>
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
                <h2 class="section-title">Keep <span class="gradient-text">Exploring</span></h2>
            </div>
            <div class="services-core-grid services-core-grid--compact">
                <a href="<?= pageUrl($servicePath) ?>" class="service-core-card" data-aos="fade-up">
                    <div class="service-core-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Delivery Capability</h3>
                    <p>Scoped engineering engagements for this stack.</p>
                    <span class="service-core-link">View service <i class="fas fa-arrow-right"></i></span>
                </a>
                <a href="<?= pageUrl($insightPath) ?>" class="service-core-card" data-aos="fade-up" data-aos-delay="50">
                    <div class="service-core-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>Related Insight</h3>
                    <p>Architecture notes and implementation guidance.</p>
                    <span class="service-core-link">Read insight <i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Validate Stack Fit on a <span class="gradient-text-light">Discovery Call</span></h2>
                <p>We will map architecture options, risks, and a recommended engagement model.</p>
                <div class="cta-buttons">
                    <a href="<?= sanitize($contactUrl) ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
