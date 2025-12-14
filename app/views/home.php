<?php require_once __DIR__ . '/layout/header.php'; ?>

<main class="flex-grow container mx-auto px-6 py-10 fade-in">

    <h2 class="text-2xl font-semibold mb-6 text-gray-800">
        Liste des utilisateurs
    </h2>

    <div class="overflow-x-auto bg-white rounded-xl shadow-lg">
        <table class="min-w-full text-sm text-gray-700">
            <thead class="bg-gray-200 text-gray-800 uppercase text-xs">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nom</th>
                    <th class="px-6 py-3 text-left">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                    <tr class="border-b hover:bg-blue-50 transition duration-300">
                        <td class="px-6 py-4 font-medium">
                            <?= $employee['id']; ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= $employee['name']; ?>
                        </td>
                        <td class="px-6 py-4 text-blue-600 hover:underline">
                            <?= $employee['email']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</main>


<?php require_once __DIR__ . '/layout/footer.php'; ?>
