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
        label{margin-top: 10px;}
        #tags * {margin-top: 5px;}
    </style>
  </head>
<body>
    <div class="container-fluid">
        <form action="chibractor.php" method="post">
            <div class="form-group"></div>
                <!-- TITRE -->
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <label for="titre" class="font-weight-bold h4">Titre de l'annonce : </label>
                        <input type="text" name="titre" class=" form-control form-control-lg" placeholder="Prof de maths à domicile">
                    </div>
                </div>
                <!-- PROFIL -->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <label for="profile">Votre profil : </label>
                        <textarea name="profile" cols="30" rows="5" class="form-control" placeholder="Je m'appelle Alex et je suis prof de maths ..."></textarea>
                    </div>
                    <div class="col-sm-4">
                        <div id="tags">
                            <label for="tag1" style="margin-bottom: 0px;">Vos tags :</label><br>
                            <input type="text" name="tag1" class="form-control" style="width: 50%" placeholder="#math">
                            <input type="text" name="tag2" class="form-control" style="width: 50%" placeholder="#python">
                            <input type="text" name="tag3" class="form-control" style="width: 50%" placeholder="#web">
                        </div>
                        <button type="button" onclick="addInput()" class="btn btn-primary" style="margin-top: 10px;">Ajouter un champ</button>
                    </div>
                </div>
                <!-- PALMARES -->
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-4">
                        <label for="profile">Votre parcours : </label>
                        <textarea name="parcours" cols="30" rows="8" class="form-control" placeholder="Formation, diplôme, autodidacte, niveau ..."></textarea>
                    </div>
                    <div class="col-sm-4">
                        <label for="prix" style="margin-top: 50px">Le prix d'une heure (en €) : </label>
                        <input type="number" class="form-control" name="prix" style="width: 50%; margin-left: 0px" placeholder="25">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-7"></div>
                    <!-- BOUTON -->
                    <div class="col-sm-2">
                        <input class="btn btn-primary btn-block" type="submit" value="Valider">
                    </div>
                </div>
        </form>
    </div>

    <script>
        var compteurInput = 3;
        function addInput(){
            if (compteurInput < 5) {
                compteurInput++;
                var tags = document.getElementById("tags");
                var input = document.createElement("input");
                input.type = "text";
                input.name = "tag" + compteurInput;
                input.className = "form-control";
                input.style.width = "50%";
                input.placeholder = "#autre";
                tags.appendChild(input);
            } else {
                alert("Limite de compteur atteinte")
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>