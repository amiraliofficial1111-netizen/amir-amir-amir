<?php
define('APPSDEDDY', true);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach (seoSitemapUrls() as $url): ?>
    <url>
        <loc><?= htmlspecialchars($url['loc'], ENT_XML1) ?></loc>
        <lastmod><?= htmlspecialchars($url['lastmod'], ENT_XML1) ?></lastmod>
        <changefreq><?= htmlspecialchars($url['changefreq'], ENT_XML1) ?></changefreq>
        <priority><?= htmlspecialchars($url['priority'], ENT_XML1) ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
