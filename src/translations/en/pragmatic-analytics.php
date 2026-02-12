<?php

return [
    'Tools' => 'Tools',

    // Tabs & navigation
    'General' => 'General',
    'Options' => 'Options',

    // general.twig — dashboard stats
    'Visits (30 days)' => 'Visits (30 days)',
    'Unique visitors (30 days)' => 'Unique visitors (30 days)',
    'Daily evolution (30 days)' => 'Daily evolution (30 days)',
    'Most viewed pages (30 days)' => 'Most viewed pages (30 days)',

    // general.twig — table headers
    'Date' => 'Date',
    'Visits' => 'Visits',
    'Unique visitors' => 'Unique visitors',
    'Path' => 'Path',

    // general.twig — empty states
    'No data yet.' => 'No data yet.',
    'No page data yet.' => 'No page data yet.',

    // options.twig — section headings
    'Built-in tracking' => 'Built-in tracking',
    'Google Analytics 4' => 'Google Analytics 4',

    // options.twig — form field labels
    'Enable built-in tracking' => 'Enable built-in tracking',
    'Require consent' => 'Require consent',
    'Exclude logged-in users' => 'Exclude logged-in users',
    'Exclude known bots' => 'Exclude known bots',
    'Excluded environments' => 'Excluded environments',
    'Inject GA4 script' => 'Inject GA4 script',
    'Measurement ID' => 'Measurement ID',

    // options.twig — form field instructions
    'Records visits, unique visitors and most viewed pages.' => 'Records visits, unique visitors and most viewed pages.',
    'If enabled, visits will only be recorded when consent is given (window.PragmaticAnalyticsConsent = true or cookie pa_consent=1).' => 'If enabled, visits will only be recorded when consent is given (window.PragmaticAnalyticsConsent = true or cookie pa_consent=1).',
    'Comma-separated list. Example: dev,development,local,staging' => 'Comma-separated list. Example: dev,development,local,staging',
    'If enabled and a Measurement ID exists, gtag is injected automatically.' => 'If enabled and a Measurement ID exists, gtag is injected automatically.',
    'Expected format: G-XXXXXXXXXX' => 'Expected format: G-XXXXXXXXXX',

    // options.twig — button
    'Save settings' => 'Save settings',
];
