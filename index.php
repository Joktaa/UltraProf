<?php
session_start();
include('inc/header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>S'inscrire / Se connecter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/2.5.0/css/bootstrap.min.css" integrity="sha282-9aIt2nRpC12Uk9gS9baDl211NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        label{margin-top: 10px; margin-bottom: 0px;}
        button{margin-top: 15px;}
        .box{width: 500px; border: 1px solid #ced2da; border-radius: 2px; margin-top: 50px;}
    </style>
  </head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 style="font-size: 20px">Apprendre c'est bien,<br>Apprendre des meilleurs c'est mieux.</h2>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Que voulez-vous apprendre ?">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <h2 style="font-size: 20px">Nos profs vous aident à devenir meilleur.</h2>
        </div>
    </div>

    <h3 class="text-center">Les profs de la semaine</h3>
    <div class="container" style="border: 1px solid black">
        <!-- FAIRE UNE BOUCLE POUR AFFICHER TOUT LES PROFILS -->
        <div class="row">
            <div class="col-4">
                <div class="card text-left">
                    <img class="card-img-top" src="./medecin.png">
                    <div class="card-body">
                        <h4 class="card-title">Alex Ander</h4>
                        <p class="card-text">Je m'appelle Alex et je suis gentil</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-block btn-primary">Voir le profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer style="background-color: #e9ecef;">
        <div class="container">
            <div class="row">
                <div class="col-4" style="border: 1px solid silver">
                    <h5 class="text-center text-primary" style="font-size: 15px">Comment ça marche ?</h5>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.5.0/js/bootstrap.min.js"></script>
</body>
</html>