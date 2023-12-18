<!DOCTYPE html>
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

$logged_in = true;      


$user = unserialize($_SESSION['user']);            


$user->account_page(); 

?>
<head>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <style>

    img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }

    .navbar {
  background-color: #333;
  overflow: hidden;
  text-align: center;
  position: fixed;
  bottom: 0;
  width: 100%;
  left: 0;
  right: 0;
  margin-left: auto;
  margin-right: auto;
}

.navbar a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 28px;
}


@media (max-width: 767px) {
  .navbar a {
    padding: 10px 30px;
  }
}

/* Change the color of links on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.navbar a.active {
  background-color: #04AA6D;
  color: white;
}

a {
    color: black;
}
.post {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  padding: 20px;
  margin-bottom: 20px;
  text-align: center;
}
.title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 12px;
  background-color: lightgrey;
}

    </style>




