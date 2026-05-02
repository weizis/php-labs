<?php
require 'functions.php';

$date = $_GET['date'] ?? '';

if (!$date) {
    response(['error' => 'date required'], 400);
}

response([
    'date' => $date,
    'weekday' => date('l', strtotime($date))
]);
