<?php
/**
 * PHP built-in server router — clean URLs without .php (local dev).
 * Usage: php -S localhost:8080 router.php
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

$phpFile = __DIR__ . '/' . $path . '.php';
if (is_file($phpFile)) {
    require $phpFile;
    return true;
}

http_response_code(404);
require __DIR__ . '/404.php';
return true;
