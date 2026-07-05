<?php
// Database Configuration


define('DB_HOST', 'systemthreetier-rds.chm8wsuk08mo.ap-south-1.rds.amazonaws.com');
define('DB_PORT', 3306);
define('DB_NAME', 'bikesdb');
define('DB_USER', 'admin');
define('DB_PASS', 'Goelaparna15');

// Application Configuration
date_default_timezone_set('Asia/Kolkata');

// Error Reporting (Disable in Production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
