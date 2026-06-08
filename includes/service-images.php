<?php
/**
 * Optimized image paths and markup helpers.
 */
if (!defined('APPSDEDDY')) {
    exit;
}

define('SERVICE_IMAGES_DIR', 'assets/images/services/');

function serviceImage(string $filename): string {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    return SERVICE_IMAGES_DIR . $name . '.webp';
}

/**
 * Responsive service/content image with dimensions (reduces CLS).
 */
function serviceImg(string $filename, string $alt, array $options = []): string {
    $src     = SITE_BASE . serviceImage($filename);
    $loading = !empty($options['eager']) ? 'eager' : 'lazy';
    $attrs   = ' src="' . htmlspecialchars($src, ENT_QUOTES, 'UTF-8') . '"'
        . ' alt="' . sanitize($alt) . '"'
        . ' width="' . (int)($options['width'] ?? 800) . '"'
        . ' height="' . (int)($options['height'] ?? 450) . '"'
        . ' loading="' . $loading . '"'
        . ' decoding="async"';

    if (!empty($options['eager'])) {
        $attrs .= ' fetchpriority="high"';
    }
    if (!empty($options['class'])) {
        $attrs .= ' class="' . sanitize($options['class']) . '"';
    }

    return '<img' . $attrs . '>';
}

/**
 * Brand logo with WebP + PNG fallback.
 */
function brandLogo(string $alt, string $class = 'logo-img', bool $priority = false): string {
    $base   = SITE_BASE . 'assets/appsdeddy-logo-full';
    $extra  = ' class="' . sanitize($class) . '" width="202" height="40" decoding="async"';
    if ($priority) {
        $extra .= ' fetchpriority="high"';
    }

    return '<picture>'
        . '<source srcset="' . $base . '.webp" type="image/webp" sizes="(max-width:768px) 160px, 202px">'
        . '<img src="' . $base . '.webp" alt="' . sanitize($alt) . '"' . $extra . '>'
        . '</picture>';
}

function assetImage(string $path): string {
    return SITE_BASE . ltrim($path, '/');
}
