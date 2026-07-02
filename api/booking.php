<?php
require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'] ?? '';
$bike = $data['bike'] ?? '';

if (!$name || !$bike) {
    echo json_encode(["error" => "Invalid input"]);
    exit;
}

$stmt = $conn->prepare("INSERT INTO bookings (name, bike) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $bike);

if ($stmt->execute()) {
    echo json_encode(["message" => "Booking successful"]);
} else {
    echo json_encode(["error" => "Booking failed"]);
}
?>
