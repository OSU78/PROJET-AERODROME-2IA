<?php
require("INCLUDES/config.php");
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>

<main>
  <div>

    <section >
      <div class="div-center">
        <nav aria-label="breadcrumb ">
          <ol class="breadcrumb div-margin-left-right">
            <li class="breadcrumb-item"><a href="indexA.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nos prestations</li>
          </ol>
        </nav>
        <div class="jumbotron">
          <div class="container text-dark">
            <h2>Vous passez par Normandie ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem, quos recusandae eum sed assumenda fugiat officiis rerum ratione. Incidunt nihil officia reprehenderit repellendus hic harum illum esse perspiciatis facilis quia.</p>

            <div class="espaceMButton">

            </div>
          </div>

          <?php
          if (isset($_SESSION['session_start'])) {
          ?>
            <div class="espaceMButton"> <a href="" id="dynamicLink">RESERVER VOTRE ESCALE</a>
              <small id="emailHelp" class="form-text text-muted" style="font-size: 15px;">
                <br>Remarque : reservation à effectuer 3 jours avant le Jour-J.</small>
            </div>

          <?php } else {

          ?>
            <div class="espaceMButton"> <a href="#" id="dynamicLink">RESERVER VOTRE ESCALE <img src="https://img.icons8.com/ultraviolet/80/000000/lock-landscape.png" width="45px" /></a>
              <small id="emailHelp" class="form-text text-muted" style="font-size: 15px;">
                <br>Info : Crée un compte gratuitement pour beneficier de cette fonctionnalité.<br></small>
                <br><a id="neutre" href="inscription.php">Crée son compte </a>
            </div>
           


            <?php
          }
            ?>


            </div>
            <div class="container pding-bottom" >
            <div class="stylistTitle ">
              LISTE DES SERVICES DE L'AERODROME
            </div>
            <div class=" stylist">


              <?php
              $req = $bdd->query('SELECT * FROM services where typeServices="0" ORDER BY idService');


              while ($liste_services = $req->fetch()) {
                $id = $liste_services['idService'];
              ?>
                <div class="container text-dark ">
                  <h5><img src="https://img.icons8.com/color/24/000000/level-up.png" width="25px" /> <?= $liste_services['nomS'] ?></h5>
                  <p style="font-size: 18px;"><?= $liste_services['detailS'] ?></p>

                  <div class="espaceMButton">

                  </div>
                </div>
              <?php } ?>
            </div>

        </div>
        </div>

    </section>

  </div>
</main>


<?php
require("INCLUDES/footer.php");
?>