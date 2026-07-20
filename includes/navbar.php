<?php
/**
 * ---------------------------------------------------------
 * Napoleon Bikes V2
 * Navbar Component
 * ---------------------------------------------------------
 */

if (!isset($currentPage)) {
    $currentPage = 'home';
}
?>

<header id="siteHeader" class="site-header">

    <div class="container">

        <nav class="navbar" aria-label="Primary Navigation">

            <!-- ========================================= -->
            <!-- Logo -->
            <!-- ========================================= -->

            <a href="<?= BASE_URL; ?>" class="logo" aria-label="<?= SITE_NAME; ?> Home">

                <img
                    src="<?= IMG; ?>logo.png"
                    alt="<?= SITE_NAME; ?> Logo"
                    width="52"
                    height="52">

                <div class="logo-text">

                    <h2><?= SITE_NAME; ?></h2>

                    <span><?= SITE_TAGLINE; ?></span>

                </div>

            </a>

            <!-- ========================================= -->
            <!-- Desktop Navigation -->
            <!-- ========================================= -->

            <ul class="nav-menu">

                <li>

                    <a
                        href="<?= BASE_URL; ?>"
                        class="<?= ($currentPage == 'home') ? 'active' : ''; ?>">

                        Home

                    </a>

                </li>

                <li>

                    <a
                        href="<?= BASE_URL; ?>bikes/"
                        class="<?= ($currentPage == 'bikes') ? 'active' : ''; ?>">

                        Bikes

                    </a>

                </li>

                <li>

                    <a
                        href="<?= BASE_URL; ?>booking/"
                        class="<?= ($currentPage == 'booking') ? 'active' : ''; ?>">

                        Book Ride

                    </a>

                </li>

                <li>

                    <a
                        href="<?= BASE_URL; ?>pricing/"
                        class="<?= ($currentPage == 'pricing') ? 'active' : ''; ?>">

                        Pricing

                    </a>

                </li>

                <li>

                    <a
                        href="<?= BASE_URL; ?>contact/"
                        class="<?= ($currentPage == 'contact') ? 'active' : ''; ?>">

                        Contact

                    </a>

                </li>

            </ul>

            <!-- ========================================= -->
            <!-- Right Actions -->
            <!-- ========================================= -->

            <div class="nav-actions">

                <!-- Search -->

                <button
                    class="icon-btn"
                    id="searchBtn"
                    aria-label="Search">

                    <i class="ri-search-line"></i>

                </button>

                <!-- Theme Toggle -->

                <button
                    class="icon-btn"
                    id="themeToggle"
                    aria-label="Toggle Theme">

                    <i class="ri-moon-line"></i>

                </button>

                <!-- Future Login -->

                <a
                    href="#"
                    class="login-btn">

                    <i class="ri-user-3-line"></i>

                    <span>

                        Login

                    </span>

                </a>

                <!-- CTA -->

                <a
                    href="<?= BASE_URL; ?>booking/"
                    class="btn btn-primary">

                    Book Test Ride

                </a>

                <!-- Mobile Menu Button -->

                <button
                    id="mobileMenuBtn"
                    class="mobile-menu-btn"
                    aria-label="Open Menu">

                    <i class="ri-menu-3-line"></i>

                </button>

            </div>

        </nav>

    </div>

</header>

<!-- ========================================= -->
<!-- Search Overlay -->
<!-- ========================================= -->

<div id="searchOverlay" class="search-overlay">

    <div class="search-box">

        <button
            id="closeSearch"
            class="close-search"
            aria-label="Close Search">

            <i class="ri-close-line"></i>

        </button>

        <form>

            <input
                type="search"
                placeholder="Search motorcycles..."
                aria-label="Search">

            <button type="submit">

                <i class="ri-search-line"></i>

            </button>

        </form>

    </div>

</div>

<!-- ===================================================== -->
<!-- Mobile Navigation -->
<!-- ===================================================== -->

