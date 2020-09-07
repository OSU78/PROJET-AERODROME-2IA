<?php
if($_SESSION['type']==0){
include('verification_connexion.php') ;
}
else if($_SESSION['type']==1){
include('verification_connexion_salarier.php') ;
}
else if($_SESSION['typeUsers']==2){
include('verification_connexion_admin.php') ;
}



if(!empty($_SESSION['session_start']) and $_SESSION['session_start']==1){


	$_SESSION = array();
	session_destroy();
	header("location:pageConnexion.php");}else{header("Location:index_acceuil.php");}
	?>
