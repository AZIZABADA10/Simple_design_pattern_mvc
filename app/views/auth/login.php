<?php require_once __DIR__ . '/../layout/header.php'; ?>


<h2>Connexion</h2>


<?php if (!empty($error)): ?>
<p style="color:red;"><?= $error ?></p>
<?php endif; ?>


<form method="POST">
<input type="email" name="email" placeholder="Email" required><br><br>
<input type="password" name="password" placeholder="Mot de passe" required><br><br>
<button type="submit">Se connecter</button>
</form>


<a href="index.php?action=register">Créer un compte</a>


<?php require_once __DIR__ . '/../layout/footer.php'; ?>