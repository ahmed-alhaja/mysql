<?php
mysqli_report(MYSQLI_REPORT_OFF);
require_once dirname(__FILE__, 2) . '/config/connectionDb.php';
// users
$sql = "CREATE TABLE IF NOT EXISTS users (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL UNIQUE,
    `phone` VARCHAR(20) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);

// blogs
$sql = "CREATE TABLE IF NOT EXISTS blogs (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(100) NOT NULL,
    `content` VARCHAR(150)  NULL ,
    `user_id` VARCHAR(20) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);

mysqli_close($conn);


// var_dump($conn);
