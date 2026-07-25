<?php
declare(strict_types=1);

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

/*
|--------------------------------------------------------------------------
| Collect Form Data
|--------------------------------------------------------------------------
*/

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$bike = trim($_POST['bike'] ?? '');
$preferred_date = trim($_POST['preferred_date'] ?? '');
$preferred_time = trim($_POST['preferred_time'] ?? '');
$dealer = trim($_POST['dealer'] ?? '');
$message = trim($_POST['message'] ?? '');
$source = trim($_POST['source'] ?? 'Website');

/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

$errors = [];

if ($name === '') {
    $errors[] = 'Name is required.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required.';
}

if (!preg_match('/^[0-9]{10}$/', $phone)) {
    $errors[] = 'Phone number must contain exactly 10 digits.';
}

if ($bike === '') {
    $errors[] = 'Please select a motorcycle.';
}

if ($preferred_date === '') {
    $errors[] = 'Preferred date is required.';
}

if ($preferred_time === '') {
    $errors[] = 'Preferred time is required.';
}

if ($dealer === '') {
    $errors[] = 'Please select a dealer.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo implode('<br>', $errors);
    exit;
}

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
*/

if ($conn->connect_errno) {
    exit('Database connection failed.');
}

$sql = "INSERT INTO bookings
(
    name,
    email,
    phone,
    bike,
    preferred_date,
    preferred_time,
    dealer,
    message,
    source
)
VALUES
(
    ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    exit('Database prepare failed.');
}

$stmt->bind_param(
    "sssssssss",
    $name,
    $email,
    $phone,
    $bike,
    $preferred_date,
    $preferred_time,
    $dealer,
    $message,
    $source
);

if (!$stmt->execute()) {
    exit('Unable to save booking.');
}

$stmt->close();
$conn->close();

/*
|--------------------------------------------------------------------------
| Redirect
|--------------------------------------------------------------------------
*/

header('Location: ' . BASE_URL . 'thank-you/');
exit;
