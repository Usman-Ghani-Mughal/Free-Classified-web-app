<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('264506834827-voqs85vcb9ml0t1b5urv6eirbarb8dnh.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('0CmeXM9dZPHDQ2t58oHfupdn');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Assabuur/index.php?page=login');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>  