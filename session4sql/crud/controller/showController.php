<?php
require_once dirname(__FILE__, 2) . '/config/connectionDatabase.php';
require_once dirname(__FILE__, 2) . '/config/config.php';

$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);
$allData = mysqli_fetch_all($result , MYSQLI_ASSOC);

// var_dump($allData);
