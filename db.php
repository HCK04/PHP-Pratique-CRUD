<?php
$host = 'root';
$port = 3306;
$db = 'gestion_util';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;port=$port;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'failed to connect!: ', $e->getMessage();
}

