<?php
function validateRequired($value, $fieldName)
{
    return empty($value) ? ucfirst($fieldName) . " is required" : null;
}
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? null : "Invalid Email";
}

function validateSalary($salary)
{
    return (is_numeric($salary) && $salary > 0) ? null : "Salary Must be a positive number";
}

function validatePassword($password)
{
    if (strlen($password) < 6) {
        return "Password must be at least 6 characters";
    }

    if (!preg_match("/[A-Z]/", $password)) {
        return "Password must contain at least one uppercase letter";
    }

    if (!preg_match("/[a-z]/", $password)) {
        return "Password must contain at least one lowercase letter";
    }

    if (!preg_match("/[0-9]/", $password)) {
        return "Password must contain at least one lowercase letter";
    }

    return null;
}

// function validatePasswordMatch($password, $confirm_password)
// {
//     if ($password === $confirm_password) {
//         return null;
//     } else {
//         return "Password do not match";
//     }
// }

function validateRegister($name, $email, $phone, $password)
{
    $fileds = [
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "password" => $password,
    ];

    foreach ($fileds as $fieldName => $value) {
        if ($error = validateRequired($value, $fieldName)) {
            return $error;
        }
    }

    if ($error = validateEmail($email)) {
        return $error;
    }

    if ($error = validatePassword($password)) {
        return $error;
    }
}

function validateLogin($email, $password)
{
    $fileds = [
        "email" => $email,
        "password" => $password,
    ];

    foreach ($fileds as $fieldName => $value) {
        if ($error = validateRequired($value, $fieldName)) {
            return $error;
        }
    }

    if ($error = validateEmail($email)) {
        return $error;
    }
}
function validateStoreBlog($title, $content, $image)
{
    $fileds = [
        "title" => $title,
        "content" => $content,
        "image" => $image['name']
    ];

    foreach ($fileds as $fieldName => $value) {
        if ($error = validateRequired($value, $fieldName)) {
            return $error;
        }
    }

    // if ($error = validateEmail($email)) {
    //     return $error;
    // }
}
