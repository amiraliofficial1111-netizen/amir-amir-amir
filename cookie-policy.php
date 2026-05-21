<?php
define('APPSDEDDY', true);
require_once 'includes/config.php';

$pageTitle = 'Cookie Policy | AppsDeddy - Daddy Knows Better';
$pageDescription = 'AppsDeddy Cookie Policy - Learn how we use cookies and similar technologies on our website.';
$bodyClass = 'legal-page';
$activePage = '';

require_once 'includes/header.php';
?>

    <section class="page-header legal-page-header">
        <div class="page-header-bg"></div>
        <div class="legal-header-accent"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Cookie Policy</h1>
                <p>Last updated: February 2025. This policy explains how we use cookies and similar technologies.</p>
            </div>
        </div>
    </section>

    <section class="legal-content">
        <div class="container">
            <nav class="legal-quick-nav" aria-label="Legal documents">
                <a href="privacy-policy.php"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
                <a href="terms-conditions.php"><i class="fas fa-file-contract"></i> Terms & Conditions</a>
                <a href="cookie-policy.php" class="active"><i class="fas fa-cookie-bite"></i> Cookie Policy</a>
            </nav>
            <div class="legal-inner">
                <p class="legal-intro">AppsDeddy uses cookies and similar technologies to enhance your experience on our website. This Cookie Policy explains what cookies are, how we use them, and your choices regarding their use.</p>

                <div class="legal-section">
                    <h2><i class="fas fa-cookie-bite"></i> What Are Cookies?</h2>
                    <p>Cookies are small text files stored on your device (computer, tablet, or mobile) when you visit a website. They help websites remember your preferences, improve performance, and provide analytics.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-list"></i> Types of Cookies We Use</h2>
                    <ul>
                        <li><strong>Essential Cookies:</strong> Required for the website to function properly. They enable core features like navigation, form submissions, and theme preferences.</li>
                        <li><strong>Analytics Cookies:</strong> Help us understand how visitors use our site. This data is aggregated and anonymized to improve our website.</li>
                        <li><strong>Functional Cookies:</strong> Remember your preferences and choices to provide a personalized experience.</li>
                        <li><strong>Marketing Cookies:</strong> Used to deliver relevant advertisements and track campaign effectiveness.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-cog"></i> Specific Cookies We Use</h2>
                    <ul>
                        <li><strong>Theme Preference:</strong> Stores your dark/light mode choice (localStorage)</li>
                        <li><strong>Session Cookies:</strong> Temporary cookies that expire when you close your browser</li>
                        <li><strong>Persistent Cookies:</strong> Remain on your device for a set period or until you delete them</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-user-cog"></i> Your Choices</h2>
                    <p>You can control and manage cookies in several ways:</p>
                    <ul>
                        <li><strong>Browser Settings:</strong> Most browsers allow you to block or delete cookies.</li>
                        <li><strong>Opt-Out:</strong> You can opt out of certain third-party analytics and marketing cookies.</li>
                        <li><strong>Essential Cookies:</strong> Disabling essential cookies may affect website functionality.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-link"></i> Third-Party Cookies</h2>
                    <p>We may use third-party services (e.g., Google Analytics, social media plugins) that set their own cookies. These services have their own privacy and cookie policies.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-edit"></i> Updates</h2>
                    <p>We may update this Cookie Policy from time to time. The "Last updated" date at the top indicates when this policy was last revised.</p>
                </div>

                <div class="legal-section">
                    <h2><i class="fas fa-envelope"></i> Contact Us</h2>
                    <p>For questions about our use of cookies:</p>
                    <p><strong>AppsDeddy</strong><br><?= SITE_ADDRESS ?><br>Email: <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
                </div>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
