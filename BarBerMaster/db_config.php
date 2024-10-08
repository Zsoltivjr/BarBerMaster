<?php
const PARAMS = [
    "HOST" => 'localhost',
    "USER" => 'kv',
    "PASSWORD" => 'd5x9keNYUsUFgLT',
    "DB" => 'kv',
    "CHARSET" => 'utf8mb4'
];

$dsn = "mysql:host=" . PARAMS['HOST'] . ";dbname=" . PARAMS['DB'] . ";charset=" . PARAMS['CHARSET'];

$pdoOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {
    $pdo = new PDO($dsn, PARAMS['USER'], PARAMS['PASSWORD'], $pdoOptions);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
