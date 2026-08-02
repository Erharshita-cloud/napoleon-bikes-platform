<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform V2
| Global Helper Functions
|--------------------------------------------------------------------------
*/

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}

/*
|--------------------------------------------------------------------------
| URL Helpers
|--------------------------------------------------------------------------
*/

function url(string $path = ''): string
{
    return BASE_URL . ltrim($path, '/');
}

function asset(string $path = ''): string
{
    return ASSETS . ltrim($path, '/');
}

/*
|--------------------------------------------------------------------------
| Output Helpers
|--------------------------------------------------------------------------
*/

function e(
    string|int|float|null $value
): string {

    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}

/*
|--------------------------------------------------------------------------
| Redirect
|--------------------------------------------------------------------------
*/

function redirect(string $location): never
{
    header(
        'Location: ' . url($location)
    );

    exit;
}

/*
|--------------------------------------------------------------------------
| Request Helpers
|--------------------------------------------------------------------------
*/

function isPost(): bool
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function isGet(): bool
{
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

/*
|--------------------------------------------------------------------------
| Input Helpers
|--------------------------------------------------------------------------
*/

function old(
    string $key,
    mixed $default = ''
): mixed {

    return $_POST[$key] ?? $default;
}

function clean(
    mixed $value
): string {

    return trim(
        htmlspecialchars(
            (string) $value,
            ENT_QUOTES,
            'UTF-8'
        )
    );
}

/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

function required(array $fields): array
{
    $errors = [];

    foreach ($fields as $field) {

        if (
            !isset($_POST[$field]) ||
            trim((string) $_POST[$field]) === ''
        ) {
            $errors[$field] = ucfirst($field) . ' is required.';
        }

    }

    return $errors;
}

/*
|--------------------------------------------------------------------------
| Flash Messages
|--------------------------------------------------------------------------
*/

function flash(
    string $key,
    string $message
): void {

    $_SESSION['flash'][$key] = $message;
}

function hasFlash(
    string $key
): bool {

    return isset($_SESSION['flash'][$key]);
}

function getFlash(
    string $key
): ?string {

    if (!hasFlash($key)) {
        return null;
    }

    $message = $_SESSION['flash'][$key];

    unset($_SESSION['flash'][$key]);

    return $message;
}

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

function isLoggedIn(): bool
{
    return isset($_SESSION['user']);
}

function requireLogin(): void
{
    if (!isLoggedIn()) {

        redirect('login/');

    }
}

/*
|--------------------------------------------------------------------------
| Active Navigation
|--------------------------------------------------------------------------
*/

function active(string $url): string
{
    $current = strtok(
        $_SERVER['REQUEST_URI'],
        '?'
    );

    return rtrim($current, '/') === rtrim($url, '/')
        ? 'active'
        : '';
}

/*
|--------------------------------------------------------------------------
| Price Formatter
|--------------------------------------------------------------------------
*/

function price(
    float|int $amount
): string {

    return '₹' . number_format(
        (float) $amount,
        0
    );
}

/*
|--------------------------------------------------------------------------
| Date Helpers
|--------------------------------------------------------------------------
*/

function currentYear(): string
{
    return date('Y');
}

function now(
    string $format = 'Y-m-d H:i:s'
): string {

    return date($format);
}

/*
|--------------------------------------------------------------------------
| Booking ID
|--------------------------------------------------------------------------
*/

function bookingId(): string
{
    return sprintf(
        'NB-%s%s',
        date('ymd'),
        random_int(
            10000,
            99999
        )
    );
}

/*
|--------------------------------------------------------------------------
| CSRF Protection
|--------------------------------------------------------------------------
*/

function csrfToken(): string
{
    if (
        empty($_SESSION[CSRF_TOKEN_NAME])
    ) {

        $_SESSION[CSRF_TOKEN_NAME] =
            bin2hex(
                random_bytes(32)
            );

    }

    return $_SESSION[CSRF_TOKEN_NAME];
}

function csrfField(): string
{
    return sprintf(
        '<input type="hidden" name="%s" value="%s">',
        CSRF_TOKEN_NAME,
        csrfToken()
    );
}

function verifyCsrf(): bool
{
    return hash_equals(
        $_SESSION[CSRF_TOKEN_NAME] ?? '',
        $_POST[CSRF_TOKEN_NAME] ?? ''
    );
}

/*
|--------------------------------------------------------------------------
| Debug Helpers
|--------------------------------------------------------------------------
*/

function dd(mixed $value): never
{
    echo '<pre>';

    var_dump($value);

    echo '</pre>';

    exit;
}
