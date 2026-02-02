<?php
// Site Configuration
define('SITE_NAME', 'Hyper2 Enterprise');
define('SITE_EMAIL', 'Vegseriesindia@gmail.com');
define('ADMIN_EMAIL', 'pyugesh66@gmail.com');

// Base URL
define('BASE_URL', 'http://localhost/hyper2/');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hyper2_db');

// Database Connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if ($conn->query($sql) === TRUE) {
    $conn->select_db(DB_NAME);
    
    // Create Table if not exists (Auto-setup)
    $tableSql = "CREATE TABLE IF NOT EXISTS contact_queries (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        mobile VARCHAR(20) NOT NULL,
        subject VARCHAR(200) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($tableSql);
} else {
    die("Error creating database: " . $conn->error);
}

// Session Start
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
