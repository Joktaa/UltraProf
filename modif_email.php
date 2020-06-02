<?php
session_start();
require_once('inc/bdd.php');
if(!empty($_POST)){
	$errors = [];
	$post = [];
	foreach($_POST as $key => $value){
		$post[$key] = strip_tags($value);
	}

	if(empty($post['oldEmail']) OR !filter_var($post['oldEmail'], FILTER_VALIDATE_EMAIL)){
        $errors['oldEmail'] = 'Ancien email invalide';
	}
	
	if(empty($post['newEmail']) OR !filter_var($post['newEmail'], FILTER_VALIDATE_EMAIL)){
        $errors['newEmail'] = 'Nouvel email invalide';
	}

	if($post['oldEmail'] == $_SESSION['email']){
		$select = $connexion->prepare('SELECT id, email FROM utilisateur WHERE email = :email');
		$select->bindValue(':email', $post['newEmail']);
		$select->execute();
		$users = $select->fetchAll();
		if(count($users) > 0){
			$errors[] = 'l\'email existe déjà';
		}
	    if(empty($errors)){
			$update = $connexion->prepare('UPDATE utilisateur SET email = :email WHERE id = :id');
			$update->bindParam(':id', $_SESSION['id']);
			$update->bindParam(':email', $post['newEmail']);
			if($update->execute()){
				$select = $connexion->prepare('SELECT id, email FROM utilisateur WHERE email = :email');
				$select->bindValue(':email', $post['newEmail']);
				$select->execute();
				$users = $select->fetchAll();
				$_SESSION['email'] = $users[0]['email'];
				echo '<script>
				alert("Email modifié");
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
		alert("Ancien email incorrect");
		window.location.href="updateUser.php";
		</script>';
	}
}