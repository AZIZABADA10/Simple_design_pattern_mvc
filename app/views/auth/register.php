<?php require_once __DIR__ . '/../layout/header.php'; ?>


<h2>Inscription</h2>


<form method="POST">
<input type="text" name="name" placeholder="Nom" required><br><br>
<input type="email" name="email" placeholder="Email" required><br><br>
<input type="password" name="password" placeholder="Mot de passe" required><br><br>
<button type="submit">S'inscrire</button>
</form>


<a href="index.php?action=login">Déjà un compte ?</a>


<?php require_once __DIR__ . '/../layout/footer.php'; ?>