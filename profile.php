<?php


$access_token = 'Wh6XIN8Phqq3SaA2NS6c6i45ahxhXUtBxgNbM2xbLKci1TaSjKwCo27olNPcUakvGK+atjP0TamyqBuGGEXWZpVOGPduat99VgLNZSMR+rowXymWfr7ipOAfAvWtbF6Wh2n5+NY7lkrTcYPVbneJ/QdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

