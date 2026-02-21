<?php

require_once __DIR__ . '/../vendor/autoload.php';
if (!isset($dotenv)) {
    $dotenv = Dotenv\Dotenv::createImmutable('/../');
    $dotenv->load();
}

$host = env('DB_HOST');
$db_name = env('DB_DATABASE');
$user = env('DB_USERNAME');
$pass = env('DB_PASSWORD');
$charset = env('DB_CHARSET');
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Erreur de connexion : '.$e->getMessage();
}
