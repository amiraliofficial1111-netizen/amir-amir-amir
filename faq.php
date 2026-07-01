<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'FAQ | AppsDeddy - Engineering Smart Solutions';
$pageDescription = 'Answers to common questions about AI integration, app development cost, timelines, technologies, support, and working with AppsDeddy.';
$pageKeywords = 'app development FAQ, AI integration questions, software development cost, project timeline FAQ, hire development agency';
$bodyClass = '';
$activePage = 'faq';

$pageSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How long does it take to build an app?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'The timeline depends on project complexity. A simple MVP can take 4-8 weeks, while a complex enterprise app might take 3-6 months. We provide a detailed timeline after our initial consultation.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'What technologies do you use?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'We use React Native, Flutter, Swift, Kotlin for mobile; React, Vue.js, Next.js for web; Node.js and Python for backend; and AWS, Google Cloud for infrastructure.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Do you provide post-launch support?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. All packages include post-launch support with maintenance plans from 1 to 12 months, including bug fixes, updates, and feature enhancements.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'How much does app development cost?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Costs vary by complexity and platforms. Basic apps start around $2,999, while complex apps can range from $15,000+. We offer free consultations for accurate quotes.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'How much do AI projects cost?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'AI projects typically start at $3,500 for a focused automation. Enterprise integrations from $15,000. Book a free scoping call to get an accurate quote for your project.',
            ],
        ],
        [
            '@type' => 'Question',
            'name'  => 'Will I own the source code?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. Upon project completion and final payment, you receive full ownership of source code, designs, and assets, plus documentation for handover.',
            ],
        ],
    ],
];

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Frequently Asked Questions</h1>
                <p>Can't find the answer you're looking for? Contact our support team.</p>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <div class="faq-grid">
                <div class="faq-content" data-aos="fade-right">
                    <span class="section-tag"><i class="fas fa-question-circle"></i> FAQ</span>
                    <h2 class="section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
                    <p class="faq-description">Can't find the answer you're looking for? <a href="contact.php">Contact our support team</a>.</p>
                    <div class="faq-stats">
                        <div class="faq-stat">
                            <div class="stat-icon"><i class="fas fa-comments"></i></div>
                            <div class="stat-text"><span class="stat-value">24/7</span><span class="stat-label">Support</span></div>
                        </div>
                        <div class="faq-stat">
                            <div class="stat-icon"><i class="fas fa-clock"></i></div>
                            <div class="stat-text"><span class="stat-value">&lt;2hrs</span><span class="stat-label">Response Time</span></div>
                        </div>
                    </div>
                </div>
                <div class="faq-accordion" data-aos="fade-left">
                    <div class="accordion-item active">
                        <button type="button" class="accordion-header" aria-expanded="true" aria-controls="faq-page-panel-1" id="faq-page-trigger-1">
                            <span>How long does it take to build an app?</span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-1" role="region" aria-labelledby="faq-page-trigger-1">
                            <p>The timeline depends on the complexity of your project. A simple MVP can take 4-8 weeks, while a complex enterprise app might take 3-6 months. We'll provide a detailed timeline after our initial consultation.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-page-panel-2" id="faq-page-trigger-2">
                            <span>What technologies do you use?</span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-2" role="region" aria-labelledby="faq-page-trigger-2">
                            <p>We use cutting-edge technologies including React Native, Flutter, Swift, Kotlin for mobile; React, Vue.js, Next.js for web; Node.js and Python for backend; and AWS, Google Cloud for infrastructure.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-page-panel-3" id="faq-page-trigger-3">
                            <span>Do you provide post-launch support?</span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-3" role="region" aria-labelledby="faq-page-trigger-3">
                            <p>Yes! All our packages include post-launch support. We offer maintenance plans ranging from 1 to 12 months, including bug fixes, updates, and feature enhancements to ensure your app runs smoothly.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-page-panel-4" id="faq-page-trigger-4">
                            <span>How much does app development cost?</span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-4" role="region" aria-labelledby="faq-page-trigger-4">
                            <p>Costs vary based on complexity, features, and platforms. Basic apps start around $2,999, while complex apps can range from $15,000+. We offer free consultations to provide accurate quotes based on your requirements.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-page-panel-5" id="faq-page-trigger-5">
                            <span>How much do AI projects cost?</span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-5" role="region" aria-labelledby="faq-page-trigger-5">
                            <p>AI projects typically start at $3,500 for a focused automation. Enterprise integrations from $15,000. Book a free scoping call to get an accurate quote for your project.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button type="button" class="accordion-header" aria-expanded="false" aria-controls="faq-page-panel-6" id="faq-page-trigger-6">
                            <span>Will I own the source code?</span>
                            <i class="fas fa-plus" aria-hidden="true"></i>
                        </button>
                        <div class="accordion-content" id="faq-page-panel-6" role="region" aria-labelledby="faq-page-trigger-6">
                            <p>Absolutely! Upon project completion and final payment, you receive full ownership of all source code, designs, and assets. We also provide documentation for easy handover or future development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-bg"><div class="cta-shape shape-1"></div><div class="cta-shape shape-2"></div></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Still Have Questions?</h2>
                <p>Our team is here to help. Get in touch for a free consultation.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-white btn-lg"><span>Contact Us</span><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
