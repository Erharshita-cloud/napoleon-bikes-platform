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


<!-- =========================================================
PREMIUM HERO
========================================================= -->

<section class="premium-hero">

    <div class="hero-overlay"></div>

    <div class="container hero-container">

        <div class="hero-left">

            <span class="hero-tag">

                PREMIUM MOTORCYCLE COLLECTION

            </span>

            <h1>

                Built To <span>Dominate</span>

            </h1>

            <p>

                Every machine is handcrafted for riders who demand
                precision engineering, exceptional performance,
                and timeless design.

            </p>

            <div class="hero-buttons">

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


        <div class="hero-right">

            <img
                src="<?= IMG ?>bikes/hero-bike.jpg"
                alt="Hero Bike">

        </div>

    </div>

</section>


<!-- =========================================================
CATEGORY NAVIGATION
========================================================= -->

<section class="bike-navigation">

<div class="container">

<ul class="bike-tabs">

<li class="active" data-category="all">

ALL

</li>

<li data-category="classic">

CLASSIC

</li>

<li data-category="street">

STREET

</li>

<li data-category="sport">

SPORT

</li>

<li data-category="adventure">

ADVENTURE

</li>

<li data-category="limited">

LIMITED

</li>

</ul>

</div>

</section>


<!-- =========================================================
SECTION HEADER
========================================================= -->

<section class="collection-header">

<div class="container">

<div class="section-heading">

<span>

Premium Collection

</span>

<h2>

Every Ride Has
<strong>A Story</strong>

</h2>

<p>

Explore handcrafted motorcycles engineered for
speed, adventure, city rides and unforgettable journeys.

</p>

</div>

</div>

</section>



<!-- =========================================================
BIKE GRID START
========================================================= -->

<section
class="bike-collection"
id="bikeCollection">

<div class="container">

<div class="bike-grid">

<!-- =========================================================
AZURE R1
========================================================= -->

<article class="bike-card glass-card"
         data-category="sport"
         data-engine="998">

    <div class="bike-badge sport">

        SPORT

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/azurer1.jpg"
            alt="Azure R1"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>

            Azure R1

        </h3>

        <p>

            A race-inspired superbike engineered for maximum precision,
            breathtaking acceleration and complete rider confidence.

        </p>

        <div class="bike-specs">

            <div class="spec">

                <i class="ri-settings-5-line"></i>

                <span>998 cc</span>

            </div>

            <div class="spec">

                <i class="ri-flashlight-line"></i>

                <span>180 HP</span>

            </div>

            <div class="spec">

                <i class="ri-shield-check-line"></i>

                <span>Corner ABS</span>

            </div>

            <div class="spec">

                <i class="ri-speed-up-line"></i>

                <span>Ride Modes</span>

            </div>

        </div>

        <div class="bike-actions">

            <a href="#"
               class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>



<!-- =========================================================
HERITAGE 650
========================================================= -->

<article class="bike-card glass-card"
         data-category="classic"
         data-engine="650">

    <div class="bike-badge classic">

        HERITAGE

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/heritage650.jpg"
            alt="Heritage 650"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>

            Heritage 650

        </h3>

        <p>

            Vintage styling meets modern engineering to create the
            perfect motorcycle for timeless road journeys.

        </p>

        <div class="bike-specs">

            <div class="spec">

                <i class="ri-settings-5-line"></i>

                <span>650 cc</span>

            </div>

            <div class="spec">

                <i class="ri-road-map-line"></i>

                <span>Tour Ready</span>

            </div>

            <div class="spec">

                <i class="ri-shield-check-line"></i>

                <span>Dual ABS</span>

            </div>

            <div class="spec">

                <i class="ri-dashboard-line"></i>

                <span>TFT Display</span>

            </div>

        </div>

        <div class="bike-actions">

            <a href="#"
               class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>



<!-- =========================================================
IRON BARON
========================================================= -->

