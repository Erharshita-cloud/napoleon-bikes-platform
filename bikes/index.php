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

<div class="hero-content text-center">

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

<div class="hero-buttons">

    <a
    href="<?= BOOK_TEST_RIDE_URL ?>"
    class="btn btn-primary">

        Book Test Ride

    </a>

    <a
    href="#bikeGrid"
    class="btn btn-outline">

        Explore Bikes

    </a>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Premium Bike Finder -->
<!-- ========================================= -->

<section class="bike-finder">

    <div class="finder-wrapper">

        <div class="finder-header">

            <h2>Find Your Perfect Ride</h2>

            <p>
                Explore Napoleon motorcycles by category, engine size and price.
            </p>

        </div>

        <div class="finder-card">

            <!-- Categories -->

            <div class="finder-tabs">

                <button class="active">All Bikes</button>

                <button>Classic</button>

                <button>Street</button>

                <button>Sport</button>

                <button>Adventure</button>

            </div>

            <!-- Search -->

            <div class="finder-search">

                <div class="finder-field">

                    <label>Motorcycle</label>

                    <input
                        type="text"
                        id="bikeSearch"
                        placeholder="Search Napoleon motorcycle">

                </div>

                <div class="finder-field">

                    <label>Engine</label>

                    <select>

                        <option>Any</option>
                        <option>350 cc</option>
                        <option>500 cc</option>
                        <option>650 cc</option>
                        <option>900 cc</option>

                    </select>

                </div>

                <div class="finder-field">

                    <label>Price</label>

                    <select>

                        <option>Any</option>
                        <option>Below ₹3 Lakh</option>
                        <option>₹3–5 Lakh</option>
                        <option>Above ₹5 Lakh</option>

                    </select>

                </div>

                <button class="finder-btn">

                    <i class="ri-search-line"></i>

                </button>

            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- Bike Grid -->
<!-- ========================================= -->

<section class="bike-showcase" id="bikeGrid">

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
