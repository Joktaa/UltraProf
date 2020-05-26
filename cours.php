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
    </style>
  </head>
<body>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="border: 1px solid black">
            <!-- IMAGE -->
            <img src="./medecin.png" alt="photo de profil">

            <!-- TAG -->
            <div class="col-sm-2">
                <ul>
                    <li>lacostn</li>
                    <li>4/5</li>
                    <li>135h</li>                        
                    <li>#math #info #lechagedefiak</li>
                </ul>
            </div>

            <!-- PAIEMENT -->
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item active"><div class="font-weight-bold">1 heure</div><div class="text-left">13€</div></li>
                        <li class="list-group-item"><div class="font-weight-bold">Pack 5h</div><div class="text-left">11€</div></li>
                        <li class="list-group-item"><div class="font-weight-bold">Pack 10h</div><div class="text-left">9,50€</div></li>
                        <li class="list-group-item"><div class="font-weight-bold">Pack 15h</div><div class="text-left">8,67€</div></li>
                    </ul>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary btn-block">Réserver</button>
                </div>
            </div>


            <!-- INFOS -->
                <div class="container box">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#palmares">Palmarès</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content" >
                        <!-- PROFIL -->
                        <div id="profil" class="container tab-pane active"><br>
                            ouais frr t'en pense quoi de ces tn ?
                        </div>

                        <!-- PALMARES -->
                        <div id="palmares" class="container tab-pane fade"><br>
                            ca va frr le boss t'es en lacost tn et tou
                        </div>
                    </div>
                </div>

            <!-- PUBLICATION -->
        </div>
        <div class="col-sm-2"></div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>