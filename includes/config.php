<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform
| Configuration File
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Website Information
|--------------------------------------------------------------------------
*/

define(
    'SITE_NAME',
    'Napoleon Bikes'
);

define(
    'SITE_TAGLINE',
    'Ride Beyond Limits'
);

define(
    'SITE_DESCRIPTION',
    'Premium motorcycles engineered for every journey.'
);

define(
    'SITE_KEYWORDS',
    'motorcycles,bikes,sports bike,electric bikes,napoleon bikes'
);

define(
    'SITE_AUTHOR',
    'Napoleon Bikes'
);


/*
|--------------------------------------------------------------------------
| Environment
|--------------------------------------------------------------------------
*/

define(
    'ENVIRONMENT',
    $_SERVER['SERVER_NAME'] === 'localhost'
        ? 'development'
        : 'production'
);


/*
|--------------------------------------------------------------------------
| Base URL
|--------------------------------------------------------------------------
| Automatically detects:
| Localhost
| AWS EC2
| Domain
| Subfolder hosting
|--------------------------------------------------------------------------
*/

$basePath = str_replace(
    '\\',
    '/',
    dirname($_SERVER['SCRIPT_NAME'])
);

if ($basePath === '/' || $basePath === '\\') {

    $basePath = '';

}

define(
    'BASE_URL',
    $basePath . '/'
);

/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/

define(
    'ASSETS',
    BASE_URL . 'assets/'
);

define(
    'CSS',
    ASSETS . 'css/'
);

define(
    'JS',
    ASSETS . 'js/'
);

define(
    'IMG',
    ASSETS . 'images/'
);

/*
|--------------------------------------------------------------------------
| Common URLs
|--------------------------------------------------------------------------
*/

define(
    'BOOK_TEST_RIDE_URL',
    BASE_URL . 'book-test-ride.php'
);

/*
|--------------------------------------------------------------------------
| Database Configuration
|--------------------------------------------------------------------------
|
| Local:
| localhost / root
|
| AWS:
| Use environment variables
|
|--------------------------------------------------------------------------
*/

define(
    'DB_HOST',
    getenv('DB_HOST') ?: 'localhost'
);

define(
    'DB_NAME',
    getenv('DB_NAME') ?: 'napoleon_bikes'
);

define(
    'DB_USER',
    getenv('DB_USER') ?: 'root'
);

define(
    'DB_PASS',
    getenv('DB_PASS') ?: ''
);

/*
|--------------------------------------------------------------------------
| Company Information
|--------------------------------------------------------------------------
*/

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

/*
|--------------------------------------------------------------------------
| Social Media Links
|--------------------------------------------------------------------------
*/

$social = [

    'facebook' => '#',

    'instagram' => '#',

    'linkedin' => '#',

    'youtube' => '#'

];

/*
|--------------------------------------------------------------------------
| Navigation Menu
|--------------------------------------------------------------------------
*/

$navigation = [

    'Home' => [

        'url' => BASE_URL . 'index.php',

        'icon' => 'ri-home-line'

    ],

    'About' => [

        'url' => BASE_URL . 'about.php',

        'icon' => 'ri-information-line'

    ],

    'Bikes' => [

        'url' => BASE_URL . 'bikes.php',

        'icon' => 'ri-motorbike-line'

    ],

    'Book Test Ride' => [

        'url' => BASE_URL . 'book-test-ride.php',

        'icon' => 'ri-calendar-check-line'

    ],

    'Contact' => [

        'url' => BASE_URL . 'contact.php',

        'icon' => 'ri-phone-line'

    ]

];

/*
|--------------------------------------------------------------------------
| Security / Debug Settings
|--------------------------------------------------------------------------
*/

if (ENVIRONMENT === 'development') {


    error_reporting(E_ALL);


    ini_set(
        'display_errors',
        '1'
    );


}

else {


    error_reporting(0);


    ini_set(
        'display_errors',
        '0'
    );


}


?>
