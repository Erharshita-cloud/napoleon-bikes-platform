<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform V2
| Navigation Configuration
|--------------------------------------------------------------------------
|
| Single source of truth for the entire website navigation.
| Do not place HTML or business logic in this file.
|
*/

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}

return [

    [
        'title' => 'Home',
        'url' => HOME_URL,
        'icon' => 'ri-home-line',
        'children' => []
    ],

    [
        'title' => 'About',
        'url' => ABOUT_URL,
        'icon' => 'ri-information-line',
        'children' => []
    ],

    [
        'title' => 'Bikes',
        'url' => BIKES_URL,
        'icon' => 'ri-motorbike-line',
        'children' => []
    ],

    [
        'title' => 'Pricing',
        'url' => PRICING_URL,
        'icon' => 'ri-price-tag-3-line',
        'children' => []
    ],

    [
        'title' => 'Book Test Ride',
        'url' => BOOK_TEST_RIDE_URL,
        'icon' => 'ri-roadster-line',
        'children' => []
    ],

    [
        'title' => 'Contact',
        'url' => CONTACT_URL,
        'icon' => 'ri-phone-line',
        'children' => []
    ]

];
