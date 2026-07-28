<?php

/**
 * ---------------------------------------------------------
 * Napoleon Bikes Platform
 * Dynamic Premium Hero Section
 * ---------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| Hero Background Slides
|--------------------------------------------------------------------------
*/

$heroSlides = [

    [
        'image' => IMG . 'bikes/adventurepro.jpg',

        'eyebrow' =>
            'NEXT GENERATION MOTORCYCLES',

        'title' =>
            'Ride Beyond',

        'highlight' =>
            'Limits',

        'description' =>
            'Discover premium motorcycles engineered with advanced technology, powerful performance, and unmatched comfort for every journey.'
    ],

    [
        'image' => IMG . 'bikes/gallery-night-lifestyle.jpg',

        'eyebrow' =>
            'BUILT FOR PURE PERFORMANCE',

        'title' =>
            'Own Every',

        'highlight' =>
            'Curve',

        'description' =>
            'Experience track-inspired performance, responsive handling, and thrilling power designed for riders who demand more.'
    ],

    [
        'image' => IMG . 'bikes/Cobalt GT.jpg',

        'eyebrow' =>
            'ENGINEERED FOR THE OPEN ROAD',

        'title' =>
            'Chase New',

        'highlight' =>
            'Horizons',

        'description' =>
            'Go beyond the city with adventure-ready capability, long-distance comfort, and confidence on every road.'
    ]

];

?>


<section
    class="hero"
    id="home"
