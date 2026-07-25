
<?php
declare(strict_types=1);

require_once '../includes/config.php';
require_once '../includes/functions.php';

$currentPage = 'book test ride';
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'; ?>

<link rel="stylesheet" href="<?= CSS ?>book-test-ride.css">

<body>

<?php include '../includes/navbar.php'; ?>

<!-- ========================================= -->
<!-- Hero -->
<!-- ========================================= -->

<section class="booking-hero">

<div class="container">

<div class="booking-hero-content">

<span class="section-tag">

Ride Before You Decide

</span>

<h1>

Book Your
<span>Napoleon Test Ride</span>

</h1>

<p>

Experience the thrill of Napoleon engineering.
Choose your motorcycle, preferred dealership,
date and time.

</p>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Booking Form -->
<!-- ========================================= -->

<section class="booking-section">

<div class="container">

<div class="booking-wrapper">

<div class="booking-info">

<h2>

Why Book a Test Ride?

</h2>

<div class="info-item">

<i class="ri-motorbike-line"></i>

<div>

<h3>

Ride Before Buying

</h3>

<p>

Experience comfort, handling and performance.

</p>

</div>

</div>

<div class="info-item">

<i class="ri-shield-check-line"></i>

<div>

<h3>

Certified Experts

</h3>

<p>

Our specialists guide you through every feature.

</p>

</div>

</div>

<div class="info-item">

<i class="ri-calendar-check-line"></i>

<div>

<h3>

Flexible Scheduling

</h3>

<p>

Choose the most convenient date and time.

</p>

</div>

</div>

<div class="info-item">

<i class="ri-roadster-line"></i>

<div>

<h3>

Multiple Models

</h3>

<p>

Test ride any available Napoleon motorcycle.

</p>

</div>

</div>

</div>

<!-- ========================================= -->
<!-- Form -->
<!-- ========================================= -->

<div class="booking-form-card">

<form
action="<?= BASE_URL ?>api/booking.php"
method="POST"
id="bookingForm">

<input
type="hidden"
name="source"
value="Website">

<div id="bookingMessage"></div>

<h2>

Book Your Ride

</h2>

<div class="form-grid">

<div class="form-group">

<label for="name">
Full Name
</label>

<input
type="text"
autocomplete="name"
maxlength="60"
required>

</div>

<div class="form-group">

<label for="name">
Email Address
</label>

<input
type="email"
autocomplete="email"
required>

</div>

<div class="form-group">

<label for="name">
Phone Number
</label>

<input
type="tel"
autocomplete="phone"
pattern="[0-9]{10}"
maxlength="10"
required>

</div>

<div class="form-group">

<label>

Choose Bike

</label>

<select
name="bike"
required>

<option value="">

Select Bike

</option>

<option>Napoleon Classic 350</option>
<option>Napoleon Classic 500</option>
<option>Napoleon Classic 900</option>
<option>Napoleon Street 500</option>
<option>Napoleon Street</option>
<option>Napoleon Sport</option>
<option>Napoleon Sport X</option>
<option>Napoleon Sports Edition</option>
<option>Napoleon Phantom 900</option>

</select>

</div>

<div class="form-group">

<label>

Preferred Date

</label>

<input
type="date"
name="preferred_date"
min="<?= date('Y-m-d'); ?>"
required>

</div>

<div class="form-group">

<label>

Preferred Time

</label>

<select
name="preferred_time"
required>

<option value="">

Choose Time

</option>

<option>

10:00 AM

</option>

<option>

12:00 PM

</option>

<option>

2:00 PM

</option>

<option>

4:00 PM

</option>

<option>

6:00 PM

</option>

</select>

</div>

<div class="form-group">

<label>

Preferred Dealer

</label>

<select
name="dealer"
required>

<option value="">

Select Dealer

</option>

<option>

Meerut Experience Center

</option>

<option>

Delhi Flagship Store

</option>

<option>

Noida Experience Center

</option>

</select>

</div>

<div class="form-group full-width">

<label>

Additional Message

</label>

<textarea
name="message"
rows="5"
maxlength="500"
placeholder="Tell us your preferred dealership, riding experience, or any special request..."></textarea>

</div>

</div>

<button
type="submit"
class="btn btn-primary btn-full">

Book My Test Ride

</button>

</form>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Dealership Locations -->
<!-- ========================================= -->

<section class="dealership-section">

<div class="container">

<div class="section-header">

<span class="section-tag">

Visit Our Showroom

</span>

<h2>

Find Your Nearest Napoleon Experience Center

</h2>

<p>

Our certified dealerships are ready to help you discover your perfect motorcycle.

</p>

</div>

<div class="dealership-grid">

<div class="dealer-card">

<i class="ri-map-pin-2-fill"></i>

<h3>

Meerut Experience Center

</h3>

<p>

NH-58, Delhi Road<br>
Meerut, Uttar Pradesh

</p>

<a href="tel:<?= e(COMPANY_PHONE); ?>" class="dealer-link">

<i class="ri-phone-line"></i>

<?= e(COMPANY_PHONE); ?>

</a>

</div>

<div class="dealer-card">

<i class="ri-map-pin-2-fill"></i>

<h3>

Delhi Flagship Store

</h3>

<p>

Connaught Place<br>
New Delhi

</p>

<a href="tel:<?= e(COMPANY_PHONE); ?>" class="dealer-link">

<i class="ri-phone-line"></i>

<?= e(COMPANY_PHONE); ?>

</a>

</div>

<div class="dealer-card">

<i class="ri-map-pin-2-fill"></i>

<h3>

Noida Experience Center

</h3>

<p>

Sector 62<br>
Noida, Uttar Pradesh

</p>

<a href="tel:<?= e(COMPANY_PHONE); ?>" class="dealer-link">

<i class="ri-phone-line"></i>

<?= e(COMPANY_PHONE); ?>

</a>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Process -->
<!-- ========================================= -->

<section class="ride-process">

<div class="container">

<div class="section-header">

<h2>

How It Works

</h2>

<p>

Booking your test ride takes less than a minute.

</p>

</div>

<div class="process-grid">

<div class="process-card">

<div class="step-number">

01

</div>

<h3>

Choose Your Bike

</h3>

<p>

Select your preferred Napoleon motorcycle model.

</p>

</div>

<div class="process-card">

<div class="step-number">

02

</div>

<h3>

Schedule

</h3>

<p>

Choose your preferred date and time.

</p>

</div>

<div class="process-card">

<div class="step-number">

03

</div>

<h3>

Confirmation

</h3>

<p>

Our representative will contact you shortly.

</p>

</div>

<div class="process-card">

<div class="step-number">

04

</div>

<h3>

Enjoy The Ride

</h3>

<p>

Experience Napoleon performance first-hand.

</p>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- CTA -->
<!-- ========================================= -->

<section class="booking-cta">

<div class="container">

<div class="cta-card">

<h2>

Still Have Questions?

</h2>

<p>

Our motorcycle specialists are available to guide you through every model and financing option.

</p>

<div class="cta-buttons">

<a
href="tel:<?= e(COMPANY_PHONE); ?>"
class="btn btn-primary">

<i class="ri-phone-line"></i>

Call Us

</a>

<a
href="<?= BASE_URL ?>contact/"
class="btn btn-outline">

Contact Team

</a>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- FAQ -->
<!-- ========================================= -->

<?php include '../includes/sections/faq.php'; ?>

<!-- ========================================= -->
<!-- Footer -->
<!-- ========================================= -->

<?php include '../includes/footer.php'; ?>

<?php include '../includes/scripts.php'; ?>

<script src="<?= JS ?>book-test-ride.js"></script>

</body>
</html>
