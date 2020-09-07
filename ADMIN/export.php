<?php
require_once('../verification_connexion_service.php');

if($_SESSION['idT']==2) {
	
header('content-Type: text/csv;charset=UTF-8');
header('content-Disposition: attachment; filename="listeMembres.csv"');

$req =$bdd->query('SELECT * FROM user');
$data = $req->fetchAll();
//print_r($data);
?>
"NOM";"PRENOM";"EMAIL";"CONTACT";"ADRESSE";

<?php
foreach ($data as $d){
echo "\n".$d['prenomU'].';"'.$d['nomU'].'";"'.$d['email'].'";"'.$d['numeroTel'].'";"'.$d['adresse'].'"';

}

}
else {
	header("Location:../index_acceuil.php");
}
?>