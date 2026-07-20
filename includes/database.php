<?php
declare(strict_types=1);


/**
 * Napoleon Bikes Platform
 * Database Connection
 */


/*
|--------------------------------------------------------------------------
| Verify Configuration Loaded
|--------------------------------------------------------------------------
*/

if (!defined('DB_HOST')) {

    die(
        "Database configuration missing."
    );

}


/*
|--------------------------------------------------------------------------
| PDO Connection
|--------------------------------------------------------------------------
*/


try {


    $pdo = new PDO(

        "mysql:host=" . DB_HOST .
        ";dbname=" . DB_NAME .
        ";charset=utf8mb4",

        DB_USER,

        DB_PASS,

        [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

            PDO::ATTR_EMULATE_PREPARES => false

        ]

    );


}


catch(PDOException $e)

{


    // Store actual error in server logs

    error_log(
        "Napoleon Bikes Database Error: " . $e->getMessage()
    );


    // User-friendly message

    die(
        "Database connection failed. Please try again later."
    );


}

?>
