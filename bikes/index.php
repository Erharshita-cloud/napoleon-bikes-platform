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
            <!-- CATEGORY TABS -->
            <!-- ============================== -->

            <div class="finder-tabs">

                <button
                    type="button"
                    class="tab-btn active"
                    data-category="all">

                    All Bikes

                </button>

                <button
                    type="button"
                    class="tab-btn"
                    data-category="classic">

                    Classic

                </button>

                <button
                    type="button"
                    class="tab-btn"
                    data-category="street">

                    Street

                </button>

                <button
                    type="button"
                    class="tab-btn"
                    data-category="sport">

                    Sport

                </button>

                <button
                    type="button"
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

                    <label for="bikeSearch">
                        Search Motorcycle
                    </label>

                    <input
                        type="text"
                        id="bikeSearch"
                        placeholder="Search Napoleon motorcycle..."
                        autocomplete="off">

                </div>

                <div class="finder-field">

                    <label for="engineFilter">
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

                    <label for="priceFilter">
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

                    <button
                        type="button"
                        id="searchBike"
                        aria-label="Search Bikes">

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
<!-- BIKE GRID -->
<!-- ================================================= -->

<section
    class="bike-showcase"
    id="bikeGrid">

    <div class="container">

        <div class="bike-grid">

            <!-- ================================================= -->
            <!-- CLASSIC 350 -->
            <!-- ================================================= -->

            <article
                class="bike-card"
                data-category="classic"
                data-engine="350">

                <div class="bike-image">

                    <img
                        src="<?= IMG ?>bikes/classic-350.jpg"
                        alt="Napoleon Classic 350"
                        loading="lazy">

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

                        <span>
                            <i class="ri-speed-up-line"></i>
                            349 cc
                        </span>

                        <span>
                            <i class="ri-flashlight-line"></i>
                            ABS
                        </span>

                        <span>
                            <i class="ri-road-map-line"></i>
                            BS6
                        </span>

                    </div>

                    <div class="bike-footer">

                        <h4>
                            Price on Request
                        </h4>

                        <div class="bike-buttons">

                            <a
                                href="<?= BASE_URL ?>bikes/classic-350/"
                                class="btn btn-outline">

                                View Details

                            </a>

                            <a
                                href="<?= BOOK_TEST_RIDE_URL ?>"
                                class="btn btn-primary">

                                Book Ride

                            </a>

                        </div>

                    </div>

                </div>

            </article>


            <!-- ================================================= -->
            <!-- CLASSIC 500 -->
            <!-- ================================================= -->

            <article
                class="bike-card"
                data-category="classic"
                data-engine="500">

                <div class="bike-image">

                    <img
                        src="<?= IMG ?>bikes/TrailForge 500.jpg"
                        alt="Napoleon Classic 500"
                        loading="lazy">

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

            <h4>Price on Request</h4>

            <div class="bike-buttons">

                <a
                    href="<?= BASE_URL ?>bikes/classic-500/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>


<!-- ================================================= -->
<!-- CLASSIC 900 -->
<!-- ================================================= -->

<article
    class="bike-card"
    data-category="classic"
    data-engine="900">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/vanta-900.jpg"
            alt="Napoleon Classic 900"
            loading="lazy">

    </div>

    <div class="bike-content">

        <span class="bike-category">
            Classic
        </span>

        <h3>
            Napoleon Classic 900
        </h3>

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

                <a
                    href="<?= BASE_URL ?>bikes/classic-900/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>


<!-- ================================================= -->
<!-- STREET -->
<!-- ================================================= -->

<article
    class="bike-card"
    data-category="street"
    data-engine="500">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/streetx.jpg"
            alt="Napoleon Street"
            loading="lazy">

    </div>

    <div class="bike-content">

        <span class="bike-category">
            Street
        </span>

        <h3>
            Napoleon Street
        </h3>

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

                <a
                    href="<?= BASE_URL ?>bikes/street/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>


<!-- ================================================= -->
<!-- STREET 500 -->
<!-- ================================================= -->

<article
    class="bike-card"
    data-category="street"
    data-engine="500">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/urbanx-650.jpg"
            alt="Napoleon Street 500"
            loading="lazy">

    </div>

    <div class="bike-content">

        <span class="bike-category">
            Street
        </span>

        <h3>
            Napoleon Street 500
        </h3>

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

                <a
                    href="<?= BASE_URL ?>bikes/street-500/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>


