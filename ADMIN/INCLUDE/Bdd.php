<?php


class Bdd
{
    public $bdd;
   
    public function __construct()
    {
    }

    public function bddConnect(){
        try{
            $bdd = new PDO('mysql:host=localhost;port=3308;dbname=aen','root','');
            return $bdd;
	}
        catch( PDOException $e ) {
            echo "Erreur Connexion :", $e->getMessage();
        }
    }
}
