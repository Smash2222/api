<?php

require "../vendor/autoload.php";

$client = new GuzzleHttp\Client;

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "Bearer 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",
        "User-Agent" => "Smash2222",
    ]
]);

echo $response->getStatusCode(), "<br>";

echo $response->getHeader("content-type")[0], "<br>";

echo substr($response->getBody(), 0, 200), "...<br>";