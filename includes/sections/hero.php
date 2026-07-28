<?php

declare(strict_types=1);


/**
 * =========================================================
 * Napoleon Bikes
 * Horizontal Hero Slider Data
 * =========================================================
 */

$heroSlides = [

    [
        'image' => IMG . 'bikes/adventure-pro.jpg',

        'name' => 'Napoleon Adventure Pro',

        'category' => 'Adventure Series',

        'eyebrow' => 'NEXT GENERATION MOTORCYCLES',

        'title' => 'Ride Beyond',

        'highlight' => 'Limits',

        'description' =>
            'Discover premium motorcycles engineered with advanced technology, powerful performance, and unmatched comfort for every journey.'
    ],

    [
        'image' => IMG . 'bikes/night-gt.jpg',

        'name' => 'Napoleon Night GT',

        'category' => 'Performance Series',

        'eyebrow' => 'BUILT FOR PURE PERFORMANCE',

        'title' => 'Own Every',

        'highlight' => 'Curve',

        'description' =>
            'Experience responsive handling, powerful acceleration, and track-inspired performance designed for riders who demand more.'
    ],

    [
        'image' => IMG . 'bikes/cobalt-gt.jpg',

        'name' => 'Napoleon Cobalt GT',

        'category' => 'Grand Touring Series',

        'eyebrow' => 'ENGINEERED FOR THE OPEN ROAD',

        'title' => 'Chase New',

        'highlight' => 'Horizons',

        'description' =>
            'Go beyond the city with adventure-ready capability, long-distance comfort, and confidence on every road.'
    ]

];

?>

<section
    class="hero hero-horizontal"
    id="home"
>

    <div class="hero-background-glow"></div>

    <div class="container">

        <!-- =============================================
             HERO CONTENT
        ============================================== -->

        <div class="hero-top-content">

            <span
                class="hero-badge"
                id="hero-eyebrow"
            >

                <i class="ri-flashlight-fill"></i>

               <span id="hero-eyebrow-text">
                    NEXT GENERATION MOTORCYCLES
               </span>

            </span>


            <h1 class="hero-main-title">

                <span
                    class="hero-title-main"
                    id="hero-title-main"
                >

                    <?= e(
                        $heroSlides[0]['title']
                    ); ?>

                </span>

                <span
                    class="hero-title-highlight"
                    id="hero-title-highlight"
                >

                    <?= e(
                        $heroSlides[0]['highlight']
                    ); ?>

                </span>

            </h1>


            <p
                class="hero-description"
                id="hero-description"
            >

                <?= e(
                    $heroSlides[0]['description']
                ); ?>

            </p>


            <div class="hero-buttons">

                <a
                    href="<?= url('bikes/'); ?>"
                    class="btn btn-primary"
                >

                    <i class="ri-motorbike-fill"></i>

                    Explore Bikes

                </a>


                <a
                    href="<?= url(
                        'book-test-ride/'
                    ); ?>"
                    class="btn btn-outline"
                >

                    <i class="ri-calendar-check-line"></i>

                    Book Test Ride

                </a>

            </div>


            <div class="hero-features">

                <div class="feature-item">

                    <i class="ri-shield-check-fill"></i>

                    <span>
                        5 Years Warranty
                    </span>

                </div>


                <div class="feature-item">

                    <i class="ri-tools-fill"></i>

                    <span>
                        Free Service Support
                    </span>

                </div>


                <div class="feature-item">

                    <i class="ri-map-pin-2-fill"></i>

                    <span>
                        Nationwide Dealers
                    </span>

                </div>

            </div>

        </div>


        <!-- =============================================
             HORIZONTAL BIKE SLIDER
        ============================================== -->

        <div class="hero-bike-slider">


            <!-- Previous Button -->

            <button
                type="button"
                class="hero-slider-arrow hero-slider-prev"
                id="hero-prev"
                aria-label="Previous motorcycle"
            >

                <i class="ri-arrow-left-line"></i>

            </button>


            <!-- Slider Window -->

            <div class="hero-slider-window">


                <div
                    class="hero-slider-track"
                    id="hero-slider-track"
                >


                    <?php foreach (
                        $heroSlides as $index => $slide
                    ): ?>


                        <article
                            class="hero-bike-slide<?=

                                $index === 0
                                    ? ' is-active'
                                    : '';

                            ?>"
                            data-hero-slide="<?=
                                $index;
                            ?>"
                        >


                            <div class="hero-bike-image-box">


                                <img
                                    src="<?= e(
                                        $slide['image']
                                    ); ?>"
                                    alt="<?= e(
                                        $slide['name']
                                    ); ?>"
                                    class="hero-slider-bike-image"
                                    <?=

                                        $index === 0

                                            ? 'fetchpriority="high"'

                                            : 'loading="lazy"';

                                    ?>
                                >


                                <div
                                    class="hero-bike-image-overlay"
                                ></div>


                                <div
                                    class="hero-bike-number"
                                >

                                    0<?=
                                        $index + 1;
                                    ?>

                                </div>


                            </div>


                            <div
                                class="hero-bike-details"
                            >

                                <span>

                                    <?= e(
                                        $slide['category']
                                    ); ?>

                                </span>


                                <h3>

                                    <?= e(
                                        $slide['name']
                                    ); ?>

                                </h3>


                                <a
                                    href="<?= url(
                                        'bikes/'
                                    ); ?>"
                                >

                                    View Motorcycle

                                    <i
                                        class="ri-arrow-right-up-line"
                                    ></i>

                                </a>

                            </div>


                        </article>


                    <?php endforeach; ?>


                </div>


            </div>


            <!-- Next Button -->

            <button
                type="button"
                class="hero-slider-arrow hero-slider-next"
                id="hero-next"
                aria-label="Next motorcycle"
            >

                <i class="ri-arrow-right-line"></i>

            </button>


        </div>


        <!-- =============================================
             SLIDER INDICATORS
        ============================================== -->

        <div class="hero-slider-bottom">


            <div
                class="hero-slider-indicators"
            >

                <?php foreach (
                    $heroSlides as $index => $slide
                ): ?>


                    <button
                        type="button"
                        class="hero-slider-indicator<?=

                            $index === 0
                                ? ' is-active'
                                : '';

                        ?>"
                        data-hero-indicator="<?=
                            $index;
                        ?>"
                        aria-label="<?= e(

                            'Show ' .
                            $slide['name']

                        ); ?>"
                    >

                        <span></span>

                    </button>


                <?php endforeach; ?>


            </div>


            <div class="hero-slider-status">

                <strong
                    id="hero-current-slide"
                >
                    01
                </strong>

                <span>/</span>

                <span>

                    0<?=
                        count($heroSlides);
                    ?>

                </span>

            </div>


        </div>


        <!-- =============================================
             HERO STATISTICS
        ============================================== -->

        <div class="hero-stats">

            <div class="stat-card">

                <h3>15K+</h3>

                <p>
                    Happy Riders
                </p>

            </div>


            <div class="stat-card">

                <h3>120+</h3>

                <p>
                    Dealerships
                </p>

            </div>


            <div class="stat-card">

                <h3>25+</h3>

                <p>
                    Bike Models
                </p>

            </div>


            <div class="hero-rating">

                <div class="rating-stars">

                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>

                </div>


                <div>

                    <strong>
                        4.9 / 5 Rating
                    </strong>

                    <p>
                        Trusted by riders
                    </p>

                </div>

            </div>

        </div>


    </div>

</section>
