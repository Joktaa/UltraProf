<?php
session_start();
include('inc/header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Cours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        .row{margin: 25px 0px;}
        #footer{margin-bottom: 0px;}
        footer{background-color: silver;}
    </style>
  </head>
<body>

    <?php
    require_once('inc/bdd.php');
    $sql = 'SELECT cours.id AS id_cours, tags.id AS id_tags, utilisateur.id AS id_utilisateur, cours.prix as prix, cours.dateenvoi as date, cours.titre as titre, cours.profile as profile, cours.parcours as parcours, utilisateur.prenom as prenom, utilisateur.nom, utilisateur.email, tags.tag FROM cours JOIN utilisateur ON cours.id_utilisateur = utilisateur.id JOIN tags ON cours.id = tags.id_cours WHERE cours.id LIKE :cours';
        
    $select = $connexion->prepare($sql);
        
    $select->bindValue(':cours', '%' .$_GET['idCours'] . '%');
        
    $select->execute();
    $cours = $select->fetchAll();
    ?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="border: 1px solid black">
            <div class="row">
                <!-- IMAGE -->
                <div class="col-sm-2">
                    <img src="./medecin.png" alt="photo de profil" style="height: 170px; width:144px">
                </div>
                
                <!-- TAG -->
                <div class="col-sm-5" style="border: 1px solid #dee2e6">
                    <p style="margin-top: 10px">Nom : <?php echo $cours[0]['nom'] . " " . $cours[0]['prenom']; ?></p>
                    <p>Tags : <span class="badge badge-pill badge-primary"><?= $cours[0]['tag'] ?></span><span class="badge badge-pill badge-primary"><?= $cours[1]['tag'] ?></span><span class="badge badge-pill badge-primary"><?= $cours[2]['tag'] ?></span></p>
                </div>

                <!-- PAIEMENT -->
                <div class="col-sm-4">
                    <h4>Réservez une heure !</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">Une heure : <?= $cours[0]['prix']; ?>€</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <!-- INFOS -->
                    <div class="container box">
                        <h2 class="text-center"><?= $cours[0]['titre']?></h2>
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
                                <?= $cours[0]['profile']; ?>
                            </div>

                            <!-- PARCOURS -->
                            <div id="parcours" class="container tab-pane fade"><br>
                                <?= $cours[0]['parcours']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <footer>
        <div class="row" id="footer">
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