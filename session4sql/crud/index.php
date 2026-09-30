<?php require_once dirname(__FILE__) . '/inc/layouts.php' ?>
<?php require_once dirname(__FILE__) . '/config/config.php' ?>

<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500">

    <h1 class="text-6xl font-extrabold text-white drop-shadow-lg">
        TODO App
    </h1>

    <button class="px-7 py-3 mt-6 bg-white text-purple-600 font-bold
                   rounded-xl shadow-lg
                   hover:bg-purple-50 hover:scale-105
                   transition-all duration-300">
        <a href="<?= BASE_URL . 'views/todo/create_todo.php' ?>">
            + Create New Todo
        </a>
    </button>

</div>