<?php
/**
 * Connects WordPress theme to main AppsDeddy site (public_html/includes).
 */
if (!defined('ABSPATH')) {
    exit;
}

function appsdeddy_main_site_root(): string {
    $candidates = [
        dirname(ABSPATH),
        rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/\\'),
    ];

    foreach ($candidates as $root) {
        if ($root && is_file($root . '/includes/config.php')) {
            return rtrim(str_replace('\\', '/', $root), '/');
        }
    }

    return dirname(ABSPATH);
}

function appsdeddy_bootstrap_main_site(): void {
    if (!defined('APPSDEDDY')) {
        define('APPSDEDDY', true);
    }

    if (!defined('SITE_BASE')) {
        require_once appsdeddy_main_site_root() . '/includes/config.php';
    }
}

function appsdeddy_render_main_header(): void {
    appsdeddy_bootstrap_main_site();

    if (is_singular()) {
        $pageTitle       = get_the_title() . ' | ' . SITE_NAME;
        $pageDescription = has_excerpt()
            ? get_the_excerpt()
            : wp_trim_words(wp_strip_all_tags(get_the_content()), 30, '...');
        $pageCanonical   = get_permalink();
    } elseif (is_home() || is_front_page()) {
        $pageTitle       = 'Blog | ' . SITE_NAME;
        $pageDescription = 'Insights, news, and guides from AppsDeddy on app development, web, mobile, and AI.';
        $pageCanonical   = rtrim(SITE_URL, '/') . '/blog/';
    } else {
        $pageTitle       = 'Blog | ' . SITE_NAME;
        $pageDescription = 'AppsDeddy blog — app development insights and updates.';
        $pageCanonical   = rtrim(SITE_URL, '/') . '/blog/';
    }

    $bodyClass     = 'blog-page';
    $activePage    = 'blog';
    $showPreloader = false;

    require appsdeddy_main_site_root() . '/includes/header.php';
}

function appsdeddy_render_main_footer(): void {
    appsdeddy_bootstrap_main_site();
    require appsdeddy_main_site_root() . '/includes/footer.php';
}
