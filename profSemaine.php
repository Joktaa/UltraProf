<?php
    require('./inc/bdd.php');

    $requete = $connexion->prepare("SELECT * FROM cours c JOIN utilisateur u ON (c.id_utilisateur = u.id) WHERE u.photo IS NOT NULL AND u.competence IS NOT NULL AND c.titre NOT LIKE '' AND c.profile NOT LIKE '' AND c.parcours NOT LIKE '' ORDER BY c.heurs DESC LIMIT 6");
    $requete->execute();
    $retour = $requete->fetchAll();

    foreach($retour as $oui){
        foreach($oui as $non){
            echo $non;
        }
    }
?>