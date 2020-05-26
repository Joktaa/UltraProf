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
        .container-fluid *{margin: 10px;}
        footer{background-color: silver;}
    </style>
  </head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="border: 1px solid black">
            <div class="row">
                <!-- IMAGE -->
                <div class="col-sm-2">
                    <img src="./medecin.png" alt="photo de profil">
                </div>

                <!-- TAG -->
                <div class="col-sm-5">
                    <ul>
                        <li>lacostn</li>
                        <li>4/5</li>
                        <li>135h</li>                        
                        <li>#math #info #lechagedefiak</li>
                    </ul>
                </div>

                <!-- PAIEMENT -->
                <div class="col-sm-4">
                    <form action="" method="post">
                        <select name="heures" class="custom-select custom-select-lg">
                            <option selected>Nombres d'heures</option>
                            <option value="un">Une heure : 13€</div></option>
                            <option value="cinq">Pack 5h : 11€/h</option>
                            <option value="dix">Pack 10h : 9,50€/h</option>
                            <option value="quinze">Pack 15h : 8,67€/h</option>
                        </select>
                        <input class="btn btn-primary btn-block"type="submit" value="Réserver">
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <!-- INFOS -->
                    <div class="container box">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#profil">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#parcours">Parcours</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content" >
                            <!-- PROFIL -->
                            <div id="profil" class="container tab-pane active"><br>
                                ouais frr t'en pense quoi de ces tn ?
                            </div>

                            <!-- PARCOURS -->
                            <div id="parcours" class="container tab-pane fade"><br>
                                ca va frr le boss t'es en lacost tn et tou
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CV -->
            <div class="container" style="border: 1px solid black">
                <h3>Curriculum Vitae</h3>
                <p>J'ai appris grace aux indiens. Je suis donc l'homme ayant le plus de connaissances sur terre</p>
            </div>

            <!-- AVIS -->
            <div class="media border p-3">
                <img src="./medecin.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                <div class="media-body">
                    <h4>Emanuele Macron</h4>
                    <h5>Tres fort meme si moins fort que moi</h5>
                    <p>Ile é for mé moins que moi qui sui tre tre fort car je sui le presidant</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <footer>
        <div class="row">
            <!-- LOCALISATION -->
            <div class="col-sm-4">
                <h4>Paramètres de localisation</h4>
                <hr>
            </div>
            <!-- PRENDRE -->
            <div class="col-sm-4">
                <h4>Prendre des cours</h4>
                <hr>
                <a href="">Comment ça marche ?</a><br>
                <a href="">Pourquoi prendre un cours ?</a><br>
                <a href="">La garantie UltraProf</a><br>
                <a href="">FAQ éléve</a><br>
            </div>
            <!-- COURS -->
            <div class="col-sm-4">
                <h4>Donner des cours</h4>
                <hr>
                <a href="">Devenir un ultra prof</a><br>
                <a href="">Créer son ultra annonce d'ultra prof</a><br>
                <a href="">L'ultra guide de l'ultra prof</a><br>
                <a href="">FAQ prof</a><br>
            </div>
        </div>
    </footer>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>