<article class="bike-card glass-card"
         data-category="classic"
         data-engine="900">

    <div class="bike-badge premium">

        FLAGSHIP

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/ironbaron.jpg"
            alt="Iron Baron"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>

            Iron Baron

        </h3>

        <p>

            Premium cruiser delivering unmatched comfort,
            commanding road presence and effortless long-distance touring.

        </p>

        <div class="bike-specs">

            <div class="spec">

                <i class="ri-settings-5-line"></i>

                <span>900 cc</span>

            </div>

            <div class="spec">

                <i class="ri-shield-check-line"></i>

                <span>Corner ABS</span>

            </div>

            <div class="spec">

                <i class="ri-map-pin-line"></i>

                <span>Cruise Control</span>

            </div>

            <div class="spec">

                <i class="ri-dashboard-line"></i>

                <span>Navigation</span>

            </div>

        </div>

        <div class="bike-actions">

            <a href="#"
               class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>



<!-- =========================================================
BLAZE XR
========================================================= -->

<article class="bike-card glass-card"
         data-category="street"
         data-engine="500">

    <div class="bike-badge street">

        ROADSTER

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/blazexr.jpg"
            alt="Blaze XR"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>

            Blaze XR

        </h3>

        <p>

            Lightweight street machine offering exceptional agility,
            refined power delivery and everyday practicality.

        </p>

        <div class="bike-specs">

            <div class="spec">

                <i class="ri-settings-5-line"></i>

                <span>500 cc</span>

            </div>

            <div class="spec">

                <i class="ri-flashlight-line"></i>

                <span>95 HP</span>

            </div>

            <div class="spec">

                <i class="ri-shield-check-line"></i>

                <span>Dual ABS</span>

            </div>

            <div class="spec">

                <i class="ri-speed-up-line"></i>

                <span>Quick Shift</span>

            </div>

        </div>

        <div class="bike-actions">

            <a href="#"
               class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>

<!-- =========================================================
NIGHTFALL X
========================================================= -->

<article class="bike-card glass-card"
         data-category="adventure"
         data-engine="650">

    <div class="bike-badge adventure">

        ADVENTURE

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/nightfallx.jpg"
            alt="Nightfall X"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>Nightfall X</h3>

        <p>

            Built for endless highways and rugged landscapes with
            unmatched comfort and touring capability.

        </p>

        <div class="bike-specs">

            <div class="spec">
                <i class="ri-settings-5-line"></i>
                <span>650 cc</span>
            </div>

            <div class="spec">
                <i class="ri-road-map-line"></i>
                <span>Adventure Ready</span>
            </div>

            <div class="spec">
                <i class="ri-shield-check-line"></i>
                <span>Corner ABS</span>
            </div>

            <div class="spec">
                <i class="ri-dashboard-line"></i>
                <span>Navigation</span>
            </div>

        </div>

        <div class="bike-actions">

            <a href="#" class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>



<!-- =========================================================
VELOCITY RS
========================================================= -->

<article class="bike-card glass-card"
         data-category="sport"
         data-engine="900">

    <div class="bike-badge sport">

        SUPERSPORT

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/velocityrs.jpg"
            alt="Velocity RS"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>Velocity RS</h3>

        <p>

            Designed for riders seeking explosive acceleration,
            razor-sharp handling and ultimate track performance.

        </p>

        <div class="bike-specs">

            <div class="spec">
                <i class="ri-settings-5-line"></i>
                <span>900 cc</span>
            </div>

            <div class="spec">
                <i class="ri-flashlight-line"></i>
                <span>185 HP</span>
            </div>

            <div class="spec">
                <i class="ri-shield-check-line"></i>
                <span>Traction Control</span>
            </div>

            <div class="spec">
                <i class="ri-speed-up-line"></i>
                <span>Launch Control</span>
            </div>

        </div>

        <div class="bike-actions">

            <a href="#" class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>



<!-- =========================================================
MAVERICK 700
========================================================= -->

