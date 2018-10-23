<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
  // Global settings
  '*' => [
    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 0,

    // Enable CSRF Protection (recommended)
    'enableCsrfProtection' => true,

    // Whether generated URLs should omit "index.php"
    'omitScriptNameInUrls' => true,

    // Control Panel trigger word
    'cpTrigger' => 'admin',

    // The secure key Craft will use for hashing and encrypting data
    'securityKey' => getenv('SECURITY_KEY'),

    // Time and date settings
    'defaultWeekStartDay' => 1,
    'timezone' => 'Europe/London',

    // Base site URL
    'siteUrl' => getenv('SITE_URL'),

    // Image transform settings
    'generateTransformsBeforePageLoad' => true,
    'defaultImageQuality' => 75,

    // Search settings
    'defaultSearchTermOptions' => array(
      'subLeft' => true,
      'subRight' => true,
    ),

    // Aliases parsed in settings and templates
    'aliases' => [
      '@assetsUrl' => getenv('ASSETS_URL'),
      '@localUploadsPath' => getenv('LOCAL_UPLOADS_PATH'),
    ],

    // Site-specific config settings
    'custom' => [
      'staticAssetsVersion' => 1,
    ]
  ],

  // Development environment settings
  'dev' => [
    // Dev mode
    'devMode' => true,

    // Craft template caching
    'enableTemplateCaching' => false,

    // Site-specific config settings
    'custom' => [
      'staticAssetsVersion' => time(),
    ]
  ],

  // Staging environment settings
  'staging' => [
    // Disable automated updates
    'allowUpdates' => false,

    // Craft template caching
    'enableTemplateCaching' => true,
    'cacheDuration' => 'PT30M',
  ],

  // Production environment settings
  'production' => [
    // Disable automated updates
    'allowUpdates' => false,

    // Craft template caching
    'enableTemplateCaching' => true,
    'cacheDuration' => 'P1W',
  ],
];
