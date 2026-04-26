<?php
header("Content-Type: application/json");

// ✅ GET DATA SAFELY
$name = $_POST["name"] ?? "Customer";
$email = $_POST["email"] ?? "";
$phone = $_POST["phone"] ?? "";
$message = $_POST["message"] ?? "";
$bike = $_POST["bike"] ?? "General Inquiry";

// ✅ FILE PATH (SAFE)
$file = __DIR__ . "/bookings.txt";

// ✅ FORMAT DATA
$entry = date("Y-m-d H:i:s") .
" | Name: $name | Email: $email | Phone: $phone | Bike: $bike | Msg: $message\n";

// ✅ SAVE
file_put_contents($file, $entry, FILE_APPEND);

// ✅ RESPONSE FOR FRONTEND (IMPORTANT)
echo json_encode(["status" => "success"]);
?>