<article class="bike-card glass-card"
         data-category="street"
         data-engine="700">

    <div class="bike-badge street">

        STREET

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/maverick700.jpg"
            alt="Maverick 700"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>Maverick 700</h3>

        <p>

            Aggressive naked motorcycle engineered for dynamic city
            riding with refined power and everyday practicality.

        </p>

        <div class="bike-specs">

            <div class="spec">
                <i class="ri-settings-5-line"></i>
                <span>700 cc</span>
            </div>

            <div class="spec">
                <i class="ri-flashlight-line"></i>
                <span>110 HP</span>
            </div>

            <div class="spec">
                <i class="ri-shield-check-line"></i>
                <span>Dual ABS</span>
            </div>

            <div class="spec">
                <i class="ri-dashboard-line"></i>
                <span>Bluetooth TFT</span>
            </div>

        </div>

        <div class="bike-actions">

            <a href="#" class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>



<!-- =========================================================
OBSIDIAN 900
========================================================= -->

<article class="bike-card glass-card"
         data-category="limited"
         data-engine="900">

    <div class="bike-badge premium">

        LIMITED EDITION

    </div>

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/obsidian900.jpg"
            alt="Obsidian 900"
            loading="lazy">

    </div>

    <div class="bike-content">

        <h3>Obsidian 900</h3>

        <p>

            The pinnacle of Napoleon engineering featuring premium
            craftsmanship, luxury finishes and commanding performance.

        </p>

        <div class="bike-specs">

            <div class="spec">
                <i class="ri-settings-5-line"></i>
                <span>900 cc</span>
            </div>

            <div class="spec">
                <i class="ri-flashlight-line"></i>
                <span>190 HP</span>
            </div>

            <div class="spec">
                <i class="ri-shield-check-line"></i>
                <span>Lean ABS</span>
            </div>

            <div class="spec">
                <i class="ri-vip-crown-line"></i>
                <span>Premium Edition</span>
            </div>

        </div>

        <div class="bike-actions">

            <a href="#" class="btn btn-outline">

                View Details

            </a>

            <a href="<?= BOOK_TEST_RIDE_URL ?>"
               class="btn btn-primary">

                Book Ride

            </a>

        </div>

    </div>

</article>

<!-- =========================================================
FEATURED MOTORCYCLE
========================================================= -->

<section class="featured-bike">

<div class="container">

<div class="featured-wrapper">

<!-- =====================================================
LEFT CONTENT
===================================================== -->

<div class="featured-content">

<span class="section-tag">

FLAGSHIP MACHINE

</span>

<h2>

Obsidian <span>900</span>

</h2>

<p>

Crafted for riders who refuse compromise, the Obsidian 900
combines premium engineering, breathtaking performance and
luxury craftsmanship into one extraordinary motorcycle.

</p>

<div class="featured-features">

<div class="feature">

<i class="ri-flashlight-line"></i>

<div>

<h4>

190 Horsepower

</h4>

<p>

Explosive acceleration with refined control.

</p>

</div>

</div>

<div class="feature">

<i class="ri-settings-5-line"></i>

<div>

<h4>

900cc Engine

</h4>

<p>

Smooth twin-cylinder performance.

</p>

</div>

</div>

<div class="feature">

<i class="ri-shield-check-line"></i>

<div>

<h4>

Cornering ABS

</h4>

<p>

Confidence on every road.

</p>

</div>

</div>

<div class="feature">

<i class="ri-dashboard-3-line"></i>

<div>

<h4>

Smart TFT Display

</h4>

<p>

Bluetooth, Navigation & Ride Analytics.

</p>

</div>

</div>

</div>



<div class="featured-specs">

<div>

<h3>

900cc

</h3>

<span>

Engine

</span>

</div>

<div>

<h3>

190 HP

</h3>

<span>

Power

</span>

</div>

<div>

<h3>

6 Speed

</h3>

<span>

Gearbox

</span>

</div>

<div>

<h3>

ABS

</h3>

<span>

Safety

</span>

</div>

</div>



<div class="featured-buttons">

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-primary">

Book Test Ride

</a>

<a
href="#bikeCollection"
class="btn btn-outline">

View Collection

</a>

</div>

</div>



