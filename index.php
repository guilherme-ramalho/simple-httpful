<?php

require 'request.php';

$url = "https://jsonplaceholder.typicode.com/posts";

$response = httpRequest($url);

echo json_encode($response, JSON_PRETTY_PRINT);