<?php
declare(strict_types=1);

session_start();

$currentPage = "home";

require_once 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>

<?php include 'includes/loader.php'; ?>

<?php include 'includes/navbar.php'; ?>

<main>

<?php include 'includes/hero.php'; ?>

<?php include 'includes/featured-bikes.php'; ?>

<?php include 'includes/why-us.php'; ?>

<?php include 'includes/technology.php'; ?>

<?php include 'includes/statistics.php'; ?>

<?php include 'includes/testimonials.php'; ?>

<?php include 'includes/gallery.php'; ?>

<?php include 'includes/faq.php'; ?>

<?php include 'includes/newsletter.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/chatbot.php'; ?>

<?php include 'includes/scripts.php'; ?>

</body>
</html>
