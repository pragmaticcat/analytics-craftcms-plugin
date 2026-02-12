<?php

return [
    'Tools' => 'Herramientas',

    // Tabs & navigation
    'General' => 'General',
    'Options' => 'Opciones',

    // general.twig — dashboard stats
    'Visits (30 days)' => 'Visitas (30 días)',
    'Unique visitors (30 days)' => 'Usuarios únicos (30 días)',
    'Daily evolution (30 days)' => 'Evolución diaria (30 días)',
    'Most viewed pages (30 days)' => 'Páginas más vistas (30 días)',

    // general.twig — table headers
    'Date' => 'Fecha',
    'Visits' => 'Visitas',
    'Unique visitors' => 'Usuarios únicos',
    'Path' => 'Ruta',

    // general.twig — empty states
    'No data yet.' => 'No hay datos todavía.',
    'No page data yet.' => 'No hay datos de páginas todavía.',

    // options.twig — section headings
    'Built-in tracking' => 'Tracking propio',
    'Google Analytics 4' => 'Google Analytics 4',

    // options.twig — form field labels
    'Enable built-in tracking' => 'Activar tracking propio',
    'Require consent' => 'Requerir consentimiento',
    'Exclude logged-in users' => 'Excluir usuarios logueados',
    'Exclude known bots' => 'Excluir bots conocidos',
    'Excluded environments' => 'Entornos excluidos',
    'Inject GA4 script' => 'Inyectar script de GA4',
    'Measurement ID' => 'Measurement ID',

    // options.twig — form field instructions
    'Records visits, unique visitors and most viewed pages.' => 'Registra visitas, usuarios únicos y páginas más vistas.',
    'If enabled, visits will only be recorded when consent is given (window.PragmaticAnalyticsConsent = true or cookie pa_consent=1).' => 'Si está activo, solo registrará visitas cuando exista consentimiento (window.PragmaticAnalyticsConsent = true o cookie pa_consent=1).',
    'Comma-separated list. Example: dev,development,local,staging' => 'Lista separada por comas. Ejemplo: dev,development,local,staging',
    'If enabled and a Measurement ID exists, gtag is injected automatically.' => 'Si está activo y existe Measurement ID, inyecta gtag automáticamente.',
    'Expected format: G-XXXXXXXXXX' => 'Formato esperado: G-XXXXXXXXXX',

    // options.twig — button
    'Save settings' => 'Guardar ajustes',
];
