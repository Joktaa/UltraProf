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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        .marge-top-bottom{margin: 15px 0px;}
        .marge-all{margin: 15px;}
    </style>
  </head>
<body>
    <?php
    if(isset($_GET['deco'])){
        session_destroy();
        header('location:index.php');
    } ?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 style="font-size: 20px">Apprendre c'est bien,<br>Apprendre des meilleurs c'est mieux.</h2>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" style="width: 50%;" placeholder="Que voulez-vous apprendre ?">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            <h2 style="font-size: 20px">Nos profs vous aident à devenir meilleur.</h2>
        </div>
    </div>

    <h3 class="text-center">Profs de Mathématique</h3>
    <div class="container" style="border: 1px solid black">
        <div class="row">
            <div class="col-4 marge-top-bottom">
                <div class="card-header">
                    <h5 class="text-center">Fraction</h5>
                </div>
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

    <footer style="background-color: #e9ecef; margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-3 marge-top-bottom mx-auto" style="border: 1px solid silver">
                    <h5 class="text-center text-primary" style="font-size: 15px">Comment ça marche ?</h5>
                    <p style="color: grey;">Vous êtes bloqués dans votre progression ? Les profs d'ultraprof se mettent à votre service pour vous venir en aide.</p>
                </div>
                <div class="col-1"></div>
                <div class="col-3 marge-top-bottom mx-auto" style="border: 1px solid silver">
                    <h5 class="text-center text-primary" style="font-size: 15px">Devenir prof</h5>
                    <p style="color: grey;">Partagez votre expérience et votre passion en gagnant de l'argent sur ultraprof. Postulez pour devenir prof en ligne !</p>
                </div>
                <div class="col-1"></div>
                <div class="col-3 marge-top-bottom mx-auto" style="border: 1px solid silver">
                    <h5 class="text-center text-primary" style="font-size: 15px">En toute sécurité</h5>
                    <p style="color: grey;">Nous garantissons votre satisfaction du début à la fin de votre expérience de prof en ligne. Réservez sur un site 100% sécurisé en toute confiance !</p>
                </div>
            </div>
            <div class="row">
            <!-- LOCALISATION -->
            <div class="col-sm-4 marge-top-bottom">
                <h4>Paramètres de localisation</h4>
                <hr>
            </div>
            <!-- PRENDRE -->
            <div class="col-sm-4 marge-top-bottom">
                <h4>Prendre des cours</h4>
                <hr>
                <a href="">Comment ça marche ?</a><br>
                <a href="">Pourquoi prendre un cours ?</a><br>
                <a href="">La garantie UltraProf</a><br>
                <a href="">FAQ éléve</a><br>
            </div>
            <!-- COURS -->
            <div class="col-sm-4 marge-top-bottom">
                <h4>Donner des cours</h4>
                <hr>
                <a href="">Devenir un ultra prof</a><br>
                <a href="">Créer son ultra annonce d'ultra prof</a><br>
                <a href="">L'ultra guide de l'ultra prof</a><br>
                <a href="">FAQ prof</a><br>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.5.0/js/bootstrap.min.js"></script>
</body>
</html>