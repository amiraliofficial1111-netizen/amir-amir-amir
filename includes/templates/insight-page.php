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
                <span class="case-study-industry"><?= sanitize((string) ($page['category'] ?? 'Insight')) ?> · <?= sanitize((string) ($page['read_time'] ?? '')) ?> read</span>
                <h1><?= sanitize((string) $page['h1']) ?></h1>
                <p><?= sanitize((string) $page['hero_sub']) ?></p>
            </div>
        </div>
    </section>

    <section class="insight-article">
        <div class="container">
            <div class="insight-layout">
                <article class="insight-main" data-aos="fade-up">
                    <?php foreach (($page['sections'] ?? []) as $section) : ?>
                    <div class="case-study-block">
                        <h2><?= sanitize((string) $section['h']) ?></h2>
                        <p><?= sanitize((string) $section['p']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </article>
                <aside class="case-study-sidebar" data-aos="fade-left">
                    <div class="case-study-sidebar-card">
                        <h3>Related Links</h3>
                        <ul class="insight-related-list">
                            <?php foreach (($page['links'] ?? []) as $link) : ?>
                            <li><a href="<?= pageUrl((string) $link['path']) ?>"><?= sanitize((string) $link['label']) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-primary btn-lg btn-full">Book a Discovery Call</a>
                    <a href="<?= pageUrl('insights') ?>" class="btn btn-outline btn-lg btn-full">All Insights</a>
                </aside>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Apply This <span class="gradient-text-light">Playbook?</span></h2>
                <p>Book a discovery call and we will map scope to your roadmap.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
