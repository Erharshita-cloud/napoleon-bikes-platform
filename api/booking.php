<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "db.php";

echo "<h2>Step 1: bookings.php loaded</h2>";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("ERROR: Request is not POST");
}

echo "<h2>Step 2: POST request received</h2>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

$customer_name = trim($_POST['customer_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$bike_name = trim($_POST['bike_name'] ?? '');
$city = trim($_POST['city'] ?? '');
$booking_date = trim($_POST['booking_date'] ?? '');

if (
    empty($customer_name) ||
    empty($email) ||
    empty($phone) ||
    empty($bike_name) ||
    empty($city) ||
    empty($booking_date)
) {
    die("ERROR: One or more fields are empty.");
}

$stmt = $conn->prepare("
INSERT INTO bookings
(customer_name,email,phone,bike_name,city,booking_date)
VALUES (?,?,?,?,?,?)
");

if (!$stmt) {
    die("Prepare Failed: " . $conn->error);
}

$stmt->bind_param(
    "ssssss",
    $customer_name,
    $email,
    $phone,
    $bike_name,
    $city,
    $booking_date
);

if ($stmt->execute()) {

    echo "<h2>SUCCESS: Booking inserted successfully.</h2>";

} else {

    die("Execute Failed: " . $stmt->error);

}

$stmt->close();
$conn->close();
?>
