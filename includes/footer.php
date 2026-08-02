<?php
declare(strict_types=1);

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}
?>

<footer class="site-footer">

    <div class="container">

        <div class="footer-grid">

            <!-- =======================================================
                 COMPANY
            ======================================================== -->

            <div class="footer-column">

                <a
                    href="<?= HOME_URL ?>"
                    class="logo"
                >

                    <img
                        src="<?= LOGO_WHITE ?>"
                        alt="<?= SITE_NAME ?>"
                        loading="lazy"
                    >

                    <span class="logo-text">

                        <?= SITE_NAME ?>

                    </span>

                </a>

                <p class="text mt-2">

                    <?= SITE_DESCRIPTION ?>

                </p>

            </div>

            <!-- =======================================================
                 QUICK LINKS
            ======================================================== -->

            <div class="footer-column">

                <h3 class="footer-title">

                    Quick Links

                </h3>

                <ul class="footer-links">

                    <?php foreach ($navigation as $item): ?>

                        <li>

                            <a href="<?= e($item['url']) ?>">

                                <?= e($item['title']) ?>

                            </a>

                        </li>

                    <?php endforeach; ?>

                </ul>

            </div>

            <!-- =======================================================
                 CONTACT
            ======================================================== -->

            <div class="footer-column">

                <h3 class="footer-title">

                    Contact

                </h3>

                <ul class="footer-links">

                    <li>

                        <a href="mailto:<?= COMPANY_EMAIL ?>">

                            <?= COMPANY_EMAIL ?>

                        </a>

                    </li>

                    <li>

                        <a href="tel:<?= COMPANY_PHONE ?>">

                            <?= COMPANY_PHONE ?>

                        </a>

                    </li>

                    <li>

                        <?= COMPANY_ADDRESS ?>

                    </li>

                </ul>

            </div>

            <!-- =======================================================
                 SOCIAL
            ======================================================== -->

            <div class="footer-column">

                <h3 class="footer-title">

                    Follow Us

                </h3>

                <div class="social-links">

                    <?php foreach ($social as $item): ?>

                        <a
                            href="<?= e($item['url']) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="<?= e($item['label']) ?>"
                        >

                            <i class="<?= e($item['icon']) ?>"></i>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

        <div class="footer-bottom">

            <p>

                © <?= currentYear(); ?>

                <?= SITE_NAME ?>

                · All Rights Reserved.

            </p>

            <p>

                <?= SITE_TAGLINE ?>

            </p>

        </div>

    </div>

</footer>
