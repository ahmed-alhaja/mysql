<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $error = validateLogin($email, $password);

    if (!empty($error)) {
        setMessage($error, 'danger');
        header("Location: " . BASE_URL . "index.php?page=sign-in");
    }
    if (loginUser($email, $password)) {
        setMessage("User logged in successfully!", 'success');
        header("Location: " . BASE_URL . "index.php?page=home");
    }
}
