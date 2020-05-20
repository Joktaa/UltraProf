<?php
session_start();
require_once('inc/bdd.php');

if(!empty($_POST)){
	$errors = [];
	$post = [];
	foreach($_POST as $key => $value){
		$post[$key] = strip_tags($value);
	}

	if(empty($post['nom'])){
		$errors[] = 'Champs "nom" vide';
    }
	
	if(empty($post['prenom'])){
		$errors[] = 'Champs "prénom" vide';
	}

	if(!isset($post['mdp1']) OR !isset($post['mdp2']) 
		OR mb_strlen($post['mdp1']) < 4
		OR $post['mdp1'] !== $post['mdp2']){
        $errors['mdp'] = 'le mot de passe doit faire 4 caractères mini et les deux mdp envoyés doivent être identiques';
    }

    // Vérification que l'email n'existe pas déjà
	$select = $connexion->prepare('SELECT id, email FROM utilisateur WHERE email = :email');
	$select->bindValue(':email', $post['email']);
	$select->execute();
	$users = $select->fetchAll();
	if(count($users) > 0){
		$errors[] = 'l\'email existe déjà';
	}
    
    if(empty($post['email']) OR !filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email invalide';
    }

    if(empty($errors)){
		$insert = $connexion->prepare('INSERT INTO utilisateur (nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)');
		$insert->bindValue(':nom', $post['nom']);
		$insert->bindValue(':prenom', $post['prenom']);
		$insert->bindValue(':email', $post['email']);
		$insert->bindValue(':mdp', password_hash($post['mdp1'], PASSWORD_DEFAULT));
		if($insert->execute()){
			echo '<script>
			alert("Compte créé");
			window.location.href="index.php";
			</script>';
		}
		else{
			echo '<script>
			alert("Erreur SQL");
			window.location.href="register.php";
			</script>';
		}
    }
    else{
		echo '<script>
		alert("Champs invalide(s)");
		window.location.href="register.php";
		</script>';
    }
}