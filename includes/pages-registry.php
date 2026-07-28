<?php
/**
 * Page registry: services, industries, case studies, technologies, insights.
 */
if (!defined('APPSDEDDY')) {
    exit;
}

/** @return array<string, array<string, mixed>> */
function pagesServiceRegistry(): array {
    return [
        'ai-automation' => [
            'title'       => 'AI Automation Software Development | AppsDeddy',
            'description' => 'Production-grade AI automation: LLM integrations, workflow agents, and MLOps. Serving product teams in the US, Canada, and Australia.',
            'keywords'    => 'AI automation software development, LLM integration, workflow automation, AI consulting',
            'contact_key' => 'ai',
            'legacy_slug' => 'gen-ai-integration',
            'hero_image'  => 'hero-gen-ai',
            'custom_image'=> 'custom-gen-ai',
            'icon'        => 'fa-robot',
            'h1'          => 'AI Automation',
            'hero_sub'    => 'Production-grade AI workflows, LLM integrations, and intelligent automation for enterprise product teams.',
            'intro_title' => 'Automate Operations with Production AI',
            'intro_sub'   => 'Built for Enterprise Teams',
            'intro_body'  => 'AppsDeddy designs and ships AI automation that fits your stack: document processing, workflow agents, RAG pipelines, and LLM integrations with security and observability built in. We help product and engineering leaders across the US, Canada, and Australia move from pilots to production.',
            'offerings'   => [
                ['icon' => 'fa-file-invoice', 'image' => 'offering-1', 'title' => 'AI Document Processing', 'text' => 'Extract data from invoices, contracts, and forms automatically.'],
                ['icon' => 'fa-comments', 'image' => 'offering-2', 'title' => 'Custom AI Assistants', 'text' => 'Train on your data for support, sales, and internal help desks.'],
                ['icon' => 'fa-project-diagram', 'image' => 'offering-3', 'title' => 'Workflow Automation', 'text' => 'Connect tools and remove manual steps across operations.'],
                ['icon' => 'fa-plug', 'image' => 'offering-4', 'title' => 'LLM Integration', 'text' => 'Embed enterprise LLM capabilities into existing products.'],
            ],
            'why_title'   => 'Why AppsDeddy for AI Automation?',
            'why_body'    => 'We integrate AI with governance, monitoring, and handoff documentation your team can own. Engagements are led from Indianapolis with delivery overlap for US, Canada, and Australia stakeholders.',
            'cta_title'   => 'Ready to Automate with AI?',
            'cta_sub'     => 'Book a discovery call for a scoped proposal on workflow automation and LLM integration.',
        ],
        'fintech' => [
            'title'       => 'FinTech Software Development | AppsDeddy',
            'description' => 'Payments, lending, KYC/AML, and banking portals built for compliance and scale. FinTech engineering for US, Canada, and Australia.',
            'keywords'    => 'FinTech software development, payments platform, lending software, KYC AML, banking portal',
            'contact_key' => 'fintech',
            'hero_image'  => 'hero-web-mobile',
            'custom_image'=> 'offering-5',
            'icon'        => 'fa-university',
            'h1'          => 'FinTech Solutions',
            'hero_sub'    => 'Regulated financial products: payments, lending, onboarding, and core banking integrations.',
            'intro_title' => 'Ship FinTech Products Buyers Trust',
            'intro_sub'   => 'Compliance-Aware Engineering',
            'intro_body'  => 'We build FinTech platforms with audit trails, role-based access, and integrations to processors and banking APIs. From MVP to enterprise scale, we align architecture with SOC 2, PCI, and regional requirements for US, Canadian, and Australian markets.',
            'offerings'   => [
                ['icon' => 'fa-credit-card', 'image' => 'offering-1', 'title' => 'Payments & Billing', 'text' => 'Stripe, Adyen, and custom payment flows with reconciliation.'],
                ['icon' => 'fa-user-check', 'image' => 'offering-2', 'title' => 'KYC / AML Onboarding', 'text' => 'Identity verification workflows and risk scoring integrations.'],
                ['icon' => 'fa-hand-holding-usd', 'image' => 'offering-3', 'title' => 'Lending Platforms', 'text' => 'Origination, servicing, and investor portals with auditability.'],
                ['icon' => 'fa-shield-alt', 'image' => 'offering-4', 'title' => 'Security & Compliance', 'text' => 'Encryption, logging, and controls aligned to financial regulations.'],
            ],
            'why_title'   => 'Why AppsDeddy for FinTech?',
            'why_body'    => 'Senior engineers who understand regulated delivery: clear milestones, documentation, and production support after launch.',
            'cta_title'   => 'Ready to Build FinTech Software?',
            'cta_sub'     => 'Book a discovery call to map compliance needs, integrations, and timeline.',
        ],
        'healthcare' => [
            'title'       => 'Healthcare Software Development | AppsDeddy',
            'description' => 'HIPAA-aware healthcare software: EHR integrations, patient portals, and clinical reporting for US, Canada, and Australia.',
            'keywords'    => 'healthcare software development, HIPAA software, EHR integration, patient portal, clinical reporting',
            'contact_key' => 'healthcare',
            'hero_image'  => 'hero-data-engineering',
            'custom_image'=> 'offering-6',
            'icon'        => 'fa-heartbeat',
            'h1'          => 'Healthcare Software',
            'hero_sub'    => 'Clinical workflows, care portals, and integrations built for HIPAA-aware environments.',
            'intro_title' => 'Healthcare Platforms That Clinicians Use',
            'intro_sub'   => 'HIPAA-Aware Architecture',
            'intro_body'  => 'AppsDeddy delivers healthcare software with PHI safeguards, interoperability (HL7/FHIR where required), and reporting that operations teams rely on. We partner with health systems, digital health startups, and enterprise IT across North America and Australia.',
            'offerings'   => [
                ['icon' => 'fa-hospital', 'image' => 'offering-1', 'title' => 'Patient & Care Portals', 'text' => 'Secure portals for scheduling, records access, and care coordination.'],
                ['icon' => 'fa-notes-medical', 'image' => 'offering-2', 'title' => 'Clinical Reporting', 'text' => 'Dashboards and exports that speed operational and quality reporting.'],
                ['icon' => 'fa-exchange-alt', 'image' => 'offering-3', 'title' => 'EHR Integrations', 'text' => 'Connect Epic, Cerner, or custom EHR data into your product.'],
                ['icon' => 'fa-lock', 'image' => 'offering-4', 'title' => 'HIPAA Controls', 'text' => 'Access control, audit logs, and BAA-ready delivery practices.'],
            ],
            'why_title'   => 'Why AppsDeddy for Healthcare?',
            'why_body'    => 'We balance speed with compliance: discovery workshops, threat modeling, and phased rollouts that clinical stakeholders can adopt.',
            'cta_title'   => 'Ready to Build Healthcare Software?',
            'cta_sub'     => 'Book a discovery call to discuss HIPAA scope, integrations, and rollout.',
        ],
        'custom-saas' => [
            'title'       => 'Custom SaaS & Application Development | AppsDeddy',
            'description' => 'Design and engineer multi-tenant SaaS and custom applications, from MVP to scale. US, Canada, and Australia product teams welcome.',
            'keywords'    => 'custom SaaS development, web application development, multi-tenant SaaS, AppsDeddy',
            'contact_key' => 'saas',
            'legacy_slug' => 'web-mobile-app-development',
            'hero_image'  => 'hero-web-mobile',
            'custom_image'=> 'offering-2',
            'icon'        => 'fa-cloud',
            'h1'          => 'Custom SaaS Development',
            'hero_sub'    => 'Multi-tenant SaaS, web platforms, and companion mobile apps engineered for scale.',
            'intro_title' => 'Platforms Built to Scale',
            'intro_sub'   => 'SaaS & Product Engineering',
            'intro_body'  => 'AppsDeddy designs and builds custom SaaS platforms with tenancy, billing, permissions, and cloud architecture that grows with your roadmap. From MVP to Series B, we help product teams ship reliably.',
            'offerings'   => [
                ['icon' => 'fa-layer-group', 'image' => 'offering-1', 'title' => 'Multi-Tenant Architecture', 'text' => 'Isolation, onboarding, and admin tooling for B2B SaaS.'],
                ['icon' => 'fa-mobile-alt', 'image' => 'offering-2', 'title' => 'Web & Mobile Apps', 'text' => 'React, Next.js, and native companions where needed.'],
                ['icon' => 'fa-credit-card', 'image' => 'offering-3', 'title' => 'Billing & Subscriptions', 'text' => 'Stripe and enterprise billing integrations.'],
                ['icon' => 'fa-chart-line', 'image' => 'offering-4', 'title' => 'Analytics & Admin', 'text' => 'Usage dashboards, RBAC, and customer success tooling.'],
            ],
            'why_title'   => 'Why AppsDeddy for Custom SaaS?',
            'why_body'    => 'Product-minded squads with clear milestones, not body-shop throughput. We own architecture decisions and production quality.',
            'cta_title'   => 'Ready to Build Your Platform?',
            'cta_sub'     => 'Book a discovery call to map architecture, scope, and delivery milestones.',
        ],
        'enterprise-dotnet' => [
            'title'       => 'Enterprise .NET Development | AppsDeddy',
            'description' => 'ASP.NET Core, Azure, API modernization, and mission-critical .NET systems for US, Canada, and Australia enterprises.',
            'keywords'    => 'enterprise .NET development, ASP.NET Core, Azure .NET, API modernization, legacy modernization',
            'contact_key' => 'dotnet',
            'hero_image'  => 'hero-data-engineering',
            'custom_image'=> 'offering-5',
            'icon'        => 'fa-server',
            'h1'          => 'Enterprise .NET Development',
            'hero_sub'    => 'ASP.NET Core, Azure, APIs, and legacy modernization for mission-critical systems.',
            'intro_title' => 'Mission-Critical .NET Delivery',
            'intro_sub'   => 'Azure-Native Engineering',
            'intro_body'  => 'We modernize and extend .NET estates: microservices, event-driven APIs, Azure hosting, and gradual migration from legacy frameworks without big-bang risk.',
            'offerings'   => [
                ['icon' => 'fa-code', 'image' => 'offering-1', 'title' => 'ASP.NET Core APIs', 'text' => 'High-performance services with OpenAPI and observability.'],
                ['icon' => 'fa-cloud', 'image' => 'offering-2', 'title' => 'Azure Deployment', 'text' => 'App Service, AKS, and serverless patterns with CI/CD.'],
                ['icon' => 'fa-sync', 'image' => 'offering-3', 'title' => 'Legacy Modernization', 'text' => 'Strangler patterns from .NET Framework to .NET 8+.'],
                ['icon' => 'fa-database', 'image' => 'offering-4', 'title' => 'Data & Integration', 'text' => 'SQL, Cosmos DB, and enterprise messaging integrations.'],
            ],
            'why_title'   => 'Why AppsDeddy for .NET?',
            'why_body'    => 'Senior .NET architects who document decisions, enforce quality gates, and stay through production cutover.',
            'cta_title'   => 'Ready to Modernize on .NET?',
            'cta_sub'     => 'Book a discovery call to assess architecture and migration options.',
        ],
        'cloud-solutions' => [
            'title'       => 'Cloud Solutions & DevOps | AppsDeddy',
            'description' => 'Azure and AWS architecture, DevOps, security baselines, and cost optimization for enterprise product teams.',
            'keywords'    => 'cloud solutions, Azure AWS architecture, DevOps, cloud migration, infrastructure as code',
            'contact_key' => 'cloud',
            'hero_image'  => 'hero-data-engineering',
            'custom_image'=> 'offering-6',
            'icon'        => 'fa-network-wired',
            'h1'          => 'Cloud Solutions',
            'hero_sub'    => 'Azure/AWS architecture, DevOps, security baselines, and cost optimization.',
            'intro_title' => 'Cloud Foundations That Scale',
            'intro_sub'   => 'Architecture & DevOps',
            'intro_body'  => 'AppsDeddy designs cloud landing zones, CI/CD pipelines, and observability stacks so your product teams ship faster with fewer incidents. We work across Azure and AWS for US, Canadian, and Australian deployments.',
            'offerings'   => [
                ['icon' => 'fa-drafting-compass', 'image' => 'offering-1', 'title' => 'Cloud Architecture', 'text' => 'Landing zones, networking, and well-architected reviews.'],
                ['icon' => 'fa-infinity', 'image' => 'offering-2', 'title' => 'CI/CD & DevOps', 'text' => 'Pipelines, IaC, and environment promotion strategies.'],
                ['icon' => 'fa-shield-alt', 'image' => 'offering-3', 'title' => 'Security Baselines', 'text' => 'IAM, secrets management, and compliance-ready controls.'],
                ['icon' => 'fa-chart-pie', 'image' => 'offering-4', 'title' => 'Cost Optimization', 'text' => 'Right-sizing, reserved capacity, and FinOps reporting.'],
            ],
            'why_title'   => 'Why AppsDeddy for Cloud?',
            'why_body'    => 'Pragmatic cloud engineering tied to product outcomes, not shelfware recommendations.',
            'cta_title'   => 'Ready to Strengthen Your Cloud?',
            'cta_sub'     => 'Book a discovery call for an architecture and DevOps assessment.',
        ],
        'data-engineering' => [
            'title'       => 'Data Engineering Solutions | AppsDeddy',
            'description' => 'Data pipelines, ETL, integration, and analytics for US, Canada, and Australia businesses.',
            'keywords'    => 'data engineering services, data pipeline development, ETL integration, analytics',
            'contact_key' => 'cloud',
            'legacy_slug' => 'data-engineering-solutions',
            'hero_image'  => 'hero-data-engineering',
            'custom_image'=> 'offering-3',
            'icon'        => 'fa-database',
            'h1'          => 'Data Engineering',
            'hero_sub'    => 'Secure data pipelines, ETL, and analytics infrastructure for product and data teams.',
            'intro_title' => 'Data Pipelines You Can Trust',
            'intro_sub'   => 'ETL, Warehousing & Analytics',
            'intro_body'  => 'We build reliable data platforms: ingestion, transformation, warehousing, and BI integrations that support decision-making without operational surprises.',
            'offerings'   => [
                ['icon' => 'fa-stream', 'image' => 'offering-1', 'title' => 'Data Pipelines', 'text' => 'Batch and streaming pipelines with monitoring and SLAs.'],
                ['icon' => 'fa-exchange-alt', 'image' => 'offering-2', 'title' => 'ETL / ELT', 'text' => 'Integrate CRM, ERP, and product data into your warehouse.'],
                ['icon' => 'fa-warehouse', 'image' => 'offering-3', 'title' => 'Warehousing', 'text' => 'Snowflake, BigQuery, Azure Synapse, and lakehouse patterns.'],
                ['icon' => 'fa-chart-bar', 'image' => 'offering-4', 'title' => 'Analytics Layer', 'text' => 'Dashboards and semantic layers for business users.'],
            ],
            'why_title'   => 'Why AppsDeddy for Data Engineering?',
            'why_body'    => 'Data platforms designed for maintainability, with documentation and runbooks your team inherits.',
            'cta_title'   => 'Ready to Unlock Your Data?',
            'cta_sub'     => 'Book a discovery call to discuss pipelines, warehousing, and analytics architecture.',
        ],
        'ux-ui-design' => [
            'title'       => 'UX & UI Design Services | AppsDeddy',
            'description' => 'User-centered UX research, wireframes, prototypes, and polished UI for enterprise and SaaS products.',
            'keywords'    => 'UX UI design services, product design, SaaS design, AppsDeddy',
            'contact_key' => 'saas',
            'legacy_slug' => 'ux-ui-design',
            'hero_image'  => 'hero-ux-ui',
            'custom_image'=> 'offering-4',
            'icon'        => 'fa-paint-brush',
            'h1'          => 'UX & UI Design',
            'hero_sub'    => 'User research, design systems, and polished UI for enterprise SaaS and regulated products.',
            'intro_title' => 'Design for Complex Products',
            'intro_sub'   => 'Research to Production UI',
            'intro_body'  => 'AppsDeddy pairs UX research with design systems and high-fidelity UI so engineering teams ship consistent, accessible experiences across web and mobile.',
            'offerings'   => [
                ['icon' => 'fa-search', 'image' => 'offering-1', 'title' => 'UX Research', 'text' => 'Interviews, journey maps, and usability testing.'],
                ['icon' => 'fa-pencil-ruler', 'image' => 'offering-2', 'title' => 'Wireframes & Prototypes', 'text' => 'Clickable flows validated before build.'],
                ['icon' => 'fa-palette', 'image' => 'offering-3', 'title' => 'UI & Design Systems', 'text' => 'Component libraries aligned to your brand and dev stack.'],
                ['icon' => 'fa-universal-access', 'image' => 'offering-4', 'title' => 'Accessibility', 'text' => 'WCAG-aware patterns for enterprise buyers.'],
            ],
            'why_title'   => 'Why AppsDeddy for UX/UI?',
            'why_body'    => 'Designers who understand engineering constraints and enterprise procurement expectations.',
            'cta_title'   => 'Ready for Better Product Design?',
            'cta_sub'     => 'Book a discovery call to align UX strategy with your roadmap.',
        ],
    ];
}

