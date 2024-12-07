<?php
$host = 'localhost'; // Database server
$db = 'Parking_System'; // Database name
$user = 'root'; // Database username (change if different)
$pass = ''; // Database password (add your password if required)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
