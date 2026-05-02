<?php
require 'functions.php';

$d1 = $_GET['d1'] ?? '';
$d2 = $_GET['d2'] ?? '';

if (!$d1 || !$d2) {
    response(['error' => 'need d1 and d2'], 400);
}

$days = abs((strtotime($d2) - strtotime($d1)) / 86400);

response(['days_between' => $days]);
