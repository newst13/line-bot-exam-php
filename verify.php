<?php
$access_token = 'WZ23WYCpJIq49y0+g3V7vI2tD1YT7mJS5B5YeH/C1wLp2FkTTrsFWYFzqN487+oHGK+atjP0TamyqBuGGEXWZpVOGPduat99VgLNZSMR+rr8C4CaKv41dnS4Adnm/p0QWXbLxwIVVm4VRL8QpqYNYQdB04t89/1O/w1cDnyilFU=   ';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
