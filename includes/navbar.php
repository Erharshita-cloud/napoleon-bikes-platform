<?php
/**
 * ---------------------------------------------------------
 * Napoleon Bikes Platform
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


<!-- ================================================= -->
<!-- Logo -->
<!-- ================================================= -->


<a 
href="<?= url(''); ?>" 
class="logo"
aria-label="<?= e(SITE_NAME); ?> Home">


<img

src="<?= IMG ?>logo.png"

alt="<?= e(SITE_NAME); ?> Logo"

width="52"

height="52"

>


<div class="logo-text">


<h2>

<?= e(SITE_NAME); ?>

</h2>


<span>

<?= e(SITE_TAGLINE); ?>

</span>


</div>


</a>


<!-- ================================================= -->
<!-- Desktop Navigation -->
<!-- ================================================= -->


<ul class="nav-menu">


<?php foreach($navigation as $name=>$item): ?>


<li>


<a

href="<?= e($item['url']); ?>"

class="<?= strtolower($name)==$currentPage ? 'active':''; ?>"

>


<?= e($name); ?>


</a>


</li>


<?php endforeach; ?>


</ul>


<!-- ================================================= -->
<!-- Right Actions -->
<!-- ================================================= -->


<div class="nav-actions">



<button

class="icon-btn"

id="searchBtn"

aria-label="Search"

>

<i class="ri-search-line"></i>

</button>




<button

class="icon-btn"

id="themeToggle"

aria-label="Toggle Theme"

>

<i class="ri-moon-line"></i>

</button>




<a

href="#"

class="login-btn"

>

<i class="ri-user-3-line"></i>


<span>

Login

</span>


</a>





<a

href="<?= url('booking/'); ?>"

class="btn btn-primary"

>

Book Test Ride

</a>





<button

id="mobileMenuBtn"

class="mobile-menu-btn"

aria-label="Open Menu"

>

<i class="ri-menu-3-line"></i>


</button>



</div>


</nav>


</div>


</header>


<!-- ================================================= -->
<!-- Search Overlay -->
<!-- ================================================= -->


<div id="searchOverlay" class="search-overlay">


<div class="search-box">


<button

id="closeSearch"

class="close-search"

aria-label="Close Search"

>

<i class="ri-close-line"></i>


</button>




<form>


<input

type="search"

placeholder="Search motorcycles..."

aria-label="Search"

>


<button type="submit">


<i class="ri-search-line"></i>


</button>


</form>



</div>


</div>


<!-- ================================================= -->
<!-- Mobile Navigation -->
<!-- ================================================= -->


<div id="mobileMenu" class="mobile-menu">


<div class="mobile-menu-overlay"></div>



<aside class="mobile-menu-content">



<div class="mobile-menu-header">



<a

href="<?= url(''); ?>"

class="mobile-logo"

>



<img

src="<?= IMG ?>logo.png"

alt="<?= e(SITE_NAME); ?>"

width="45"

height="45"

>



<div>


<h3>

<?= e(SITE_NAME); ?>

</h3>


<span>

<?= e(SITE_TAGLINE); ?>

</span>


</div>


</a>





<button

id="closeMobileMenu"

class="icon-btn"

aria-label="Close Menu"

>


<i class="ri-close-large-line"></i>


</button>



</div>


<!-- Mobile Navigation -->


<nav class="mobile-navigation">



<?php foreach($navigation as $name=>$item): ?>


<a

href="<?= e($item['url']); ?>"

class="<?= strtolower($name)==$currentPage ? 'active':''; ?>"

>


<i class="<?= e($item['icon']); ?>"></i>



<span>

<?= e($name); ?>

</span>


</a>



<?php endforeach; ?>


</nav>


<!-- Quick Actions -->


<div class="mobile-actions">


<a

href="<?= url('booking/'); ?>"

class="btn btn-primary btn-full"

>

Book Test Ride

</a>



<a

href="tel:<?= e(COMPANY_PHONE); ?>"

class="btn btn-outline btn-full"

>


<i class="ri-phone-line"></i>

Call Us


</a>




<a

href="mailto:<?= e(COMPANY_EMAIL); ?>"

class="btn btn-outline btn-full"

>


<i class="ri-mail-line"></i>

Email Us


</a>


</div>


<!-- Contact Information -->


<div class="mobile-contact">


<h4>

Visit Us

</h4>


<p>

<?= e(COMPANY_ADDRESS); ?>

</p>


<p>

<?= e(COMPANY_PHONE); ?>

</p>


<p>

<?= e(COMPANY_EMAIL); ?>

</p>


</div>



<!-- Social Links -->


<div class="mobile-social">


<a

href="<?= e($social['facebook']); ?>"

target="_blank"

aria-label="Facebook"

>

<i class="ri-facebook-fill"></i>

</a>



<a

href="<?= e($social['instagram']); ?>"

target="_blank"

aria-label="Instagram"

>

<i class="ri-instagram-line"></i>

</a>




<a

href="<?= e($social['linkedin']); ?>"

target="_blank"

aria-label="LinkedIn"

>

<i class="ri-linkedin-box-fill"></i>

</a>




<a

href="<?= e($social['youtube']); ?>"

target="_blank"

aria-label="YouTube"

>

<i class="ri-youtube-fill"></i>

</a>



</div>



<!-- Mobile Footer -->


<div class="mobile-footer">


<p>

© <?= year(); ?>

<?= e(SITE_NAME); ?>

</p>


<small>

<?= e(SITE_TAGLINE); ?>

</small>


</div>



</aside>


</div>


<!-- ================================================= -->
<!-- Scroll To Top -->
<!-- ================================================= -->


<button

id="scrollTop"

class="scroll-top"

aria-label="Scroll To Top"

>

<i class="ri-arrow-up-line"></i>


</button>
