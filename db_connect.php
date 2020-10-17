<?php
//establishes database connections and returns PDO variable named 'pdo'.
//use $pdo for accessing database.

$host = 'localhost';
$db   = 'id15122218_csiwebsite';
$user = 'id15122218_root';
$pass = 'JW&7FhXPC4=\%Ji3';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>