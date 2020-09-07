<?php
require("INCLUDES/config.php");
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>

	
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
        </aside>

      </section>

      <section>

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
                  <p><a href="#" role="button">En savoir plus »</a></p>
                </div>
                <div class="espaceMButton-small">
                  <p><a href="#" role="button">Ajouter au panier »</a></p>
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
   

  </div>
</main>


<?php

require("INCLUDES/footer.php");
?>