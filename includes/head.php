<?php
declare(strict_types=1);

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}

$pageTitle ??= SITE_NAME;
$pageDescription ??= SITE_DESCRIPTION;
$pageKeywords ??= SITE_KEYWORDS;
$pageAuthor ??= SITE_AUTHOR;
$pageImage ??= DEFAULT_OG_IMAGE;
$pageUrl ??= SITE_URL;

?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    http-equiv="X-UA-Compatible"
    content="IE=edge"
>

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title><?= e($pageTitle) ?></title>

<meta
    name="description"
    content="<?= e($pageDescription) ?>"
>

<meta
    name="keywords"
    content="<?= e($pageKeywords) ?>"
>

<meta
    name="author"
    content="<?= e($pageAuthor) ?>"
>

<meta
    name="robots"
    content="index,follow"
>

<meta
    name="theme-color"
    content="<?= PRIMARY_COLOR ?>"
>

<link
    rel="canonical"
    href="<?= e($pageUrl) ?>"
>

<link
    rel="icon"
    type="image/png"
    href="<?= FAVICON ?>"
>

<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
>

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet"
>

<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css"
    rel="stylesheet"
>

<link
    rel="stylesheet"
    href="<?= CSS ?>style.css?v=<?= APP_VERSION ?>"
>

<meta
    property="og:type"
    content="website"
>

<meta
    property="og:title"
    content="<?= e($pageTitle) ?>"
>

<meta
    property="og:description"
    content="<?= e($pageDescription) ?>"
>

<meta
    property="og:image"
    content="<?= e($pageImage) ?>"
>

<meta
    property="og:url"
    content="<?= e($pageUrl) ?>"
>

<meta
    property="og:site_name"
    content="<?= SITE_NAME ?>"
>

<meta
    name="twitter:card"
    content="summary_large_image"
>

<meta
    name="twitter:title"
    content="<?= e($pageTitle) ?>"
>

<meta
    name="twitter:description"
    content="<?= e($pageDescription) ?>"
>

<meta
    name="twitter:image"
    content="<?= e($pageImage) ?>"
>

</head>
