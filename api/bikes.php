<?php
require_once "db.php";

$result = $conn->query("SELECT * FROM bikes");

$bikes = [];

while ($row = $result->fetch_assoc()) {
    $bikes[] = $row;
}

echo json_encode($bikes);
?>
