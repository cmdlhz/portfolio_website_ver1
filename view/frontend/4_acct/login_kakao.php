<?php

/*
    Get the code from kakao server
*/
$authorize_code = $_GET['code'];

/*
    POST the code to get an access token
*/
$ch = curl_init(); // we init curl by passing the url

curl_setopt($ch, CURLOPT_URL,"https://kauth.kakao.com/oauth/token");
curl_setopt($ch, CURLOPT_POST, true); // to send a POST request
curl_setopt($ch, CURLOPT_POSTFIELDS,
"grant_type=authorization_code&client_id=948c4b7cb83e566ada606d8298a09ff0&redirect_uri=http://localhost:8888/Software_Dev/GitHub/portfolio_website/index.php?action=login_kakao&code=$authorize_code"); // indicate the data to send
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
//print_r($ch);
$server_output = curl_exec ($ch); // to perform the curl session
curl_close ($ch); // to close the curl session

$server_output 	=  json_decode($server_output, true);
$access_token 	=  $server_output['access_token'];

/* 
    POST the access token to get user info
*/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://kapi.kakao.com/v1/user/me");
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer '.$access_token
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
$server_output =  json_decode($server_output, true);

curl_close ($ch);
echo "<pre>";
print_r($server_output);
echo "</pre>";
$kakao_id	        = $server_output['id'];
$kakao_nickname 	= $server_output['properties']['nickname'];
$kakao_profile_image    = $server_output['properties']['profile_image'];
$kakao_thumbnail_image 	= $server_output['properties']['thumbnail_image'];
echo $kakao_id . '<br>';
echo $kakao_nickname . '<br>';
echo "<img src='$kakao_thumbnail_image' ?>";
