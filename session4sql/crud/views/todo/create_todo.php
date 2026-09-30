<?php
$title = 'Create Todo App';
require_once dirname(__FILE__, 3) . '/inc/layouts.php';
require_once dirname(__FILE__, 3) . '/config/config.php'
?>
<div class="min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-lg bg-white/95 backdrop-blur-sm
                rounded-2xl shadow-2xl p-8">

        <h1 class="text-3xl font-bold text-gray-800 text-center mb-8">
            Create New Todo
        </h1>

        <form class="max-w-sm mx-auto space-y-4" action="<?= BASE_URL . 'controller/todoController.php' ?>" method="POST">

            <div>
                <label for="todo"
                    class="block mb-2 text-sm font-medium text-gray-700">
                    New Todo
                </label>

                <input
                    type="text"
                    name="title"
                    id="todo"
                    placeholder="Enter your todo..."
                    class="w-full px-4 py-3 rounded-lg border border-gray-300
                   focus:outline-none focus:ring-2 focus:ring-purple-500
                   focus:border-purple-500"
                    required>
            </div>

            <button
                type="submit"
                class="w-full px-4 py-3 text-white font-semibold rounded-lg
               bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600
               hover:scale-105 transition-all duration-300 shadow-lg">
                Create Todo
            </button>

        </form>

    </div>

</div>