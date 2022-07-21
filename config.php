<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('361991129165-slmtj321kjllniksgto5sahmr19bb885.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/4Wheeler/php%20conversion/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>