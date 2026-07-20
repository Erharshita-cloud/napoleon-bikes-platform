<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Configuration
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Website Information
|--------------------------------------------------------------------------
*/

define('SITE_NAME', 'Napoleon Bikes');

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
| Base URL (Portable)
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
| Social Links
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
| Navigation
|--------------------------------------------------------------------------
*/

$navigation = [

    'Home' => BASE_URL,

    'Bikes' => BASE_URL . 'bikes/',

    'Booking' => BASE_URL . 'booking/',

    'Pricing' => BASE_URL . 'pricing/',

    'Contact' => BASE_URL . 'contact/'

];

?>
