<?php
declare(strict_types=1);

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}

/*
|--------------------------------------------------------------------------
| Required Variables
|--------------------------------------------------------------------------
|
| $pageTitle
| $pageDescription
| $pageKeywords
| $pageImage
| $pageUrl
| $pageContent
|
*/

$pageTitle ??= SITE_NAME;
$pageDescription ??= SITE_DESCRIPTION;
$pageKeywords ??= SITE_KEYWORDS;
$pageImage ??= DEFAULT_OG_IMAGE;
$pageUrl ??= HOME_URL;

if (!isset($pageContent)) {
    throw new RuntimeException(
        'Layout requires $pageContent.'
    );
}

require ROOT_PATH . '/includes/head.php';
?>

<body>

<?php require ROOT_PATH . '/includes/navbar.php'; ?>

<main id="main-content">

    <?php require $pageContent; ?>

</main>

<?php require ROOT_PATH . '/includes/footer.php'; ?>

<?php require ROOT_PATH . '/includes/scripts.php'; ?>
