<?php if (!empty($errors)) {
    foreach ($errors as $e) {
        echo $e;
    }
} ?>
<form method="POST">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" id="prenom">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="inscription" value="S'inscrire">
    <a href="<?= addLink('home', 'index'); ?>">Annuler</a>
</form>