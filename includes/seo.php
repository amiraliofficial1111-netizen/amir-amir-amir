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
    if (!empty($GLOBALS['seoPageSlug'])) {
        return ltrim((string) $GLOBALS['seoPageSlug'], '/');
    }

    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    return $script === 'index.php' ? 'index' : preg_replace('/\.php$/i', '', $script);
}

function seoDefaultKeywords(): string {
    return 'enterprise software development company, AI automation, FinTech software, healthcare software, custom SaaS, enterprise .NET, cloud solutions, US Canada Australia';
}

/** @return array<string, array{title: string, description: string, keywords?: string}> */
function seoPageRegistry(): array {
    return [
        'index' => [
            'title'       => 'Enterprise Software Development Company | AppsDeddy',
            'description' => 'AppsDeddy builds AI automation, FinTech, healthcare, SaaS, and .NET solutions for companies in the US, Canada, and Australia. Book a discovery call.',
            'keywords'    => 'enterprise software development company, AI automation development, FinTech healthcare SaaS .NET, software partner US Canada Australia, AppsDeddy',
        ],
        'about' => [
            'title'       => 'About AppsDeddy | US Software Engineering Partner',
            'description' => 'Founded in 2014 in Indianapolis, AppsDeddy helps startups and enterprises across the US, Canada, and Australia ship AI, FinTech, healthcare, and SaaS platforms.',
            'keywords'    => 'about AppsDeddy, software development company Indianapolis, US software development partner, AppsDeddy',
        ],
        'services' => [
            'title'       => 'Enterprise Software Services | AI, FinTech, Healthcare | AppsDeddy',
            'description' => 'AI automation, FinTech, healthcare software, custom SaaS, enterprise .NET, and cloud solutions for US, Canada, and Australia product teams.',
            'keywords'    => 'enterprise software services, AI automation, FinTech software development, healthcare software, custom SaaS, enterprise .NET',
        ],
        'contact' => [
            'title'       => 'Contact AppsDeddy | Book a Software Discovery Call',
            'description' => 'Book a 30-minute discovery call. AppsDeddy delivers enterprise software across AI, FinTech, Healthcare, SaaS, and .NET.',
            'keywords'    => 'book discovery call, contact AppsDeddy, software proposal request, enterprise software consultation',
        ],
        'how-we-work' => [
            'title'       => 'How We Work | AppsDeddy Development Process',
            'description' => 'Our proven process: discovery, design, development, QA, and launch. Transparent collaboration for AI, FinTech, healthcare, SaaS, and .NET engagements.',
            'keywords'    => 'software development process, agile delivery, discovery call, AppsDeddy how we work',
        ],
        'faq' => [
            'title'       => 'FAQ | Enterprise Software & Engagement Questions',
            'description' => 'Answers about engagement cost, technologies, IP ownership, Canada/Australia collaboration, and working with AppsDeddy.',
            'keywords'    => 'software development cost, discovery call FAQ, enterprise software FAQ, AppsDeddy',
        ],
        'testimonials' => [
            'title'       => 'Client Reviews | AppsDeddy Testimonials',
            'description' => 'What product and engineering leaders say about AppsDeddy delivery across AI, platforms, and enterprise software.',
            'keywords'    => 'AppsDeddy reviews, software development testimonials, client reviews',
        ],
        'case-studies' => [
            'title'       => 'Case Studies | Enterprise Software | AppsDeddy',
            'description' => 'Selected AppsDeddy work across healthcare, SaaS, and AI automation for US, Canada, and Australia product teams.',
            'keywords'    => 'case studies, software development portfolio, healthcare SaaS AI projects AppsDeddy',
        ],
        'industries' => [
            'title'       => 'Industries We Serve | AppsDeddy',
            'description' => 'Enterprise software for FinTech, healthcare, and SaaS teams in the US, Canada, and Australia.',
            'keywords'    => 'FinTech healthcare SaaS industries, enterprise software by industry, AppsDeddy',
        ],
        'technologies' => [
            'title'       => 'Technologies | .NET, Azure, AI | AppsDeddy',
            'description' => 'Technology stack pages for .NET, Azure, and production AI. Evaluate fit, then book a discovery call for delivery.',
            'keywords'    => '.NET Azure AI technologies, enterprise technology stack AppsDeddy',
        ],
        'insights' => [
            'title'       => 'Insights | Enterprise Software Guides | AppsDeddy',
            'description' => 'Pillar guides on AI automation, HIPAA-aware software, FinTech architecture, SaaS tenancy, .NET modernization, and Azure landing zones.',
            'keywords'    => 'enterprise software insights, AI FinTech SaaS guides, AppsDeddy insights',
        ],
        'markets' => [
            'title'       => 'Markets | US, Canada, Australia | AppsDeddy',
            'description' => 'US-based enterprise software partner serving the United States, Canada, and Australia with timezone-aware collaboration.',
            'keywords'    => 'US Canada Australia software partner, Indianapolis software company markets',
        ],
        'thank-you' => [
            'title'       => 'Thank You | AppsDeddy',
            'description' => 'Thanks for contacting AppsDeddy. We will review your request and follow up within one working day.',
            'robots'      => 'noindex, follow',
        ],
        'seo-checklist' => [
            'title'       => 'Technical SEO Checklist | AppsDeddy Internal',
            'description' => 'Quarterly technical SEO checklist for AppsDeddy operators.',
            'robots'      => 'noindex, nofollow',
        ],
        'privacy-policy' => [
            'title'       => 'Privacy Policy | AppsDeddy',
            'description' => 'AppsDeddy privacy policy: how we collect, use, and protect your personal information.',
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
        '404' => [
            'title'       => 'Page Not Found | AppsDeddy',
            'description' => 'The page you requested was not found. Browse enterprise software services, case studies, insights, or book a discovery call.',
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
        'description' => $GLOBALS['pageDescription'] ?? ($meta['description'] ?? 'AppsDeddy builds AI automation, FinTech, healthcare, SaaS, and .NET solutions for companies in the US, Canada, and Australia.'),
        'keywords'    => $GLOBALS['pageKeywords'] ?? ($meta['keywords'] ?? seoDefaultKeywords()),
        'robots'      => $GLOBALS['pageRobots'] ?? ($meta['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'),
        'og_image'    => $GLOBALS['pageOgImage'] ?? SEO_OG_IMAGE,
        'og_type'     => $GLOBALS['pageOgType'] ?? 'website',
    ];
}

function seoOrganizationSchema(): array {
    $sameAs = array_values(array_filter([
        SOCIAL_FACEBOOK,
        SOCIAL_INSTAGRAM,
        SOCIAL_LINKEDIN,
        SOCIAL_BEHANCE,
        defined('REVIEW_CLUTCH_URL') && str_contains(REVIEW_CLUTCH_URL, '/profile/') ? REVIEW_CLUTCH_URL : null,
        defined('REVIEW_GOODFIRMS_URL') && str_contains(REVIEW_GOODFIRMS_URL, '/company/') ? REVIEW_GOODFIRMS_URL : null,
    ], fn($url) => $url && $url !== '#'));

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
            'streetAddress'   => defined('SITE_NAP_STREET') ? SITE_NAP_STREET : '8520 Allison Pointe Blvd Ste 223',
            'addressLocality' => defined('SITE_NAP_CITY') ? SITE_NAP_CITY : 'Indianapolis',
            'addressRegion'   => defined('SITE_NAP_REGION') ? SITE_NAP_REGION : 'IN',
            'postalCode'      => defined('SITE_NAP_POSTAL') ? SITE_NAP_POSTAL : '46250',
            'addressCountry'  => defined('SITE_NAP_COUNTRY') ? SITE_NAP_COUNTRY : 'US',
        ],
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'United States'],
            ['@type' => 'Country', 'name' => 'Canada'],
            ['@type' => 'Country', 'name' => 'Australia'],
        ],
        'sameAs' => $sameAs,
    ];
}

