<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform V2
| Bootstrap
|--------------------------------------------------------------------------
|
| Loads the entire application in the correct order.
| Every page should require ONLY this file.
|
*/

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

/*
|--------------------------------------------------------------------------
| Core Configuration
|--------------------------------------------------------------------------
*/

require_once ROOT_PATH . '/includes/config.php';

/*
|--------------------------------------------------------------------------
| Session
|--------------------------------------------------------------------------
*/

if (session_status() === PHP_SESSION_NONE) {

    session_name(SESSION_NAME);

    session_start();

}

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/

require_once ROOT_PATH . '/includes/database.php';

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
*/

require_once ROOT_PATH . '/includes/functions.php';

/*
|--------------------------------------------------------------------------
| Shared Data
|--------------------------------------------------------------------------
*/

$navigation = require ROOT_PATH . '/includes/navigation.php';

require_once ROOT_PATH . '/includes/social.php';
