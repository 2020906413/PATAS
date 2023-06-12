<?php

// Database configuration
define('DB_HOST', 'localhost'); // Replace with your database host
define('DB_USERNAME', 'root'); // Replace with your database username
define('DB_PASSWORD', ''); // Replace with your database password
define('DB_NAME', 'asset_management'); // Replace with your database name

// Establish database connection
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Additional PDO configurations, if required
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