/** @return array<string, array<string, mixed>> */
function pagesIndustryRegistry(): array {
    return [
        'fintech' => [
            'title'       => 'Financial Services Software Partner | Industry | AppsDeddy',
            'description' => 'Industry overview for payments, lending, and compliance-heavy financial platforms in the US, Canada, and Australia.',
            'keywords'    => 'financial services industry software, FinTech vertical partner, payments lending platforms',
            'icon'        => 'fa-university',
            'h1'          => 'Financial Services',
            'hero_sub'    => 'Industry playbook for payments, lending, and regulated financial products.',
            'intro_body'  => 'FinTech buyers need velocity without compromising auditability. AppsDeddy helps founders and engineering leaders ship platforms with the controls investors and regulators expect.',
            'challenges'  => [
                ['title' => 'Compliance overhead', 'text' => 'KYC, AML, PCI, and regional rules slow delivery without the right architecture.'],
                ['title' => 'Integration complexity', 'text' => 'Processors, banks, and identity vendors each add failure modes.'],
                ['title' => 'Scale under scrutiny', 'text' => 'Investors and auditors expect logging, access control, and change management.'],
            ],
            'solutions'   => [
                ['icon' => 'fa-credit-card', 'title' => 'Payments platforms', 'link' => 'services/fintech'],
                ['icon' => 'fa-shield-alt', 'title' => 'Security & compliance', 'link' => 'services/fintech'],
                ['icon' => 'fa-cloud', 'title' => 'Cloud & DevOps', 'link' => 'services/cloud-solutions'],
            ],
            'related_service' => 'fintech',
        ],
        'healthcare' => [
            'title'       => 'Healthcare & Life Sciences Software | Industry | AppsDeddy',
            'description' => 'Industry overview for HIPAA-aware portals, clinical reporting, and EHR integrations across US, Canada, and Australia.',
            'keywords'    => 'healthcare industry software partner, life sciences digital health, clinical software overview',
            'icon'        => 'fa-heartbeat',
            'h1'          => 'Healthcare & Life Sciences',
            'hero_sub'    => 'Industry playbook for digital health and care operations.',
            'intro_body'  => 'Healthcare products fail when clinicians cannot adopt them. We design workflows, integrations, and reporting that fit how care teams actually operate.',
            'challenges'  => [
                ['title' => 'HIPAA & PHI risk', 'text' => 'Every feature must account for privacy, access, and audit requirements.'],
                ['title' => 'EHR interoperability', 'text' => 'Data must flow between legacy systems and modern products reliably.'],
                ['title' => 'Adoption at scale', 'text' => 'Multi-site rollouts need training, support, and measurable outcomes.'],
            ],
            'solutions'   => [
                ['icon' => 'fa-hospital', 'title' => 'Care portals', 'link' => 'services/healthcare'],
                ['icon' => 'fa-notes-medical', 'title' => 'Clinical reporting', 'link' => 'services/healthcare'],
                ['icon' => 'fa-server', 'title' => 'Enterprise .NET', 'link' => 'services/enterprise-dotnet'],
            ],
            'related_service' => 'healthcare',
        ],
        'saas' => [
            'title'       => 'B2B SaaS & Technology Companies | Industry | AppsDeddy',
            'description' => 'Industry overview for B2B SaaS platforms from MVP to scale. US, Canada, and Australia product teams.',
            'keywords'    => 'B2B SaaS industry partner, technology company software, multi-tenant platform overview',
            'icon'        => 'fa-cloud',
            'h1'          => 'B2B SaaS & Technology',
            'hero_sub'    => 'Industry playbook for tenancy, billing, and product growth.',
            'intro_body'  => 'SaaS leaders need predictable delivery as ARR grows. AppsDeddy embeds squads that own architecture, roadmap execution, and production quality.',
            'challenges'  => [
                ['title' => 'Tenancy & permissions', 'text' => 'Enterprise buyers expect SSO, RBAC, and audit trails on day one.'],
                ['title' => 'Billing complexity', 'text' => 'Usage, seats, and contracts need flexible monetization without rework.'],
                ['title' => 'Platform reliability', 'text' => 'Downtime directly hits retention and expansion revenue.'],
            ],
            'solutions'   => [
                ['icon' => 'fa-layer-group', 'title' => 'Custom SaaS', 'link' => 'services/custom-saas'],
                ['icon' => 'fa-paint-brush', 'title' => 'UX & UI design', 'link' => 'services/ux-ui-design'],
                ['icon' => 'fa-robot', 'title' => 'AI automation', 'link' => 'services/ai-automation'],
            ],
            'related_service' => 'saas',
        ],
    ];
}

