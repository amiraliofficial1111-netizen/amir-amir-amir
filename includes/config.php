<?php
/**
 * AppsDeddy - Site Configuration
 * Titan Email SMTP & Global Settings
 */

// Prevent direct access
if (!defined('APPSDEDDY')) {
    define('APPSDEDDY', true);
}

// ─── SMTP Configuration (Titan Email) ───────────────────────────────────────
define('SMTP_HOST',     'smtp.titan.email');
define('SMTP_PORT',     465);
define('SMTP_SECURE',   'ssl');
define('SMTP_USERNAME', 'info@appsdeddy.com');
define('SMTP_PASSWORD', 'Info@Email@123'); // <-- Replace with your Titan email password
define('SMTP_FROM',     'info@appsdeddy.com');
define('SMTP_FROM_NAME','AppsDeddy');
define('SMTP_REPLY_TO', 'info@appsdeddy.com');

// ─── Notification Recipients ─────────────────────────────────────────────────
define('ADMIN_EMAIL',   'info@appsdeddy.com');

// ─── Site Settings ───────────────────────────────────────────────────────────
define('SITE_NAME',     'AppsDeddy');
define('SITE_TAGLINE',  'Daddy Knows Better');
define('SITE_URL',      'https://appsdeddy.com');
define('SITE_YEAR',     date('Y'));
define('SITE_ADDRESS',  '8520 Allison Pointe Blvd Ste 223, Indianapolis, IN, US 46250');
define('SITE_EMAIL',    'info@appsdeddy.com');
define('SITE_PHONE',    '+1-(888)-502-7038');

// ─── Social Links ────────────────────────────────────────────────────────────
define('SOCIAL_FACEBOOK',  'https://www.facebook.com/people/AppsDeddy/61575933448272/');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/appsdeddy_/');
define('SOCIAL_LINKEDIN',  'https://www.linkedin.com/company/appsdeddy');
define('SOCIAL_TWITTER',   '#');
define('SOCIAL_YOUTUBE',   '#');
define('SOCIAL_BEHANCE',   'https://www.behance.net/AppsDeddy');

// ─── CSRF Token Helpers ──────────────────────────────────────────────────────
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function generateCsrfToken(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCsrfToken(string $token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// ─── Sanitization Helper ─────────────────────────────────────────────────────
function sanitize(string $input): string {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// ─── Service Labels ──────────────────────────────────────────────────────────
function getServiceLabel(string $key): string {
    $services = [
        'mobile' => 'Mobile App Development',
        'web'    => 'Web Development',
        'design' => 'UI/UX Design',
        'cloud'  => 'Cloud Solutions',
        'ai'     => 'AI & Machine Learning',
        'other'  => 'Other',
    ];
    return $services[$key] ?? ucfirst($key);
}

function getBudgetLabel(string $key): string {
    $budgets = [
        '2k-5k'   => '$2,000 - $5,000',
        '5k-10k'  => '$5,000 - $10,000',
        '10k-25k' => '$10,000 - $25,000',
        '25k+'    => '$25,000+',
    ];
    return $budgets[$key] ?? $key;
}
