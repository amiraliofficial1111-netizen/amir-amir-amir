<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

http_response_code(404);

$bodyClass  = 'error-page';
$activePage = '';
$pageTitle  = 'Page Not Found | AppsDeddy';
$pageDescription = 'The page you requested was not found. Browse AppsDeddy app development services, portfolio, blog, or contact us for a free consultation.';
$pageRobots = 'noindex, follow';

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="container">
            <h1>404 — Page Not Found</h1>
            <p>The page you are looking for may have been moved, renamed, or no longer exists.</p>
        </div>
    </section>

    <section class="error-content">
        <div class="container">
            <div class="error-card">
                <p>Here are some helpful links to get you back on track:</p>
                <ul class="error-links">
                    <li><a href="<?= SITE_BASE ?>">Home — App Development &amp; Design Solutions</a></li>
                    <li><a href="<?= SITE_BASE ?>services.php">Our Services</a></li>
                    <li><a href="<?= SITE_BASE ?>about.php">About AppsDeddy</a></li>
                    <li><a href="<?= SITE_BASE ?>blog/">Blog</a></li>
                    <li><a href="<?= SITE_BASE ?>contact.php">Contact Us</a></li>
                    <li><a href="<?= SITE_BASE ?>faq.php">FAQ</a></li>
                </ul>
                <a href="<?= SITE_BASE ?>contact.php" class="btn btn-primary btn-lg">
                    <span>Get a Free Consultation</span>
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
