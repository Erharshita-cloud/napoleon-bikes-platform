<?php
declare(strict_types=1);

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

/*
|--------------------------------------------------------------------------
| Environment
|--------------------------------------------------------------------------
*/

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

$isLocal =
    str_contains($host, 'localhost') ||
    str_contains($host, '127.0.0.1');

define(
    'ENVIRONMENT',
    $isLocal ? 'development' : 'production'
);

/*
|--------------------------------------------------------------------------
| Base URL
|--------------------------------------------------------------------------
*/

$basePath = str_replace(
    '\\',
    '/',
    dirname($_SERVER['SCRIPT_NAME'] ?? '/')
);

if (
    $basePath === '.' ||
    $basePath === '/'
) {
    $basePath = '';
}

define(
    'BASE_URL',
    rtrim($basePath, '/') . '/'
);

/*
|--------------------------------------------------------------------------
| Site URL
|--------------------------------------------------------------------------
*/

$protocol = (
    !empty($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] !== 'off'
)
    ? 'https://'
    : 'http://';

define(
    'SITE_URL',
    $protocol .
    ($host ?? 'localhost') .
    BASE_URL
);

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

define('SITE_NAME', 'Napoleon Bikes');
define('SITE_TAGLINE', 'Ride Beyond Limits');

define(
    'SITE_DESCRIPTION',
    'Premium motorcycles engineered for every journey.'
);

define(
    'SITE_KEYWORDS',
    'motorcycle,bikes,sport bike,cruiser,adventure,napoleon bikes'
);

define(
    'SITE_AUTHOR',
    'Napoleon Bikes'
);

define(
    'APP_VERSION',
    '1.0.0'
);

/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/

define('ASSETS', BASE_URL . 'assets/');

define('CSS', ASSETS . 'css/');
define('JS', ASSETS . 'js/');
define('IMG', ASSETS . 'images/');
define('VIDEOS', ASSETS . 'videos/');
define('FONTS', ASSETS . 'fonts/');
define('ICONS', ASSETS . 'icons/');

define('BRANDING_IMG', IMG . 'branding/');
define('BIKES_IMG', IMG . 'bikes/');
define('GALLERY_IMG', IMG . 'gallery/');
define('TESTIMONIAL_IMG', IMG . 'testimonials/');

define('LOGO', BRANDING_IMG . 'logo.png');
define('LOGO_WHITE', BRANDING_IMG . 'logo-white.png');
define('LOGO_ICON', BRANDING_IMG . 'logo-icon.png');
define('FAVICON', BRANDING_IMG . 'favicon.png');

define(
    'DEFAULT_OG_IMAGE',
    LOGO
);

/*
|--------------------------------------------------------------------------
| Storage
|--------------------------------------------------------------------------
*/

define(
    'UPLOAD_PATH',
    ROOT_PATH . '/uploads/'
);

define(
    'LOG_PATH',
    ROOT_PATH . '/storage/logs/'
);

define(
    'CACHE_PATH',
    ROOT_PATH . '/storage/cache/'
);

/*
|--------------------------------------------------------------------------
| Theme
|--------------------------------------------------------------------------
*/

define('PRIMARY_COLOR', '#E63946');
define('PRIMARY_DARK', '#C1121F');
define('SECONDARY_COLOR', '#121214');
define('ACCENT_COLOR', '#D4AF37');

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

define('HOME_URL', BASE_URL);
define('ABOUT_URL', BASE_URL . 'about/');
define('BIKES_URL', BASE_URL . 'bikes/');
define('PRICING_URL', BASE_URL . 'pricing/');
define('BOOK_TEST_RIDE_URL', BASE_URL . 'book-test-ride/');
define('CONTACT_URL', BASE_URL . 'contact/');
define('THANK_YOU_URL', BASE_URL . 'thank-you/');

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/

define(
    'DB_HOST',
    getenv('DB_HOST') ?: 'localhost'
);

define(
    'DB_NAME',
    getenv('DB_NAME') ?: 'bikesdb'
);

define(
    'DB_USER',
    getenv('DB_USER') ?: 'root'
);

define(
    'DB_PASS',
    getenv('DB_PASS') ?: ''
);

define(
    'DB_PORT',
    getenv('DB_PORT') ?: '3306'
);

define(
    'DB_CHARSET',
    'utf8mb4'
);

define(
    'DB_COLLATION',
    'utf8mb4_unicode_ci'
);

/*
|--------------------------------------------------------------------------
| Company
|--------------------------------------------------------------------------
*/

define(
    'COMPANY_NAME',
    'Napoleon Bikes'
);

define(
    'COMPANY_EMAIL',
    'info@napoleonbikes.com'
);

define(
    'COMPANY_PHONE',
    '+91-9876543210'
);

define(
    'COMPANY_ADDRESS',
    'Meerut, Uttar Pradesh, India'
);

define(
    'COMPANY_MAP',
    '#'
);

/*
|--------------------------------------------------------------------------
| Application
|--------------------------------------------------------------------------
*/

define(
    'ITEMS_PER_PAGE',
    12
);

define(
    'ANIMATION_DURATION',
    600
);

define(
    'DEFAULT_LANGUAGE',
    'en'
);

define(
    'DEFAULT_TIMEZONE',
    'Asia/Kolkata'
);

/*
|--------------------------------------------------------------------------
| Security
|--------------------------------------------------------------------------
*/

define(
    'SESSION_NAME',
    'NAPOLEON_SESSION'
);

define(
    'CSRF_TOKEN_NAME',
    '_token'
);

/*
|--------------------------------------------------------------------------
| Error Reporting
|--------------------------------------------------------------------------
*/

if (ENVIRONMENT === 'development') {

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

} else {

    error_reporting(0);
    ini_set('display_errors', '0');

}

date_default_timezone_set(DEFAULT_TIMEZONE);
