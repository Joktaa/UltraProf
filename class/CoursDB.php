<?php
class CoursDB{
	
	private $bdd;

	private $tableName = 'cours';

	public function __construct(){

		try
		{			
		    $connexion = new PDO('mysql:host=sql301.epizy.com;dbname=epiz_26027138_ultraprof;charset=utf8', 'epiz_26027138', 'P9pMqykWRZ3Ef',array(
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
		$select = $this->bdd->query('SELECT cours.id AS id_cours, utilisateur.id AS id_utilisateur, cours.prix as prix, cours.dateenvoi as date, cours.titre as titre, cours.profile as profile, cours.parcours as parcours, utilisateur.prenom as prenom, utilisateur.nom, utilisateur.email FROM cours JOIN utilisateur ON cours.id_utilisateur = utilisateur.id ORDER BY cours.heurs DESC LIMIT 6');
		return $select->fetchAll();
	}

}