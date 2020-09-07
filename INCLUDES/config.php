<?php
session_start();
try{
	$bdd = new PDO('mysql:host=localhost;port=3308;dbname=aen','root','');
	//echo "ok";
	
}
catch( PDOException $e ) {
    echo "Erreur Connexion :", $e->getMessage();
}
?>