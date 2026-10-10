<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_GET['action'] ?? '';
    if ($action == "delete") {
        $id = $_POST['id'] ?? '';
        delete($id);
    }
}
function store()
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image'];
    $error = validateStoreBlog($title, $content, $image);

    if (!empty($error)) {
        setMessage($error, 'danger');
        header("Location: " . BASE_URL . "index.php?page=create_blog");
    }
    if (storeBlog($_POST['title'], $_POST['content'], $_FILES['image'])) {
        setMessage("Blog created successfully!", 'success');
        header("Location: " . BASE_URL . "index.php?page=home");
    }
}
function update()
{
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image'];

    if (updateBlog($id , $title , $content , $image)) {
        setMessage("Blog Updated successfully!", 'success');
        header("Location: " . BASE_URL . "index.php?page=home");
    }
}
function delete($id)
{
    if (deleteBlog($id)) {
        setMessage("Blog deleted successfully!", 'success');
        header("Location: " . BASE_URL . "index.php?page=home");
    }
} 
