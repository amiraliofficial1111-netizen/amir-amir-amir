<?php
/**
 * Internal quarterly technical SEO checklist (noindex).
 */
define('APPSDEDDY', true);
require_once 'includes/config.php';

$bodyClass = 'seo-checklist-page';
$activePage = '';
$pageRobots = 'noindex, nofollow';
$pageTitle = 'Technical SEO Checklist | AppsDeddy Internal';
$pageDescription = 'Quarterly technical SEO checklist for AppsDeddy operators.';

$checks = [
    'Confirm sitemap.xml loads and lists new money pages',
    'Re-submit sitemap in Google Search Console after major launches',
    'Review GSC queries for cannibalization on service vs industry titles',
    'Spot-check Core Web Vitals on Home, Contact, and top service URL',
    'Verify GA4 events: discovery_call_click, form_submit, proposal_request',
    'Confirm thank-you page is noindex and still tracks conversions',
    'Check 301s from legacy service URLs still resolve',
    'Validate NAP consistency on Markets, Contact, Footer, schema',
    'Refresh one aging insight or case study based on GSC clicks',
    'Review Clutch / GoodFirms / LinkedIn sameAs URLs in schema',
    'Crawl sample of internal links from Insights hubs to Services',
    'Confirm robots.txt still blocks /includes/ and allows public pages',
];

require_once 'includes/header.php';
?>

    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-content">
                <h1>Quarterly Technical SEO Checklist</h1>
                <p>Internal ops page. Not indexed. Use every quarter after content launches.</p>
            </div>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="seo-checklist-card" data-aos="fade-up">
                <ol class="seo-checklist">
                    <?php foreach ($checks as $check) : ?>
                    <li>
                        <label>
                            <input type="checkbox">
                            <span><?= sanitize($check) ?></span>
                        </label>
                    </li>
                    <?php endforeach; ?>
                </ol>
                <p class="seo-checklist-note">Tip: export GSC top queries before editing titles so refreshes stay evidence-based.</p>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>
