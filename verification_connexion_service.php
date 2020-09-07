<?php
include('INCLUDES/config.php');


if(isset($_POST['submit'])){

	if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mdp']) && !empty($_POST['mdp'])){
		//var_dump($_POST);
		$email = htmlspecialchars($_POST['email']);
	
		$mdp=htmlspecialchars($_POST['mdp']);
		$mdpsec=hash('sha256', $mdp);
		$req_user=$bdd->prepare('SELECT * FROM user WHERE email =? AND password =?');
		//var_dump($req_user);
		$req_user->execute(array($email,$mdpsec));
		//print_r($email);
		//print_r($mdpsec);
		$user_info=$req_user->fetch();
		//var_dump($user_info);
		$user_exist=$req_user->rowCount();
		if($user_exist >=1){
			//ADMIN VERIF//
   if($user_info['typeUsers']==2){
   	$_SESSION['session_start']="";
			$_SESSION['session_start']=1;
			$_SESSION['ID']=$user_info['idUser'];
			$_SESSION['idT']=$user_info['typeUsers'];
			$_SESSION['prenomU']=$user_info['prenomU'];
			$_SESSION['nomU']=$user_info['nomU'];
			$_SESSION['email']=$user_info['email'];
			$_SESSION['adresse']=$user_info['adresse'];
			 $_SESSION['avatar']=$user_info['avatar'];
			 $_SESSION['num']=$user_info['numeroTel'];
			 $_SESSION['confirme']=$user_info['confirme'];
			header("Location:ADMIN/index_admin.php?email=".$_SESSION['email']."&ID=".$_SESSION['session_start']);}
			
			
			//FORMATEUR VERIF//
	else if($user_info['typeUsers']==1){
		$_SESSION['session_start']="";
		$_SESSION['session_start']=1;
		$_SESSION['ID']=$user_info['idUser'];
		$_SESSION['idT']=$user_info['typeUsers'];
		$_SESSION['prenomU']=$user_info['prenomU'];
		$_SESSION['nomU']=$user_info['nomU'];
		$_SESSION['email']=$user_info['email'];
		$_SESSION['adresse']=$user_info['adresse'];
		$_SESSION['num']=$user_info['numeroTel'];
		 $_SESSION['avatar']=$user_info['avatar'];
		 $_SESSION['confirme']=$user_info['confirme'];
		header("Location:FORMATEUR/formateur.php?email=".$_SESSION['email']."&ID=".$_SESSION['session_start']);



	}
      else{$erreur="Une erreur c'est produite #4855";}
		}else{$erreur="Mot de passe ou email incorrect";}

	}
	else{$erreur="Veuiller renseigner tous les champs";}
}







?>
