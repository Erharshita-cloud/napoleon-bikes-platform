<?php
declare(strict_types=1);

/**
 * ---------------------------------------------------------
 * Napoleon Bikes Platform
 * Footer Component
 * ---------------------------------------------------------
 */
?>

<footer class="site-footer">

    <div class="container">

        <div class="footer-grid">

            <!-- Logo -->

            <div class="footer-logo">

                <img
                    src="<?= IMG ?>logo.png"
                    alt="<?= e(SITE_NAME); ?> Logo"
                    width="60"
                    height="60">

                <h2><?= e(SITE_NAME); ?></h2>

                <p><?= e(SITE_TAGLINE); ?></p>

            </div>

            <!-- Quick Links -->

            <div class="footer-links">

                <h3>Quick Links</h3>

                <ul>

                    <?php foreach ($navigation as $name => $item): ?>

                        <li>

                            <a href="<?= e($item['url']); ?>">

                                <?= e($name); ?>

                            </a>

                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

            <!-- Contact -->

            <div class="footer-contact">

                <h3>Contact</h3>

                <p><?= e(COMPANY_ADDRESS); ?></p>

                <p>

                    <a href="tel:<?= e(COMPANY_PHONE); ?>">

                        <?= e(COMPANY_PHONE); ?>

                    </a>

                </p>

                <p>

                    <a href="mailto:<?= e(COMPANY_EMAIL); ?>">

                        <?= e(COMPANY_EMAIL); ?>

                    </a>

                </p>

            </div>

            <!-- Social Links -->

            <div class="footer-social">

                <h3>Follow Us</h3>

                <div class="social-icons">

                    <a
                        href="<?= e($social['facebook']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook">

                        <i class="ri-facebook-fill"></i>

                    </a>

                    <a
                        href="<?= e($social['instagram']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram">

                        <i class="ri-instagram-line"></i>

                    </a>

                    <a
                        href="<?= e($social['linkedin']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn">

                        <i class="ri-linkedin-box-fill"></i>

                    </a>

                    <a
                        href="<?= e($social['youtube']); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="YouTube">

                        <i class="ri-youtube-fill"></i>

                    </a>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            <p>

                &copy; <?= year(); ?>

                <?= e(SITE_NAME); ?>.

                All Rights Reserved.

            </p>

        </div>

    </div>

</footer>
