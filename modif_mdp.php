<?php
session_start();
require_once('inc/bdd.php');
if(!empty($_POST)){
	$errors = [];
	$post = [];
	foreach($_POST as $key => $value){
		$post[$key] = strip_tags($value);
	}

	if(!isset($post['oldMdp'])
		OR mb_strlen($post['oldMdp']) < 4 
		OR mb_strlen($post['oldMdp']) > 13 ){
        $errors['oldMdp'] = 'le mot de passe doit faire entre 4 et 13 caractères';
    }

	if(!isset($post['newMdp'])
		OR mb_strlen($post['newMdp']) < 4 
		OR mb_strlen($post['newMdp']) > 13 ){
        $errors['newMdp'] = 'le mot de passe doit faire entre 4 et 13 caractères';
    }

    $resultat = $connexion->query('SELECT id, mdp FROM utilisateur WHERE id = ' . $_SESSION['id']);
    $mdp = $resultat->fetchAll();

	if(password_verify($post['oldMdp'], $mdp[0]['mdp'])){
        if(empty($errors)){
            $update = $connexion->prepare('UPDATE utilisateur SET mdp = :mdp WHERE id = :id');
            $update->bindParam(':id', $_SESSION['id']);
            $update->bindValue(':mdp', password_hash($post['newMdp'], PASSWORD_DEFAULT));
            if($update->execute()){
				echo '<script>
				alert("Mot de passe modifié");
				window.location.href="profile.php";
				</script>';
            }
            else{
                echo 'sql error';
            }
        }
        else{
            echo implode('<br>', $errors);
        }
    }
    else{
		echo '<script>
		alert("Ancien mot de passe incorrect");
		window.location.href="updateUser.php";
		</script>';
    }

}