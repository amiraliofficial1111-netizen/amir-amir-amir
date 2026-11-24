<?php
/**
 * AppsDeddy - Site Configuration
 * Titan Email SMTP & Global Settings
 */

// Prevent direct access
if (!defined('APPSDEDDY')) {
    define('APPSDEDDY', true);
}

// Optional local overrides (copy includes/config.local.php.example → config.local.php)
if (is_readable(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
}

// ─── SMTP Configuration (Titan Email) ───────────────────────────────────────
if (!defined('SMTP_HOST'))     define('SMTP_HOST',     'smtp.titan.email');
if (!defined('SMTP_PORT'))     define('SMTP_PORT',     465);
if (!defined('SMTP_SECURE'))   define('SMTP_SECURE',   'ssl');
if (!defined('SMTP_USERNAME')) define('SMTP_USERNAME', 'info@appsdeddy.com');
if (!defined('SMTP_PASSWORD')) define('SMTP_PASSWORD', 'YOUR_TITAN_EMAIL_PASSWORD_HERE');
if (!defined('SMTP_FROM'))     define('SMTP_FROM',     'info@appsdeddy.com');
define('SMTP_FROM_NAME','AppsDeddy');
define('SMTP_REPLY_TO', 'info@appsdeddy.com');

// ─── Notification Recipients ─────────────────────────────────────────────────
define('ADMIN_EMAIL',   'info@appsdeddy.com');

// ─── Site Settings ───────────────────────────────────────────────────────────
define('SITE_NAME',     'AppsDeddy');
define('SITE_TAGLINE',  'Engineering Smart Solutions');
if (!defined('SITE_URL')) {
    define('SITE_URL', appsdeddyResolveSiteUrl());
}
if (!defined('SITE_BASE')) {
    define('SITE_BASE', rtrim(SITE_URL, '/') . '/');
}
define('ASSET_VERSION', '2.9.26');

// Google Analytics (set in config.local.php, e.g. G-XXXXXXXXXX)
if (!defined('GA_MEASUREMENT_ID')) define('GA_MEASUREMENT_ID', '');

// Calendly embed URL (set in config.local.php for inline scheduling on contact page)
if (!defined('CALENDLY_EMBED_URL')) define('CALENDLY_EMBED_URL', '');

define('SITE_YEAR',     date('Y'));
define('SITE_ADDRESS',  '8520 Allison Pointe Blvd Ste 223, Indianapolis, IN 46250, United States');
define('SITE_EMAIL',    'info@appsdeddy.com');
define('SITE_PHONE',    '+1-(888)-502-7038');
define('SITE_NAP_STREET', '8520 Allison Pointe Blvd Ste 223');
define('SITE_NAP_CITY',   'Indianapolis');
define('SITE_NAP_REGION', 'IN');
define('SITE_NAP_POSTAL', '46250');
define('SITE_NAP_COUNTRY','US');
define('SITE_GEO_LAT',    '39.7684');
define('SITE_GEO_LNG',    '-86.1581');
define('SITE_HOURS',      'Mo-Fr 09:00-18:00, Sa 10:00-14:00');

// ─── Social Links ────────────────────────────────────────────────────────────
define('SOCIAL_FACEBOOK',  'https://www.facebook.com/people/AppsDeddy/61575933448272/');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/appsdeddy_/');
define('SOCIAL_LINKEDIN',  'https://www.linkedin.com/company/appsdeddy');
define('SOCIAL_TWITTER',   '#');
define('SOCIAL_YOUTUBE',   '#');
define('SOCIAL_BEHANCE',   'https://www.behance.net/AppsDeddy');

// Review platforms (update profile URLs when claimed)
if (!defined('REVIEW_CLUTCH_URL'))    define('REVIEW_CLUTCH_URL', 'https://clutch.co/');
if (!defined('REVIEW_GOODFIRMS_URL')) define('REVIEW_GOODFIRMS_URL', 'https://www.goodfirms.co/');

// ─── Founder ─────────────────────────────────────────────────────────────────
define('FOUNDER_NAME',     'Faizan Khan');
define('FOUNDER_TITLE',    'Founder & CEO');
define('FOUNDER_LINKEDIN', 'https://www.linkedin.com/in/faizan-khan-777575a7');
define('FOUNDER_PHOTO',    'assets/images/team/faizan-khan.jpg');
define('FOUNDER_BIO_1',    'Hi there, my name is Faizan Khan. I\'m the Founder and CEO of AppsDeddy, and it\'s a pleasure to meet you.');
define('FOUNDER_BIO_2',    'My journey into software started as an engineer shipping production systems, leading teams, and learning what it takes to scale. Along the way, I became curious about what makes great products great. Why do some teams move fast with AI and automation while others stay buried in manual work?');
define('FOUNDER_BIO_3',    'was born from that curiosity. We believe great software should not only look polished, but also solve real problems, automate what\'s repetitive, and help startups and enterprises across the US, Canada, and Australia ship products they can trust long after launch.');

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

/**
 * Production URL on live host; auto-detect current origin for local dev (localhost, .local, LAN).
 */
function appsdeddyResolveSiteUrl(): string {
    $production = 'https://appsdeddy.com';

    if (php_sapi_name() === 'cli' || empty($_SERVER['HTTP_HOST'])) {
        return $production;
    }

    $host = strtolower((string) $_SERVER['HTTP_HOST']);
    $hostName = preg_replace('/:\d+$/', '', $host) ?? $host;
    $productionHosts = ['appsdeddy.com', 'www.appsdeddy.com'];

    if (in_array($hostName, $productionHosts, true)) {
        return $production;
    }

    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $script = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
    $dir = dirname($script);
    $basePath = ($dir === '/' || $dir === '\\' || $dir === '.') ? '' : rtrim($dir, '/');

    return $scheme . '://' . $host . $basePath;
}

/**
 * Public page URL without .php extension.
 */
function pageUrl(string $page = ''): string {
    $page = trim($page);
    if ($page === '' || $page === 'home' || $page === 'index' || strcasecmp($page, 'index.php') === 0) {
        return SITE_BASE;
    }
    $page = preg_replace('/\.php$/i', '', ltrim($page, '/'));
    return SITE_BASE . $page;
}

// ─── Sanitization Helper ─────────────────────────────────────────────────────
function sanitize(string $input): string {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

/** Encode email for mailto links to reduce spam harvesting. */
function obfuscatedEmail(string $email = SITE_EMAIL): string {
    return implode('', array_map(fn(string $c): string => '&#' . ord($c) . ';', str_split($email)));
}

function emailLink(string $email = SITE_EMAIL, ?string $label = null): string {
    $label = $label ?? $email;
    return '<a href="mailto:' . obfuscatedEmail($email) . '">' . sanitize($label) . '</a>';
}

// ─── Service Labels ──────────────────────────────────────────────────────────
function getServiceLabel(string $key): string {
    $services = [
        'ai'         => 'AI Automation',
        'fintech'    => 'FinTech Solutions',
        'healthcare' => 'Healthcare Software',
        'saas'       => 'Custom SaaS Development',
        'dotnet'     => 'Enterprise .NET Development',
        'cloud'      => 'Cloud Solutions',
        'other'      => 'Other',
        // Legacy form values (keep mail readable if old tabs submit)
        'mobile'     => 'Mobile App Development',
        'web'        => 'Web Development',
        'design'     => 'UI/UX Design',
    ];
    return $services[$key] ?? ucfirst($key);
}

require_once __DIR__ . '/service-images.php';
require_once __DIR__ . '/pages-registry.php';

function getBudgetLabel(string $key): string {
    $budgets = [
        '25k-50k'   => '$25,000 - $50,000',
        '50k-100k'  => '$50,000 - $100,000',
        '100k-250k' => '$100,000 - $250,000',
        '250k+'     => '$250,000+',
        'unsure'    => 'Not sure',
        // Legacy
        '2k-5k'     => '$2,000 - $5,000',
        '5k-10k'    => '$5,000 - $10,000',
        '10k-25k'   => '$10,000 - $25,000',
        '25k+'      => '$25,000+',
    ];
    return $budgets[$key] ?? $key;
}

function getRoleLabel(string $key): string {
    $roles = [
        'founder' => 'Founder',
        'ceo'     => 'CEO',
        'cto'     => 'CTO',
        'pm'      => 'Product Manager',
        'other'   => 'Other',
    ];
    return $roles[$key] ?? ($key !== '' ? ucfirst($key) : 'Not specified');
}

function getCountryLabel(string $key): string {
    $countries = [
        'us'    => 'United States',
        'ca'    => 'Canada',
        'au'    => 'Australia',
        'other' => 'Other',
    ];
    return $countries[$key] ?? ($key !== '' ? strtoupper($key) : 'Not specified');
}
