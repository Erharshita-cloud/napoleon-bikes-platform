<?php
declare(strict_types=1);

require_once '../includes/config.php';
require_once '../includes/functions.php';

$currentPage = 'bikes';
$pageCSS = 'bikes.css';
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'; ?>

<body>

<?php include '../includes/navbar.php'; ?>


<!-- ================================================= -->
<!-- PREMIUM HERO -->
<!-- ================================================= -->

<section class="bikes-hero">

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="hero-content">

            <span class="section-tag">

                Napoleon Collection

            </span>

            <h1>

                Find The Motorcycle
                <span>Built For You</span>

            </h1>

            <p>

                Discover premium motorcycles engineered for performance,
                comfort and unforgettable adventures.

            </p>

            <div class="hero-buttons">

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    <i class="ri-motorbike-line"></i>

                    Book Test Ride

                </a>

                <a
                    href="#bikeGrid"
                    class="btn btn-outline">

                    Explore Collection

                </a>

            </div>

        </div>

    </div>

</section>


<!-- ================================================= -->
<!-- PREMIUM BIKE FINDER -->
<!-- ================================================= -->

<section class="bike-finder">

<div class="container">

<div class="finder-card">

<!-- ============================== -->
<!-- TOP TABS -->
<!-- ============================== -->

<div class="finder-tabs">

<button
class="tab-btn active"
data-category="all">

All Bikes

</button>

<button
class="tab-btn"
data-category="classic">

Classic

</button>

<button
class="tab-btn"
data-category="street">

Street

</button>

<button
class="tab-btn"
data-category="sport">

Sport

</button>

<button
class="tab-btn"
data-category="adventure">

Adventure

</button>

</div>


<!-- ============================== -->
<!-- SEARCH -->
<!-- ============================== -->

<div class="finder-search">

<div class="finder-field search-field">

<label>

Search Motorcycle

</label>

<input

type="text"

id="bikeSearch"

placeholder="Search Napoleon motorcycle...">

</div>


<div class="finder-field">

<label>

Engine

</label>

<select id="engineFilter">

<option value="all">

All Engines

</option>

<option value="350">

350 cc

</option>

<option value="500">

500 cc

</option>

<option value="650">

650 cc

</option>

<option value="900">

900 cc

</option>

</select>

</div>


<div class="finder-field">

<label>

Price

</label>

<select id="priceFilter">

<option value="all">

All Prices

</option>

<option value="under3">

Below ₹3 Lakh

</option>

<option value="3to5">

₹3–5 Lakh

</option>

<option value="above5">

Above ₹5 Lakh

</option>

</select>

</div>


<div class="finder-button">

<button id="searchBike">

<i class="ri-search-line"></i>

</button>

</div>

</div>

</div>

</div>

</section>



<!-- ================================================= -->
<!-- COLLECTION TITLE -->
<!-- ================================================= -->

<section class="collection-heading">

<div class="container">

<div class="section-header">

<span class="section-tag">

Premium Collection

</span>

<h2>

Explore Every Napoleon Motorcycle

</h2>

<p>

Choose from timeless classics, powerful street machines,
adventure motorcycles and high-performance sports bikes.

</p>

</div>

</div>

</section>



<!-- ================================================= -->
<!-- BIKE GRID STARTS HERE -->
<!-- ================================================= -->

<section
class="bike-showcase"
id="bikeGrid">

<div class="container">

<div class="bike-grid">

