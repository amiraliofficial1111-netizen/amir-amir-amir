<?php
/**
 * AppsDeddy - SEO & structured data helpers (custom PHP pages only).
 */
if (!defined('APPSDEDDY')) {
    exit;
}

define('SEO_OG_IMAGE', SITE_BASE . 'assets/appsdeddy-logo-full.webp');
define('SEO_TWITTER_HANDLE', '@appsdeddy_');

function seoCanonicalUrl(): string {
    if (!empty($GLOBALS['pageCanonical'])) {
        return $GLOBALS['pageCanonical'];
    }

    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    $base   = rtrim(SITE_URL, '/');

    if ($script === 'index.php') {
        return $base . '/';
    }

    return $base . '/' . preg_replace('/\.php$/i', '', $script);
}

function seoPageSlug(): string {
    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    return $script === 'index.php' ? '' : preg_replace('/\.php$/i', '', $script);
}

function seoDefaultKeywords(): string {
    return 'app development, mobile app development, web development, iOS, Android, React Native, Flutter, Indianapolis, United States, software agency';
}

/** @return array<string, array{title: string, description: string, keywords?: string}> */
function seoPageRegistry(): array {
    return [
        'index' => [
            'title'       => 'AppsDeddy | Premium App & Web Development Agency',
            'description' => 'AppsDeddy is a US-based app development agency building mobile apps, web platforms, UI/UX, cloud, and AI solutions for businesses nationwide.',
            'keywords'    => 'app development agency, mobile app development company, web development Indianapolis, custom software development USA',
        ],
        'about' => [
            'title'       => 'About Us | AppsDeddy - App Development Experts',
            'description' => 'Learn about AppsDeddy — US app development experts since 2014. Agile teams, proven delivery, and 24/7 support from Indianapolis.',
            'keywords'    => 'about AppsDeddy, app development team, software company Indianapolis',
        ],
        'services' => [
            'title'       => 'App Development Services | AppsDeddy',
            'description' => 'Mobile apps, web development, UI/UX design, cloud solutions, data engineering, and Gen AI integration — end-to-end digital services.',
            'keywords'    => 'app development services, web development services, UI UX design, cloud solutions, AI integration',
        ],
        'contact' => [
            'title'       => 'Contact AppsDeddy | Free Project Consultation',
            'description' => 'Contact AppsDeddy for a free quote on your mobile or web project. We respond within 24 hours.',
            'keywords'    => 'contact app developer, free app development quote, hire app development agency',
        ],
        'how-we-work' => [
            'title'       => 'How We Work | AppsDeddy Development Process',
            'description' => 'Discover the AppsDeddy process: discovery, design, development, QA, and launch — built for clarity and on-time delivery.',
        ],
        'faq' => [
            'title'       => 'FAQ | App Development Questions Answered',
            'description' => 'Frequently asked questions about app development cost, timeline, technologies, support, and working with AppsDeddy.',
        ],
        'testimonials' => [
            'title'       => 'Client Reviews | AppsDeddy Testimonials',
            'description' => 'Read what clients say about AppsDeddy mobile and web development projects across the United States.',
        ],
        'web-mobile-app-development' => [
            'title'       => 'Web & Mobile App Development | AppsDeddy',
            'description' => 'Native iOS & Android, React Native, Flutter, and custom web apps — scalable, secure, and user-focused.',
            'keywords'    => 'mobile app development, iOS Android development, React Native, Flutter, web application development',
        ],
        'data-engineering-solutions' => [
            'title'       => 'Data Engineering Solutions | AppsDeddy',
            'description' => 'Data pipelines, integration, analytics, and secure data architecture to turn raw data into business insights.',
        ],
        'gen-ai-integration' => [
            'title'       => 'Gen AI Integration & Consulting | AppsDeddy',
            'description' => 'Generative AI consulting and integration — automate workflows, enhance products, and deploy practical AI solutions.',
        ],
        'ux-ui-design' => [
            'title'       => 'UX & UI Design Services | AppsDeddy',
            'description' => 'User-centered UX research, wireframes, prototypes, and polished UI design for web and mobile products.',
        ],
        'privacy-policy' => [
            'title'       => 'Privacy Policy | AppsDeddy',
            'description' => 'AppsDeddy privacy policy — how we collect, use, and protect your personal information.',
            'robots'      => 'noindex, follow',
        ],
        'terms-conditions' => [
            'title'       => 'Terms & Conditions | AppsDeddy',
            'description' => 'Terms and conditions governing use of AppsDeddy services and website.',
            'robots'      => 'noindex, follow',
        ],
        'cookie-policy' => [
            'title'       => 'Cookie Policy | AppsDeddy',
            'description' => 'Learn how AppsDeddy uses cookies and similar technologies on our website.',
            'robots'      => 'noindex, follow',
        ],
    ];
}