/** @return array<string, array<string, mixed>> */
function pagesCaseStudyRegistry(): array {
    return [
        'healthhub' => [
            'title'       => 'HealthHub Case Study | Healthcare Software | AppsDeddy',
            'description' => 'How AppsDeddy delivered clinical reporting improvements across 50+ healthcare facilities with .NET and React on Azure.',
            'keywords'    => 'healthcare case study, clinical reporting software, HealthHub AppsDeddy',
            'industry'    => 'Healthcare',
            'icon'        => 'fa-heartbeat',
            'gradient'    => 'gradient-3',
            'h1'          => 'HealthHub',
            'tagline'     => '40% faster clinical reporting across 50+ facilities',
            'client'      => 'US healthcare network (confidential)',
            'challenge'   => 'Fragmented reporting across facilities created delays for clinical operations and quality teams. Legacy exports were manual and error-prone.',
            'solution'    => 'AppsDeddy built a centralized reporting platform on .NET and React with Azure hosting, role-based access, and automated data pipelines from facility systems.',
            'results'     => [
                ['metric' => '40%', 'label' => 'Faster reporting cycles'],
                ['metric' => '50+', 'label' => 'Facilities onboarded'],
                ['metric' => '99.9%', 'label' => 'Platform uptime SLA'],
            ],
            'stack'       => ['.NET', 'React', 'Azure', 'SQL Server'],
            'service_link'=> 'services/healthcare',
        ],
        'aurora-tales' => [
            'title'       => 'Aurora Tales Case Study | SaaS Platform | AppsDeddy',
            'description' => 'Publishing SaaS with payments, workflows, and multi-tenant architecture built with Next.js and Stripe.',
            'keywords'    => 'SaaS case study, publishing platform, Aurora Tales AppsDeddy',
            'industry'    => 'SaaS',
            'icon'        => 'fa-book-open',
            'gradient'    => 'gradient-2',
            'h1'          => 'Aurora Tales',
            'tagline'     => 'Publishing platform with payments and editorial workflows',
            'client'      => 'Digital publishing startup',
            'challenge'   => 'The client needed a multi-tenant publishing product with subscriptions, author workflows, and payment processing without rebuilding each season.',
            'solution'    => 'We delivered a Next.js SaaS core with Stripe billing, editorial approval flows, and tenant isolation ready for US and Canadian customers.',
            'results'     => [
                ['metric' => '3x', 'label' => 'Faster content publish cycle'],
                ['metric' => '12wk', 'label' => 'MVP to production'],
                ['metric' => '2', 'label' => 'Markets at launch (US/CA)'],
            ],
            'stack'       => ['Next.js', 'Stripe', 'PostgreSQL', 'AWS'],
            'service_link'=> 'services/custom-saas',
        ],
        'operations-automation' => [
            'title'       => 'Operations Automation Case Study | AI | AppsDeddy',
            'description' => 'LLM-powered workflow automation that reduced manual document processing for an enterprise operations team.',
            'keywords'    => 'AI automation case study, LLM workflow, operations automation AppsDeddy',
            'industry'    => 'AI Automation',
            'icon'        => 'fa-robot',
            'gradient'    => 'gradient-1',
            'h1'          => 'Operations Automation',
            'tagline'     => 'LLM workflows that cut manual processing time',
            'client'      => 'Enterprise operations platform',
            'challenge'   => 'High-volume document review created bottlenecks and inconsistent routing across regional teams.',
            'solution'    => 'AppsDeddy implemented LLM-assisted classification, extraction, and routing integrated with the client\'s existing Azure APIs and audit logging.',
            'results'     => [
                ['metric' => '60%', 'label' => 'Reduction in manual review'],
                ['metric' => '4wk', 'label' => 'Pilot to production'],
                ['metric' => '0', 'label' => 'PII stored in model prompts'],
            ],
            'stack'       => ['Python', 'Azure', 'OpenAI API', 'React'],
            'service_link'=> 'services/ai-automation',
        ],
    ];
}

