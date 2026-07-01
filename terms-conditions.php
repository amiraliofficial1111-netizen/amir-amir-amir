<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Terms & Conditions | AppsDeddy - Engineering Smart Solutions';
$pageDescription = 'AppsDeddy Terms & Conditions - Read our terms of service for using our website and services.';
$bodyClass = 'legal-page';
$activePage = '';

require_once 'includes/header.php';
?>

    <section class="page-header legal-page-header">
        <div class="page-header-bg"></div>
        <div class="legal-header-accent"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Terms & Conditions</h1>
                <p>Last updated: February 2025. Please read these terms carefully before using our services.</p>
            </div>
        </div>
    </section>

    <section class="legal-content">
        <div class="container">
            <nav class="legal-quick-nav" aria-label="Legal documents">
                <a href="<?= pageUrl('privacy-policy') ?>"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
                <a href="<?= pageUrl('terms-conditions') ?>" class="active"><i class="fas fa-file-contract"></i> Terms & Conditions</a>
                <a href="<?= pageUrl('cookie-policy') ?>"><i class="fas fa-cookie-bite"></i> Cookie Policy</a>
            </nav>
            <div class="legal-inner">
                <p class="legal-intro">Welcome to AppsDeddy. By accessing or using our website and services, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please do not use our services.</p>

                <div class="legal-section">
                    <h2><i class="fas fa-file-contract"></i> Acceptance of Terms</h2>
                    <p>By accessing the AppsDeddy website (appsdeddy.com) or engaging our services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions, along with our <a href="<?= pageUrl('privacy-policy') ?>">Privacy Policy</a> and <a href="<?= pageUrl('cookie-policy') ?>">Cookie Policy</a>.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-briefcase"></i> Our Services</h2>
                    <p>AppsDeddy provides app development, web development, data engineering, Gen AI integration, and UX/UI design services. The specific scope, deliverables, timeline, and pricing for each project are defined in individual project agreements or statements of work (SOW) signed by both parties.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-user-tie"></i> Client Responsibilities</h2>
                    <p>As a client, you agree to:</p>
                    <ul>
                        <li>Provide accurate and complete information required for project execution</li>
                        <li>Respond to feedback and approval requests in a timely manner</li>
                        <li>Make payments according to the agreed schedule</li>
                        <li>Not use our services for any illegal or unauthorized purpose</li>
                        <li>Respect intellectual property rights and confidentiality</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-money-bill-wave"></i> Payment Terms</h2>
                    <p>Payment terms are specified in each project agreement. Generally:</p>
                    <ul>
                        <li>Deposits or milestone payments may be required before work begins</li>
                        <li>Invoices are typically due within 15-30 days of issue</li>
                        <li>Late payments may incur interest charges as specified in the agreement</li>
                        <li>All fees are in USD unless otherwise stated</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-copyright"></i> Intellectual Property</h2>
                    <p>Upon full payment for services, you will receive ownership of the deliverables as specified in the project agreement. AppsDeddy retains the right to use anonymized work samples for portfolio and marketing purposes unless otherwise agreed in writing. Pre-existing intellectual property of either party remains the property of its respective owner.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-ban"></i> Prohibited Uses</h2>
                    <p>You may not use our website or services to:</p>
                    <ul>
                        <li>Violate any applicable laws or regulations</li>
                        <li>Infringe on the intellectual property rights of others</li>
                        <li>Transmit malware, viruses, or harmful code</li>
                        <li>Attempt to gain unauthorized access to our systems or client data</li>
                        <li>Use our services to develop illegal or harmful applications</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-exclamation-triangle"></i> Disclaimer of Warranties</h2>
                    <p>Our website and services are provided "as is" and "as available" without warranties of any kind, either express or implied. We do not warrant that our services will be uninterrupted, error-free, or free of viruses. We strive for high quality but cannot guarantee specific business outcomes from our work.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-balance-scale"></i> Limitation of Liability</h2>
                    <p>To the maximum extent permitted by law, AppsDeddy shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of our services. Our total liability for any claim shall not exceed the amount paid by you for the specific project or service giving rise to the claim.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-link"></i> Third-Party Links</h2>
                    <p>Our website may contain links to third-party websites. We are not responsible for the content, privacy practices, or availability of these external sites. Your use of third-party links is at your own risk.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-edit"></i> Modifications</h2>
                    <p>We reserve the right to modify these Terms and Conditions at any time. Changes will be effective upon posting to this page with an updated "Last updated" date. Your continued use of our services after changes constitutes acceptance of the modified terms.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-gavel"></i> Governing Law</h2>
                    <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of the State of Indiana, United States, without regard to its conflict of law provisions. Any disputes shall be resolved in the courts of Indianapolis, Indiana.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-envelope"></i> Contact Us</h2>
                    <p>For questions about these Terms and Conditions, please contact us:</p>
                    <p><strong>AppsDeddy</strong><br><?= SITE_ADDRESS ?><br>Email: <?= emailLink() ?></p>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
