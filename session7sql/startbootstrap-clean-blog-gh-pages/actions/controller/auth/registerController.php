<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $error = validateRegister($name, $email, $phone, $password);

    if (!empty($error)) {
        setMessage($error, 'danger');
        header("Location: " . BASE_URL . "index.php?page=register");
    }
    if (registerUser($name, $email, $phone, $password)) {
        setMessage("User registered successfully!", 'success');
        header("Location: " . BASE_URL . "index.php?page=home");
    }
}
