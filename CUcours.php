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
    <div class="container-fluid">
        <form action="#" method="post">
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
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <label for="profile">Votre profil : </label>
                        <textarea name="profile" cols="30" rows="10" class="form-control" placeholder="Je m'appelle Alex et je suis prof de maths ..."></textarea>
                    </div>
                    <div class="col-sm-4" id="tags">
                        <label for="tag1">Vos tags :</label><br>
                        <input type="text" name="tag1" class="form-control" style="width: 50%" placeholder="#math">
                        <input type="text" name="tag2" class="form-control" style="width: 50%" placeholder="#python">
                        <input type="text" name="tag3" class="form-control" style="width: 50%" placeholder="#web">
                        <button onclick="addInput()" class="btn btn-primary">Ajouter un champ</button>
                    </div>
                </div>
                <!-- PALMARES -->
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <label for="profile">Votre profil : </label>
                        <textarea name="profile" cols="30" rows="10" class="form-control" placeholder="Je m'appelle Alex et je suis prof de maths ..."></textarea>
                    </div>
                </div>
        </form>
    </div>

    <script>
        function addInput(){
            let b = document.body;
            let newP = document.createElement('p');
            let newTexte = document.createTextNode('Texte écrit en js');
            newP.textContent = 'Paragraphe en js';
            b.append(newTexte);
        }
        // var compteurInput = 3;
        // function addInput(){
        //     if (compteurInput <= 6) {
        //         compteurInput++;
        //         var tags = document.getElementById("tags");
        //         var input = document.createElement("input");
        //         input.type = "text";
        //         // input.innerHTML = "<input type=\"text\" name=\"tag" + compteurInput + "\" class=\"form-control\" style=\"width: 50%\" placeholder=\"#autre\">";
        //         tags.appendChild(input);
        //         console.log("3");
        //     } else {
        //         alert("Limite de compteur atteinte")
        //     }
        // }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>