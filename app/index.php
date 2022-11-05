<?php

$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// equal to top ^^

// openweather API
//curl_setopt_array($ch, [
//    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=2dbe71439a120047ce40a4f02931f233",
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_HEADER => true
//]);

$headers = [
    "Authorization: Client-ID pmFLrgAYVSsNPVSEBldWN_218FU2URPHEE8hOi3br7U"
];

$response_headers = [];

$header_callback = function ($ch, $header) use (&$response_headers) {
    $len = strlen($header);

    $parts = explode(":", $header, 2);

    if (count($parts) < 2) {
        return $len;
    }

    $response_headers[$parts[0]] = trim($parts[1]);

    return $len;
};

// unsplash API
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADERFUNCTION => $header_callback,
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "<br>";

print_r($response_headers);

echo "<pre>";
echo $response;
echo "<pre>";
