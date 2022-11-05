<?php

$ch = curl_init();

$headers = [
    "Authorization: Bearer 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",
//    "User-Agent : Smash2222" here or in const
];

// github API
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/starred/httpie/httpie",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "Smash2222",
    CURLOPT_CUSTOMREQUEST => "PUT"
//    CURLOPT_CUSTOMREQUEST => "DELETE" to unstar repo
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "<br>";

echo "<pre>";
echo $response;
echo "<pre>";
