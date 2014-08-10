<?php
require_once("vendor/autoload.php");

$client = new GuzzleHttp\Client();
$res = $client->get('http://os-event.herokuapp.com/');
echo $res->getStatusCode();
echo $res->getHeader('content-type');
echo $res->getBody();