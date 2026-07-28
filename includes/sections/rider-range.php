<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes — Rider Range Section
|--------------------------------------------------------------------------
*/

$riderCategories = [

    [
        'name' => 'Classic',
        'tagline' => 'Timeless Elegance',
        'description' => 'Iconic design, relaxed comfort, and effortless highway cruising.',
        'image' => IMG . 'gallery/gallery-hero.jpg',
        'category' => 'Classic',
        'icon' => 'ri-roadster-line'
    ],

    [
        'name' => 'Street',
        'tagline' => 'Urban Dominance',
        'description' => 'Agile, responsive, and engineered for every city adventure.',
        'image' => IMG . 'gallery/gallery-lineup.jpg',
        'category' => 'Street',
        'icon' => 'ri-flashlight-line'
    ],

    [
        'name' => 'Sport',
        'tagline' => 'Race Performance',
        'description' => 'Track-inspired power, sharp handling, and thrilling speed.',
        'image' => IMG . 'gallery/gallery-sport.jpg',
        'category' => 'Sport',
        'icon' => 'ri-speed-up-line'
    ],

    [
        'name' => 'Adventure',
        'tagline' => 'Conquer Any Terrain',
        'description' => 'Built for mountain roads, long journeys, and new horizons.',
        'image' => IMG . 'gallery/gallery-adventure.jpg',
        'category' => 'Adventure',
        'icon' => 'ri-compass-3-line'
    ],

    [
        'name' => 'Cruiser',
        'tagline' => 'Ride in Comfort',
        'description' => 'Relaxed ergonomics and powerful performance for open roads.',
        'image' => IMG . 'gallery/gallery-performance.jpg',
        'category' => 'Cruiser',
        'icon' => 'ri-route-line'
    ]

];

?>


<!-- =====================================================
     BUILT FOR EVERY RIDER
===================================================== -->

<section
    class="rider-range-section"
    id="rider-range"
>


    <div class="container">


        <!-- Section Heading -->

        <div class="section-heading rider-range-heading">


            <span class="section-eyebrow">

                <i class="ri-compass-3-line"></i>

                EXPLORE OUR RANGE

            </span>


            <h2>

                Built for

                <span>Every Rider</span>

            </h2>


            <p>

                From timeless classics to high-performance machines,
                discover a Napoleon motorcycle designed for your journey.

            </p>


        </div>


        <!-- Category Cards -->

        <div class="rider-range-grid">


            <?php foreach ($riderCategories as $category): ?>


                <a
                    href="<?= e(
                        BASE_URL .
                        'bikes/?category=' .
                        urlencode($category['category'])
                    ); ?>"
                    class="rider-range-card"
                    aria-label="<?= e(
                        'Explore ' .
                        $category['name'] .
                        ' motorcycles'
                    ); ?>"
                >


                    <!-- Background Image -->

                    <img
                        src="<?= e(
                            $category['image']
                        ); ?>"
                        alt="<?= e(
                            'Napoleon ' .
                            $category['name'] .
                            ' motorcycle'
                        ); ?>"
                        loading="lazy"
                    >


                    <!-- Dark Overlay -->

                    <span
                        class="rider-range-overlay"
                    ></span>


                    <!-- Card Content -->

                    <div
                        class="rider-range-content"
                    >


                        <div
                            class="rider-range-icon"
                        >

                            <i
                                class="<?= e(
                                    $category['icon']
                                ); ?>"
                            ></i>

                        </div>


                        <div>


                            <h3>

                                <?= e(
                                    $category['name']
                                ); ?>

                            </h3>


                            <span>

                                <?= e(
                                    $category['tagline']
                                ); ?>

                            </span>


                        </div>


                        <div
                            class="rider-range-arrow"
                        >

                            <i
                                class="ri-arrow-right-up-line"
                            ></i>

                        </div>


                    </div>


                    <!-- Hover Content -->

                    <div
                        class="rider-range-hover"
                    >


                        <p>

                            <?= e(
                                $category['description']
                            ); ?>

                        </p>


                        <span>

                            Explore Collection

                            <i
                                class="ri-arrow-right-line"
                            ></i>

                        </span>


                    </div>


                </a>


            <?php endforeach; ?>


        </div>


    </div>


</section>