<!-- =====================================================
RIGHT IMAGE
===================================================== -->

<div class="featured-image">

<div class="image-glow"></div>

<img

src="<?= IMG ?>bikes/obsidian900.jpg"

alt="Obsidian 900"

loading="lazy"

>

</div>

</div>

</div>

</section>

<!-- =========================================================
LIFESTYLE GALLERY
========================================================= -->

<section class="lifestyle-gallery">

<div class="container">

<div class="section-header">

<span class="section-tag">

LIFESTYLE

</span>

<h2>

Built For Every
<span>Journey</span>

</h2>

<p>

Every ride creates memories. Explore the world of Napoleon
through performance, adventure and freedom.

</p>

</div>


<div class="gallery-grid">

<!-- ================================================= -->
<!-- LARGE HERO -->
<!-- ================================================= -->

<div class="gallery-item gallery-large">

<img
src="<?= IMG ?>gallery/gallery-hero.jpg"
alt="Napoleon Lifestyle"
loading="lazy">

<div class="gallery-overlay">

<h3>

Ride Beyond Limits

</h3>

</div>

</div>



<!-- ================================================= -->
<!-- IMAGE 2 -->
<!-- ================================================= -->

<div class="gallery-item">

<img
src="<?= IMG ?>gallery/gallery-adventure.jpg"
alt="Adventure Ride"
loading="lazy">

<div class="gallery-overlay">

<h3>

Adventure

</h3>

</div>

</div>



<!-- ================================================= -->
<!-- IMAGE 3 -->
<!-- ================================================= -->

<div class="gallery-item">

<img
src="<?= IMG ?>gallery/gallery-performance.jpg"
alt="Performance"
loading="lazy">

<div class="gallery-overlay">

<h3>

Performance

</h3>

</div>

</div>



<!-- ================================================= -->
<!-- IMAGE 4 -->
<!-- ================================================= -->

<div class="gallery-item">

<img
src="<?= IMG ?>gallery/gallery-blue.jpg"
alt="Blue Edition"
loading="lazy">

<div class="gallery-overlay">

<h3>

Blue Edition

</h3>

</div>

</div>



<!-- ================================================= -->
<!-- IMAGE 5 -->
<!-- ================================================= -->

<div class="gallery-item">

<img
src="<?= IMG ?>gallery/gallery-sport.jpg"
alt="Sport"
loading="lazy">

<div class="gallery-overlay">

<h3>

Track Ready

</h3>

</div>

</div>



<!-- ================================================= -->
<!-- IMAGE 6 -->
<!-- ================================================= -->

<div class="gallery-item">

<img
src="<?= IMG ?>gallery/gallery-racing.jpg"
alt="Racing"
loading="lazy">

<div class="gallery-overlay">

<h3>

Racing DNA

</h3>

</div>

</div>



<!-- ================================================= -->
<!-- WIDE IMAGE -->
<!-- ================================================= -->

<div class="gallery-item gallery-wide">

<img
src="<?= IMG ?>gallery/gallery-lineup.jpg"
alt="Collection"
loading="lazy">

<div class="gallery-overlay">

<h3>

Premium Collection

</h3>

</div>

</div>

</div>

</div>

</section>

<!-- =========================================================
RIDER TESTIMONIALS
========================================================= -->

<section class="premium-testimonials">

<div class="container">

<div class="section-header">

<span class="section-tag">

RIDER STORIES

</span>

<h2>

Trusted By
<span>Passionate Riders</span>

</h2>

<p>

Thousands of riders choose Napoleon for its engineering,
performance and unforgettable riding experience.

</p>

</div>


<div class="testimonial-grid">

<!-- ================================================= -->
<!-- TESTIMONIAL 1 -->
<!-- ================================================= -->

<article class="testimonial-card glass-card">

<div class="testimonial-top">

<img
src="<?= IMG ?>testimonials/rider-1.jpg"
alt="Rahul Sharma"
loading="lazy">

<div>

<h3>

Rahul Sharma

</h3>

<span>

Delhi, India

