<?php
require_once dirname(__FILE__, 3) . "/config/config.php";
if (!isset($_SESSION)) {
    session_start();
}


function setMessage($message, $type)
{
    $_SESSION['message'] = [
        "type" => $type,
        "text" => $message
    ];
}

function showMessage()
{
    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message']['type'];
        $text = $_SESSION['message']['text'];

        echo "<div class='alert alert-$type'>$text</div>";

        unset($_SESSION['message']);
    }
}


function registerUser($name, $email, $phone, $password)
{
    $conn = $GLOBALS['conn'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, phone, password)
     VALUES ('$name', '$email' , '$phone', '$hashedPassword')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['user'] = [
            'name' => $name,
            'email' => $email,
        ];
        return true;
    }
}
function loginUser($email, $password)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) === 0) {
        setMessage('Invalid email', 'danger');
        header("Location: " . BASE_URL . "index.php?page=login");
        exit;
    }
    $user = mysqli_fetch_assoc($res);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'name' => $user['name'],
            'email' => $email,
        ];
        return true;
    } else {
        setMessage('Invalid email or password', 'danger');
        header("Location: " . BASE_URL . "index.php?page=login");
        exit;
    }
}
function storeBlog($title, $content, $image) 
{
     $conn = $GLOBALS['conn'];
     // Image 
     
    $sql = "INSERT INTO `blogs` (title, content, image)
     VALUES ('$title', '$content' , '$image')";
}
