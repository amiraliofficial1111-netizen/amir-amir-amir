<?php
/**
 * AppsDeddy - Shared Header Template
 */

if (!defined('APPSDEDDY')) {
    require_once __DIR__ . '/config.php';
}

if (defined('ABSPATH')) {
    global $pagenow;
    $isWpLogin = (isset($pagenow) && $pagenow === 'wp-login.php')
        || (isset($_SERVER['SCRIPT_NAME']) && str_contains($_SERVER['SCRIPT_NAME'], 'wp-login.php'));
    if (is_admin() || $isWpLogin || (defined('DOING_LOGIN') && DOING_LOGIN)) {
        return;
    }
}

$isCustomSite = !defined('ABSPATH');
if ($isCustomSite) {
    require_once __DIR__ . '/seo.php';
    $seoMeta = seoResolveMeta();
    $pageTitle       = $seoMeta['title'];
    $pageDescription = $seoMeta['description'];
    $pageKeywords    = $seoMeta['keywords'];
    $pageRobots      = $seoMeta['robots'];
    $pageOgImage     = $seoMeta['og_image'];
    $pageOgType      = $seoMeta['og_type'];
    $canonicalUrl    = seoCanonicalUrl();
    $jsonLdHtml      = seoRenderJsonLd(seoBuildSchemas($seoMeta));
} else {
    $pageTitle       = $pageTitle       ?? (SITE_NAME . ' - ' . SITE_TAGLINE);
    $pageDescription = $pageDescription ?? 'AppsDeddy - US-based Premium App Development Agency.';
    $pageKeywords    = $pageKeywords    ?? 'app development, mobile apps, web development';
    $pageRobots      = $pageRobots      ?? 'index, follow';
    $pageOgImage     = $pageOgImage     ?? (SITE_BASE . 'assets/appsdeddy-logo-full.webp');
    $pageOgType      = $pageOgType      ?? 'website';
    $canonicalUrl    = $pageCanonical ?? (rtrim(SITE_URL, '/') . '/' . basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'));
    $jsonLdHtml      = '';
}

$bodyClass       = $bodyClass       ?? '';
$activePage      = $activePage      ?? '';
$showPreloader   = $showPreloader   ?? false;

$csrfToken = generateCsrfToken();
$cssHref   = $isCustomSite ? seoAsset('css/style.css') : (SITE_BASE . 'css/style.css');
$jsHref    = $isCustomSite ? seoAsset('js/script.js') : (SITE_BASE . 'js/script.js');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= sanitize($pageTitle) ?></title>
    <meta name="description" content="<?= sanitize($pageDescription) ?>">
    <meta name="keywords" content="<?= sanitize($pageKeywords) ?>">
    <meta name="author" content="<?= SITE_NAME ?>">
    <meta name="robots" content="<?= sanitize($pageRobots) ?>">
    <meta name="theme-color" content="#6366f1">
    <meta name="format-detection" content="telephone=no">

    <link rel="canonical" href="<?= sanitize($canonicalUrl) ?>">
    <link rel="alternate" hreflang="en-US" href="<?= sanitize($canonicalUrl) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= sanitize($canonicalUrl) ?>">

    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="<?= SITE_NAME ?>">
    <meta property="og:title" content="<?= sanitize($pageTitle) ?>">
    <meta property="og:description" content="<?= sanitize($pageDescription) ?>">
    <meta property="og:type" content="<?= sanitize($pageOgType) ?>">
    <meta property="og:url" content="<?= sanitize($canonicalUrl) ?>">
    <meta property="og:image" content="<?= sanitize($pageOgImage) ?>">
    <meta property="og:image:alt" content="<?= SITE_NAME ?> - Premium App Development">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= sanitize($pageTitle) ?>">
    <meta name="twitter:description" content="<?= sanitize($pageDescription) ?>">
    <meta name="twitter:image" content="<?= sanitize($pageOgImage) ?>">
    <meta name="twitter:site" content="<?= defined('SEO_TWITTER_HANDLE') ? SEO_TWITTER_HANDLE : '@appsdeddy_' ?>">

    <link rel="icon" type="image/webp" href="<?= SITE_BASE ?>assets/appsdeddy-favicon-daddy.webp">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_BASE ?>assets/favicon-32x32.png">
    <link rel="apple-touch-icon" href="<?= SITE_BASE ?>assets/appsdeddy-favicon-daddy.png">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload" href="<?= $cssHref ?>" as="style">
    <link rel="preload" href="<?= SITE_BASE ?>assets/appsdeddy-logo-full.webp" as="image" type="image/webp" fetchpriority="high">
    <?php if (!empty($pagePreloadImage)) : ?>
    <link rel="preload" href="<?= sanitize($pagePreloadImage) ?>" as="image" type="image/webp">
    <?php endif; ?>

    <link rel="stylesheet" href="<?= $cssHref ?>">

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap"></noscript>

    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>

    <?= $jsonLdHtml ?>

    <?php if (defined('ABSPATH') && function_exists('wp_head')) {
        wp_head();
    } ?>
</head>
<body<?= $bodyClass ? ' class="' . sanitize($bodyClass) . '"' : '' ?>>
<?php if (defined('ABSPATH') && function_exists('wp_body_open')) {
    wp_body_open();
} ?>
<?php if ($showPreloader): ?>
    <div class="preloader" id="preloader" aria-hidden="true">
        <div class="preloader-content">
            <div class="preloader-logo">
                <?= brandLogo('', 'preloader-logo-img') ?>
            </div>
            <div class="preloader-bar">
                <div class="preloader-progress"></div>
            </div>
            <p class="preloader-text">Loading Experience...</p>
        </div>
    </div>
<?php endif; ?>

    <a class="skip-link" href="#main-content">Skip to main content</a>

    <header>
    <nav class="navbar" id="navbar" aria-label="Primary navigation">
        <div class="container">
            <a href="<?= SITE_BASE ?>" class="logo" aria-label="<?= SITE_NAME ?> home">
                <?= brandLogo(SITE_NAME . ' - ' . SITE_TAGLINE, 'logo-img', true) ?>
            </a>
            
            <button type="button" class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <ul class="nav-menu" id="navMenu">
                <li class="nav-search-item">
                    <div class="nav-search-wrap">
                        <input type="search" id="navSearch" class="nav-search-input" placeholder="Search..." aria-label="Search site" autocomplete="off">
                        <i class="fas fa-search nav-search-icon" aria-hidden="true"></i>
                    </div>
                </li>
                <li><a href="<?= SITE_BASE ?>" class="nav-link<?= $activePage === 'home' ? ' active' : '' ?>">Home</a></li>
                <li class="nav-dropdown">
                    <a href="<?= SITE_BASE ?>services.php" class="nav-link<?= $activePage === 'services' ? ' active' : '' ?>">Services <i class="fas fa-chevron-down nav-arrow" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= SITE_BASE ?>services.php">All Services</a></li>
                        <li><a href="<?= SITE_BASE ?>web-mobile-app-development.php">Web & Mobile App Development</a></li>
                        <li><a href="<?= SITE_BASE ?>data-engineering-solutions.php">Data Engineering Solutions</a></li>
                        <li><a href="<?= SITE_BASE ?>gen-ai-integration.php">Gen AI Integration & Consulting</a></li>
                        <li><a href="<?= SITE_BASE ?>ux-ui-design.php">UX & UI Design</a></li>
                    </ul>
                </li>
                <li><a href="<?= SITE_BASE ?>how-we-work.php" class="nav-link<?= $activePage === 'how-we-work' ? ' active' : '' ?>">How We Work</a></li>
                <li><a href="<?= SITE_BASE ?>about.php" class="nav-link<?= $activePage === 'about' ? ' active' : '' ?>">About</a></li>
                <li><a href="<?= SOCIAL_BEHANCE ?>" target="_blank" rel="noopener noreferrer" class="nav-link">Portfolio</a></li>
                <li><a href="<?= SITE_BASE ?>blog/" class="nav-link<?= $activePage === 'blog' ? ' active' : '' ?>">Blog</a></li>
                <li><a href="<?= SITE_BASE ?>faq.php" class="nav-link<?= $activePage === 'faq' ? ' active' : '' ?>">FAQ</a></li>
                <li><a href="<?= SITE_BASE ?>contact.php" class="nav-link<?= $activePage === 'contact' ? ' active' : '' ?>">Contact</a></li>
                <li class="nav-menu-theme">
                    <div class="theme-toggle-wrap">
                        <span class="theme-label theme-label-bright">Bright</span>
                        <span class="theme-label theme-label-dark">Dark</span>
                        <button type="button" class="theme-toggle theme-toggle-menu" id="themeToggleMenu" aria-label="Toggle dark/light mode">
                            <i class="fas fa-moon" aria-hidden="true"></i>
                            <i class="fas fa-sun" aria-hidden="true"></i>
                        </button>
                    </div>
                </li>
            </ul>
            
            <div class="nav-actions">
                <button type="button" class="theme-toggle" id="themeToggle" aria-label="Toggle dark/light mode">
                    <i class="fas fa-moon" aria-hidden="true"></i>
                    <i class="fas fa-sun" aria-hidden="true"></i>
                </button>
                <a href="<?= SITE_BASE ?>contact.php" class="btn btn-primary nav-btn">
                    <span>Get in Touch</span>
                    <i class="fas fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </nav>
    </header>

    <main id="main-content">