<!-- ================================================= -->
<!-- SPORT -->
<!-- ================================================= -->

<article
    class="bike-card"
    data-category="sport"
    data-engine="900">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/sport-r.jpg"
            alt="Napoleon Sport"
            loading="lazy">

    </div>

    <div class="bike-content">

        <span class="bike-category">
            Sport
        </span>

        <h3>
            Napoleon Sport
        </h3>

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

                <a
                    href="<?= BASE_URL ?>bikes/sport/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>


<!-- ================================================= -->
<!-- SPORT R -->
<!-- ================================================= -->

<article
    class="bike-card"
    data-category="sport"
    data-engine="900">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/sportr.jpg"
            alt="Napoleon Sport R"
            loading="lazy">

    </div>

    <div class="bike-content">

        <span class="bike-category">
            Sport
        </span>

        <h3>
            Napoleon Sport R
        </h3>

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

                <a
                    href="<?= BASE_URL ?>bikes/sport-r/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>


<!-- ================================================= -->
<!-- PHANTOM 900 -->
<!-- ================================================= -->

<article
    class="bike-card"
    data-category="sport"
    data-engine="900">

    <div class="bike-image">

        <img
            src="<?= IMG ?>bikes/phantom-900.jpg"
            alt="Napoleon Phantom 900"
            loading="lazy">

    </div>

    <div class="bike-content">

        <span class="bike-category">
            Premium
        </span>

        <h3>
            Napoleon Phantom 900
        </h3>

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

                <a
                    href="<?= BASE_URL ?>bikes/phantom-900/"
                    class="btn btn-outline">

                    View Details

                </a>

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Ride

                </a>

            </div>

        </div>

    </div>

</article>

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
                    alt="Napoleon Phantom 900"
                    loading="lazy">

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
                    Built for riders who demand luxury, precision and extraordinary
                    performance. The Phantom 900 combines aggressive styling,
                    premium engineering and unmatched road presence into one
                    exceptional machine.
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
                                   <h2>

                    Ride Beyond Limits

                </h2>

                <p>

                    Explore our premium collection of motorcycles crafted for performance,
                    touring, and unforgettable adventures.

                </p>

        </div>

        <div class="gallery-grid">

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-adventure.jpg" alt="Napoleon Adventure">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-blue.jpg" alt="Napoleon Blue Edition">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-hero.jpg" alt="Napoleon Hero Bike">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-lineup.jpg" alt="Napoleon Bike Lineup">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-performance.jpg" alt="Napoleon Performance">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-racing.jpg" alt="Napoleon Racing">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-sport.jpg" alt="Napoleon Sport">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/trailblazer.webp" alt="Napoleon Trailblazer">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-urban.jpg" alt="Napoleon Urban">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-classic.jpg" alt="Napoleon Classic">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-city-rider.jpg" alt="Napoleon City Rider">
            </div>

            <div class="gallery-item">
                <img src="<?= IMG ?>gallery/gallery-city.jpg" alt="Napoleon City">
            </div>

        </div>

    </div>

</section>



<!-- ================================================= -->
<!-- CALL TO ACTION -->
<!-- ================================================= -->

<section class="bike-cta">

    <div class="container">

        <div class="cta-content">

            <span class="section-tag">

                Ready To Ride?

            </span>

            <h2>

                Book Your Napoleon Test Ride Today

            </h2>

            <p>

                Experience the engineering, comfort and performance of Napoleon Bikes
                before making your decision.

            </p>

            <div class="cta-buttons">

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary">

                    Book Test Ride

                </a>

                <a
                    href="<?= BASE_URL ?>contact/"
                    class="btn btn-outline">

                    Contact Dealer

                </a>

            </div>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>

<?php include '../includes/scripts.php'; ?>

<script src="<?= JS ?>bikes.js"></script>

