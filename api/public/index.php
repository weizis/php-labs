<?php
require 'functions.php';

$data = [
    ['id' => 1, 'name' => 'Nastya'],
    ['id' => 2, 'name' => 'Anna']
];

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'all':
        response($data);
        break;

    case 'get':
        $id = $_GET['id'] ?? 0;

        foreach ($data as $item) {
            if ($item['id'] == $id) {
                response($item);
            }
        }

        response(['error' => 'not found'], 404);
        break;

    case 'del':
        response(['message' => 'deleted']);
        break;

    case 'edit':
        response(['message' => 'updated']);
        break;

    default:
        response(['error' => 'unknown action'], 404);
}