/** @return array<string, array<string, mixed>> */
function pagesTechnologyRegistry(): array {
    return [
        'dotnet' => [
            'title'       => '.NET Development Stack | Technologies | AppsDeddy',
            'description' => 'ASP.NET Core, C#, Azure hosting, and enterprise .NET modernization. Stack capabilities for US, Canada, and Australia teams.',
            'keywords'    => '.NET development stack, ASP.NET Core, C# enterprise, Azure .NET technology',
            'icon'        => 'fa-code',
            'h1'          => '.NET',
            'hero_sub'    => 'ASP.NET Core, C#, APIs, and Azure-native delivery for mission-critical systems.',
            'intro_body'  => 'AppsDeddy ships production .NET systems with clear architecture decisions, CI/CD, and observability. Use this page to evaluate stack fit; book a discovery call for scoped delivery.',
            'topics'      => [
                ['title' => 'ASP.NET Core APIs', 'text' => 'High-performance services with OpenAPI, auth, and structured logging.'],
                ['title' => 'Azure hosting', 'text' => 'App Service, AKS, Functions, and Key Vault patterns for regulated workloads.'],
                ['title' => 'Modernization', 'text' => 'Strangler migrations from .NET Framework without big-bang cutovers.'],
                ['title' => 'Data access', 'text' => 'EF Core, Dapper, SQL Server, and messaging integrations.'],
            ],
            'related_service' => 'enterprise-dotnet',
            'related_insight' => 'enterprise-dotnet-modernization',
        ],
        'azure' => [
            'title'       => 'Azure Cloud Architecture | Technologies | AppsDeddy',
            'description' => 'Azure landing zones, DevOps, security baselines, and cost optimization for enterprise product teams.',
            'keywords'    => 'Azure architecture, Azure DevOps, cloud landing zone, Azure security baseline',
            'icon'        => 'fa-cloud',
            'h1'          => 'Azure',
            'hero_sub'    => 'Landing zones, DevOps pipelines, and well-architected patterns on Microsoft Azure.',
            'intro_body'  => 'We design Azure foundations that product teams can extend safely: identity, networking, IaC, and cost controls. Pair this with our Cloud Solutions practice for full delivery.',
            'topics'      => [
                ['title' => 'Landing zones', 'text' => 'Subscription, networking, and governance baselines.'],
                ['title' => 'CI/CD', 'text' => 'Azure DevOps or GitHub Actions with environment promotion.'],
                ['title' => 'Security', 'text' => 'Entra ID, managed identities, secrets, and monitoring.'],
                ['title' => 'FinOps', 'text' => 'Right-sizing, reserved capacity, and spend visibility.'],
            ],
            'related_service' => 'cloud-solutions',
            'related_insight' => 'azure-landing-zones-for-saas',
        ],
        'ai' => [
            'title'       => 'AI & LLM Technology Stack | Technologies | AppsDeddy',
            'description' => 'Production LLM integrations, RAG, agents, and MLOps patterns for enterprise automation.',
            'keywords'    => 'LLM technology stack, RAG pipelines, AI agents enterprise, MLOps patterns',
            'icon'        => 'fa-robot',
            'h1'          => 'AI & LLMs',
            'hero_sub'    => 'Production patterns for LLM integrations, RAG, agents, and governed automation.',
            'intro_body'  => 'Pilots fail when governance and evaluation are missing. AppsDeddy implements LLM capabilities with observability, PII controls, and measurable workflow outcomes.',
            'topics'      => [
                ['title' => 'LLM integration', 'text' => 'Embed models into existing products with rate limits and fallbacks.'],
                ['title' => 'RAG pipelines', 'text' => 'Ground answers in your documents with retrieval quality checks.'],
                ['title' => 'Agents & workflows', 'text' => 'Automate multi-step operations with human-in-the-loop gates.'],
                ['title' => 'Evaluation', 'text' => 'Offline tests, online metrics, and audit logging for production.'],
            ],
            'related_service' => 'ai-automation',
            'related_insight' => 'production-ai-automation-playbook',
        ],
    ];
}

