<?php
require_once dirname(__FILE__, 2) . '/config/config.php';
if ($_GET['id']) {
    require_once dirname(__FILE__, 2) . '/config/connectionDatabase.php';
    $id = $_GET['id'];
    $sql = "UPDATE `users` SET `title` = '" . $_POST['title'] . "' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) == 1) {
        $_SESSION['succes'] =  'data updated successfuly';
    }
    header("location: " . BASE_URL . 'views/todo/show.php');
    exit;
}

