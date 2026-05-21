<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Privacy Policy | AppsDeddy - Daddy Knows Better';
$pageDescription = 'AppsDeddy Privacy Policy - Learn how we collect, use, and protect your personal information.';
$bodyClass = 'legal-page';
$activePage = '';

require_once 'includes/header.php';
?>

    <section class="page-header legal-page-header">
        <div class="page-header-bg"></div>
        <div class="legal-header-accent"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Privacy Policy</h1>
                <p>Last updated: February 2025. We are committed to protecting your privacy and personal data.</p>
            </div>
        </div>
    </section>

    <section class="legal-content">
        <div class="container">
            <nav class="legal-quick-nav" aria-label="Legal documents">
                <a href="privacy-policy.php" class="active"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
                <a href="terms-conditions.php"><i class="fas fa-file-contract"></i> Terms & Conditions</a>
                <a href="cookie-policy.php"><i class="fas fa-cookie-bite"></i> Cookie Policy</a>
            </nav>
            <div class="legal-inner">
                <p class="legal-intro">AppsDeddy ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>

                <div class="legal-section">
                    <h2><i class="fas fa-database"></i> Information We Collect</h2>
                    <p>We may collect the following types of information:</p>
                    <ul>
                        <li><strong>Personal Information:</strong> Name, email address, phone number, company name, and other contact details you provide when contacting us or requesting a quote</li>
                        <li><strong>Usage Data:</strong> IP address, browser type, pages visited, time spent on our site, and similar analytics data</li>
                        <li><strong>Cookies:</strong> See our <a href="cookie-policy.php">Cookie Policy</a> for details on how we use cookies</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-cogs"></i> How We Use Your Information</h2>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Respond to your inquiries and provide customer support</li>
                        <li>Deliver our services and fulfill project agreements</li>
                        <li>Send newsletters and marketing communications (with your consent)</li>
                        <li>Improve our website, services, and user experience</li>
                        <li>Comply with legal obligations and protect our rights</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-share-alt"></i> Information Sharing</h2>
                    <p>We do not sell your personal information. We may share your data with:</p>
                    <ul>
                        <li><strong>Service Providers:</strong> Third parties who assist us (e.g., hosting, analytics) under strict confidentiality agreements</li>
                        <li><strong>Legal Requirements:</strong> When required by law or to protect our rights</li>
                        <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-shield-alt"></i> Data Security</h2>
                    <p>We implement appropriate technical and organizational measures to protect your personal data against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet is 100% secure.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-user-check"></i> Your Rights</h2>
                    <p>Depending on your location, you may have the right to:</p>
                    <ul>
                        <li>Access and receive a copy of your personal data</li>
                        <li>Correct inaccurate data</li>
                        <li>Request deletion of your data</li>
                        <li>Object to or restrict processing</li>
                        <li>Data portability</li>
                        <li>Withdraw consent at any time</li>
                    </ul>
                    <p>To exercise these rights, contact us at <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-globe"></i> International Transfers</h2>
                    <p>Your information may be transferred to and processed in countries other than your own. We ensure appropriate safeguards are in place for such transfers in compliance with applicable data protection laws.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-child"></i> Children's Privacy</h2>
                    <p>Our services are not directed to individuals under 16. We do not knowingly collect personal information from children. If you believe we have collected such data, please contact us immediately.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-edit"></i> Changes to This Policy</h2>
                    <p>We may update this Privacy Policy from time to time. We will notify you of material changes by posting the updated policy on this page with a new "Last updated" date. We encourage you to review this policy periodically.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-envelope"></i> Contact Us</h2>
                    <p>For questions about this Privacy Policy or our data practices:</p>
                    <p><strong>AppsDeddy</strong><br><?= SITE_ADDRESS ?><br>Email: <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
