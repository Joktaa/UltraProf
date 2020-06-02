<?php
class UtilisateurDB{

	private $bdd;

	private $tableName = 'utilisateur';

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

	public function findAllUtilisateurs(){
		$select = $this->bdd->query('SELECT * FROM ' . $this->tableName);
		return $select->fetchAll();
	}

	public function findUtilisateur($id){
		$select = $this->bdd->prepare('SELECT id FROM ' . $this->tableName . ' WHERE id = :id');
		$select->bindValue(':id', $id);
		$select->execute();
		return $select->fetch();
	}

	public function deleteUtilisateur($id){

		if(!empty($id) && preg_match("#^\d+$#", $id)){
			$delete = $this->bdd->prepare('DELETE FROM ' . $this->tableName . ' WHERE id = :id');
			$delete->bindValue(':id', $id);
			if($delete->execute()){
				return true;
			}
		}
		return false;
	}

}