<?php
session_start();

include "models/db.php";
include "models/user.php";



$logged_in = false;
if ( !isset($_SESSION['user'])) {
    //
    header('Location: http://localhost/loginSystem/sign_up.php');
    //
}

echo 'hello';

$logged_in = true;      


$user = unserialize($_SESSION['user']);            


$user->display_favourite_posts();            



