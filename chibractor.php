<?php
session_start();
require_once('inc/bdd.php');
if(!empty($_POST)){

	$errors = [];
	$post = [];
	foreach($_POST as $key => $value){
		$post[$key] = strip_tags($value);
    }
    
	if(empty($post['titre']) OR strlen($post['titre'] >= 255)){
        $errors['titre'] = 'titre vide ou trop long';
    }

	if(empty($post['profile']) OR strlen($post['profile'] >= 1000)){
        $errors['profile'] = 'profile vide ou trop long';
    }

	if(empty($post['parcours']) OR strlen($post['parcours'] >= 1000)){
        $errors['parcours'] = 'parcours vide ou trop long';
    }

    if(empty($post['prix']) AND is_numeric($post['prix'])){
        $errors['prix'] = 'prix vide ou incorrect';
    }

    if(empty($post['tag1']) OR empty($post['tag2']) OR empty($post['tag3'])
        OR strlen($post['tag1'] >= 20)
        OR strlen($post['tag2'] >= 20)
        OR strlen($post['tag3'] >= 20)){
        $errors['tag'] = 'tags vides ou tags trop longs';
    }

    if(empty($errors)){
		$insert = $connexion->prepare('INSERT INTO cours (id_utilisateur, prix, dateenvoi, titre, profile, parcours) VALUES (:id_utilisateur, :prix, :dateenvoi, :titre, :profile, :parcours)');
        $insert->bindValue(':id_utilisateur', $_SESSION['id']);
        $insert->bindValue(':prix', $post['prix']);
		$insert->bindValue(':dateenvoi', date('Y-m-d H:i:s'));
		$insert->bindValue(':titre', $post['titre']);
        $insert->bindValue(':profile', $post['profile']);
        $insert->bindValue(':parcours', $post['parcours']);
		if($insert->execute()){
            $select = $connexion->prepare('SELECT id FROM cours WHERE id_utilisateur = :id_utilisateur AND titre = :titre');
            $select->bindValue(':id_utilisateur', $_SESSION['id']);
            $select->bindValue(':titre', $post['titre']);
            $select->execute();
            $result = $select->fetch();
            for($i = 1; $i <= 5; $i++){
                if(!empty($post['tag' . $i])){
                    $insert2 = $connexion->prepare('INSERT INTO tags (id_cours, tag) VALUES (:id_cours, :tag)');
                    $insert2->bindParam(':id_cours', intval($result['id']));
                    $insert2->bindParam(':tag', $post['tag' . $i]);
                    $insert2->execute();
                }
                else {
                    echo 'fail';
                }
            }
            echo '<script>
			alert("Cours créée");
			window.location.href="index.php";
			</script>';
		}
		else{
			echo 'sql error';
		}
    }
    else {
		// echo '<script>
		// alert("Champs invalide(s)");
		// window.location.href="CUcours.php";
        // </script>';
        echo $errors;
    }
}