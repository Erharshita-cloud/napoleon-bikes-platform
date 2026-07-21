<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/database.php';
require_once __DIR__ . '/includes/functions.php';

$currentPage = 'home';
?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . '/includes/head.php'; ?>

<body>

<?php require_once __DIR__ . '/includes/sections/loader.php'; ?>

<?php require_once __DIR__ . '/includes/navbar.php'; ?>

<main>

    <?php require_once __DIR__ . '/includes/sections/hero.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/featured-bikes.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/why-us.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/technology.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/statistics.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/testimonials.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/dealers.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/gallery.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/faq.php'; ?>

    <?php require_once __DIR__ . '/includes/sections/newsletter.php'; ?>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php require_once __DIR__ . '/includes/sections/chatbot.php'; ?>

<?php require_once __DIR__ . '/includes/scripts.php'; ?>

</body>
</html>
