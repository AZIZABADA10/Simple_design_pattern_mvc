<?php require_once __DIR__ . '/layout/header.php'; ?>

<h2>Liste des utilisateurs</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>

    <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?= $employee['id']; ?></td>
            <td><?= $employee['name']; ?></td>
            <td><?= $employee['email']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
