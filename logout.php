<?php 
session_start();
unset($_SESSION['front_user_email']);
header("location: index.php?page=login");




// Include FB config file
require_once 'FB_config.php';

session_destroy();
// Remove access token from session
//unset($_SESSION['facebook_access_token']);

// Remove user data from session
//unset($_SESSION['userData']);

// Redirect to the homepage
header("Location:./");
?>