<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = '';
$activePage = 'faq';

$faqItems = [
    [
        'q' => 'How long does a typical engagement take?',
        'a' => 'Timelines depend on scope and compliance. A focused MVP may take 4-8 weeks; complex enterprise platforms often take 3-6 months. We provide a detailed timeline after discovery.',
    ],
    [
        'q' => 'What technologies do you use?',
        'a' => 'We use .NET / C#, Node, Python, and React; Azure and AWS; plus production LLM integrations, data pipelines, and security baselines for regulated products. See our Technologies pages for stack detail.',
    ],
    [
        'q' => 'Do you provide post-launch support?',
        'a' => 'Yes. Engagements include handover documentation and optional maintenance, including bug fixes, updates, and feature enhancements after launch.',
    ],
    [
        'q' => 'How much does a typical engagement cost?',
        'a' => 'Most product builds and platform engagements start in the tens of thousands and scale with complexity, compliance, and integrations. After a discovery call, we provide a scoped estimate and recommended team shape.',
    ],
    [
        'q' => 'Do you work with clients in Canada and Australia?',
        'a' => 'Yes. AppsDeddy is US-based (Indianapolis) and works with product and engineering leaders across the United States, Canada, and Australia, with collaboration hours that overlap key time zones.',
    ],
    [
        'q' => 'Will I own the source code?',
        'a' => 'Yes. Upon project completion and final payment, clients receive ownership of the agreed source code, designs, and assets, with documentation for handover.',
    ],
    [
        'q' => 'How do AI automation projects get scoped?',
        'a' => 'We start with a measurable workflow, data readiness, and governance requirements. Pilots are time-boxed; production includes evaluation, logging, and rollout gates. Learn more on AI Automation and our Production AI playbook.',
    ],
    [
        'q' => 'Can you build HIPAA-aware healthcare software?',
        'a' => 'Yes. We design access control, audit logging, and integration patterns appropriate for PHI. Scope and BAA expectations are confirmed in discovery. See Healthcare Software and the HIPAA checklist insight.',
    ],
    [
        'q' => 'Do you handle FinTech compliance requirements?',
        'a' => 'We engineer for auditability, KYC/AML workflows, and payment integrations, then align team shape to your compliance constraints. Review FinTech Solutions and the compliance architecture insight.',
    ],
    [
        'q' => 'What engagement models do you offer?',
        'a' => 'Fixed-scope, milestone-based, and dedicated squad models. We recommend a model after discovery based on risk, urgency, and how clear requirements are.',
    ],
    [
        'q' => 'How do discovery calls work?',
        'a' => 'A 30-minute call to map goals, constraints, and risks. Most proposals follow within five business days with scope options and a recommended team shape.',
    ],
    [
        'q' => 'Where can I see proof of delivery?',
        'a' => 'Browse on-site Case Studies for Healthcare, SaaS, and AI outcomes. You can also leave or request reviews on Clutch and GoodFirms after an engagement.',
    ],
];

$pageSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(static function (array $item): array {
        return [
            '@type' => 'Question',
            'name'  => $item['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $item['a'],
            ],
        ];
    }, $faqItems),
];

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Frequently Asked Questions</h1>
                <p>Can't find the answer you're looking for? <a href="<?= pageUrl('contact') ?>">Book a discovery call</a>.</p>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-content" data-aos="fade-right">
                    <span class="section-tag"><i class="fas fa-question-circle"></i> FAQ</span>
                    <h2 class="section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
                    <p class="faq-description">Long-tail answers for AI, healthcare, FinTech, engagement models, and proof. Prefer a walkthrough? <a href="<?= pageUrl('contact') ?>">Book a discovery call</a>.</p>
                    <div class="faq-stats">
                        <div class="faq-stat">
                            <div class="stat-icon"><i class="fas fa-comments"></i></div>
                            <div class="stat-text"><span class="stat-value">Discovery</span><span class="stat-label">30-min call</span></div>
                        </div>
                        <div class="faq-stat">
                            <div class="stat-icon"><i class="fas fa-clock"></i></div>
                            <div class="stat-text"><span class="stat-value">5 days</span><span class="stat-label">Typical proposal</span></div>
                        </div>
                    </div>
                    <div class="faq-quick-links">
                        <a href="<?= pageUrl('services') ?>">Services</a>
                        <a href="<?= pageUrl('technologies') ?>">Technologies</a>
                        <a href="<?= pageUrl('insights') ?>">Insights</a>
                        <a href="<?= pageUrl('case-studies') ?>">Case Studies</a>
                    </div>
                </div>
                <div class="faq-accordion" data-aos="fade-left">
                    <?php foreach ($faqItems as $i => $item) :
                        $n = $i + 1;
                        $active = $i === 0;
                    ?>
                    <div class="accordion-item<?= $active ? ' active' : '' ?>">
                        <button type="button" class="accordion-header" aria-expanded="<?= $active ? 'true' : 'false' ?>" aria-controls="faq-page-panel-<?= $n ?>" id="faq-page-trigger-<?= $n ?>">
                            <span><?= sanitize($item['q']) ?></span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-<?= $n ?>" role="region" aria-labelledby="faq-page-trigger-<?= $n ?>">
                            <p><?= sanitize($item['a']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Still Have Questions?</h2>
                <p>Book a discovery call and we'll map scope and next steps clearly.</p>
                <div class="cta-buttons">
                    <a href="<?= pageUrl('contact') ?>" class="btn btn-white btn-lg"><span>Book a Discovery Call</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