function seoResolveMeta(): array {
    $slug  = seoPageSlug();
    $pages = seoPageRegistry();
    $meta  = $pages[$slug] ?? [];

    return [
        'title'       => $GLOBALS['pageTitle'] ?? ($meta['title'] ?? (SITE_NAME . ' | ' . SITE_TAGLINE)),
        'description' => $GLOBALS['pageDescription'] ?? ($meta['description'] ?? 'AppsDeddy — US-based premium app development agency.'),
        'keywords'    => $GLOBALS['pageKeywords'] ?? ($meta['keywords'] ?? seoDefaultKeywords()),
        'robots'      => $GLOBALS['pageRobots'] ?? ($meta['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'),
        'og_image'    => $GLOBALS['pageOgImage'] ?? SEO_OG_IMAGE,
        'og_type'     => $GLOBALS['pageOgType'] ?? 'website',
    ];
}

function seoOrganizationSchema(): array {
    return [
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        '@id'      => SITE_URL . '/#organization',
        'name'     => SITE_NAME,
        'url'      => SITE_URL,
        'logo'     => SITE_BASE . 'assets/appsdeddy-logo-full.png',
        'image'    => SEO_OG_IMAGE,
        'email'    => SITE_EMAIL,
        'telephone'=> SITE_PHONE,
        'address'  => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => '8520 Allison Pointe Blvd Ste 223',
            'addressLocality' => 'Indianapolis',
            'addressRegion'   => 'IN',
            'postalCode'      => '46250',
            'addressCountry'  => 'US',
        ],
        'sameAs' => array_values(array_filter([
            SOCIAL_FACEBOOK,
            SOCIAL_INSTAGRAM,
            SOCIAL_LINKEDIN,
            SOCIAL_BEHANCE,
        ], fn($url) => $url && $url !== '#')),
    ];
}

function seoWebSiteSchema(): array {
    return [
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        '@id'      => SITE_URL . '/#website',
        'name'     => SITE_NAME,
        'url'      => SITE_URL,
        'publisher'=> ['@id' => SITE_URL . '/#organization'],
    ];
}

function seoWebPageSchema(array $meta): array {
    return [
        '@context'    => 'https://schema.org',
        '@type'       => 'WebPage',
        '@id'         => seoCanonicalUrl() . '#webpage',
        'url'         => seoCanonicalUrl(),
        'name'        => $meta['title'],
        'description' => $meta['description'],
        'isPartOf'    => ['@id' => SITE_URL . '/#website'],
        'about'       => ['@id' => SITE_URL . '/#organization'],
        'inLanguage'  => 'en-US',
    ];
}

function seoBreadcrumbSchema(array $crumbs): array {
    $items = [];
    foreach ($crumbs as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['name'],
            'item'     => $crumb['url'],
        ];
    }

    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
}

function seoServiceSchema(string $name, string $description): array {
    return [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => $name,
        'description' => $description,
        'provider'    => ['@id' => SITE_URL . '/#organization'],
        'areaServed'  => 'United States',
        'url'         => seoCanonicalUrl(),
    ];
}

function seoRenderJsonLd(array $schemas): string {
    $output = '';
    foreach ($schemas as $schema) {
        if (empty($schema)) {
            continue;
        }
        $json = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP);
        $output .= '<script type="application/ld+json">' . $json . '</script>' . "\n    ";
    }
    return $output;
}

function seoAutoServiceSchema(string $slug): ?array {
    $pages = seoPageRegistry();
    if (!isset($pages[$slug]) || !str_contains($slug, '-')) {
        return null;
    }
    $serviceSlugs = [
        'web-mobile-app-development',
        'data-engineering-solutions',
        'gen-ai-integration',
        'ux-ui-design',
    ];
    if (!in_array($slug, $serviceSlugs, true)) {
        return null;
    }
    $page = $pages[$slug];
    return seoServiceSchema(
        preg_replace('/ \| AppsDeddy$/', '', $page['title']),
        $page['description']
    );
}

function seoBuildSchemas(array $meta): array {
    $schemas = [
        seoOrganizationSchema(),
        seoWebSiteSchema(),
        seoWebPageSchema($meta),
    ];

    $autoService = seoAutoServiceSchema(seoPageSlug());
    if ($autoService) {
        $schemas[] = $autoService;
    }

    if (!empty($GLOBALS['pageSchema'])) {
        $extra = $GLOBALS['pageSchema'];
        $schemas[] = is_array($extra) && isset($extra['@type']) ? $extra : $extra;
    }

    if (!empty($GLOBALS['pageBreadcrumbs'])) {
        $schemas[] = seoBreadcrumbSchema($GLOBALS['pageBreadcrumbs']);
    }

    return $schemas;
}

function seoSitemapUrls(): array {
    $urls = [];
    $now  = date('c');

    foreach (seoPageRegistry() as $slug => $meta) {
        if (!empty($meta['robots']) && str_contains($meta['robots'], 'noindex')) {
            continue;
        }
        $path = $slug === 'index' ? '' : $slug;
        $urls[] = [
            'loc'        => rtrim(SITE_URL, '/') . ($path ? '/' . $path : '/'),
            'lastmod'    => $now,
            'changefreq' => $slug === 'index' ? 'weekly' : 'monthly',
            'priority'   => $slug === 'index' ? '1.0' : '0.8',
        ];
    }

    return $urls;
}

function seoAsset(string $path): string {
    $version = defined('ASSET_VERSION') ? ASSET_VERSION : '1';
    $minPath = preg_replace('/\.(css|js)$/', '.min.$1', $path);
    $fullMin = dirname(__DIR__) . '/' . ltrim($minPath, '/');
    $usePath = is_readable($fullMin) ? $minPath : $path;
    return SITE_BASE . ltrim($usePath, '/') . '?v=' . rawurlencode($version);
}
