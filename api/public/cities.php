<?php
require 'functions.php';

$data = [
    'Russia' => ['Moscow', 'Kazan', 'Saint Petersburg'],
    'Finland' => ['Helsinki', 'Espoo', 'Tampere']
];

$country = $_GET['country'] ?? '';

response([
    'country' => $country,
    'cities' => $data[$country] ?? []
]);
