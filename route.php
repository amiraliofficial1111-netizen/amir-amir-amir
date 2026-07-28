<?php
define('APPSDEDDY', true);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/pages-registry.php';

$type = preg_replace('/[^a-z-]/', '', (string) ($_GET['type'] ?? ''));
$slug = preg_replace('/[^a-z0-9-]/', '', (string) ($_GET['slug'] ?? ''));

$page = pagesResolve($type, $slug);
if (!$page) {
    http_response_code(404);
    $_SERVER['SCRIPT_NAME'] = '/404.php';
    require __DIR__ . '/404.php';
    exit;
}

pagesApplySeo($type, $slug, $page);

$templateMap = [
    'services'     => 'service',
    'industries'   => 'industry',
    'case-studies' => 'case-study',
    'technologies' => 'technology',
    'insights'     => 'insight',
    'markets'      => 'market',
];

$bodyClass  = $type === 'services' ? 'service-page' : ($type . '-page');
$activePage = $type === 'services' ? 'services' : '';

require_once __DIR__ . '/includes/header.php';

$templateKey = $templateMap[$type] ?? null;
$template = $templateKey ? __DIR__ . '/includes/templates/' . $templateKey . '-page.php' : '';
if ($template && is_readable($template)) {
    require $template;
}

require_once __DIR__ . '/includes/footer.php';
