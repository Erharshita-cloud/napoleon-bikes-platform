<?php
require_once "config.php";

$conn = new mysqli(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_NAME,
    DB_PORT
);

$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die(json_encode(["error" => "DB connection failed"]));
}
?>
