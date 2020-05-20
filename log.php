<?php
session_start();
include('inc/header.php');
?>
<!-- CONNEXION -->
<form action="login.php" method="post">
    <input type="email" name="email" placeholder="Votre email">
    <input type="password" name="mdp" placeholder="Votre mot de passe">
    <input type="submit" value="Connexion">
</form>

<!-- Inscription -->
<form action="register.php" method="post">
    <input type="text" name="prenom" placeholder="Votre prenom">
    <input type="text" name="nom" placeholder="Votre nom">
    <input type="email" name="email" placeholder="Votre email">
    <input type="password" name="mdp1" placeholder="mot de passe">
    <input type="password" name="mdp2" placeholder="confirmation">
    <input type="submit" value="Inscription">
</form>