/** @return array<string, array<string, mixed>> */
function pagesInsightRegistry(): array {
    return [
        'production-ai-automation-playbook' => [
            'title'       => 'Production AI Automation Playbook | Insights | AppsDeddy',
            'description' => 'How to move AI from demo to production: use-case selection, governance, evaluation, and rollout for enterprise teams.',
            'keywords'    => 'AI automation playbook, production LLM guide, enterprise AI rollout',
            'h1'          => 'Production AI Automation Playbook',
            'hero_sub'    => 'A practical path from pilot to production for workflow automation.',
            'category'    => 'AI',
            'read_time'   => '8 min',
            'sections'    => [
                ['h' => 'Start with a measurable workflow', 'p' => 'Pick a process with clear cycle-time or cost metrics: document intake, support triage, or report generation. Avoid open-ended chatbots as the first production use case.'],
                ['h' => 'Design for governance early', 'p' => 'Define data retention, PII redaction, prompt logging rules, and human approval gates before writing integration code.'],
                ['h' => 'Evaluate before you scale', 'p' => 'Build a gold-set of examples, track precision/recall or task success rate, and set a go-live bar. Production without evaluation creates silent failures.'],
                ['h' => 'Ship behind feature flags', 'p' => 'Roll out to one team or region first, monitor latency and override rates, then expand. Pair with our AI Automation service for delivery.'],
            ],
            'links' => [
                ['label' => 'AI Automation service', 'path' => 'services/ai-automation'],
                ['label' => 'AI technology stack', 'path' => 'technologies/ai'],
                ['label' => 'Operations Automation case study', 'path' => 'case-studies/operations-automation'],
            ],
        ],
        'hipaa-aware-software-checklist' => [
            'title'       => 'HIPAA-Aware Software Checklist | Insights | AppsDeddy',
            'description' => 'Engineering checklist for HIPAA-aware healthcare software: access control, audit logs, BAAs, and EHR integration risks.',
            'keywords'    => 'HIPAA software checklist, healthcare software compliance engineering',
            'h1'          => 'HIPAA-Aware Software Checklist',
            'hero_sub'    => 'What product and engineering leaders should verify before building with PHI.',
            'category'    => 'Healthcare',
            'read_time'   => '7 min',
            'sections'    => [
                ['h' => 'Map where PHI lives', 'p' => 'Inventory data stores, logs, backups, and third-party processors. If PHI touches a system, treat it as in-scope.'],
                ['h' => 'Enforce least privilege', 'p' => 'Role-based access, MFA for admins, and short-lived credentials. Audit every PHI access path.'],
                ['h' => 'Plan EHR integration carefully', 'p' => 'HL7/FHIR interfaces need versioning, error queues, and clinical validation. Scope integrations in discovery, not mid-sprint.'],
                ['h' => 'Document for BAAs and audits', 'p' => 'Keep architecture diagrams, risk assessments, and runbooks current. See our Healthcare Software capability for delivery patterns.'],
            ],
            'links' => [
                ['label' => 'Healthcare Software service', 'path' => 'services/healthcare'],
                ['label' => 'Healthcare industry', 'path' => 'industries/healthcare'],
                ['label' => 'HealthHub case study', 'path' => 'case-studies/healthhub'],
            ],
        ],
        'fintech-compliance-architecture' => [
            'title'       => 'FinTech Compliance Architecture Basics | Insights | AppsDeddy',
            'description' => 'Architecture patterns for payments, KYC/AML, and auditability in FinTech products across US, Canada, and Australia.',
            'keywords'    => 'FinTech compliance architecture, KYC AML software design, payments platform architecture',
            'h1'          => 'FinTech Compliance Architecture Basics',
            'hero_sub'    => 'Build for auditability without freezing product velocity.',
            'category'    => 'FinTech',
            'read_time'   => '8 min',
            'sections'    => [
                ['h' => 'Separate trust boundaries', 'p' => 'Isolate payment, identity, and core product domains. Reduce blast radius when a vendor or control changes.'],
                ['h' => 'Make every decision auditable', 'p' => 'Persist who approved what, when, and why. KYC/AML outcomes need evidence trails for regulators and investors.'],
                ['h' => 'Design for regional rules', 'p' => 'US, Canada, and Australia differ on data residency and consumer finance rules. Capture country in tenancy and data routing early.'],
                ['h' => 'Scope compliance in discovery', 'p' => 'PCI, SOC 2, and licensing constraints change team shape. Discuss them on a discovery call before fixing price.'],
            ],
            'links' => [
                ['label' => 'FinTech Solutions service', 'path' => 'services/fintech'],
                ['label' => 'Financial Services industry', 'path' => 'industries/fintech'],
                ['label' => 'Book a discovery call', 'path' => 'contact'],
            ],
        ],
        'multi-tenant-saas-architecture' => [
            'title'       => 'Multi-Tenant SaaS Architecture Guide | Insights | AppsDeddy',
            'description' => 'Tenancy models, RBAC, billing, and isolation patterns for B2B SaaS from MVP to enterprise.',
            'keywords'    => 'multi-tenant SaaS architecture, SaaS RBAC billing, B2B SaaS design guide',
            'h1'          => 'Multi-Tenant SaaS Architecture Guide',
            'hero_sub'    => 'Choose tenancy and permissions patterns that survive enterprise sales.',
            'category'    => 'SaaS',
            'read_time'   => '9 min',
            'sections'    => [
                ['h' => 'Pick a tenancy model deliberately', 'p' => 'Shared DB with tenant keys works early; siloed schemas or DBs appear for regulated or noisy neighbors. Document the decision.'],
                ['h' => 'RBAC before enterprise deals', 'p' => 'SSO, role templates, and audit logs become blockers in late-stage sales. Build them before Series B pressure.'],
                ['h' => 'Billing as a product surface', 'p' => 'Seats, usage, and contracts need flexible pricing objects. Hard-coding plans creates rewrites.'],
                ['h' => 'Observe per tenant', 'p' => 'Latency and error rates by tenant catch noisy neighbors early. Pair with Custom SaaS delivery when you need a squad.'],
            ],
            'links' => [
                ['label' => 'Custom SaaS service', 'path' => 'services/custom-saas'],
                ['label' => 'SaaS industry', 'path' => 'industries/saas'],
                ['label' => 'Aurora Tales case study', 'path' => 'case-studies/aurora-tales'],
            ],
        ],
        'enterprise-dotnet-modernization' => [
            'title'       => 'Enterprise .NET Modernization Guide | Insights | AppsDeddy',
            'description' => 'How to modernize .NET Framework estates to ASP.NET Core and Azure with strangler patterns and low cutover risk.',
            'keywords'    => '.NET modernization guide, ASP.NET Core migration, legacy .NET Azure',
            'h1'          => 'Enterprise .NET Modernization Guide',
            'hero_sub'    => 'Reduce risk while moving mission-critical systems to modern .NET.',
            'category'    => '.NET',
            'read_time'   => '8 min',
            'sections'    => [
                ['h' => 'Inventory before you rewrite', 'p' => 'Map dependencies, data contracts, and batch jobs. Big-bang rewrites fail when unknown couplings appear late.'],
                ['h' => 'Prefer strangler patterns', 'p' => 'Extract APIs and UIs behind a facade. Route traffic gradually while the monolith shrinks.'],
                ['h' => 'Adopt Azure intentionally', 'p' => 'Hosting, identity, and secrets should move with application slices, not as a separate science project.'],
                ['h' => 'Keep quality gates', 'p' => 'Contract tests and performance budgets protect cutovers. See our Enterprise .NET service for delivery.'],
            ],
            'links' => [
                ['label' => 'Enterprise .NET service', 'path' => 'services/enterprise-dotnet'],
                ['label' => '.NET technology page', 'path' => 'technologies/dotnet'],
                ['label' => 'Azure technology page', 'path' => 'technologies/azure'],
            ],
        ],
        'azure-landing-zones-for-saas' => [
            'title'       => 'Azure Landing Zones for SaaS | Insights | AppsDeddy',
            'description' => 'Landing zone patterns for multi-tenant SaaS on Azure: subscriptions, identity, networking, and DevOps.',
            'keywords'    => 'Azure landing zones SaaS, Azure multi-tenant architecture, SaaS DevOps Azure',
            'h1'          => 'Azure Landing Zones for SaaS',
            'hero_sub'    => 'Cloud foundations that keep SaaS growth from creating security debt.',
            'category'    => 'Cloud',
            'read_time'   => '7 min',
            'sections'    => [
                ['h' => 'Separate shared and product planes', 'p' => 'Platform subscriptions for identity and networking; product subscriptions for apps. Clear ownership prevents drift.'],
                ['h' => 'Standardize identity early', 'p' => 'Entra ID apps, managed identities, and Key Vault reduce secret sprawl as teams grow.'],
                ['h' => 'Automate environments', 'p' => 'IaC plus promotion pipelines make staging trustworthy. Manual portal clicks do not scale.'],
                ['h' => 'Cost is a design constraint', 'p' => 'Tag by tenant and environment. FinOps reporting belongs in the landing zone, not a spreadsheet.'],
            ],
            'links' => [
                ['label' => 'Cloud Solutions service', 'path' => 'services/cloud-solutions'],
                ['label' => 'Azure technology page', 'path' => 'technologies/azure'],
                ['label' => 'Custom SaaS service', 'path' => 'services/custom-saas'],
            ],
        ],
    ];
}

