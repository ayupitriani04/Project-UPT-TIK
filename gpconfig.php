<?php
session_start();

// Include Librari Google Client (API)
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';

$client_id = '968270662835-hdpooqaooj815uc8ckvo1r1vsom2bf3p.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'http://localhost/undiksha/google.php'; // Callback URL

// Call Google API
$gclient = new Google_Client();
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login

$google_oauthv2 = new Google_Oauth2Service($gclient);
?>
