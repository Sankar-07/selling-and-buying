<?php
// Database configuration
$host = "jdbc:mysql://localhost:3306/sellingbuying";
$dbname = "sellingbuying";
$username = "root";
$password = "SaNkAr@11";

// Create PDO instance
try {
    $pdo = new PDO("jdbc:mysql://localhost:3306/sellingbuying=$host;sellingbuying=$dbname", $username, $password); // PDO stands for PHP Data Objects.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
