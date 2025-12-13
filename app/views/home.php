<?php require_once 'layout/header.php'; ?>

<h2>Liste des utilisateurs</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'layout/footer.php'; ?>
