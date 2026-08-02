<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform V2
| Global Helper Functions
|--------------------------------------------------------------------------
|
| This file is used by every page.
| It is loaded after config.php.
|
| Homepage
| Bikes
| Pricing
| Contact
| Book Test Ride
| Thank You
|
|--------------------------------------------------------------------------
*/

if (!defined('BASE_URL')) {
    exit('Configuration not loaded.');
}

/*
|--------------------------------------------------------------------------
| URL Helpers
|--------------------------------------------------------------------------
*/

/**
 * Generate project URL
 *
 * Example:
 * url()
 * url('bikes/')
 * url('pricing/')
 */
function url(string $path = ''): string
{
    return BASE_URL . ltrim($path, '/');
}

/**
 * Generate asset URL
 *
 * asset('css/style.css')
 */
function asset(string $path = ''): string
{
    return ASSETS . ltrim($path, '/');
}

/**
 * CSS helper
 */
function css(string $file): string
{
    return CSS . ltrim($file, '/');
}

/**
 * JS helper
 */
function js(string $file): string
{
    return JS . ltrim($file, '/');
}

/**
 * Image helper
 */
function img(string $file): string
{
    return IMG . ltrim($file, '/');
}

/**
 * Bike image helper
 */
function bikeImage(string $file): string
{
    return BIKES_IMG . ltrim($file, '/');
}

/**
 * Gallery helper
 */
function galleryImage(string $file): string
{
    return GALLERY_IMG . ltrim($file, '/');
}

/**
 * Branding helper
 */
function brandingImage(string $file): string
{
    return BRANDING_IMG . ltrim($file, '/');
}

/**
 * Testimonial helper
 */
function testimonialImage(string $file): string
{
    return TESTIMONIAL_IMG . ltrim($file, '/');
}

/**
 * Video helper
 */
function video(string $file): string
{
    return VIDEOS . ltrim($file, '/');
}

/*
|--------------------------------------------------------------------------
| Output Escaping
|--------------------------------------------------------------------------
*/

/**
 * Safe HTML output
 */
function e(
    mixed $value
): string {

    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );

}

/**
 * Attribute output
 */
function attr(
    mixed $value
): string {

    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );

}

/*
|--------------------------------------------------------------------------
| Redirect Helpers
|--------------------------------------------------------------------------
*/

function redirect(
    string $location
): never {

    if (
        str_starts_with($location, 'http')
    ) {

        header(
            "Location: {$location}"
        );

    } else {

        header(
            'Location: ' . url($location)
        );

    }

    exit;

}

/*
|--------------------------------------------------------------------------
| Current Request
|--------------------------------------------------------------------------
*/

/**
 * Current request URI
 */
function currentUri(): string
{
    return parse_url(
        $_SERVER['REQUEST_URI'] ?? '/',
        PHP_URL_PATH
    ) ?? '/';
}

/**
 * Current script
 */
function currentScript(): string
{
    return basename(
        $_SERVER['SCRIPT_NAME'] ?? ''
    );
}

/**
 * Current directory
 *
 * Example:
 * bikes
 * pricing
 * contact
 */
function currentDirectory(): string
{
    $path = trim(
        dirname($_SERVER['SCRIPT_NAME'] ?? ''),
        '/'
    );

    $segments = explode('/', $path);

    return end($segments) ?: '';
}

/*
|--------------------------------------------------------------------------
| Navigation Helpers
|--------------------------------------------------------------------------
*/

/**
 * Homepage active
 */
function isHome(): bool
{
    return currentScript() === 'index.php'
        && currentDirectory() !== 'bikes'
        && currentDirectory() !== 'pricing'
        && currentDirectory() !== 'contact'
        && currentDirectory() !== 'book-test-ride';
}

/**
 * Generic active state
 *
 * Usage:
 * isActive('bikes')
 * isActive('pricing')
 */
function isActive(
    string $page
): string {

    if ($page === 'home') {
        return isHome() ? 'active' : '';
    }

    return currentDirectory() === trim($page, '/')
        ? 'active'
        : '';

}
/*
|--------------------------------------------------------------------------
| Request Helpers
|--------------------------------------------------------------------------
*/

