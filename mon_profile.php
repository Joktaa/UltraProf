<?php
session_start();
require_once('class/UtilisateurDB.php');
$utilisateurDB = new UtilisateurDB();
$utilisateur = $utilisateurDB->findUtilisateur($_SESSION['id']);
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<?php 
include('inc/header.php');
if(isset($_SESSION['id'])){ ?>
    <div class="container ContentFullSize">
        <div class="row flashDiv">
            <div class="col-12 mx-auto">
            </div>
        </div>
        <div class="row">
            <h1 class="mainTitle text-center mx-auto mb-5">Gestion du profil :</h1>
        </div>
        <div class="row" id="ProfilContent">
            <article class="col-12 col-md-8 mx-auto text-center" id="userProfilContent">
                <div class="container-fluid" style="border: 1px solid black; padding: 10px 0px">
                    <h5 style="font-weight: 700">Nom, prénom :</h5><?php echo ' ' . $_SESSION['nom'] . ' '. $_SESSION['prenom'] ?><br>
                    <h5 style="font-weight: 700">Email :</h5><?php echo ' ' . $_SESSION['email'] ?><br>
                </div>
                    
                <div class="flex-column flex-lg-row justify-content-evenly">
                    <div class="mt-4">
                        <a href="modifUtilisateur.php">
                            <button class="btn btn-warning">Modifier le compte</button>
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="deleteUser.php">
                        <button id="deleteUserFromProfil" class="btn btn-danger">Supprimer votre compte</button>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <?php
}
else {
    echo '<p class="alert alert-warning">Vous devez vous connecter pour accéder à cette page</p>';
}
?>
</body>
</html>
