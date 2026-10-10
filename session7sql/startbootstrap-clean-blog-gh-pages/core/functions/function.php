<?php
require_once dirname(__FILE__, 3) . "/config/config.php";
if (!isset($_SESSION)) {
    session_start();
}


function
setMessage($message, $type)
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

function
registerUser($name, $email, $phone, $password)
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
function
loginUser($email, $password)
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
function
storeBlog($title, $content, $image)
{
    $conn = $GLOBALS['conn'];
    // Image 
    $fileName = $image['name'];
    $fullPath = dirname(__FILE__, 3) . "/assets/img" . "/" . $fileName;
    $relativePath = '/assets/img/' . $fileName;
    $moved =  move_uploaded_file($image['tmp_name'], $fullPath);
    var_dump($moved);
    $sql = "INSERT INTO `blogs` (title, content, image , created_at)
     VALUES ('$title', '$content' , '$relativePath', NOW())";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        return true;
    } else {
        return false;
    }
}
function
getBlog()
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM blogs";
    $res = mysqli_query($conn, $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}
function
deleteBlog($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM `blogs` WHERE `id` = $id";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        return true;
    } else {
        return false;
    }
}

function
findBlog($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM blogs WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) === 0) {
        setMessage('Blog not found', 'danger');
        header("Location: " . BASE_URL . "index.php?page=login");
        exit;
    }
    return mysqli_fetch_assoc($res);
}

function updateBlog($id, $title, $content, $image)
{
    $conn = $GLOBALS['conn'];
    // Image 

    $blog = findBlog($id);
    // $relativePath = '/assets/img' . $blog['image'];
    // var_dump(dirname(__FILE__, 3) . $blog['image'] . "<br>");
    // var_dump(file_exists(dirname(__FILE__, 3) . $blog['image']));
    // die;
    if (
        $blog['image']
        && $image['name']
        && file_exists(dirname(__FILE__, 3) . $blog['image'])
    ) {
        unlink(dirname(__FILE__, 3) . $blog['image']);
        $fileName = $image['name'];
        $fullPath = dirname(__FILE__, 3) . "/assets/img" . "/" . $fileName;
        $relativePath = '/assets/img/' . $fileName;
        move_uploaded_file($image['tmp_name'], $fullPath);
        $sql = "UPDATE `blogs` SET `title` = '$title', `content` = '$content', `image` = '$relativePath' WHERE `id` = $id";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    if (!$blog['image'] && $image['name']) {
        $fileName = $image['name'];
        $fullPath = dirname(__FILE__, 3) . "/assets/img" . "/" . $fileName;
        $relativePath = '/assets/img/' . $fileName;
        move_uploaded_file($image['tmp_name'], $fullPath);
        $sql = "UPDATE `blogs` SET `title` = '$title', `content` = '$content', `image` = '$relativePath' WHERE `id` = $id";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }
}
