<?php
/**
 * Napoleon Bikes Platform
 * Common Helper Functions
 */


// Prevent direct access
if (!defined('BASE_URL')) {
    die("Direct access not allowed");
}


/**
 * Generate Website URL
 *
 * Usage:
 * url('booking.php')
 */
function url($path = '')
{
    return BASE_URL . ltrim($path, '/');
}


/**
 * Generate Asset URL
 *
 * Usage:
 * asset('css/style.css')
 */
function asset($file = '')
{
    return BASE_URL . 'assets/' . ltrim($file, '/');
}


/**
 * Secure Output Escape
 *
 * Prevent XSS attacks
 */
function e($value)
{
    return htmlspecialchars(
        $value ?? '',
        ENT_QUOTES,
        'UTF-8'
    );
}


/**
 * Redirect Function
 *
 * Usage:
 * redirect('login.php');
 */
function redirect($page)
{
    header("Location: " . url($page));
    exit;
}


/**
 * Check Current Page
 *
 * Used for navbar active menu
 */
function isActive($page)
{
    $current = basename($_SERVER['PHP_SELF']);

    return ($current == $page) ? 'active' : '';
}


/**
 * Create Flash Message
 *
 * Usage:
 * flash("Booking successful","success");
 */
function flash($message, $type = "success")
{
    $_SESSION['flash'] = [
        "message" => $message,
        "type" => $type
    ];
}


/**
 * Display Flash Message
 */
function showFlash()
{
    if(isset($_SESSION['flash'])):

        $flash = $_SESSION['flash'];

        echo '
        <div class="alert alert-'.$flash['type'].'">
            '.$flash['message'].'
        </div>
        ';

        unset($_SESSION['flash']);

    endif;
}


/**
 * Check Request Method
 *
 * Usage:
 * if(isPost()){}
 */
function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}


/**
 * Check Empty Input
 */
function required($fields = [])
{
    $errors = [];

    foreach($fields as $field)
    {
        if(empty($_POST[$field]))
        {
            $errors[] = ucfirst($field)." is required";
        }
    }

    return $errors;
}


/**
 * Sanitize Input
 */
function clean($data)
{
    return trim(
        htmlspecialchars(
            $data,
            ENT_QUOTES,
            'UTF-8'
        )
    );
}


/**
 * Generate Random Booking ID
 *
 * Example:
 * NB-582931
 */
function generateBookingID()
{
    return "NB-" . rand(100000,999999);
}


/**
 * Format Price
 */
function price($amount)
{
    return "₹" . number_format($amount);
}


/**
 * Get Current Year
 */
function year()
{
    return date("Y");
}


/**
 * Check User Login
 */
function isLoggedIn()
{
    return isset($_SESSION['user']);
}


/**
 * Require Login
 */
function requireLogin()
{
    if(!isLoggedIn())
    {
        redirect('login.php');
    }
}


/**
 * Debug Function
 *
 * Development purpose
 */
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}

?>
