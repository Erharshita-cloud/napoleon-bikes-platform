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

<!-- ================================================= -->
<!-- CLASSIC 350 -->
<!-- ================================================= -->

<div class="bike-card"
     data-category="classic"
     data-engine="350">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/classic350.jpg"
            alt="Napoleon Classic 350">

    </div>

    <div class="bike-content">

        <span class="bike-category">

            Classic

        </span>

        <h3>

            Napoleon Classic 350

        </h3>

        <p>

            Timeless styling built for everyday comfort and long weekend rides.

        </p>

        <div class="bike-specs">

            <span><i class="ri-speed-up-line"></i>349 cc</span>

            <span><i class="ri-flashlight-line"></i>ABS</span>

            <span><i class="ri-road-map-line"></i>BS6</span>

        </div>

        <div class="bike-footer">

            <h4>

                Price on Request

            </h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">

                    View Details

                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>"
                   class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- CLASSIC 500 -->
<!-- ================================================= -->

<div class="bike-card"
     data-category="classic"
     data-engine="500">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/classic500.jpg"
            alt="Napoleon Classic 500">

    </div>

    <div class="bike-content">

        <span class="bike-category">

            Classic

        </span>

        <h3>

            Napoleon Classic 500

        </h3>

        <p>

            Powerful cruiser combining heritage design with modern engineering.

        </p>

        <div class="bike-specs">

            <span>500 cc</span>

            <span>ABS</span>

            <span>BS6</span>

        </div>

        <div class="bike-footer">

            <h4>

                Price on Request

            </h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">

                    View Details

                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>"
                   class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</div>

<!-- ================================================= -->
<!-- CLASSIC 900 -->
<!-- ================================================= -->

<div class="bike-card" data-category="classic" data-engine="900">

    <div class="bike-image">
        <img src="<?= IMG ?>bikes/classic900.jpg" alt="Napoleon Classic 900">
    </div>

    <div class="bike-content">

        <span class="bike-category">Classic</span>

        <h3>Napoleon Classic 900</h3>

        <p>
            Flagship cruiser crafted for premium touring and unmatched road presence.
        </p>

        <div class="bike-specs">
            <span>900 cc</span>
            <span>ABS</span>
            <span>BS6</span>
        </div>

        <div class="bike-footer">

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">
                    View Details
                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
                    Book Ride
                </a>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- STREET -->
<!-- ================================================= -->

<div class="bike-card" data-category="street" data-engine="500">

    <div class="bike-image">
        <img src="<?= IMG ?>bikes/street.jpg" alt="Napoleon Street">
    </div>

    <div class="bike-content">

        <span class="bike-category">Street</span>

        <h3>Napoleon Street</h3>

        <p>
            Built for daily city rides with agile handling and confident performance.
        </p>

        <div class="bike-specs">
            <span>500 cc</span>
            <span>ABS</span>
            <span>BS6</span>
        </div>

        <div class="bike-footer">

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">
                    View Details
                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
                    Book Ride
                </a>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- STREET 500 -->
<!-- ================================================= -->

<div class="bike-card" data-category="street" data-engine="500">

    <div class="bike-image">
        <img src="<?= IMG ?>bikes/street-500.jpg" alt="Napoleon Street 500">
    </div>

    <div class="bike-content">

        <span class="bike-category">Street</span>

        <h3>Napoleon Street 500</h3>

        <p>
            Dynamic naked motorcycle designed for urban performance and style.
        </p>

        <div class="bike-specs">
            <span>500 cc</span>
            <span>ABS</span>
            <span>BS6</span>
        </div>

        <div class="bike-footer">

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">
                    View Details
                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
                    Book Ride
                </a>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- SPORT -->
<!-- ================================================= -->

<div class="bike-card" data-category="sport" data-engine="900">

    <div class="bike-image">
        <img src="<?= IMG ?>bikes/sport.jpg" alt="Napoleon Sport">
    </div>

    <div class="bike-content">

        <span class="bike-category">Sport</span>

        <h3>Napoleon Sport</h3>

        <p>
            Precision engineered for speed, stability and thrilling performance.
        </p>

        <div class="bike-specs">
            <span>900 cc</span>
            <span>ABS</span>
            <span>BS6</span>
        </div>

        <div class="bike-footer">

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">
                    View Details
                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
                    Book Ride
                </a>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- SPORT R -->
