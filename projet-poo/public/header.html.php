<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/projet-poo/public/assets/css/style.css">
    <title>projet-poo</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="<?= addLink('user', 'login') ?>">Connexion</a>
            </li>
            <li><a href="<?= addLink('user', 'inscription') ?>">Inscription</a>
            </li>
            <li><a href="<?= addLink('home', 'list'); ?>">Liste</a></li>
        </ul>
    </nav>