/** @return array<string, array<string, mixed>> */
function pagesMarketRegistry(): array {
    return [
        'united-states' => [
            'title'       => 'Software Development for US Companies | Markets | AppsDeddy',
            'description' => 'Indianapolis-based enterprise software partner for US product and engineering leaders. EST/CST collaboration on AI, FinTech, healthcare, and SaaS.',
            'keywords'    => 'US software development partner, Indianapolis software company, EST CST collaboration AppsDeddy',
            'icon'        => 'fa-flag-usa',
            'h1'          => 'United States',
            'hero_sub'    => 'US-based delivery from Indianapolis with EST/CST overlap for product teams nationwide.',
            'intro_body'  => 'AppsDeddy is headquartered in Indianapolis and works with startups and enterprises across the United States. Discovery, architecture, and account leadership run on US business hours so stakeholders stay in the loop without overnight lag.',
            'points'      => [
                ['title' => 'US headquarters', 'text' => '8520 Allison Pointe Blvd Ste 223, Indianapolis, IN 46250, United States.'],
                ['title' => 'Timezone overlap', 'text' => 'Primary collaboration on EST/CST for standups, reviews, and go-live windows.'],
                ['title' => 'Regulated delivery', 'text' => 'Experience with HIPAA-aware and FinTech controls common in US buyer diligence.'],
                ['title' => 'Engagement models', 'text' => 'Fixed-scope, milestone, or dedicated squad after a discovery call.'],
            ],
            'hreflang'    => 'en-US',
            'related'     => [
                ['label' => 'Services', 'path' => 'services'],
                ['label' => 'Case studies', 'path' => 'case-studies'],
                ['label' => 'Book a discovery call', 'path' => 'contact'],
            ],
        ],
        'canada' => [
            'title'       => 'Software Development for Canadian Teams | Markets | AppsDeddy',
            'description' => 'US-based AppsDeddy partners with Canadian product and engineering leaders. EST overlap, clear scope, and delivery across AI, FinTech, healthcare, and SaaS.',
            'keywords'    => 'Canadian software development partner, US nearshore Canada, EST collaboration AppsDeddy',
            'icon'        => 'fa-maple-leaf',
            'h1'          => 'Canada',
            'hero_sub'    => 'EST overlap with Canadian stakeholders and discovery-first scoping for cross-border product teams.',
            'intro_body'  => 'Canadian founders and CTOs get the same senior delivery model as US clients, with meeting times that fit Eastern and Central Canada. We discuss data residency, bilingual UX needs, and compliance early so architecture does not get reworked mid-build.',
            'points'      => [
                ['title' => 'EST-friendly collaboration', 'text' => 'Standups and demos scheduled for Eastern/Central Canadian overlap.'],
                ['title' => 'Cross-border clarity', 'text' => 'Contracts, IP ownership, and payment terms confirmed up front.'],
                ['title' => 'Market nuance', 'text' => 'Room for bilingual product surfaces and Canadian payment processors when needed.'],
                ['title' => 'Same enterprise stack', 'text' => 'AI, FinTech, healthcare, SaaS, .NET, and cloud capabilities.'],
            ],
            'hreflang'    => 'en-CA',
            'related'     => [
                ['label' => 'Financial Services industry', 'path' => 'industries/fintech'],
                ['label' => 'Custom SaaS', 'path' => 'services/custom-saas'],
                ['label' => 'Book a discovery call', 'path' => 'contact'],
            ],
        ],
        'australia' => [
            'title'       => 'Software Development for Australian Teams | Markets | AppsDeddy',
            'description' => 'AppsDeddy supports Australian product leaders with AEST/AEDT-friendly touchpoints, clear async rituals, and enterprise delivery across AI, SaaS, and cloud.',
            'keywords'    => 'Australian software development partner, AEST AEDT collaboration, US software company Australia',
            'icon'        => 'fa-globe-asia',
            'h1'          => 'Australia',
            'hero_sub'    => 'AEST/AEDT support windows, async-first rituals, and scoped delivery for Australian product teams.',
            'intro_body'  => 'Working across the Pacific needs discipline, not 24/7 theater. We set overlap windows for decisions, keep documentation current, and run delivery so Australian stakeholders can review without waiting overnight for every answer.',
            'points'      => [
                ['title' => 'Support hours for AU', 'text' => 'Planned overlap and async updates tuned for AEST/AEDT stakeholders.'],
                ['title' => 'Decision hygiene', 'text' => 'Written ADRs and sprint demos so progress is visible across timezones.'],
                ['title' => 'Cloud regions', 'text' => 'Azure/AWS region choices discussed when latency or residency matters.'],
                ['title' => 'Enterprise capabilities', 'text' => 'Same AI, SaaS, healthcare, and .NET offerings as North America.'],
            ],
            'hreflang'    => 'en-AU',
            'related'     => [
                ['label' => 'How we work', 'path' => 'how-we-work'],
                ['label' => 'Cloud Solutions', 'path' => 'services/cloud-solutions'],
                ['label' => 'Book a discovery call', 'path' => 'contact'],
            ],
        ],
    ];
}

