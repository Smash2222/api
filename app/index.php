<?php

$api_key = "sk_test_51M1FdoIOaiEHsRKcuiFT981iKVAPkRUUO7GBv3ZCaGBczkneOq5qvqgfUzZj07wHACTVumMa3ZCCLbxNbpvI2VOq004lbe2Rsk";

$data = [
    'name' => 'Bob',
    'email' => 'bob@example.com'
];

require "../vendor/autoload.php";

$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;

/*
$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'https://api.stripe.com/v1/customers',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERPWD => $api_key,
    CURLOPT_POSTFIELDS => http_build_query($data),
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response;
*/