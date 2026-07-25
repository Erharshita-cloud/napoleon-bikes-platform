<?php
declare(strict_types=1);

require_once '../includes/config.php';
require_once '../includes/functions.php';

$currentPage = 'bikes';
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'; ?>

<link rel="stylesheet" href="<?= CSS ?>bikes.css">

<body>

<?php include '../includes/navbar.php'; ?>

<!-- ========================================= -->
<!-- Hero -->
<!-- ========================================= -->

<section class="bikes-hero">

<div class="container">

<div class="hero-content">

<span class="section-tag">

Napoleon Collection

</span>

<h1>

Engineered For Every
<span>Journey</span>

</h1>

<p>

Explore our complete lineup of premium motorcycles—from timeless classics to powerful adventure machines.

</p>

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-primary">

Book Test Ride

</a>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Bike Categories -->
<!-- ========================================= -->

<section class="bike-categories">

<div class="container">

<div class="section-header">

<h2>

Explore Categories

</h2>

<p>

Choose the motorcycle that perfectly matches your riding style.

</p>

</div>

<div class="category-tabs">

<button class="tab-btn active">

All Bikes

</button>

<button class="tab-btn">

Classic

</button>

<button class="tab-btn">

Street

</button>

<button class="tab-btn">

Adventure

</button>

<button class="tab-btn">

Sport

</button>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Bike Grid -->
<!-- ========================================= -->

<section class="bike-showcase">

<div class="container">

<div class="bike-grid">

<!-- Bike Card 1 -->

<div class="bike-card">

<div class="bike-image">

<img
src="<?= IMG ?>bikes/classic350.webp"
alt="Napoleon Classic 350">

</div>

<div class="bike-info">

<h3>

Napoleon Classic 350

</h3>

<p>

A timeless cruiser built for effortless touring and everyday rides.

</p>

<div class="bike-specs">

<span>

<i class="ri-speed-up-line"></i>

349cc

</span>

<span>

<i class="ri-flashlight-line"></i>

20 HP

</span>

<span>

<i class="ri-road-map-line"></i>

35 km/l

</span>

</div>

<div class="bike-footer">

<h4>

₹1,89,999

</h4>

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-outline">

Book Ride

</a>

</div>

</div>

</div>

<!-- Bike Card 2 -->

<div class="bike-card">

<div class="bike-image">

<img
src="<?= IMG ?>bikes/street500.webp"
alt="Napoleon Street 500">

</div>

<div class="bike-info">

<h3>

Napoleon Street 500

</h3>

<p>

Designed for riders who love aggressive styling and urban performance.

</p>

<div class="bike-specs">

<span>

500cc

</span>

<span>

45 HP

</span>

<span>

28 km/l

</span>

</div>

<div class="bike-footer">

<h4>

₹2,49,999

</h4>

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-outline">

Book Ride

</a>

</div>

</div>

</div>

<!-- Bike Card 3 -->

<div class="bike-card">

<div class="bike-image">

<img
src="<?= IMG ?>bikes/adventurex.webp"
alt="Napoleon Adventure X">

</div>

<div class="bike-info">

<h3>

Napoleon Adventure X

</h3>

<p>

Long-distance touring motorcycle built to conquer every road.

</p>

<div class="bike-specs">

<span>

650cc

</span>

<span>

65 HP

</span>

<span>

24 km/l

</span>

</div>

<div class="bike-footer">

<h4>

₹3,19,999

</h4>

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-outline">

Book Ride

</a>

</div>

</div>

</div>

</div>

</div>

</section>
