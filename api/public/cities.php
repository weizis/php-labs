<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../../includes/db.php';
$country = $_GET['country'] ?? null;

if (!$country) {
    echo json_encode(["error" => "country required"]);
    exit;
}

$stmt = $pdo->prepare("
    SELECT city
    FROM cities
    WHERE country = :country
");

$stmt->execute(['country' => $country]);

$result = $stmt->fetchAll(PDO::FETCH_COLUMN);

echo json_encode($result);
