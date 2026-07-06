<?php

require_once "db.php";

// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method Not Allowed");
}

// Collect form data
$customer_name = trim($_POST['customer_name'] ?? '');
$email         = trim($_POST['email'] ?? '');
$phone         = trim($_POST['phone'] ?? '');
$bike_name     = trim($_POST['bike_name'] ?? '');
$city          = trim($_POST['city'] ?? '');
$booking_date  = trim($_POST['booking_date'] ?? '');

// Validation
if (
    empty($customer_name) ||
    empty($email) ||
    empty($phone) ||
    empty($bike_name) ||
    empty($city) ||
    empty($booking_date)
) {
    exit("Error: All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Error: Invalid email address.");
}

// Check database connection
if ($conn->connect_errno) {
    exit("Database Connection Failed: " . $conn->connect_error);
}

// Prepare statement
$sql = "INSERT INTO bookings
(
    customer_name,
    email,
    phone,
    bike_name,
    city,
    booking_date
)
VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    exit("Prepare Failed: " . $conn->error);
}

// Bind parameters
$stmt->bind_param(
    "ssssss",
    $customer_name,
    $email,
    $phone,
    $bike_name,
    $city,
    $booking_date
);

// Execute
if (!$stmt->execute()) {
    exit("Execute Failed: " . $stmt->error);
}

// Success
$stmt->close();
$conn->close();

header("Location: ../thank-you/index.html");
exit();

?>
