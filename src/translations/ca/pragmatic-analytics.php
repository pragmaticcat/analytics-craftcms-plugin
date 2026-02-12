<?php

return [
    'Tools' => 'Eines',

    // Tabs & navigation
    'General' => 'General',
    'Options' => 'Opcions',

    // general.twig — dashboard stats
    'Visits (30 days)' => 'Visites (30 dies)',
    'Unique visitors (30 days)' => 'Usuaris únics (30 dies)',
    'Daily evolution (30 days)' => 'Evolució diària (30 dies)',
    'Most viewed pages (30 days)' => 'Pàgines més vistes (30 dies)',

    // general.twig — table headers
    'Date' => 'Data',
    'Visits' => 'Visites',
    'Unique visitors' => 'Usuaris únics',
    'Path' => 'Ruta',

    // general.twig — empty states
    'No data yet.' => 'Encara no hi ha dades.',
    'No page data yet.' => 'Encara no hi ha dades de pàgines.',

    // options.twig — section headings
    'Built-in tracking' => 'Tracking propi',
    'Google Analytics 4' => 'Google Analytics 4',

    // options.twig — form field labels
    'Enable built-in tracking' => 'Activar tracking propi',
    'Require consent' => 'Requerir consentiment',
    'Exclude logged-in users' => 'Excloure usuaris amb sessió iniciada',
    'Exclude known bots' => 'Excloure bots coneguts',
    'Excluded environments' => 'Entorns exclosos',
    'Inject GA4 script' => 'Injectar script de GA4',
    'Measurement ID' => 'Measurement ID',

    // options.twig — form field instructions
    'Records visits, unique visitors and most viewed pages.' => 'Registra visites, usuaris únics i pàgines més vistes.',
    'If enabled, visits will only be recorded when consent is given (window.PragmaticAnalyticsConsent = true or cookie pa_consent=1).' => 'Si està actiu, només registrarà visites quan hi hagi consentiment (window.PragmaticAnalyticsConsent = true o cookie pa_consent=1).',
    'Comma-separated list. Example: dev,development,local,staging' => 'Llista separada per comes. Exemple: dev,development,local,staging',
    'If enabled and a Measurement ID exists, gtag is injected automatically.' => 'Si està actiu i existeix un Measurement ID, s\'injecta gtag automàticament.',
    'Expected format: G-XXXXXXXXXX' => 'Format esperat: G-XXXXXXXXXX',

    // options.twig — button
    'Save settings' => 'Desar ajustos',
];
