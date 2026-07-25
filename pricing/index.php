<?php
declare(strict_types=1);

require_once '../includes/config.php';
require_once '../includes/functions.php';

$currentPage = 'pricing';
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../includes/head.php'; ?>

<link rel="stylesheet" href="<?= CSS ?>pricing.css">

<body>

<?php include '../includes/navbar.php'; ?>

<!-- ========================= -->
<!-- Hero -->
<!-- ========================= -->

<section class="pricing-hero">

<div class="container">

<div class="hero-content">

<span class="section-tag">
Pricing & Finance
</span>

<h1>
Own Your
<span>Napoleon Bike</span>
Today
</h1>

<p>
Transparent pricing, flexible finance options, and premium motorcycles engineered for every journey.
</p>

<a href="<?= BOOK_TEST_RIDE_URL ?>" class="btn btn-primary">
Book Test Ride
</a>

</div>

</div>

</section>

<!-- ========================= -->
<!-- Pricing Cards -->
<!-- ========================= -->

<section class="pricing-section">

<div class="container">

<div class="section-header">

<h2>Choose Your Machine</h2>

<p>
Every Napoleon Bike is crafted with performance, reliability and premium engineering.
</p>

</div>

<div class="pricing-grid">

<!-- Bike 1 -->

<div class="pricing-card">

<div class="bike-image">

<img
src="<?= IMG ?>bikes/napoleon-classic-350.webp"
alt="Napoleon Classic 350">

</div>

<div class="bike-content">

<h3>Napoleon Classic 350</h3>

<p>
Perfect for city rides and weekend adventures.
</p>

<div class="bike-price">

₹1,89,999

</div>

<ul>

<li><i class="ri-check-line"></i>349cc Engine</li>

<li><i class="ri-check-line"></i>ABS Braking</li>

<li><i class="ri-check-line"></i>LED Lighting</li>

<li><i class="ri-check-line"></i>Bluetooth Console</li>

</ul>

<button
class="btn btn-primary bookBtn"
data-bike="Napoleon Classic 350">

Book Test Ride

</button>

</div>

</div>

<!-- Bike 2 -->

<div class="pricing-card featured">

<span class="badge">

Most Popular

</span>

<div class="bike-image">

<img
src="<?= IMG ?>bikes/napoleon-street-500.webp"
alt="Napoleon Street 500">

</div>

<div class="bike-content">

<h3>Napoleon Street 500</h3>

<p>
High performance street motorcycle for everyday thrill.
</p>

<div class="bike-price">

₹2,49,999

</div>

<ul>

<li><i class="ri-check-line"></i>500cc Engine</li>

<li><i class="ri-check-line"></i>Dual Channel ABS</li>

<li><i class="ri-check-line"></i>Ride Modes</li>

<li><i class="ri-check-line"></i>TFT Display</li>

</ul>

<button
class="btn btn-primary bookBtn"
data-bike="Napoleon Street 500">

Book Test Ride

</button>

</div>

</div>

<!-- Bike 3 -->

<div class="pricing-card">

<div class="bike-image">

<img
src="<?= IMG ?>bikes/napoleon-adventure-x.webp"
alt="Napoleon Adventure X">

</div>

<div class="bike-content">

<h3>Napoleon Adventure X</h3>

<p>
Built for long-distance touring and off-road adventures.
</p>

<div class="bike-price">

₹3,19,999

</div>

<ul>

<li><i class="ri-check-line"></i>650cc Engine</li>

<li><i class="ri-check-line"></i>Traction Control</li>

<li><i class="ri-check-line"></i>Touring Windshield</li>

<li><i class="ri-check-line"></i>Navigation Ready</li>

</ul>

<button
class="btn btn-primary bookBtn"
data-bike="Napoleon Adventure X">

Book Test Ride

</button>

</div>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Finance Section -->
<!-- ========================================= -->

<section class="finance-section">

<div class="container">

<div class="section-header">

<span class="section-tag">
Flexible Finance
</span>

<h2>
Easy EMI Options
</h2>

<p>
Ride your dream motorcycle today with affordable monthly installments.
</p>

