<?php
declare(strict_types=1);


/**
 * Napoleon Bikes Platform
 * Common Helper Functions
 */


/*
|--------------------------------------------------------------------------
| Prevent Direct Access
|--------------------------------------------------------------------------
*/

if (!defined('BASE_URL')) {

    die(
        "Direct access not allowed"
    );

}



/*
|--------------------------------------------------------------------------
| Start Session
|--------------------------------------------------------------------------
*/

if(session_status() === PHP_SESSION_NONE){

    session_start();

}



/*
|--------------------------------------------------------------------------
| URL Helper
|--------------------------------------------------------------------------
*/

function url(string $path = ''): string
{

    return BASE_URL . ltrim($path,'/');

}



/*
|--------------------------------------------------------------------------
| Asset Helper
|--------------------------------------------------------------------------
*/

function asset(string $file = ''): string
{

    return ASSETS . ltrim($file,'/');

}



/*
|--------------------------------------------------------------------------
| Escape Output
|--------------------------------------------------------------------------
*/

function e($value): string
{

    return htmlspecialchars(

        (string)$value,

        ENT_QUOTES,

        'UTF-8'

    );

}



/*
|--------------------------------------------------------------------------
| Redirect
|--------------------------------------------------------------------------
*/

function redirect(string $page): never
{

    header(
        "Location: ".url($page)
    );

    exit;

}



/*
|--------------------------------------------------------------------------
| Active Navigation
|--------------------------------------------------------------------------
*/

function isActive(string $page): string
{

    $current = basename(
        $_SERVER['PHP_SELF']
    );


    return $current === $page
        ? 'active'
        : '';

}



/*
|--------------------------------------------------------------------------
| Flash Messages
|--------------------------------------------------------------------------
*/

function flash(
    string $message,
    string $type='success'
): void
{

    $_SESSION['flash']=[

        'message'=>$message,

        'type'=>$type

    ];

}



function showFlash(): void
{

    if(isset($_SESSION['flash'])){


        $flash=$_SESSION['flash'];


        echo '

        <div class="alert alert-'.e($flash['type']).'">

            '.e($flash['message']).'

        </div>

        ';


        unset($_SESSION['flash']);

    }

}



/*
|--------------------------------------------------------------------------
| Request Helpers
|--------------------------------------------------------------------------
*/

function isPost(): bool
{

    return $_SERVER['REQUEST_METHOD']==='POST';

}



/*
|--------------------------------------------------------------------------
| Required Fields Validation
|--------------------------------------------------------------------------
*/

function required(array $fields=[]): array
{

    $errors=[];


    foreach($fields as $field){


        if(empty($_POST[$field])){


            $errors[]=ucfirst($field)." is required";


        }

    }


    return $errors;

}



/*
|--------------------------------------------------------------------------
| Clean Input
|--------------------------------------------------------------------------
*/

function clean($data): string
{

    return htmlspecialchars(

        trim((string)$data),

        ENT_QUOTES,

        'UTF-8'

    );

}



/*
|--------------------------------------------------------------------------
| Booking ID Generator
|--------------------------------------------------------------------------
*/

function generateBookingID(): string
{

    return "NB-".
        random_int(100000,999999);

}



/*
|--------------------------------------------------------------------------
| Price Formatter
|--------------------------------------------------------------------------
*/

function price($amount): string
{

    return "₹".
        number_format((float)$amount);

}



/*
|--------------------------------------------------------------------------
| Current Year
|--------------------------------------------------------------------------
*/

function year(): string
{

    return date("Y");

}



/*
|--------------------------------------------------------------------------
| Authentication Helpers
|--------------------------------------------------------------------------
*/

function isLoggedIn(): bool
{

    return isset($_SESSION['user']);

}



function requireLogin(): void
{

    if(!isLoggedIn()){

        redirect('login.php');

    }

}



/*
|--------------------------------------------------------------------------
| Debug Helper
|--------------------------------------------------------------------------
*/

function dd($data): never
{

    echo "<pre>";

    print_r($data);

    echo "</pre>";

    die();

}

?>
