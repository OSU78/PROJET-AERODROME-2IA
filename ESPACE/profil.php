<?php
if (!isset($_SESSION['session_start']) && empty($_SESSION['session_start'])) {
	include('../verification_connexion.php');


	include('head.php');
	include('header.php');
?>
	<link rel="stylesheet" type="text/css" href="../CSS/InscriptionConnexion.css">
	<link rel="stylesheet" htype="text/css" href="../CSS/FormulaireMini.css">

	<main>
		<div class="div-center">


			<nav aria-label="breadcrumb ">
				<ol class="breadcrumb div-margin-left-right">
					<li class="breadcrumb-item"><a href="../indexA.php">Accueil</a></li>
					<li class="breadcrumb-item active" aria-current="page">Mon espace</li>
				</ol>
			</nav>

			<div class="col-sm-0">
				<div class="jumbotron jumbotron-fluid" style="text-align: center;">



					<div class="container" id="flexB">
						<h2 class="display-perso">Bonjour <?= $_SESSION['prenomU'] ?>

							<?php

							if ($_SESSION['idT'] > 0 && $_SESSION['idT'] <= 4) {


							?> <img src="https://img.icons8.com/ultraviolet/120/000000/checked.png" width="25px" />
								<small style="font-size:18px ; color: #9dc0c9;">
									<?php
									if ($_SESSION['idT'] == 1) { ?> Formateur <?php } else if ($_SESSION['idT'] == 2) { ?> Admin<?php } else if ($_SESSION['idT'] == 3) { ?> Etudiant<?php } else if ($_SESSION['idT'] == 4) { ?> Adhérant<?php } ?>
								</small>


							<?php
							}
							?>
						</h2>




						&nbsp
						<a href="modif_profil.php" class="none2">
							<img src="https://img.icons8.com/dotty/80/000000/contract-job.png" height="50px">Modifier votre profil</a>
						&nbsp
						<a href="modif_profil.php" class="none2">
							<img src="https://img.icons8.com/ios/50/000000/historical.png" height="50px">Voir mon historique</a>
						&nbsp
						<?php
						if ($_SESSION['idT'] == 0) {
						?>
							<a href="#.php" class="none2">
								<img src="https://img.icons8.com/pastel-glyph/64/000000/source-code--v1.png" height="49px">Enregistrer son code d'adherant</a>
							<form action="" method="post">
								<div class="form-group">
									<input style="text-align:center;" class=form-control id="search-user" type="text" value="" placeholder="Code d'adherant">
									<input type="submit" class="fourth" name="submit" id="submit" value="s'enregistrer">
								</div>
							</form>



						<?php
						}
						?>
						<?php
						if ($_SESSION['idT'] == 2) {
							echo '
									&nbsp
									<a href="../ADMIN/index_admin.php" class="none2">
									<img src="https://img.icons8.com/ios/50/000000/settings.png" height="50px">Administration</a>
									';
						}
						?>
					</div>
				</div>
			</div>
			<div class="col">
				<?php if (isset($_GET['profil_modify']) && $_GET['profil_modify'] == 'ok') { ?>
					<h1 class="display-4 btn-success">Mise a jour du profil Reussie</h1>
					<spam class="btn-success">Les modifications prendrons effet lors de votre prochaine connexion </spam>
				<?php  } ?>
			</div>

			<div class="col-md-12">
				<div class="container">
					<h4>LISTE FACTURES</h4>
					<div class="table-responsive">


						<div class="form-group">

							<input style="text-align:center;" class=form-control id="search-user" type="text" value="" placeholder="Rechercher Facture">
						</div>
						<div id="result-search"></div>

					</div>
				</div>

			</div>
		</div>


		</div>

	</main>

<?php
	include('footer.php');
} else {
	header("Location:../connexionSalarier.php");
}
?>