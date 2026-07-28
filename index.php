<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform
| Home Page
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/includes/config.php';

require_once __DIR__ . '/includes/database.php';

require_once __DIR__ . '/includes/functions.php';


/*
|--------------------------------------------------------------------------
| Current Page
|--------------------------------------------------------------------------
*/

$currentPage = 'home';


/*
|--------------------------------------------------------------------------
| Page Information
|--------------------------------------------------------------------------
*/

$pageTitle = 'Ride Beyond Limits';

?>

<!DOCTYPE html>

<html lang="en">

<?php require_once __DIR__ . '/includes/head.php'; ?>


<body class="home-page">


<!-- =====================================================
     PAGE LOADER
===================================================== -->

<?php require_once __DIR__ . '/includes/sections/loader.php'; ?>


<!-- =====================================================
     NAVIGATION
===================================================== -->

<?php require_once __DIR__ . '/includes/navbar.php'; ?>


<!-- =====================================================
     MAIN CONTENT
===================================================== -->

<main class="home-main">


    <!-- =================================================
         1. HERO SLIDESHOW
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/hero.php'; ?>


    <!-- =================================================
         2. PERFORMANCE SPECIFICATIONS
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/statistics.php'; ?>


    <!-- =================================================
         3. BUILT FOR EVERY RIDER
    ================================================== -->

    <?php

    $riderRangeFile =
        __DIR__ . '/includes/sections/rider-range.php';

    if (file_exists($riderRangeFile)) {

        require_once $riderRangeFile;

    }

    ?>


    <!-- =================================================
         4. POPULAR NAPOLEON MACHINES
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/featured-bikes.php'; ?>


    <!-- =================================================
         5. PERFORMANCE & ENGINEERING
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/why-us.php'; ?>


    <!-- =================================================
         6. ADVANCED TECHNOLOGY
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/technology.php'; ?>


    <!-- =================================================
         7. RIDER TESTIMONIALS
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/testimonials.php'; ?>


    <!-- =================================================
         8. FIND A DEALER
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/dealers.php'; ?>


    <!-- =================================================
         9. MOTORCYCLE GALLERY
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/gallery.php'; ?>


    <!-- =================================================
         10. FREQUENTLY ASKED QUESTIONS
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/faq.php'; ?>


    <!-- =================================================
         11. NEWSLETTER
    ================================================== -->

    <?php require_once __DIR__ . '/includes/sections/newsletter.php'; ?>


</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<?php require_once __DIR__ . '/includes/footer.php'; ?>


<!-- =====================================================
     CHATBOT
===================================================== -->

<?php require_once __DIR__ . '/includes/sections/chatbot.php'; ?>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<?php require_once __DIR__ . '/includes/scripts.php'; ?>


</body>

</html>
