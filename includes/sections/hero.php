<?php
/**
 * ---------------------------------------------------------
 * Napoleon Bikes Platform
 * Hero Section
 * ---------------------------------------------------------
 */
?>

<section class="hero" id="home">

    <div class="container">

        <div class="hero-wrapper">

            <!-- Hero Content -->

            <div class="hero-content">

                <span class="hero-badge">
                    <i class="ri-flashlight-fill"></i>
                    Next Generation Motorcycles
                </span>

                <h1>
                    Ride Beyond <span>Limits</span>
                </h1>

                <p class="hero-description">
                    Discover the latest collection of Napoleon Bikes,
                    engineered with cutting-edge technology, premium
                    performance, and unmatched comfort for every journey.
                </p>

                <div class="hero-buttons">

                    <a href="<?= url('bikes/'); ?>" class="btn btn-primary">
                        <i class="ri-motorbike-fill"></i>
                        Explore Bikes
                    </a>

                    <a href="<?= url('booking/'); ?>" class="btn btn-outline">
                        <i class="ri-calendar-check-line"></i>
                        Book Test Ride
                    </a>

                </div>

                <div class="hero-features">

                    <div class="feature-item">
                        <i class="ri-shield-check-fill"></i>
                        <span>5 Years Warranty</span>
                    </div>

                    <div class="feature-item">
                        <i class="ri-tools-fill"></i>
                        <span>Free Service Support</span>
                    </div>

                    <div class="feature-item">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>Nationwide Dealers</span>
                    </div>

                </div>

                <div class="hero-stats">

                    <div class="stat-card">
                        <h3>15K+</h3>
                        <p>Happy Riders</p>
                    </div>

                    <div class="stat-card">
                        <h3>120+</h3>
                        <p>Dealerships</p>
                    </div>

                    <div class="stat-card">
                        <h3>25+</h3>
                        <p>Bike Models</p>
                    </div>

                </div>

                <div class="hero-rating">

                    <div class="rating-stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>

                    <div class="rating-content">
                        <strong>4.9 / 5 Customer Rating</strong>
                        <p>Trusted by thousands of riders across India.</p>
                    </div>

                </div>

            </div>

            <!-- Hero Image -->

            <div class="hero-image">

                <div class="hero-image-wrapper">

                    <img
                        src="<?= IMG ?>hero-bike.png"
                        alt="<?= SITE_NAME; ?> Motorcycle"
                        class="hero-bike"
                    >

                    <div class="hero-circle hero-circle-1"></div>

                    <div class="hero-circle hero-circle-2"></div>

                    <div class="floating-card floating-price">

                        <div class="floating-icon">
                            <i class="ri-price-tag-3-fill"></i>
                        </div>

                        <div class="floating-content">
                            <span>Starting From</span>
                            <h4>₹1.89 Lakh</h4>
                        </div>

                    </div>

                    <div class="floating-card floating-engine">

                        <div class="floating-icon">
                            <i class="ri-settings-5-fill"></i>
                        </div>

                        <div class="floating-content">
                            <span>Engine</span>
                            <h4>349 CC</h4>
                        </div>

                    </div>

                    <div class="floating-card floating-speed">

                        <div class="floating-icon">
                            <i class="ri-speed-up-fill"></i>
                        </div>

                        <div class="floating-content">
                            <span>Top Speed</span>
                            <h4>180 km/h</h4>
                        </div>

                    </div>

                    <div class="floating-card floating-fuel">

                        <div class="floating-icon">
                            <i class="ri-gas-station-fill"></i>
                        </div>

                        <div class="floating-content">
                            <span>Mileage</span>
                            <h4>40 km/l</h4>
                        </div>

                    </div>

                    <div class="hero-glow hero-glow-1"></div>

                    <div class="hero-glow hero-glow-2"></div>

                    <div class="hero-dots"></div>

                </div>

            </div>

            <!-- Scroll Indicator -->

            <div class="hero-scroll">

                <a href="#featured-bikes" aria-label="Scroll Down">
                    <span>Scroll Down</span>
                    <i class="ri-arrow-down-line"></i>
                </a>

            </div>

        </div>

    </div>

    <!-- Hero Background Shapes -->

    <div class="hero-shape hero-shape-1"></div>

    <div class="hero-shape hero-shape-2"></div>

    <div class="hero-shape hero-shape-3"></div>

    <div class="hero-gradient"></div>

</section>
