<?php
include('verification_connexion.php') ;
/*cette condition a ete mit pour qu'une personne deja connecter ne puisse pas revenir une nouvelle fois sur la page de connexion a moin quil soit deconnecter de cette session */
if(empty($_SESSION['session_start'])){
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>

<link rel="stylesheet" type="text/css" href="CSS/InscriptionConnexion.css">

	<main class="ConnexionPage" >

		<div class="wrapper fadeInDown">
			<div id="formContent">
				<!-- Tabs Titles -->

				<!-- Icon -->
				<div class="fadeIn first">
					<!-- Remind Passowrd -->
				<div id="formFooter">
					<?php 	if(!isset($_GET['inscription'])){ ?>
						<a class="underlineHover" href="inscription.php"></a>
					<?php  }
					else if(isset($_GET['inscription'])=="ok"){ ?>
						<span class="underlineHover">Votre compte à été creé avec succès</span>
					<?php  } ?>

				</div>
					<div class="divligne">
					<h1>Connexion </h1>
					</div>
					
				</div>

				<!-- Login Form -->
				<form method="post">
					<input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
					<input type="password" id="password" class="fadeIn third" name="mdp"placeholder="password">
					<input type="submit" name="submit" class="fadeIn fourth" value="se connecter">
									</form>
				<div class="form-group">
					<?php
					if(isset($erreur) && isset($_POST['submit']) )
					{
						echo '<br><button type="button" class="btn btn-danger">'.$erreur."</button>";
					}
					?>
				</div>

				<!-- Remind Passowrd -->
				<div id="formFooter">
					<?php 	if(!isset($_GET['inscription'])){ ?>
						<a class="underlineHover" href="inscription.php">Crée un compte ?</a>
					<?php  }
					else if(isset($_GET['inscription'])=="ok"){ ?>
						<span class="underlineHover"> veuillez vous connecter pour acceder a votre espace personnel</span>
					<?php  } ?>

				</div>

			</div>
		</div>
	</main>
	
	





<?php
		require('INCLUDES/footer.php'); }else{header("Location:indexA.php");};
		?>