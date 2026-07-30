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

<body class="bikes-page">

<?php include '../includes/navbar.php'; ?>


<!-- ==========================================================
PREMIUM HERO
=========================================================== -->

<section class="premium-hero">

    <div class="hero-background">

        <img
            src="<?= IMG ?>bikes/hero-bike.jpg"
            alt="Napoleon Bikes">

    </div>

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="hero-content">

            <span class="hero-label">

                PREMIUM MOTORCYCLE COLLECTION

            </span>

            <h1>

                Ride Beyond

                <span>Limits</span>

            </h1>

            <p>

                Precision engineered motorcycles designed
                for riders who demand performance,
                craftsmanship and timeless style.

            </p>

            <div class="hero-actions">

                <a
                    href="#bikeCollection"
                    class="btn btn-primary">

                    Explore Collection

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-outline">

                    Book Test Ride

                </a>

            </div>

        </div>

    </div>

</section>



<!-- ==========================================================
CATEGORY NAVIGATION
=========================================================== -->

<section class="collection-navigation">

    <div class="container">

        <ul class="collection-tabs">

            <li
                class="active"
                data-category="all">

                ALL

            </li>

            <li
                data-category="classic">

                CLASSIC

            </li>

            <li
                data-category="street">

                STREET

            </li>

            <li
                data-category="sport">

                SPORT

            </li>

            <li
                data-category="adventure">

                ADVENTURE

            </li>

            <li
                data-category="limited">

                LIMITED

            </li>

        </ul>

    </div>

</section>



<!-- ==========================================================
COLLECTION HEADER
=========================================================== -->

<section class="collection-header">

    <div class="container">

        <span class="section-tag">

            Premium Collection

        </span>

        <h2>

            Every Ride Has

            <span>A Story</span>

        </h2>

        <p>

            From timeless classics to powerful sport
            motorcycles, discover the complete Napoleon
            lineup built for every rider.

        </p>

    </div>

</section>



<!-- ==========================================================
BIKE COLLECTION START
=========================================================== -->

<section
class="bike-collection"
id="bikeCollection">

<div class="container">

<div class="bike-grid">