<!-- ================================================= -->

<div class="bike-card" data-category="sport" data-engine="900">

    <div class="bike-image">
        <img src="<?= IMG ?>bikes/sport-r.jpg" alt="Napoleon Sport R">
    </div>

    <div class="bike-content">

        <span class="bike-category">Sport</span>

        <h3>Napoleon Sport R</h3>

        <p>
            Race-inspired superbike delivering aggressive styling and unmatched control.
        </p>

        <div class="bike-specs">
            <span>900 cc</span>
            <span>ABS</span>
            <span>BS6</span>
        </div>

        <div class="bike-footer">

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">
                    View Details
                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
                    Book Ride
                </a>

            </div>

        </div>

    </div>

</div>



<!-- ================================================= -->
<!-- PHANTOM 900 -->
<!-- ================================================= -->

<div class="bike-card" data-category="sport" data-engine="900">

    <div class="bike-image">
        <img src="<?= IMG ?>bikes/phantom900.jpg" alt="Napoleon Phantom 900">
    </div>

    <div class="bike-content">

        <span class="bike-category">Premium</span>

        <h3>Napoleon Phantom 900</h3>

        <p>
            Premium flagship motorcycle combining luxury, power and advanced engineering.
        </p>

        <div class="bike-specs">
            <span>900 cc</span>
            <span>ABS</span>
            <span>BS6</span>
        </div>

        <div class="bike-footer">

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a href="#" class="btn btn-outline">
                    View Details
                </a>

                <a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
                    Book Ride
                </a>

            </div>

        </div>

    </div>

</div>

</div>

</div>

</section>

<!-- ================================================= -->
<!-- FEATURED BIKE -->
<!-- ================================================= -->

<section class="featured-bike">

    <div class="container">

        <div class="featured-wrapper">

            <!-- LEFT IMAGE -->

            <div class="featured-image">

                <img
                    src="<?= IMG ?>bikes/hero-bike.jpg"
                    alt="Napoleon Featured Motorcycle">

            </div>

            <!-- RIGHT CONTENT -->

            <div class="featured-content">

                <span class="section-tag">

                    Featured Motorcycle

                </span>

                <h2>

                    Napoleon Phantom 900

                </h2>

                <p>

                    Built for riders who demand luxury, precision and
                    extraordinary performance. The Phantom 900 combines
                    aggressive styling, premium engineering and unmatched
                    road presence into one exceptional machine.

                </p>

                <!-- FEATURES -->

                <div class="featured-features">

                    <div class="feature">

                        <i class="ri-speed-up-line"></i>

                        <div>

                            <h4>900 cc Engine</h4>

                            <p>Powerful twin-cylinder performance.</p>

                        </div>

                    </div>

                    <div class="feature">

                        <i class="ri-shield-check-line"></i>

                        <div>

                            <h4>Dual Channel ABS</h4>

                            <p>Confident braking in every condition.</p>

                        </div>

                    </div>

                    <div class="feature">

                        <i class="ri-dashboard-3-line"></i>

                        <div>

                            <h4>Digital Console</h4>

                            <p>Advanced riding information system.</p>

                        </div>

                    </div>

                    <div class="feature">

                        <i class="ri-road-map-line"></i>

                        <div>

                            <h4>Tour Ready</h4>

                            <p>Designed for highways and adventures.</p>

                        </div>

                    </div>

                </div>

                <!-- QUICK SPECS -->

                <div class="featured-specs">

                    <div>

                        <h3>900 cc</h3>

                        <span>Engine</span>

                    </div>

                    <div>

                        <h3>120 HP</h3>

                        <span>Power</span>

                    </div>

                    <div>

                        <h3>6 Speed</h3>

                        <span>Gearbox</span>

                    </div>

                    <div>

                        <h3>ABS</h3>

                        <span>Safety</span>

                    </div>

                </div>

                <!-- BUTTONS -->

                <div class="featured-buttons">

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

    </div>

</section>

<!-- ================================================= -->
<!-- PERFORMANCE BANNER -->
<!-- ================================================= -->

