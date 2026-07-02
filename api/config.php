<?php
// Database Configuration

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_PORT', getenv('DB_PORT') ?: '3306');
define('DB_NAME', getenv('DB_NAME') ?: 'bikesdb');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');

// Application Configuration
date_default_timezone_set('Asia/Kolkata');

// Error Reporting (Disable in Production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
