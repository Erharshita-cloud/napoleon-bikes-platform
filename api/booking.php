<?php

require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method Not Allowed");
}

// Collect form data
$customer_name = trim($_POST['customer_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$bike_name = trim($_POST['bike_name'] ?? '');
$city = trim($_POST['city'] ?? '');
$booking_date = trim($_POST['booking_date'] ?? '');

// Validation
if (
    empty($customer_name) ||
    empty($email) ||
    empty($phone) ||
    empty($bike_name) ||
    empty($city) ||
    empty($booking_date)
) {
    die("All fields are required.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// Prepare SQL
$stmt = $conn->prepare("
    INSERT INTO bookings
    (
        customer_name,
        email,
        phone,
        bike_name,
        city,
        booking_date
    )
    VALUES
    (?, ?, ?, ?, ?, ?)
");

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

    header("Location: ../thank-you/index.html");
    exit();

} else {

    die("Booking failed: " . $stmt->error);

}

$stmt->close();
$conn->close();

?>
