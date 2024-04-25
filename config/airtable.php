<?php

$url = "https://api.airtable.com/v0/app3Ku7mG7BNTYxiN/tblkxwz3YOFfs18Ki";
$key = 'patOkjkxLOiO5vat6.89f67361b850586c5aae205eca680e908843f6990b334a7127e7ad21cc714e90';
$options = array('http' => array(
    'method'  => 'GET',
    'header' => 'Authorization: Bearer '.$key
));
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

var_dump($response);