<?php
$urls = [
    'http://127.0.0.1:8081/about',
    'http://127.0.0.1:8081/about.php',
    'http://127.0.0.1:8081/nope',
    'http://localhost:8080/about',
    'http://localhost:8080/about.php',
];
$ctx = stream_context_create(['http' => ['ignore_errors' => true]]);
foreach ($urls as $url) {
    $html = @file_get_contents($url, false, $ctx);
    $status = $http_response_header[0] ?? 'NO RESPONSE';
    $founder = $html && str_contains($html, 'about-founder') ? 'FOUNDER' : 'NO-FOUNDER';
    preg_match('/<title>(.*?)<\/title>/s', (string) $html, $m);
    $title = html_entity_decode($m[1] ?? 'no title');
    echo "$url | $status | $founder | $title\n";
}
