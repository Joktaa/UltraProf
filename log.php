<?php
session_start();
include('inc/header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- CSS -->
    <style>
        label{margin-top: 10px; margin-bottom: 0px;}
        button{margin-top: 15px;}
        .box{width: 500px; border: 1px solid #ced4da; border-radius: 3px; margin-top: 10px;}
    </style>
  </head>
<body>
    <div class="container box">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#connexion">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#inscription">Inscription</a>
            </li>
        </ul>
      
        <!-- Tab panes -->
        <div class="tab-content" >
            <!-- CONNEXION -->
            <div id="connexion" class="container tab-pane active"><br>
                <h2 style="text-align: center;">Connectez-vous avec votre adresse email</h2>
                <form action="login.php" method="post">
                    <div class="form-group">
                      <label for="email">Email : </label>
                      <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse email">
                      <label for="mdp">Mot de passe : </label>
                      <input type="mdp" name="mdp" class="form-control" placeholder="Entrez votre mot de passe">
                      <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary">Connexion</button></div>
                    </div>
                </form>
            </div>

            <!-- INSCRIPTION -->
            <div id="inscription" class="container tab-pane fade"><br>
                <h2 style="text-align: center;">Incrivez-vous, ça ne prend que 30 secondes</h2>
                <form action="register.php" method="post">
                    <div class="form-group">
                      <label for="prenom">Prénom : </label>
                      <input type="prenom" name="prenom" class="form-control" placeholder="Entrez votre prénom">
                      <label for="nom">Nom : </label>
                      <input type="nom" name="nom" class="form-control" placeholder="Entrez votre nom">
                      <label for="email">Email : </label>
                      <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse email">
                      <label for="mdp1">Mot de passe : </label>
                      <input type="mdp1" name="mdp1" class="form-control" placeholder="Entrez votre mot de passe">
                      <label for="mdp2">Confirmation du mot de passe : </label>
                      <input type="mdp2" name="mdp2" class="form-control" placeholder="Confirmez votre mot de passe">
                      <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary">Inscription</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        
    </footer>
</body>
</html>