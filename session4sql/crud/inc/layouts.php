<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css"
        rel="stylesheet"
    />

    <script src="https://cdn.tailwindcss.com"></script>

    <title><?= $title ?? 'Todo App' ?></title>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500">

    <?= $content ?? '' ?>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>