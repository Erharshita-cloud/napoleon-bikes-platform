<?php
/**
 * Napoleon Bikes Platform
 * Common Head Section
 */
?>

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0">

<meta
http-equiv="X-UA-Compatible"
content="IE=edge">

<title>
<?= e(SITE_NAME); ?>
</title>

<meta
name="description"
content="<?= e(SITE_DESCRIPTION); ?>">

<meta
name="keywords"
content="<?= e(SITE_KEYWORDS); ?>">

<meta
name="author"
content="<?= e(SITE_AUTHOR); ?>">

<meta
name="robots"
content="index,follow">

<link
rel="canonical"
href="<?= BASE_URL ?>">

<meta
name="theme-color"
content="#dc2626">

<!-- Open Graph -->
<meta
property="og:title"
content="<?= e(SITE_NAME); ?>">
  
<meta
property="og:description"
content="<?= e(SITE_DESCRIPTION); ?>">

<meta
property="og:type"
content="website">

<meta
property="og:image"
content="<?= IMG ?>branding/logo.png">

<meta
property="og:url"
content="<?= BASE_URL ?>">

<meta
property="og:site_name"
content="<?= e(SITE_NAME); ?>">

<!-- Twitter Cards -->

<meta
name="twitter:card"
content="summary_large_image">

<meta
name="twitter:title"
content="<?= e(SITE_NAME); ?>">

<meta
name="twitter:description"
content="<?= e(SITE_DESCRIPTION); ?>">

<meta
name="twitter:image"
content="<?= IMG ?>branding/logo.png">

<!-- Favicons -->

<link
rel="icon"
type="image/png"
href="<?= IMG ?>branding/favicon.png">

<link
rel="apple-touch-icon"
href="<?= IMG ?>branding/logo-icon.png">

<!-- Google Fonts -->
<link
rel="preconnect"
href="https://fonts.googleapis.com">

<link
rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link
href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
rel="stylesheet">

<!-- Font Awesome -->

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<!-- Remix Icons -->

<link
href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
rel="stylesheet">

<!-- CSS Files -->
<link
rel="stylesheet"
href="<?= CSS ?>style.css">

<link
rel="stylesheet"
href="<?= CSS ?>animations.css">

<link
rel="stylesheet"
href="<?= CSS ?>responsive.css">

</head>
