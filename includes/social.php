<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform V2
| Social Configuration
|--------------------------------------------------------------------------
|
| Single source of truth for all social media links.
| This file contains data only.
|
*/

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}

return [

    [
        'name'  => 'Facebook',
        'key'   => 'facebook',
        'icon'  => 'ri-facebook-fill',
        'url'   => '#',
        'label' => 'Follow us on Facebook'
    ],

    [
        'name'  => 'Instagram',
        'key'   => 'instagram',
        'icon'  => 'ri-instagram-line',
        'url'   => '#',
        'label' => 'Follow us on Instagram'
    ],

    [
        'name'  => 'LinkedIn',
        'key'   => 'linkedin',
        'icon'  => 'ri-linkedin-fill',
        'url'   => '#',
        'label' => 'Connect with us on LinkedIn'
    ],

    [
        'name'  => 'YouTube',
        'key'   => 'youtube',
        'icon'  => 'ri-youtube-fill',
        'url'   => '#',
        'label' => 'Watch us on YouTube'
    ],

    [
        'name'  => 'X',
        'key'   => 'x',
        'icon'  => 'ri-twitter-x-fill',
        'url'   => '#',
        'label' => 'Follow us on X'
    ]

];
