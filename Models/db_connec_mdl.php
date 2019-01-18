<?php

//connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cvdyn_bdd;charset=utf8;charset=latin1', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>