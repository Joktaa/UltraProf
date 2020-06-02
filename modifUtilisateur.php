<?php
session_start()
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Modification de l'email</h2>
                <form method="post" action="modif_email.php">
                    <div class="form-group">
                        <label>Ancien email</label>
                        <input type="text" name="oldEmail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nouvel email</label>
                        <input type="text" name="newEmail" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Modifier</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Modification du mot de passe</h2>
                <form method="post" action="modif_mdp.php">
                    <div class="form-group">
                        <label>Ancien mot de passe</label>
                        <input type="password" name="oldMdp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nouveau mot de passe</label>
                        <input type="password" name="newMdp" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    }
    else {
        echo '<p class="alert alert-warning">Vous devez vous connecter pour accéder à cette page</p>';
    } ?>
</body>
</html>