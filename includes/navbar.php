<?php
declare(strict_types=1);

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}
?>

<header class="site-header" id="site-header">

    <div class="container">

        <nav class="navbar">

            <a
                href="<?= HOME_URL ?>"
                class="logo"
                aria-label="<?= SITE_NAME ?>"
            >

                <img
                    src="<?= LOGO ?>"
                    alt="<?= SITE_NAME ?>"
                    loading="eager"
                    decoding="async"
                >

                <span class="logo-text">
                    <?= SITE_NAME ?>
                </span>

            </a>

            <ul class="nav-menu">

                <?php foreach ($navigation as $item): ?>

                    <li class="nav-item">

                        <a
                            href="<?= e($item['url']) ?>"
                            class="<?= active($item['url']) ?>"
                        >

                            <?php if (!empty($item['icon'])): ?>

                                <i class="<?= e($item['icon']) ?>"></i>

                            <?php endif; ?>

                            <span>
                                <?= e($item['title']) ?>
                            </span>

                        </a>

                    </li>

                <?php endforeach; ?>

            </ul>

            <div class="nav-actions">

                <a
                    href="<?= BOOK_TEST_RIDE_URL ?>"
                    class="btn btn-primary"
                >
                    Book Test Ride
                </a>

            </div>

            <button
                class="mobile-toggle"
                id="mobile-toggle"
                type="button"
                aria-label="Toggle Navigation"
                aria-expanded="false"
                aria-controls="mobile-menu"
            >

                <i class="ri-menu-3-line"></i>

            </button>

        </nav>

    </div>

</header>

<div
    class="mobile-menu"
    id="mobile-menu"
    aria-hidden="true"
>

    <div class="mobile-menu-container">

        <button
            class="mobile-close"
            id="mobile-close"
            type="button"
            aria-label="Close Navigation"
        >

            <i class="ri-close-line"></i>

        </button>

        <ul class="mobile-nav-list">

            <?php foreach ($navigation as $item): ?>

                <li>

                    <a
                        href="<?= e($item['url']) ?>"
                        class="<?= active($item['url']) ?>"
                    >

                        <?php if (!empty($item['icon'])): ?>

                            <i class="<?= e($item['icon']) ?>"></i>

                        <?php endif; ?>

                        <span>

                            <?= e($item['title']) ?>

                        </span>

                    </a>

                </li>

            <?php endforeach; ?>

        </ul>

        <div class="mobile-action">

            <a
                href="<?= BOOK_TEST_RIDE_URL ?>"
                class="btn btn-primary btn-block"
            >
                Book Test Ride
            </a>

        </div>

    </div>

</div>