</span>

</div>

</div>

<div class="testimonial-stars">

<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>

</div>

<p>

"The Azure R1 completely transformed my riding experience.
Its power delivery, handling and premium finish are
simply outstanding."

</p>

</article>



<!-- ================================================= -->
<!-- TESTIMONIAL 2 -->
<!-- ================================================= -->

<article class="testimonial-card glass-card">

<div class="testimonial-top">

<img
src="<?= IMG ?>testimonials/rider-2.jpg"
alt="Aman Patel"
loading="lazy">

<div>

<h3>

Aman Patel

</h3>

<span>

Mumbai, India

</span>

</div>

</div>

<div class="testimonial-stars">

<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>

</div>

<p>

"The Obsidian 900 is pure perfection.
Long-distance rides have become effortless,
comfortable and incredibly exciting."

</p>

</article>



<!-- ================================================= -->
<!-- TESTIMONIAL 3 -->
<!-- ================================================= -->

<article class="testimonial-card glass-card">

<div class="testimonial-top">

<img
src="<?= IMG ?>testimonials/rider-3.jpg"
alt="Karan Singh"
loading="lazy">

<div>

<h3>

Karan Singh

</h3>

<span>

Bengaluru, India

</span>

</div>

</div>

<div class="testimonial-stars">

<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>

</div>

<p>

"The Heritage 650 blends classic styling with modern
technology beautifully. It receives attention everywhere."

</p>

</article>

</div>


<!-- ================================================= -->
<!-- STATS -->
<!-- ================================================= -->

<div class="testimonial-stats">

<div class="stat">

<h3>

15K+

</h3>

<span>

Happy Riders

</span>

</div>

<div class="stat">

<h3>

4.9★

</h3>

<span>

Average Rating

</span>

</div>

<div class="stat">

<h3>

98%

</h3>

<span>

Recommendation Rate

</span>

</div>

<div class="stat">

<h3>

250+

</h3>

<span>

Dealer Network

</span>

</div>

</div>

</div>

</section>

<!-- =========================================================
PREMIUM CALL TO ACTION
========================================================= -->

<section class="premium-cta">

<div class="container">

<div class="cta-card">

<div class="cta-content">

<span class="section-tag">

READY TO RIDE?

</span>

<h2>

Experience The
<span>Napoleon Difference</span>

</h2>

<p>

From heritage classics to high-performance superbikes,
find the motorcycle built to match your passion.

</p>

<div class="cta-buttons">

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-primary">

<i class="ri-motorbike-line"></i>

Book Test Ride

</a>

<a
href="<?= BASE_URL ?>contact/"
class="btn btn-outline">

<i class="ri-phone-line"></i>

Contact Dealer

</a>

</div>

</div>

<div class="cta-image">

<img
src="<?= IMG ?>bikes/obsidian900.jpg"
alt="Napoleon Bikes"
loading="lazy">

</div>

</div>

</div>

</section>



<!-- =========================================================
DEALER LOCATOR
========================================================= -->

<section class="dealer-preview">

<div class="container">

<div class="dealer-box glass-card">

<div>

<h2>

Nationwide Dealer Network

</h2>

<p>

Visit your nearest authorized Napoleon showroom
to experience our motorcycles in person.

</p>

</div>

<a
href="<?= BASE_URL ?>contact/"
class="btn btn-primary">

Find Dealer

</a>

</div>

</div>

</section>



<!-- =========================================================
FAQ
========================================================= -->

<?php include '../includes/sections/faq.php'; ?>



<!-- =========================================================
NEWSLETTER
========================================================= -->

<?php

$newsletter = '../includes/sections/newsletter.php';

if (file_exists($newsletter)) {

    include $newsletter;

}

?>



<!-- =========================================================
FOOTER
========================================================= -->

<?php include '../includes/footer.php'; ?>



<!-- =========================================================
SCRIPTS
========================================================= -->

<?php include '../includes/scripts.php'; ?>

<script src="<?= JS ?>bikes.js"></script>

</body>

</html>
