<?php
require_once dirname(__FILE__, 3) . '/inc/layouts.php';
require_once dirname(__FILE__, 3) . '/config/config.php'
?>
<?php if (isset($_SESSION['succes'])): ?>

    <div class="mb-6 flex items-center gap-3 px-5 py-3 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg text-green-600">
        <span class="text-xl">✓</span>
        <span class="font-medium"><?= $_SESSION['succes'] ?></span>
    </div>

    <?php unset($_SESSION['succes']); ?>

<?php endif; ?>
<div class="min-h-screen flex flex-col items-center py-8 px-4 bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500">

    <h1 class="text-4xl font-extrabold text-white mb-6 drop-shadow-lg">
        My Todos
    </h1>

    <div class="w-full max-w-xl space-y-3">

        <!-- Todo -->
        <div class="bg-white/90 backdrop-blur-md rounded-xl shadow-lg p-4 flex items-center justify-between">

            <div>
                <h2 class="text-lg font-bold text-gray-800">
                    Learn PHP
                </h2>

                <p class="text-xs text-gray-500 mt-1">
                    Created: 30 Sep 2026
                </p>
            </div>

            <div class="flex gap-2">
                <button class="px-3 py-1.5 text-sm bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                    Edit
                </button>

                <button class="px-3 py-1.5 text-sm bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition">
                    Delete
                </button>
            </div>

        </div>

    </div>

</div>