</div>

<div class="finance-grid">

<div class="finance-card">

<i class="ri-bank-card-line"></i>

<h3>
Starting EMI
</h3>

<h2>
₹4,999/mo
</h2>

<p>
Flexible tenure from 12–60 months with attractive interest rates.
</p>

</div>

<div class="finance-card">

<i class="ri-percent-line"></i>

<h3>
Interest Rate
</h3>

<h2>
7.99%
</h2>

<p>
Competitive financing available through our trusted banking partners.
</p>

</div>

<div class="finance-card">

<i class="ri-shield-check-line"></i>

<h3>
Warranty
</h3>

<h2>
5 Years
</h2>

<p>
Comprehensive manufacturer warranty with nationwide service support.
</p>

</div>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Comparison Table -->
<!-- ========================================= -->

<section class="comparison-section">

<div class="container">

<div class="section-header">

<h2>
Compare Models
</h2>

<p>
Find the perfect Napoleon motorcycle for your riding style.
</p>

</div>

<div class="comparison-table">

<table>

<thead>

<tr>

<th>Feature</th>

<th>Classic 350</th>

<th>Street 500</th>

<th>Adventure X</th>

</tr>

</thead>

<tbody>

<tr>

<td>Engine</td>

<td>349cc</td>

<td>500cc</td>

<td>650cc</td>

</tr>

<tr>

<td>Power</td>

<td>20 HP</td>

<td>45 HP</td>

<td>65 HP</td>

</tr>

<tr>

<td>Mileage</td>

<td>35 km/l</td>

<td>28 km/l</td>

<td>24 km/l</td>

</tr>

<tr>

<td>ABS</td>

<td>Dual Channel</td>

<td>Dual Channel</td>

<td>Cornering ABS</td>

</tr>

<tr>

<td>Bluetooth</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>

</tr>

<tr>

<td>Navigation</td>

<td>No</td>

<td>Optional</td>

<td>Included</td>

</tr>

<tr>

<td>Warranty</td>

<td>5 Years</td>

<td>5 Years</td>

<td>5 Years</td>

</tr>

</tbody>

</table>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- Booking Popup -->
<!-- ========================================= -->

<div class="booking-modal" id="bookingModal">

<div class="booking-modal-overlay"></div>

<div class="booking-modal-content">

<button
class="close-modal"
id="closeBookingModal">

<i class="ri-close-line"></i>

</button>

<h2>

Book Your Test Ride

</h2>

<p>

Fill in your details and our team will contact you shortly.

</p>

<form
action="<?= BASE_URL ?>api/booking.php"
method="POST">

<input
type="hidden"
name="bike"
id="selectedBike">

<div class="form-group">

<input
type="text"
name="name"
placeholder="Full Name"
required>

</div>

<div class="form-group">

<input
type="email"
name="email"
placeholder="Email Address"
required>

</div>

<div class="form-group">

<input
type="tel"
name="phone"
placeholder="Phone Number"
required>

</div>

<div class="form-group">

<input
type="date"
name="preferred_date"
required>

</div>

<div class="form-group">

<select
name="preferred_time"
required>

<option value="">

Preferred Time

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

<button
type="submit"
class="btn btn-primary btn-full">

Confirm Booking

</button>

</form>

</div>

</div>

<!-- ========================================= -->
<!-- CTA -->
<!-- ========================================= -->

<section class="pricing-cta">

<div class="container">

<div class="cta-box">

<h2>

Ready To Ride?

</h2>

<p>

Experience Napoleon engineering firsthand with a complimentary test ride.

</p>

<a
href="<?= BOOK_TEST_RIDE_URL ?>"
class="btn btn-primary">

Book Test Ride

</a>

</div>

</div>

</section>

<!-- ========================================= -->
<!-- FAQ -->
<!-- ========================================= -->

<?php include '../includes/sections/faq.php'; ?>

<?php include '../includes/footer.php'; ?>

<?php include '../includes/scripts.php'; ?>

<script src="<?= JS ?>pricing.js"></script>

</body>

</html>
