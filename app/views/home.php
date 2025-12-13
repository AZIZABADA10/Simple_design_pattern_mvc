<?php require_once 'layout/header.php'; ?>

<h2>Liste des utilisateurs</h2>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user['name']; ?></li>
    <?php endforeach; ?>
</ul>

<?php require_once 'layout/footer.php'; ?>
