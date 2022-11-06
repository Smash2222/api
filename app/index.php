<?php

//require __DIR__ . "../vendor/autoload.php";

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/917287255448d1e018306be7be7c0968",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => "Smash2222",
]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

echo '<pre>';
print_r($data);
echo '<pre>';

//foreach ($data as $gist) {
//
//    echo $gist['id'], " - ", $gist['description'], '<br>';
//}