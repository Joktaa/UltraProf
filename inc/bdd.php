<?php
try
{			
    $connexion = new PDO('mysql:host=sql301.epizy.com;dbname=epiz_26027138_ultraprof;charset=utf8', 'epiz_26027138', 'P9pMqykWRZ3Ef',array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    )
                  );
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}