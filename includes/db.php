<?php

$pdo = new PDO(
    "pgsql:host=127.0.0.1;dbname=php_site",
    "postgres",
    "postgres"
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