function pagesRegistryByType(string $type): array {
    return match ($type) {
        'services'      => pagesServiceRegistry(),
        'industries'    => pagesIndustryRegistry(),
        'case-studies'  => pagesCaseStudyRegistry(),
        'technologies'  => pagesTechnologyRegistry(),
        'insights'      => pagesInsightRegistry(),
        'markets'       => pagesMarketRegistry(),
        default         => [],
    };
}

function pagesResolve(string $type, string $slug): ?array {
    $registry = pagesRegistryByType($type);
    return $registry[$slug] ?? null;
}

/** @return array<int, string> */
function pagesLegacyRedirects(): array {
    $map = [];
    foreach (pagesServiceRegistry() as $slug => $page) {
        if (!empty($page['legacy_slug'])) {
            $map[$page['legacy_slug']] = 'services/' . $slug;
        }
    }
    return $map;
}

function pagesCanonicalPath(string $type, string $slug): string {
    return $type . '/' . $slug;
}

function pagesApplySeo(string $type, string $slug, array $page): void {
    $GLOBALS['seoPageSlug']  = pagesCanonicalPath($type, $slug);
    $GLOBALS['pageCanonical'] = rtrim(SITE_URL, '/') . '/' . pagesCanonicalPath($type, $slug);
    $GLOBALS['pageTitle']       = $page['title'] ?? (SITE_NAME . ' | ' . SITE_TAGLINE);
    $GLOBALS['pageDescription'] = $page['description'] ?? '';
    $GLOBALS['pageKeywords']    = $page['keywords'] ?? seoDefaultKeywords();

    if ($type === 'services') {
        $GLOBALS['pageBreadcrumbs'] = [
            ['name' => 'Home', 'url' => rtrim(SITE_URL, '/') . '/'],
            ['name' => 'Services', 'url' => rtrim(SITE_URL, '/') . '/services'],
            ['name' => $page['h1'] ?? $slug, 'url' => $GLOBALS['pageCanonical']],
        ];
        if (!empty($page['hero_image'])) {
            $GLOBALS['pagePreloadImage'] = SITE_BASE . serviceImage($page['hero_image']);
        }
    }

    if ($type === 'industries') {
        $GLOBALS['pageBreadcrumbs'] = [
            ['name' => 'Home', 'url' => rtrim(SITE_URL, '/') . '/'],
            ['name' => 'Industries', 'url' => rtrim(SITE_URL, '/') . '/industries'],
            ['name' => $page['h1'] ?? $slug, 'url' => $GLOBALS['pageCanonical']],
        ];
    }

    if ($type === 'case-studies') {
        $GLOBALS['pageBreadcrumbs'] = [
            ['name' => 'Home', 'url' => rtrim(SITE_URL, '/') . '/'],
            ['name' => 'Case Studies', 'url' => rtrim(SITE_URL, '/') . '/case-studies'],
            ['name' => $page['h1'] ?? $slug, 'url' => $GLOBALS['pageCanonical']],
        ];
        $GLOBALS['pageSchema'] = [
            '@context'      => 'https://schema.org',
            '@type'         => 'Article',
            'headline'      => $page['h1'] ?? $slug,
            'description'   => $page['description'] ?? '',
            'author'        => ['@id' => SITE_URL . '/#organization'],
            'publisher'     => ['@id' => SITE_URL . '/#organization'],
            'datePublished' => '2024-01-01',
            'dateModified'  => date('Y-m-d'),
            'mainEntityOfPage' => $GLOBALS['pageCanonical'],
        ];
    }

    if ($type === 'technologies') {
        $GLOBALS['pageBreadcrumbs'] = [
            ['name' => 'Home', 'url' => rtrim(SITE_URL, '/') . '/'],
            ['name' => 'Technologies', 'url' => rtrim(SITE_URL, '/') . '/technologies'],
            ['name' => $page['h1'] ?? $slug, 'url' => $GLOBALS['pageCanonical']],
        ];
        $GLOBALS['pageOgType'] = 'website';
    }

    if ($type === 'insights') {
        $GLOBALS['pageBreadcrumbs'] = [
            ['name' => 'Home', 'url' => rtrim(SITE_URL, '/') . '/'],
            ['name' => 'Insights', 'url' => rtrim(SITE_URL, '/') . '/insights'],
            ['name' => $page['h1'] ?? $slug, 'url' => $GLOBALS['pageCanonical']],
        ];
        $GLOBALS['pageOgType'] = 'article';
        $GLOBALS['pageSchema'] = [
            '@context'         => 'https://schema.org',
            '@type'            => 'Article',
            'headline'         => $page['h1'] ?? $slug,
            'description'      => $page['description'] ?? '',
            'author'           => ['@id' => SITE_URL . '/#organization'],
            'publisher'        => ['@id' => SITE_URL . '/#organization'],
            'datePublished'    => '2025-01-15',
            'dateModified'     => date('Y-m-d'),
            'mainEntityOfPage' => $GLOBALS['pageCanonical'],
        ];
    }

    if ($type === 'markets') {
        $GLOBALS['pageBreadcrumbs'] = [
            ['name' => 'Home', 'url' => rtrim(SITE_URL, '/') . '/'],
            ['name' => 'Markets', 'url' => rtrim(SITE_URL, '/') . '/markets'],
            ['name' => $page['h1'] ?? $slug, 'url' => $GLOBALS['pageCanonical']],
        ];
        if (!empty($page['hreflang'])) {
            $GLOBALS['pageHreflang'] = (string) $page['hreflang'];
        }
    }
}

