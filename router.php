<?php
/**
 * PHP built-in server router — clean URLs without .php (local dev).
 * Usage: php -S localhost:8080 -t . router.php
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');

if ($uri !== '/' && is_file(__DIR__ . $uri)) {
    return false;
}

if (str_starts_with($uri, '/blog')) {
    return false;
}

$path = trim($uri, '/');

if ($path === '') {
    require __DIR__ . '/index.php';
    return true;
}

$hubs = [
    'case-studies' => 'case-studies.php',
    'industries'   => 'industries.php',
    'technologies' => 'technologies.php',
    'insights'     => 'insights.php',
    'markets'      => 'markets.php',
];
if (isset($hubs[$path])) {
    $_SERVER['SCRIPT_NAME'] = '/' . $hubs[$path];
    require __DIR__ . '/' . $hubs[$path];
    return true;
}

if (preg_match('#^(services|industries|case-studies|technologies|insights|markets)/([a-z0-9-]+)$#', $path, $matches)) {
    $_GET['type'] = $matches[1];
    $_GET['slug'] = $matches[2];
    $_SERVER['SCRIPT_NAME'] = '/route.php';
    $_SERVER['PHP_SELF']    = '/route.php';
    require __DIR__ . '/route.php';
    return true;
}

$legacyMap = [
    'gen-ai-integration'         => 'services/ai-automation',
    'web-mobile-app-development' => 'services/custom-saas',
    'data-engineering-solutions' => 'services/data-engineering',
    'ux-ui-design'               => 'services/ux-ui-design',
];
if (isset($legacyMap[$path])) {
    $query = $_SERVER['QUERY_STRING'] ?? '';
    $location = '/' . $legacyMap[$path] . ($query !== '' ? '?' . $query : '');
    header('Location: ' . $location, true, 301);
    exit;
}

$phpFile = __DIR__ . '/' . $path . '.php';
if (is_file($phpFile)) {
    $_SERVER['SCRIPT_NAME'] = '/' . $path . '.php';
    $_SERVER['PHP_SELF']    = '/' . $path . '.php';
    require $phpFile;
    return true;
}

http_response_code(404);
$_SERVER['SCRIPT_NAME'] = '/404.php';
require __DIR__ . '/404.php';
return true;
