<?php
class CoursDB{
	
	private $bdd;

	private $tableName = 'cours';

	public function __construct(){

		try
		{			
		    $connexion = new PDO('mysql:host=localhost;dbname=ultraprof;charset=utf8', 'root', '',array(
				        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
				    )
		     );
		    $this->bdd = $connexion;
		}
		catch (Exception $e)
		{
		    die('Erreur : ' . $e->getMessage());
		}

	}

	public function findAllCours(){
		$select = $this->bdd->query('SELECT * FROM ' . $this->tableName);
		return $select->fetchAll();
	}
	
	public function coursDeLaSemaine(){
		$select = $this->bdd->query('SELECT * FROM ' . $this->tableName . ' JOIN utilisateur ON ' . $this->tableName .'.id_utilisateur = utilisateur.id ORDER BY cours.heurs DESC LIMIT 6');
		return $select->fetchAll();
	}

}