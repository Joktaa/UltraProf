<?php
session_start();
require_once('inc/bdd.php');

if(!empty($_POST)){
	$errors = [];
	$post = [];
	foreach($_POST as $key => $value){
		$post[$key] = strip_tags($value);
	}

	if(empty($post['email']) OR !filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email invalide';
    }

    if(!isset($post['mdp'])
		OR mb_strlen($post['mdp']) < 4 ){
        $errors['mdp'] = 'le mot de passe doit faire 4 caractères mini ';
    }

    if(empty($errors)){
    	$select = $connexion->prepare('SELECT id, nom, prenom, email, mdp, role FROM utilisateur WHERE email = :email');
    	$select->bindValue(':email', $post['email']);
    	$select->execute();
    	$users = $select->fetchAll();

    	if(count($users) === 1 && password_verify($post['mdp'], $users[0]['mdp'])){
    		$_SESSION['id'] = $users[0]['id'];
            $_SESSION['nom'] = $users[0]['nom'];
            $_SESSION['prenom'] = $users[0]['prenom'];
			$_SESSION['email'] = $users[0]['email'];
			$_SESSION['role'] = $users[0]['role'];
			header('Location: index.php');
    	}
    	else{
			echo '<script>
			alert("Identifiants invalides");
			window.location.href="log.php";
			</script>';
    	}
	}
	else {
		echo '<script>
		alert("Identifiants invalides");
		window.location.href="log.php";
		</script>';
	}

}