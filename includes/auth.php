<?php

require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_AnalyticsService.php';
session_start();

$client = new Google_Client();
$client -> setApplicationName("Google Analytics PHP Starter Application");

session_start();

$client -> setClientId('621520499808.apps.googleusercontent.com');
$client -> setClientSecret('8KEpt7InZeZbuz_AV8K9zTmU');
$client -> setRedirectUri('http://statistics.submarinechannel.com');
$client -> setDeveloperKey('AIzaSyDf5qsk7OC_5DjH6bRI3wWt-6rWJorQw7s');
$service = new Google_AnalyticsService($client);

if (isset($_GET['logout'])) {
	unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
	$client -> authenticate();
	$_SESSION['token'] = $client -> getAccessToken();
	$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
	header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$client -> setAccessToken($_SESSION['token']);
}

if (!$client -> getAccessToken()) {
	$authUrl = $client -> createAuthUrl();
	print "<a class='login' href='$authUrl'>Connect Me!</a></body><html>";
	exit;
}

?>