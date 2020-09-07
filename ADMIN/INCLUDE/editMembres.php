<?php 
	
	/*SUPPRIMER UN USERS*/
	if(isset($_GET['delete']) && !empty($_GET['delete'])){

		$idUsers=htmlspecialchars($_GET['delete']);
		$reqUsers=$bdd->prepare('SELECT * FROM user WHERE idUser=?');
		$reqUsers->execute(array($idUsers));
		$userExist=$reqUsers->rowCount();
		if($userExist==1){
			$userDEL=$bdd->prepare('DELETE FROM user WHERE idUser=?');
			$userDEL->execute(array($idUsers));
			$msg="membres supprimer avec succès";
		}
		else{
			$erreur="Erreur : Ce membre n'existe pas!!";
		}
	}
/*RESET ROLE*/
if(isset($_GET['deleteRole']) && !empty($_GET['deleteRole'])){

	$idUsers=htmlspecialchars($_GET['deleteRole']);
	$reqUsers=$bdd->prepare('SELECT * FROM user WHERE idUser=?');
	$reqUsers->execute(array($idUsers));
	$userExist=$reqUsers->rowCount();
	if($userExist==1){
		$userDEL=$bdd->prepare('UPDATE user SET typeUsers = "0" WHERE idUser =?');
		$userDEL->execute(array($idUsers));
		
		$msg="role supprimer avec succès";
	}
	else{
		$erreur="Erreur : Ce membre n'existe pas!!";
	}
}


	/*CONFIRMER UN USERS*/

	if(isset($_GET['confirmUser']) && !empty($_GET['confirmUser'])){

		$idUsers=htmlspecialchars($_GET['confirmUser']);
		$reqUsers=$bdd->prepare('SELECT * FROM user WHERE idUser=?');
		$reqUsers->execute(array($idUsers));
		$userExist=$reqUsers->rowCount();
		$userInfo=$reqUsers->fetch();
		if($userExist==1){
			if($userInfo['confirme']==0){
			$confirmer=1;
			$userConfirme=$bdd->prepare('UPDATE user
				SET confirme=? WHERE idUser=?');
			$userConfirme->execute(array($confirmer,$idUsers));
			$msg="membres confirmer avec succès";}
			else{
				$erreur="Membres deja confirmer";
			}
		}
		else{
			$erreur="Erreur : Ce membre n'existe pas ";
		}
	}


	?>