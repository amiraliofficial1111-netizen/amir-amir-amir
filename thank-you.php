<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'thank-you-page';
$activePage = 'contact';
$pageRobots = 'noindex, follow';
$pageTitle = 'Thank You | AppsDeddy';
$pageDescription = 'Thanks for contacting AppsDeddy. We will review your request and follow up within one working day.';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Thank You</h1>
                <p>Your request was received. A senior consultant typically follows up within one working day.</p>
            </div>
        </div>
    </section>

    <section class="thank-you-content">
        <div class="container">
            <div class="thank-you-card" data-aos="fade-up">
                <div class="thank-you-icon"><i class="fas fa-check-circle"></i></div>
                <h2>What happens next</h2>
                <ul class="industry-challenge-list">
                    <li><strong>Review</strong><span>We read your summary, budget range, and market.</span></li>
                    <li><strong>Follow-up</strong><span>Expect a reply to schedule or continue discovery.</span></li>
                    <li><strong>Proposal</strong><span>Scoped options usually within five business days after discovery.</span></li>
                </ul>
                <div class="about-intro-actions" style="margin-top: 24px;">
                    <a href="<?= pageUrl('case-studies') ?>" class="btn btn-outline btn-lg"><span>Browse Case Studies</span></a>
                    <a href="<?= pageUrl('insights') ?>" class="btn btn-primary btn-lg"><span>Read Insights</span></a>
                </div>
            </div>
        </div>
    </section>

    <script>
    if (typeof gtag === 'function') {
        gtag('event', 'proposal_request', { form_name: 'contact', page: 'thank-you' });
    }
    </script>

<?php require_once 'includes/footer.php'; ?>