/** @return array<int, array{loc: string, lastmod: string, changefreq: string, priority: string}> */
function pagesSitemapEntries(): array {
    $urls  = [];
    $now   = date('c');
    $base  = rtrim(SITE_URL, '/');

    foreach (pagesServiceRegistry() as $slug => $meta) {
        $urls[] = [
            'loc'        => $base . '/services/' . $slug,
            'lastmod'    => $now,
            'changefreq' => 'monthly',
            'priority'   => '0.8',
        ];
    }
    foreach (pagesIndustryRegistry() as $slug => $meta) {
        $urls[] = [
            'loc'        => $base . '/industries/' . $slug,
            'lastmod'    => $now,
            'changefreq' => 'monthly',
            'priority'   => '0.75',
        ];
    }
    foreach (pagesCaseStudyRegistry() as $slug => $meta) {
        $urls[] = [
            'loc'        => $base . '/case-studies/' . $slug,
            'lastmod'    => $now,
            'changefreq' => 'monthly',
            'priority'   => '0.75',
        ];
    }
    foreach (pagesTechnologyRegistry() as $slug => $meta) {
        $urls[] = [
            'loc'        => $base . '/technologies/' . $slug,
            'lastmod'    => $now,
            'changefreq' => 'monthly',
            'priority'   => '0.7',
        ];
    }
    foreach (pagesInsightRegistry() as $slug => $meta) {
        $urls[] = [
            'loc'        => $base . '/insights/' . $slug,
            'lastmod'    => $now,
            'changefreq' => 'monthly',
            'priority'   => '0.7',
        ];
    }
    foreach (pagesMarketRegistry() as $slug => $meta) {
        $urls[] = [
            'loc'        => $base . '/markets/' . $slug,
            'lastmod'    => $now,
            'changefreq' => 'monthly',
            'priority'   => '0.7',
        ];
    }

    return $urls;
}
