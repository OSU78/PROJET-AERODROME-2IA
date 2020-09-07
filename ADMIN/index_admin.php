<?php
require_once('../verification_connexion_service.php');
if( $_SESSION['session_start']==1 && $_SESSION['idT']==2 ) {
require("INCLUDE/head.php");
require("INCLUDE/header.php");
?>

<main>

    <section class="div-center">
    <nav aria-label="breadcrumb ">
                <ol class="breadcrumb div-margin-left-right">
                    <li class="breadcrumb-item"><a href="indexA.php">Accueil</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="../ESPACE/profil.php">Mon espace</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Administration</li>
               
                </ol>
            </nav>
        <div style="background-color:#f2f2f2">
            <div class="container" style="background-color:#f2f2f2;color: #444444;text-align: center;padding: 7%">

                <section>

                    <h2 class="h1-green">GESTION <b>AERODROME D'EVREUX NORMANDIE </b></h2>&nbsp
                </section>

                <section>
                    <h4> <b>Nos +</b></h4>&nbsp

                </section>
                <div class="row">
                    <div class="col-sm">
                        <img src="../IMAGES/icone/ecoute@2x-150x150.png" width="120px">
                        <h5 style="size: 24px"><b> Ecoute</b></h5>
                        <p>Des intervenants bienveillants et attentifs à vos besoins.</p>
                    </div>
                    <div class="col-sm">
                        <img src="../IMAGES/icone/securite@2x-150x150.png" width="120px">

                        <h5 style="size: 24px"><b> Sécurité</b></h5>
                        <p>Un suivi des prestations en temps réel grâce à notre application mobile.</p>
                    </div>
                    <div class="col-sm">
                        <img src="../IMAGES/icone/transparence@2x-150x150.png" width="120px">

                        <h5 style="size: 24px"><b>Transparence</b></h5>
                        <p>Optez pour la sérénité, nous vous offrons une parfaite accessibilité à nos tarifs.</p>
                    </div>


                </div>

                <div class="row">
                    <div class="container barbottom animeleft" style="background-color:#FFFFFF;color: #444444;text-align: center;padding: 7%">

                        <section>

                            <h3 class="h1-green"><b>NOTIFICATION</b></h3><br>
                        </section>
                        <div class="row">
                            <br>
                           
                                <div class="col-sm stylist">
                                    <a href="gestionUser.php" class="none">
                                    <img src="https://img.icons8.com/ios/50/000000/message-preview.png" width="60px">

                                        <h5 style="size: 24px"><b>Commande</b></h5>
                                    </a>
                                </div>


             
                           
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="container barbottom animeleft" style="background-color:#FFFFFF;color: #444444;text-align: center;padding: 7%">

                        <section>

                            <h3 class="h1-green"><b>NOS
                                    MEMBRES</b></h3><br>
                        </section>
                        <div class="row">
                            <br>
                           
                                <div class="col-sm stylist">
                                    <a href="membres.php" class="none">
                                    <img src="https://img.icons8.com/wired/64/000000/admin-settings-male.png" width="60px">

                                        <h5 style="size: 24px"><b>Gestion</b></h5>
                                    </a>
                                </div>



                                <div class="col-sm stylist">
                                    <a href="add.php?motif=1" class="none">
                                    <img src="https://img.icons8.com/wired/64/000000/add-user-male.png" width="60px">

                                        <h5 style="size: 24px"><b>Ajouter</b></h5>
                                    </a>
                                </div>                
                           
                        </div>
                    </div>
                </div>



            <div class="row">
                    <div class="container barbottom animeleft" style="background-color:#FFFFFF;color: #444444;text-align: center;padding: 7%">

                        <section>

                            <h3 class="h1-green"><b>SERVICES</b></h3><br>
                        </section>
                        <div class="row">
                            <br>
                           
                                <div class="col-sm stylist">
                                    <a href="services.php" class="none">
                                    <img src="https://img.icons8.com/wired/64/000000/book-shelf.png"  width="60px">

                                        <h5 style="size: 24px"><b>Gestion</b></h5>
                                    </a>
                                </div>



                                <div class="col-sm stylist">
                                    <a href="add.php?motif=2" class="none">
                                    <img src="https://img.icons8.com/ios/50/000000/add-bookmark.png" width="60px">

                                        <h5 style="size: 24px"><b>Ajouter</b></h5>
                                    </a>
                                </div>                
                           
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="container barbottom animeleft" style="background-color:#FFFFFF;color: #444444;text-align: center;padding: 7%">

                        <section>

                            <h3 class="h1-green"><b>COURS/FORMATIONS</b></h3><br>
                        </section>
                        <div class="row">
                            <br>
                           
                                <div class="col-sm stylist">
                                    <a href="cours.php" class="none">
                                    <img src="https://img.icons8.com/ios/50/000000/book.png" width="60px">

                                        <h5 style="size: 24px"><b>Gestion</b></h5>
                                    </a>
                                </div>



                                <div class="col-sm stylist">
                                    <a href="add.php?motif=3" class="none">
                                    <img src="https://img.icons8.com/ios/50/000000/add-bookmark.png" width="60px">

                                        <h5 style="size: 24px"><b>Ajouter</b></h5>
                                    </a>
                                </div>                
                           
                        </div>
                    </div>
                </div>







                <div class="row">
                    <div class="container barbottom animeleft" style="background-color:#FFFFFF;color: #444444;text-align: center;padding: 7%">

                        <section>

                            <h3 class="h1-green "><b>NOS AVIONS</b></h3><br>
                        </section>
                        <div class="row">
                            <br>
                           
                                <div class="col-sm stylist">
                                    <a href="avions.php" class="none">
                                    <img src="https://img.icons8.com/dotty/80/000000/prop-plane.png" width="60px">

                                        <h5 style="size: 24px"><b>Gestion</b></h5>
                                    </a>
                                </div>



                                <div class="col-sm stylist">
                                    <a href="add.php?motif=4" class="none">
                                    <img src="https://img.icons8.com/ios/50/000000/add-bookmark.png" width="60px">

                                        <h5 style="size: 24px"><b>Ajouter</b></h5>
                                    </a>
                                </div>                
                           
                        </div>
                    </div>
                </div>


            
        </div>



    </section>

</main>


<?php

require("INCLUDE/footer.php");

}
else {
  header("Location:../indexA.php");
}
?>
