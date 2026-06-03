<?php
/**
 * AppsDeddy WordPress theme
 */
if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/bridge.php';

add_filter('show_admin_bar', '__return_false');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

function appsdeddy_enqueue_assets(): void {
    appsdeddy_bootstrap_main_site();

    wp_enqueue_style(
        'appsdeddy-main',
        SITE_BASE . 'css/style.css',
        [],
        '1.0.2'
    );

    wp_enqueue_style(
        'appsdeddy-blog',
        get_stylesheet_uri(),
        ['appsdeddy-main'],
        '1.0.2'
    );

    wp_enqueue_script(
        'appsdeddy-main',
        SITE_BASE . 'js/script.js',
        [],
        '1.0.2',
        true
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );
}
add_action('wp_enqueue_scripts', 'appsdeddy_enqueue_assets', 5);

function appsdeddy_blog_archive_template(string $template): string {
    if (is_home() || is_front_page() || is_archive() || is_search()) {
        $custom = get_template_directory() . '/template-blog-archive.php';
        if (is_file($custom)) {
            return $custom;
        }
    }
    return $template;
}
add_filter('template_include', 'appsdeddy_blog_archive_template', 99);
