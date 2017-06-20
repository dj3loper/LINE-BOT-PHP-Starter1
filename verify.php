<?php
$access_token = 'WEZON8jqkRtpQrQBMbuvgh0fy8BO8mPDJWQYY1DUex9olj26VVRojpCNmCo9gNV6ASSriB7mo4+bUbw3GOF2NrTIrJbGECXMKujNggRiqOP92hCLqy+0C41WtCoSHGZQmSyDMSnP8+/8Jeu3st3KMgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
