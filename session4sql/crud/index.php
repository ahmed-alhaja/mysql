<?php require_once dirname(__FILE__) . '/inc/layouts.php' ?>
<?php require_once dirname(__FILE__) . '/config/config.php' ?>

<div class="min-h-screen relative flex flex-col items-center justify-center bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500">

    <a href="<?= BASE_URL . 'views/todo/show.php' ?>"
        class="absolute top-4 right-4 inline-flex items-center gap-3 rounded-xl bg-purple-700/80 px-5 py-2.5 text-sm font-semibold text-white shadow-lg backdrop-blur-sm transition-all duration-200 hover:-translate-y-0.5 hover:bg-purple-800 hover:shadow-xl">
        My List Todo
        <span class="text-xl leading-none">→</span>
    </a>

    <h1 class="text-6xl font-extrabold text-white drop-shadow-lg">
        WELCOME TO MY TODO APP
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