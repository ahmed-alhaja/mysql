<?php
require_once dirname(__FILE__, 3) . '/controller/showController.php';
require_once dirname(__FILE__, 3) . '/inc/layouts.php';
require_once dirname(__FILE__, 3) . '/config/config.php';
// var_dump($allData[0]['title']);
?>
<?php if (isset($_SESSION['succes'])): ?>

    <div class="mb-6 flex items-center gap-3 px-5 py-3 bg-white/90 backdrop-blur-sm rounded-xl shadow-lg text-green-600">
        <span class="text-xl">✓</span>
        <span class="font-medium"><?= $_SESSION['succes'] ?></span>
    </div>

    <?php unset($_SESSION['succes']); ?>

<?php endif; ?>





<div class="min-h-screen flex flex-col items-center bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 p-6">

    <!-- Title -->
    <h1 class="text-4xl font-extrabold text-white drop-shadow-lg mt-6 mb-6">
        My Todos
    </h1>

    <!-- Todo Table -->
    <div class="w-full max-w-xl overflow-hidden rounded-xl shadow-lg">

        <table class="w-full bg-white/90 backdrop-blur-md">

            <thead>
                <tr class="border-b border-gray-200">
                    <th class="px-4 py-3 text-left text-sm font-bold text-gray-800">
                        Todo
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-bold text-gray-800">
                        Created
                    </th>

                    <th class="px-4 py-3 text-right text-sm font-bold text-gray-800">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($allData as $data): ?>
                    <tr class="hover:bg-white/60 transition">

                        <td class="px-4 py-4">
                            <h2 class="text-lg font-bold text-gray-800">
                                <?= $data['title'] ?>
                            </h2>
                        </td>

                        <td class="px-4 py-4">
                            <p class="text-xs text-gray-500">
                                <?= $data['created_at'] ?>
                            </p>
                        </td>

                        <td class="px-4 py-4">
                            <div class="flex justify-end gap-2">
                                <button class="px-3 py-1.5 text-sm bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition">
                                    Edit
                                </button>
                                <button class="px-3 py-1.5 text-sm bg-gray-800 text-white rounded-lg hover:bg-gray-900 transition">
                                    <a href="<?= BASE_URL . 'controller/deleteController.php?id=' .  $data['id'] ?>">
                                        Delete
                                    </a>
                                </button>

                            </div>
                        </td>

                    </tr>
                <?php endforeach; ?>
                <?php unset($_SESSION['allData']); ?>
            </tbody>

        </table>

    </div>

</div>