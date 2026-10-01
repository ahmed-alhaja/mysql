<?php
require_once dirname(__FILE__, 2) . '/config/config.php';
session_start();
if ($_GET['id']) {
    require_once dirname(__FILE__, 2) . '/config/connectionDatabase.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 1) {
        $_SESSION['succes'] =  'data deleted successfuly';
    }
    header("location: " . BASE_URL . 'views/todo/show.php');
    exit;
}