>


    <!-- =================================================
         DYNAMIC BACKGROUND SLIDESHOW
    ================================================== -->

    <div
        class="hero-background-slideshow"
        aria-hidden="true"
    >


        <?php foreach (
            $heroSlides as $index => $slide
        ): ?>


            <div
                class="hero-background-slide<?=
                    $index === 0
                        ? ' is-active'
                        : '';
                ?>"
                data-hero-slide="<?= $index; ?>"
            >


                <img
                    src="<?= e(
                        $slide['image']
                    ); ?>"
                    alt=""
                    <?= $index === 0
                        ? 'fetchpriority="high"'
                        : 'loading="lazy"';
                    ?>
                >


            </div>


        <?php endforeach; ?>


        <!-- Dark Cinematic Overlay -->

        <div
            class="hero-dark-overlay"
        ></div>


        <!-- Left Text Gradient -->

        <div
            class="hero-content-overlay"
        ></div>


    </div>


    <!-- =================================================
         HERO CONTENT
    ================================================== -->

    <div class="container">


        <div class="hero-wrapper">


            <!-- =========================================
                 HERO TEXT
            ========================================== -->

            <div class="hero-content">


                <span
                    class="hero-badge"
                    id="hero-eyebrow"
                >

                    <i
                        class="ri-flashlight-fill"
                    ></i>

                    <?= e(
                        $heroSlides[0]['eyebrow']
                    ); ?>

                </span>


                <h1
                    id="hero-title"
                >

                    <span
                        class="hero-title-main"
                    >

                        <?= e(
                            $heroSlides[0]['title']
                        ); ?>

                    </span>


                    <span
                        class="hero-title-highlight"
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


                <!-- Hero Buttons -->

                <div class="hero-buttons">


                    <a
                        href="<?= url('bikes/'); ?>"
                        class="btn btn-primary"
                    >

                        <i
                            class="ri-motorbike-fill"
                        ></i>

                        Explore Bikes

                    </a>


                    <a
                        href="<?= url(
                            'book-test-ride/'
                        ); ?>"
                        class="btn btn-outline"
                    >

                        <i
                            class="ri-calendar-check-line"
                        ></i>

                        Book Test Ride

                    </a>


                </div>


                <!-- Hero Features -->

                <div class="hero-features">


                    <div class="feature-item">

                        <i
                            class="ri-shield-check-fill"
                        ></i>

                        <span>
                            5 Years Warranty
                        </span>

                    </div>


                    <div class="feature-item">

                        <i
                            class="ri-tools-fill"
                        ></i>

                        <span>
                            Free Service Support
                        </span>

                    </div>


                    <div class="feature-item">

                        <i
                            class="ri-map-pin-2-fill"
                        ></i>

                        <span>
                            Nationwide Dealers
                        </span>

                    </div>


                </div>


                <!-- Hero Statistics -->

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


                </div>


                <!-- Customer Rating -->

                <div class="hero-rating">


                    <div class="rating-stars">

                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>

                    </div>


                    <div class="rating-content">

                        <strong>
                            4.9 / 5 Customer Rating
                        </strong>

                        <p>
                            Trusted by thousands of riders.
                        </p>

                    </div>


                </div>


            </div>


            <!-- =========================================
                 FEATURED BIKE
            ========================================== -->

            <div class="hero-image">


                <div class="hero-image-wrapper">


                    <img
                        src="<?= IMG ?>hero-bike.png"
                        alt="<?= e(
                            SITE_NAME
                        ); ?> Motorcycle"
                        class="hero-bike"
                    >


                    <div
                        class="hero-circle hero-circle-1"
                    ></div>


                    <div
                        class="hero-circle hero-circle-2"
                    ></div>


                    <!-- Price -->

                    <div
                        class="floating-card floating-price"
                    >

                        <div class="floating-icon">

                            <i
                                class="ri-price-tag-3-fill"
                            ></i>

                        </div>

                        <div class="floating-content">

                            <span>
                                Starting From
                            </span>

                            <h4>
                                ₹1.89 Lakh
                            </h4>

                        </div>

                    </div>


                    <!-- Engine -->

                    <div
                        class="floating-card floating-engine"
                    >

                        <div class="floating-icon">

                            <i
                                class="ri-settings-5-fill"
                            ></i>

                        </div>

                        <div class="floating-content">

                            <span>
                                Engine
                            </span>

                            <h4>
                                349 CC
                            </h4>

                        </div>

                    </div>


                    <!-- Speed -->

                    <div
                        class="floating-card floating-speed"
                    >

                        <div class="floating-icon">

                            <i
                                class="ri-speed-up-fill"
                            ></i>

                        </div>

                        <div class="floating-content">

                            <span>
                                Top Speed
                            </span>

                            <h4>
                                180 km/h
                            </h4>

                        </div>

                    </div>


                    <!-- Mileage -->

                    <div
                        class="floating-card floating-fuel"
                    >

                        <div class="floating-icon">

                            <i
                                class="ri-gas-station-fill"
                            ></i>

                        </div>

                        <div class="floating-content">

                            <span>
                                Mileage
                            </span>

                            <h4>
                                40 km/l
                            </h4>

                        </div>

                    </div>


                    <div
                        class="hero-glow hero-glow-1"
                    ></div>


                    <div
                        class="hero-glow hero-glow-2"
                    ></div>


                    <div
                        class="hero-dots"
                    ></div>


                </div>


            </div>


            <!-- =========================================
                 SLIDE CONTROLS
            ========================================== -->

            <div
                class="hero-slider-controls"
            >


                <button
                    type="button"
                    class="hero-slider-button"
                    id="hero-prev"
                    aria-label="Previous motorcycle"
                >

                    <i
                        class="ri-arrow-left-line"
                    ></i>

                </button>


                <button
                    type="button"
                    class="hero-slider-button"
                    id="hero-next"
                    aria-label="Next motorcycle"
                >

                    <i
                        class="ri-arrow-right-line"
                    ></i>

                </button>


            </div>


            <!-- =========================================
                 SLIDE INDICATORS
            ========================================== -->

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
                        data-hero-indicator="<?= $index; ?>"
                        aria-label="<?= e(
                            'Show slide ' .
                            ($index + 1)
                        ); ?>"
                    >

                        <span></span>

                    </button>


                <?php endforeach; ?>


            </div>


            <!-- =========================================
                 SCROLL INDICATOR
            ========================================== -->

            <div class="hero-scroll">


                <a
                    href="#featured-bikes"
                    aria-label="Scroll to featured bikes"
                >

                    <span>
                        Scroll Down
                    </span>

                    <i
                        class="ri-arrow-down-line"
                    ></i>

                </a>


            </div>


        </div>


    </div>


    <!-- Existing Decorative Shapes -->

    <div
        class="hero-shape hero-shape-1"
    ></div>

    <div
        class="hero-shape hero-shape-2"
    ></div>

    <div
        class="hero-shape hero-shape-3"
    ></div>

    <div
        class="hero-gradient"
    ></div>


</section>
