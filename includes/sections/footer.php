<?php
/**
 * ---------------------------------------------------------
 * Napoleon Bikes Platform
 * Footer
 * ---------------------------------------------------------
 */

$currentYear = date('Y');
?>

<footer class="footer">

    <div class="container">

        <div class="footer-grid">

            <!-- Brand -->
            <div class="footer-column">

                <a href="index.php" class="footer-logo">

                    <img
                        src="<?= IMAGES; ?>logo-white.png"
                        alt="<?= SITE_NAME; ?> Logo"
                        loading="lazy">

                </a>

                <p>

                    Experience the thrill of premium motorcycles crafted
                    with timeless design, advanced technology, and
                    unmatched performance.

                </p>

                <div class="footer-social">

                    <a href="#" aria-label="Facebook">
                        <i class="ri-facebook-fill"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <a href="#" aria-label="YouTube">
                        <i class="ri-youtube-fill"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="ri-linkedin-fill"></i>
                    </a>

                </div>

            </div>

            <!-- Quick Links -->
            <div class="footer-column">

                <h3>Quick Links</h3>

                <ul>

                    <li><a href="#hero">Home</a></li>

                    <li><a href="#featured-bikes">Motorcycles</a></li>

                    <li><a href="#technology">Technology</a></li>

                    <li><a href="#gallery">Gallery</a></li>

                    <li><a href="#dealers">Dealers</a></li>

                    <li><a href="#faq">FAQ</a></li>

                </ul>

            </div>

            <!-- Bikes -->
            <div class="footer-column">

                <h3>Our Bikes</h3>

                <ul>

                    <li><a href="#">Napoleon Classic 350</a></li>

                    <li><a href="#">Napoleon Street 500</a></li>

                    <li><a href="#">Napoleon Adventure X</a></li>

                    <li><a href="#">Napoleon Sport R</a></li>

                </ul>

            </div>

            <!-- Contact -->
            <div class="footer-column">

                <h3>Contact</h3>

                <ul class="footer-contact">

                    <li>

                        <i class="ri-map-pin-line"></i>

                        <span>

                            Napoleon Bikes Headquarters<br>
                            New Delhi, India

                        </span>

                    </li>

                    <li>

                        <i class="ri-phone-line"></i>

                        <a href="tel:+911800123456">

                            +91 1800 123 456

                        </a>

                    </li>

                    <li>

                        <i class="ri-mail-line"></i>

                        <a href="mailto:info@napoleonbikes.com">

                            info@napoleonbikes.com

                        </a>

                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <p>

                &copy; <?= $currentYear; ?>

                <?= SITE_NAME; ?>.

                All Rights Reserved.

            </p>

            <div class="footer-bottom-links">

                <a href="#">Privacy Policy</a>

                <span>|</span>

                <a href="#">Terms &amp; Conditions</a>

            </div>

        </div>

    </div>

</footer>
