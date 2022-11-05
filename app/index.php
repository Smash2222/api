<?php

$ch = curl_init();

$headers = [
    "Authorization: Bearer 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",
//    "User-Agent : Smash2222" here or in const
];

$payload = json_encode([
    "name" => "Created from API",
    "description" => "an example API-created repo"
]);

// github API
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "Smash2222",
//    CURLOPT_CUSTOMREQUEST => "POST",
//    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "<br>";

echo "<pre>";
echo $response;
echo "<pre>";
