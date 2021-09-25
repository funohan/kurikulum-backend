<?php
require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
 
$client = new Client([
    'base_uri' => 'https://reqres.in',
]);
 
$response = $client->request('POST', '/api/evaluasi', [
    'json' => [
        'Status' => 'succes',
        'Nama' => 'Muza'
    ]
]);
$body = $response->getBody();
$body_array = json_encode($body);
print_r($body_array);

?>