/**
 * Check request method
 */
function requestMethod(): string
{
    return strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
}

function isGet(): bool
{
    return requestMethod() === 'GET';
}

function isPost(): bool
{
    return requestMethod() === 'POST';
}

function isAjax(): bool
{
    return strtolower(
        $_SERVER['HTTP_X_REQUESTED_WITH'] ?? ''
    ) === 'xmlhttprequest';
}

/*
|--------------------------------------------------------------------------
| Input Helpers
|--------------------------------------------------------------------------
*/

function input(
    string $key,
    mixed $default = null
): mixed {

    return $_POST[$key] ?? $_GET[$key] ?? $default;

}

function old(
    string $key,
    mixed $default = ''
): mixed {

    return $_POST[$key] ?? $default;

}

function has(
    string $key
): bool {

    return isset($_POST[$key]) || isset($_GET[$key]);

}

/*
|--------------------------------------------------------------------------
| Sanitization
|--------------------------------------------------------------------------
*/

function clean(
    mixed $value
): string {

    return trim(
        strip_tags(
            (string)$value
        )
    );

}

/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

function validateRequired(
    array $data,
    array $fields
): array {

    $errors = [];

    foreach ($fields as $field) {

        if (
            !isset($data[$field]) ||
            trim((string)$data[$field]) === ''
        ) {

            $errors[$field] =
                ucfirst(
                    str_replace('_', ' ', $field)
                ) . ' is required.';

        }

    }

    return $errors;

}

function validateEmail(
    string $email
): bool {

    return filter_var(
        $email,
        FILTER_VALIDATE_EMAIL
    ) !== false;

}

function validatePhone(
    string $phone
): bool {

    return (bool)preg_match(
        '/^[0-9+\-\s]{8,20}$/',
        $phone
    );

}

function validateLength(
    string $value,
    int $min,
    int $max
): bool {

    $length = mb_strlen(trim($value));

    return
        $length >= $min &&
        $length <= $max;

}

/*
|--------------------------------------------------------------------------
| Flash Messages
|--------------------------------------------------------------------------
*/

function flash(
    string $type,
    string $message
): void {

    $_SESSION['flash'][] = [

        'type' => $type,

        'message' => $message

    ];

}

function hasFlash(): bool
{
    return !empty($_SESSION['flash']);
}

function getFlash(): array
{

    $messages = $_SESSION['flash'] ?? [];

    unset($_SESSION['flash']);

    return $messages;

}

/*
|--------------------------------------------------------------------------
| Success Helpers
|--------------------------------------------------------------------------
*/

function success(
    string $message
): void {

    flash(
        'success',
        $message
    );

}

function error(
    string $message
): void {

    flash(
        'danger',
        $message
    );

}

function warning(
    string $message
): void {

    flash(
        'warning',
        $message
    );

}

function info(
    string $message
): void {

    flash(
        'info',
        $message
    );

}

/*
|--------------------------------------------------------------------------
| Session Helpers
|--------------------------------------------------------------------------
*/

function session(
    string $key,
    mixed $default = null
): mixed {

    return $_SESSION[$key] ?? $default;

}

function sessionHas(
    string $key
): bool {

    return isset($_SESSION[$key]);

}

function sessionPut(
    string $key,
    mixed $value
): void {

    $_SESSION[$key] = $value;

}

function sessionForget(
    string $key
): void {

    unset($_SESSION[$key]);

}

/*
|--------------------------------------------------------------------------
| String Helpers
|--------------------------------------------------------------------------
*/

function slug(
    string $text
): string {

    $text = strtolower($text);

    $text = preg_replace(
        '/[^a-z0-9]+/',
        '-',
        $text
    );

    return trim(
        $text,
        '-'
    );

}

function limit(
    string $text,
    int $length = 120
): string {

    if (
        mb_strlen($text) <= $length
    ) {

        return $text;

    }

    return
        mb_substr(
            $text,
            0,
            $length
        ) . '...';

}