<section class="performance-banner">

    <!-- Background Video -->

    <video
        class="performance-video"
        autoplay
        muted
        loop
        playsinline>

        <source
            src="<?= ASSETS ?>videos/performance.mp4"
            type="video/mp4">

    </video>

    <!-- Dark Overlay -->

    <div class="performance-overlay"></div>

    <div class="container">

        <div class="performance-content">

            <span class="section-tag">

                Performance Redefined

            </span>

            <h2>

                Born To Ride.
                <br>
                Built To Dominate.

            </h2>

            <p>

                Every Napoleon motorcycle is engineered for precision,
                confidence and unforgettable journeys.

            </p>

            <div class="performance-stats">

                <div>

                    <h3>900cc</h3>

                    <span>Engine</span>

                </div>

                <div>

                    <h3>120 HP</h3>

                    <span>Performance</span>

                </div>

                <div>

                    <h3>ABS</h3>

                    <span>Safety</span>

                </div>

                <div>

                    <h3>6 Speed</h3>

                    <span>Gearbox</span>

                </div>

            </div>

            <a
                href="<?= BOOK_TEST_RIDE_URL ?>"
                class="btn btn-primary">

                Book Test Ride

            </a>

        </div>

    </div>

</section>

<!-- ================================================= -->
<!-- MOTORCYCLE GALLERY -->
<!-- ================================================= -->

<section class="bike-gallery">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">

                Napoleon Gallery

            </span>

            <h2>

                Ride Beyond Limits

            </h2>

            <p>

                Every motorcycle tells a story. Explore the spirit,
                craftsmanship and performance of Napoleon Bikes.

            </p>

        </div>


        <div class="gallery-grid">

            <!-- Hero -->

            <div class="gallery-item gallery-large">

                <img
                    src="<?= IMG ?>gallery/gallery-hero.jpg"
                    alt="Napoleon Hero Bike">

            </div>


            <!-- Adventure -->

            <div class="gallery-item">

                <img
                    src="<?= IMG ?>gallery/gallery-adventure.jpg"
                    alt="Napoleon Adventure">

            </div>


            <!-- Performance -->

            <div class="gallery-item">

                <img
                    src="<?= IMG ?>gallery/gallery-performance.jpg"
                    alt="Napoleon Performance">

            </div>


            <!-- Blue Edition -->

            <div class="gallery-item">

                <img
                    src="<?= IMG ?>gallery/gallery-blue.jpg"
                    alt="Napoleon Blue Edition">

            </div>


            <!-- Sport -->

            <div class="gallery-item">

                <img
                    src="<?= IMG ?>gallery/gallery-sport.jpg"
                    alt="Napoleon Sport">

            </div>


            <!-- Racing -->

            <div class="gallery-item">

                <img
                    src="<?= IMG ?>gallery/gallery-racing.jpg"
                    alt="Napoleon Racing">

            </div>


            <!-- Lineup -->

            <div class="gallery-item gallery-wide">

                <img
                    src="<?= IMG ?>gallery/gallery-lineup.jpg"
                    alt="Napoleon Collection">

            </div>

        </div>

    </div>

</section>

<div class="testimonial-grid">

    <!-- Card 1 -->

    <div class="testimonial-card">

        <div class="testimonial-image">

            <img
                src="<?= IMG ?>testimonials/user-1.jpg"
                alt="Rahul Sharma">

        </div>

        <div class="stars">
            ★★★★★
        </div>

        <p>

            "The Napoleon Classic 350 exceeded every expectation.
            Smooth performance, excellent comfort and incredible road presence."

        </p>

        <h4>

            Rahul Sharma

        </h4>

        <span>

            Delhi

        </span>

    </div>



    <!-- Card 2 -->

    <div class="testimonial-card">

        <div class="testimonial-image">

            <img
                src="<?= IMG ?>testimonials/user-2.jpg"
                alt="Aman Patel">

        </div>

        <div class="stars">
            ★★★★★
        </div>

        <p>

            "The Phantom 900 delivers incredible acceleration,
            premium styling and confidence on every ride."

        </p>

        <h4>

            Aman Patel

        </h4>

        <span>

            Mumbai

        </span>

    </div>



    <!-- Card 3 -->

    <div class="testimonial-card">

        <div class="testimonial-image">

            <img
                src="<?= IMG ?>testimonials/user-3.jpg"
                alt="Karan Singh">

        </div>

        <div class="stars">
            ★★★★★
        </div>

        <p>

            "Adventure rides have become effortless.
            The handling and reliability are simply outstanding."

        </p>

        <h4>

            Karan Singh

        </h4>

        <span>

            Bengaluru

        </span>

    </div>

</div>