</body>
</html>

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
                    alt="Napoleon Hero Bike"
                    loading="lazy">
            </div>

            <!-- Adventure -->
            <div class="gallery-item">
                <img
                    src="<?= IMG ?>gallery/gallery-adventure.jpg"
                    alt="Napoleon Adventure"
                    loading="lazy">
            </div>

            <!-- Performance -->
            <div class="gallery-item">
                <img
                    src="<?= IMG ?>gallery/gallery-performance.jpg"
                    alt="Napoleon Performance"
                    loading="lazy">
            </div>

            <!-- Blue Edition -->
            <div class="gallery-item">
                <img
                    src="<?= IMG ?>gallery/gallery-blue.jpg"
                    alt="Napoleon Blue Edition"
                    loading="lazy">
            </div>

            <!-- Sport -->
            <div class="gallery-item">
                <img
                    src="<?= IMG ?>gallery/gallery-sport.jpg"
                    alt="Napoleon Sport"
                    loading="lazy">
            </div>

            <!-- Racing -->
            <div class="gallery-item">
                <img
                    src="<?= IMG ?>gallery/gallery-racing.jpg"
                    alt="Napoleon Racing"
                    loading="lazy">
            </div>

            <!-- Lineup -->
            <div class="gallery-item gallery-wide">
                <img
                    src="<?= IMG ?>gallery/gallery-lineup.jpg"
                    alt="Napoleon Collection"
                    loading="lazy">
            </div>

        </div>

    </div>

</section>

<!-- ================================================= -->
<!-- TESTIMONIALS -->
<!-- ================================================= -->

<section class="bike-testimonials">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">
                Rider Reviews
            </span>

            <h2>
                Trusted By Thousands Of Riders
            </h2>

            <p>
                Hear what riders say about their Napoleon experience.
            </p>

        </div>

        <div class="testimonial-grid">

            <div class="testimonial-card">

                <div class="testimonial-image">
                    <img
                        src="<?= IMG ?>testimonials/rider-1.jpg"
                        alt="Rahul Sharma"
                        loading="lazy">
                </div>

                <div class="stars">★★★★★</div>

                <p>
                    "The Napoleon Classic 350 exceeded every expectation.
                    Smooth performance, excellent comfort and incredible road presence."
                </p>

                <h4>Rahul Sharma</h4>

                <span>Delhi</span>

            </div>

            <div class="testimonial-card">

                <div class="testimonial-image">
                    <img
                        src="<?= IMG ?>testimonials/rider-2.jpg"
                        alt="Aman Patel"
                        loading="lazy">
                </div>

                <div class="stars">★★★★★</div>

                <p>
                    "The Phantom 900 delivers incredible acceleration,
                    premium styling and confidence on every ride."
                </p>

                <h4>Aman Patel</h4>

                <span>Mumbai</span>

            </div>

            <div class="testimonial-card">

                <div class="testimonial-image">
                    <img
                        src="<?= IMG ?>testimonials/rider-3.jpg"
                        alt="Karan Singh"
                        loading="lazy">
                </div>

                <div class="stars">★★★★★</div>

                <p>
                    "Adventure rides have become effortless.
                    The handling and reliability are simply outstanding."
                </p>

                <h4>Karan Singh</h4>

                <span>Bengaluru</span>

            </div>

        </div>

    </div>

</section>

<!-- ================================================= -->
<!-- PREMIUM CTA -->
<!-- ================================================= -->

<section class="bike-cta">

    <div class="container">

        <div class="cta-wrapper">

            <div class="cta-content">

                <span class="section-tag">
                    Ready To Ride?
                </span>

                <h2>
                    Experience The
                    <span>Napoleon Difference</span>
                </h2>

                <p>
                    Whether you're looking for a timeless classic,
                    a thrilling sports motorcycle or your next adventure companion,
                    there's a Napoleon built just for you.
                </p>

            </div>

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

                    <i class="ri-map-pin-line"></i>

                    Find A Dealer

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ================================================= -->
<!-- FAQ -->
<!-- ================================================= -->

<?php require_once __DIR__ . '/../includes/sections/faq.php'; ?>

<!-- ================================================= -->
<!-- FOOTER -->
<!-- ================================================= -->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

<!-- ================================================= -->
<!-- SCRIPTS -->
<!-- ================================================= -->

<?php require_once __DIR__ . '/../includes/scripts.php'; ?>

<?php if (file_exists(__DIR__ . '/../assets/js/bikes.js')): ?>
<script src="<?= JS ?>bikes.js"></script>
<?php endif; ?>

</body>
</html>
