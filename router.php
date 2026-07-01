<?php
/**
 * PHP built-in server router — clean URLs without .php (local dev).
 * Usage: php -S localhost:8080 -t . router.php
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');

// Serve real files (css, js, images, etc.)
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
