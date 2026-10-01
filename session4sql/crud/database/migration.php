<?php
mysqli_report(MYSQLI_REPORT_OFF);
require_once dirname(__FILE__, 2) . '/config/connectionDatabase.php';

$sql = "CREATE TABLE IF NOT EXISTS users (
    `id` INT PRIMARY KEY AUTO_INCREMENT ,
    `title` VARCHAR(150) NOT NULL
)";
$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);

mysqli_close($conn);

// update my sql 
$conn = mysqli_connect('localhost', 'root', '', 'todoapp');


$sql = "SHOW COLUMNS FROM users LIKE 'is_completed'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    mysqli_query($conn, "ALTER TABLE users
                         ADD is_completed BOOLEAN DEFAULT TRUE");
}

$sql = "SHOW COLUMNS FROM users LIKE 'created_at'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 0) {
    mysqli_query($conn, "ALTER TABLE users
                          ADD created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
}
echo mysqli_error($conn);

mysqli_close($conn);
// var_dump($conn);
