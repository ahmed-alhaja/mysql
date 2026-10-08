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
    if (storeBlog($title, $content, $image)) {
        setMessage("Blog created successfully!", 'success');
        header("Location: " . BASE_URL . "index.php?page=home");
    }
}
