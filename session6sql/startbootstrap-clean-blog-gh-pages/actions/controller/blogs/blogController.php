<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $image = $_FILES['image'] ?? '';
  
    $error = validateStoreBlog($title, $content, $image);

    if (!empty($error)) {
        setMessage($error, 'danger');
        header("Location: " . BASE_URL . "index.php?page=create_blog");
    }
    // if (registerUser($name, $email, $phone, $password)) {
    //     setMessage("User registered successfully!", 'success');
    //     header("Location: " . BASE_URL . "index.php?page=home");
    // }
}