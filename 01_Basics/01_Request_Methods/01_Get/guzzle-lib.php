<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

$httpClient = new Client();

$response = $httpClient->get(
    'https://postman-echo.com/get',
    [
        RequestOptions::QUERY => [
            'foo' => 'bar',
        ],
    ]
);

echo(
    $response->getBody()->getContents()
);