<?php
/**
 * AppsDeddy - Shared Header Template
 *
 * Variables expected before include:
 *   $pageTitle       - Page <title> content
 *   $pageDescription - Meta description
 *   $bodyClass       - Body CSS class (e.g. 'home', 'service-page', 'legal-page')
 *   $activePage      - Active nav item key ('home','services','how-we-work','about','faq','contact','blog')
 *   $showPreloader   - (bool) Show preloader animation (homepage only)
 *   $pageCanonical   - (optional) Full canonical/og:url for WordPress blog pages
 */

if (!defined('APPSDEDDY')) {
    require_once __DIR__ . '/config.php';
}

// WordPress admin/login must use native UI — not the marketing site header
if (defined('ABSPATH')) {
    global $pagenow;
    $isWpLogin = (isset($pagenow) && $pagenow === 'wp-login.php')
        || (isset($_SERVER['SCRIPT_NAME']) && str_contains($_SERVER['SCRIPT_NAME'], 'wp-login.php'));
    if (is_admin() || $isWpLogin || (defined('DOING_LOGIN') && DOING_LOGIN)) {
        return;
    }
}

$pageTitle       = $pageTitle       ?? (SITE_NAME . ' - ' . SITE_TAGLINE);
$pageDescription = $pageDescription ?? 'AppsDeddy - US-based Premium App Development Agency.';
$bodyClass       = $bodyClass       ?? '';
$activePage      = $activePage      ?? '';
$showPreloader   = $showPreloader   ?? false;

$canonicalUrl = $pageCanonical ?? (rtrim(SITE_URL, '/') . '/' . basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'));

$csrfToken = generateCsrfToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= sanitize($pageDescription) ?>">
    <meta name="keywords" content="app development, mobile apps, web development, iOS, Android, React Native, Flutter, US, United States, Indianapolis">
    <meta name="author" content="<?= SITE_NAME ?>">
    <meta name="robots" content="index, follow">
    
    <meta property="og:title" content="<?= sanitize($pageTitle) ?>">
    <meta property="og:description" content="<?= sanitize($pageDescription) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= sanitize($canonicalUrl) ?>">
    <link rel="canonical" href="<?= sanitize($canonicalUrl) ?>">
    
    <title><?= sanitize($pageTitle) ?></title>
    
    <link rel="icon" type="image/png" href="<?= SITE_BASE ?>assets/appsdeddy-favicon-daddy.png">
    <link rel="apple-touch-icon" href="<?= SITE_BASE ?>assets/appsdeddy-favicon-daddy.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <link rel="stylesheet" href="<?= SITE_BASE ?>css/style.css">
    <?php if (defined('ABSPATH') && function_exists('wp_head')) {
        wp_head();
    } ?>
</head>
<body<?= $bodyClass ? ' class="' . sanitize($bodyClass) . '"' : '' ?>>
<?php if (defined('ABSPATH') && function_exists('wp_body_open')) {
    wp_body_open();
} ?>
<?php if ($showPreloader): ?>
    <div class="preloader" id="preloader">
        <div class="preloader-content">
            <div class="preloader-logo">
                <img src="<?= SITE_BASE ?>assets/appsdeddy-logo-full.png" alt="<?= SITE_NAME ?> - <?= SITE_TAGLINE ?>" class="preloader-logo-img">
            </div>
            <div class="preloader-bar">
                <div class="preloader-progress"></div>
            </div>
            <p class="preloader-text">Loading Experience...</p>
        </div>
    </div>
<?php endif; ?>

    <nav class="navbar" id="navbar">
        <div class="container">
            <a href="<?= SITE_BASE ?>" class="logo">
                <img src="<?= SITE_BASE ?>assets/appsdeddy-logo-full.png" alt="<?= SITE_NAME ?> - <?= SITE_TAGLINE ?>" class="logo-img">
            </a>
            
            <div class="nav-toggle" id="navToggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <ul class="nav-menu" id="navMenu">
                <li class="nav-search-item">
                    <div class="nav-search-wrap">
                        <input type="search" id="navSearch" class="nav-search-input" placeholder="Search..." aria-label="Search site" autocomplete="off">
                        <i class="fas fa-search nav-search-icon" aria-hidden="true"></i>
                    </div>
                </li>
                <li><a href="<?= SITE_BASE ?>" class="nav-link<?= $activePage === 'home' ? ' active' : '' ?>">Home</a></li>
                <li class="nav-dropdown">
                    <a href="<?= SITE_BASE ?>services.php" class="nav-link<?= $activePage === 'services' ? ' active' : '' ?>">Services <i class="fas fa-chevron-down nav-arrow"></i></a>
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
                        <button class="theme-toggle theme-toggle-menu" id="themeToggleMenu" aria-label="Toggle dark/light mode">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                        </button>
                    </div>
                </li>
            </ul>
            
            <div class="nav-actions">
                <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark/light mode">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                </button>
                <a href="<?= SITE_BASE ?>contact.php" class="btn btn-primary nav-btn">
                    <span>Get in Touch</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </nav>