function seoLocalBusinessSchema(): array {
    return [
        '@context'  => 'https://schema.org',
        '@type'     => 'ProfessionalService',
        '@id'       => SITE_URL . '/#localbusiness',
        'name'      => SITE_NAME,
        'url'       => SITE_URL,
        'image'     => SEO_OG_IMAGE,
        'email'     => SITE_EMAIL,
        'telephone' => SITE_PHONE,
        'priceRange'=> '$$$$',
        'address'   => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => defined('SITE_NAP_STREET') ? SITE_NAP_STREET : '8520 Allison Pointe Blvd Ste 223',
            'addressLocality' => defined('SITE_NAP_CITY') ? SITE_NAP_CITY : 'Indianapolis',
            'addressRegion'   => defined('SITE_NAP_REGION') ? SITE_NAP_REGION : 'IN',
            'postalCode'      => defined('SITE_NAP_POSTAL') ? SITE_NAP_POSTAL : '46250',
            'addressCountry'  => defined('SITE_NAP_COUNTRY') ? SITE_NAP_COUNTRY : 'US',
        ],
        'geo' => [
            '@type'     => 'GeoCoordinates',
            'latitude'  => defined('SITE_GEO_LAT') ? SITE_GEO_LAT : '39.7684',
            'longitude' => defined('SITE_GEO_LNG') ? SITE_GEO_LNG : '-86.1581',
        ],
        'openingHours' => defined('SITE_HOURS') ? SITE_HOURS : 'Mo-Fr 09:00-18:00',
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'United States'],
            ['@type' => 'Country', 'name' => 'Canada'],
            ['@type' => 'Country', 'name' => 'Australia'],
        ],
        'parentOrganization' => ['@id' => SITE_URL . '/#organization'],
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
        'areaServed'  => [
            ['@type' => 'Country', 'name' => 'United States'],
            ['@type' => 'Country', 'name' => 'Canada'],
            ['@type' => 'Country', 'name' => 'Australia'],
        ],
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
    if (!function_exists('pagesServiceRegistry')) {
        require_once __DIR__ . '/pages-registry.php';
    }

    if (!str_starts_with($slug, 'services/')) {
        return null;
    }

    $serviceSlug = substr($slug, strlen('services/'));
    $page = pagesServiceRegistry()[$serviceSlug] ?? null;
    if (!$page) {
        return null;
    }

    return seoServiceSchema($page['h1'] ?? $serviceSlug, $page['description'] ?? '');
}

function seoBuildSchemas(array $meta): array {
    $schemas = [
        seoOrganizationSchema(),
        seoWebSiteSchema(),
        seoWebPageSchema($meta),
    ];

    $slug = seoPageSlug();
    if ($slug === 'index' || $slug === 'contact' || $slug === 'markets' || str_starts_with($slug, 'markets/')) {
        $schemas[] = seoLocalBusinessSchema();
    }

    $autoService = seoAutoServiceSchema($slug);
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

    if (function_exists('pagesSitemapEntries')) {
        $urls = array_merge($urls, pagesSitemapEntries());
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