<div id="mobileMenu" class="mobile-menu">

    <div class="mobile-menu-overlay"></div>

    <aside class="mobile-menu-content">

        <div class="mobile-menu-header">

            <a href="<?= BASE_URL; ?>" class="mobile-logo">

                <img
                    src="<?= IMG; ?>logo.png"
                    alt="<?= SITE_NAME; ?>"
                    width="45"
                    height="45">

                <div>

                    <h3><?= SITE_NAME; ?></h3>

                    <span><?= SITE_TAGLINE; ?></span>

                </div>

            </a>

            <button
                id="closeMobileMenu"
                class="icon-btn"
                aria-label="Close Menu">

                <i class="ri-close-large-line"></i>

            </button>

        </div>

        <!-- Navigation -->

        <nav class="mobile-navigation">

            <a
                href="<?= BASE_URL; ?>"
                class="<?= ($currentPage == 'home') ? 'active' : ''; ?>">

                <i class="ri-home-5-line"></i>

                <span>Home</span>

            </a>

            <a
                href="<?= BASE_URL; ?>bikes/"
                class="<?= ($currentPage == 'bikes') ? 'active' : ''; ?>">

                <i class="ri-motorbike-line"></i>

                <span>Bikes</span>

            </a>

            <a
                href="<?= BASE_URL; ?>booking/"
                class="<?= ($currentPage == 'booking') ? 'active' : ''; ?>">

                <i class="ri-calendar-check-line"></i>

                <span>Book Test Ride</span>

            </a>

            <a
                href="<?= BASE_URL; ?>pricing/"
                class="<?= ($currentPage == 'pricing') ? 'active' : ''; ?>">

                <i class="ri-price-tag-3-line"></i>

                <span>Pricing</span>

            </a>

            <a
                href="<?= BASE_URL; ?>contact/"
                class="<?= ($currentPage == 'contact') ? 'active' : ''; ?>">

                <i class="ri-customer-service-2-line"></i>

                <span>Contact</span>

            </a>

        </nav>

        <!-- Quick Actions -->

        <div class="mobile-actions">

            <a
                href="<?= BASE_URL; ?>booking/"
                class="btn btn-primary btn-full">

                Book Test Ride

            </a>

            <a
                href="tel:<?= COMPANY_PHONE; ?>"
                class="btn btn-outline btn-full">

                <i class="ri-phone-line"></i>

                Call Us

            </a>

            <a
                href="mailto:<?= COMPANY_EMAIL; ?>"
                class="btn btn-outline btn-full">

                <i class="ri-mail-line"></i>

                Email Us

            </a>

        </div>

        <!-- Contact Information -->

        <div class="mobile-contact">

            <h4>Visit Us</h4>

            <p><?= COMPANY_ADDRESS; ?></p>

            <p><?= COMPANY_PHONE; ?></p>

            <p><?= COMPANY_EMAIL; ?></p>

        </div>

        <!-- Social Links -->

        <div class="mobile-social">

            <a
                href="<?= $social['facebook']; ?>"
                target="_blank"
                aria-label="Facebook">

                <i class="ri-facebook-fill"></i>

            </a>

            <a
                href="<?= $social['instagram']; ?>"
                target="_blank"
                aria-label="Instagram">

                <i class="ri-instagram-line"></i>

            </a>

            <a
                href="<?= $social['linkedin']; ?>"
                target="_blank"
                aria-label="LinkedIn">

                <i class="ri-linkedin-box-fill"></i>

            </a>

            <a
                href="<?= $social['youtube']; ?>"
                target="_blank"
                aria-label="YouTube">

                <i class="ri-youtube-fill"></i>

            </a>

        </div>

        <!-- Footer -->

        <div class="mobile-footer">

            <p>

                © <?= date('Y'); ?>

                <?= SITE_NAME; ?>

            </p>

            <small>

                <?= SITE_TAGLINE; ?>

            </small>

        </div>

    </aside>

</div>

<!-- ===================================== -->
<!-- Scroll To Top -->
<!-- ===================================== -->

<button
    id="scrollTop"
    class="scroll-top"
    aria-label="Scroll To Top">

    <i class="ri-arrow-up-line"></i>

</button>
