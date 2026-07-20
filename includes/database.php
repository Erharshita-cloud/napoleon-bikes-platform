<?php
declare(strict_types=1);


/**
 * Napoleon Bikes Platform
 * Database Connection
 */


try {

    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS
    );


    // Enable PDO errors
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );


    // Fetch data as associative arrays
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );


}

catch(PDOException $e)
{

    die(
        "Database connection failed: " 
        . $e->getMessage()
    );

}

?>
