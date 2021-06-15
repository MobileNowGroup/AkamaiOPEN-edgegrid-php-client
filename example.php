<?php
require __DIR__.'/vendor/autoload.php';

$client_token  = "";
$client_secret = "";
$access_token  = "";

$client = new \Akamai\Open\EdgeGrid\Client([
	'base_uri' => 'https://ak********.net'
]);

$client->setAuth($client_token, $client_secret, $access_token);

// use $client just as you would \Guzzle\Http\Client
$response = $client->get('/***');

var_dump($response->getBody()->getContents());