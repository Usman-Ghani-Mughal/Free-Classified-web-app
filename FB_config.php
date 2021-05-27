<?php

require_once __DIR__ . '/Facebook/autoload.php';

//echo '<script>alert("FB Config is running")</script>';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;


$redirectUrl   = 'http://assabuur.com/index.php?page=login'; //Callback URL
//$permissions = array('email');  //Optional permissions

$fb = new Facebook([
  'app_id' => '', // Replace {app-id} with your app id
  'app_secret' => '',// Replace with your secret key
  'default_graph_version' => 'v9.0',
  ]);


$helper = $fb->getRedirectLoginHelper();

if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}

try {
	if(isset($_SESSION['facebook_access_token'])) {
		$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
}catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK error: ' . $e->getMessage();
  exit;
}
?>