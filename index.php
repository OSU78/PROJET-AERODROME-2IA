<?php
require("INCLUDES/config.php");
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>

	<link rel="stylesheet" type="text/css" href="CSS/Souscription.css">
<main>
  <div>
    <div class="content1">
      <section class="div-center">
        <aside class="content1-aside">
          <h1>
            AERODROME D'EVREUX NORMANDIE
          </h1> <br>
          <section id="slidein"></section>
          <section>
            <p>Se lancer dans ce qui restera la plus belle aventure de l'homme <br>et partager l'esprit de rigueur de la grande famille<br> des passionnés de l'aéronautique</p>
          </section>
          <div class="espaceMButton"> <a href="#souscription" id="dynamicLink">SOUSCRIRE A L'ABONNEMENT</a>
              <small id="emailHelp" class="form-text text-muted" style="font-size: 15px;">
                <br>Note : L'abonnement est valable pour une année civile pleine. Elle donne accès aux locaux et aux avions.</small>
            </div>
        </aside>

      </section>
      
     
     
     
    </div>
    <?php
    $req = $bdd->query('SELECT * FROM services where typeServices="1" ORDER BY idService');


    while ($liste_services = $req->fetch()) {
      $id = $liste_services['idService'];
    ?>
      <div class="content2 ">
        <section>

          <aside class="content-asideGeneral">
            <a name="Baptême"></a>
            <h1>
            <?=$liste_services['nomS']?>
            </h1> <br>

            <section>
              <p><?=$liste_services['detailS']?></p>
              <div class="container">
                <div class="espaceMButton-big">
                  <br>
                  <p><a href="#" role="button">Réserver»</a></p>
                </div>
               
              </div>
            </section>
          </aside>

        </section>
        <section class="">
          <img src="<?=$liste_services['imgS']?>" alt=""  width="320px" height="330px">

        </section>

      </div>


      
    <?php } ?>
   

    <!-- Dribbble shot: https://dribbble.com/shots/3148955-Invoice-Sherpa-Pricing -->
    <div class="section6">
    <h1 class="h1-perso stylist" id="souscription">L'AERO-CLUB</h1>
<div class="pricing-container stylist">
	
	<div class="pricing highlight container">
		<h4>Souscription Adherant</h4>
		<small class="green">Most Popular</small>
		<h1>218€/ans</h1>
    
		<small>Pour les -18 ans le tarif est : 178 €/ans</small>
    <div class=" stylist">



  <div class="container text-dark ">
    <h5><img src="https://img.icons8.com/color/24/000000/level-up.png" width="25px" />Accès aux avions </h5>
    <p style="font-size: 18px;"></p>

    <div class="espaceMButton">

    </div>
  </div>
  <div class="container text-dark ">
    <h5><img src="https://img.icons8.com/color/24/000000/level-up.png" width="25px" />Accès aux services de l'Aero-Club </h5>
    <p style="font-size: 18px;">Bapteme de l'air,Parachutage,UMl,...</p>

    <div class="espaceMButton">

    </div>
  </div>

</div>
		<div class="espaceMButton3" style="  text-align:center;  margin-top: 2rem;"> <a href="#">SOUSCRIRE A L'OFFRE</a> </div>
	</div>
	
</div>

<!-- SOCIAL PANEL HTML -->
<div class="social-panel-container">
	<div class="social-panel">
		<p>Created with <i class="fa fa-heart"></i> by
			<a target="_blank" href="https://florin-pop.com">Florin Pop</a></p>
		<button class="close-btn"><i class="fas fa-times"></i></button>
		<h4>Get in touch on</h4>
		<ul>
			<li>
				<a href="https://www.patreon.com/florinpop17" target="_blank">
					<i class="fab fa-discord"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/florinpop1705" target="_blank">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://linkedin.com/in/florinpop17" target="_blank">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="https://facebook.com/florinpop17" target="_blank">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://instagram.com/florinpop17" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</div>


<div class="floating-text">
<?php if (isset($_SESSION['session_start']) && !empty($_SESSION['session_start'])) {
				if ($_SESSION['session_start'] == 1) {
          ?>
  <a href="ESPACE/profil.php" >Mon profil</a>
  
  <?php
        }}
        else{
        ?>
         <a href="inscription.php" >INSCRIPTION</a>
         <?php
        }
        ?>
</div>
    </div>

  </div>
</main>


<?php

require("INCLUDES/footer.php");
?>
