<?php
session_start();
require_once dirname(__FILE__, 2) . '/config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'])) {
    require_once dirname(__FILE__, 2) . '/config/connectionDatabase.php';
    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $sql = "INSERT INTO `users`
    (`title`) VALUES ('$title')";
    $result = mysqli_query($conn, $sql);
    $dataInserted = mysqli_affected_rows($conn);
    if ($dataInserted == 1) {
        $dataSucces = 'data inserted successfuly';
        $_SESSION['succes'] = $dataSucces;
    }
    header("location: " . BASE_URL . 'views/todo/show.php');
    exit;
}
