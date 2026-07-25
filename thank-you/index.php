<?php
declare(strict_types=1);

require_once '../includes/config.php';
require_once '../includes/functions.php';

$currentPage = '';
$pageCSS = 'thank-you.css';
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'; ?>

<body>

<?php include '../includes/navbar.php'; ?>

<!-- ===================================== -->
<!-- Thank You Hero -->
<!-- ===================================== -->

<section class="thank-you-page">

<div class="thank-you-overlay"></div>

<div class="container">

<div class="thank-you-card">

<div class="success-icon">

<i class="ri-checkbox-circle-fill"></i>

</div>

<h1>

Booking Successful!

</h1>

<p>

Thank you for choosing
<strong><?= e(SITE_NAME); ?></strong>.

</p>

<p>

Our dealership team will contact you within
<strong>24 hours</strong>
to confirm your test ride.

</p>

<div class="thank-you-buttons">

<a
href="<?= BASE_URL ?>"
class="btn btn-primary">

Back to Home

</a>

<a
href="<?= BASE_URL ?>bikes/"
class="btn btn-outline">

Explore Bikes

</a>

</div>

</div>

</div>

</section>

<?php include '../includes/footer.php'; ?>

<?php include '../includes/scripts.php'; ?>

<script src="<?= JS ?>thank-you.js"></script>

</body>
</html>
