<?php
require_once('../verification_connexion_service.php');
if ($_SESSION['session_start'] == 1 && $_SESSION['idT'] == 2) {
    require("INCLUDE/verification_ajoutUser.php");
    require("INCLUDE/head.php");
    require("INCLUDE/header.php");

?>
    <link rel="stylesheet" type="text/css" href="../CSS/InscriptionConnexion.css">

    <main>
        <div class="div-center">


            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb div-margin-left-right">
                    <li class="breadcrumb-item"><a href="indexA.php">Accueil</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="../ESPACE/profil.php">Mon espace</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="index_admin.php">Administration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajout</li>
                </ol>
            </nav>
            <?php
            //PAGE D'AJOUT D'UN USER
            if ($_GET['motif'] == 1) {
            ?>
                <div class=" content wrapper fadeInDown">
                    <div id="formContent">
                        <!-- Tabs Titles -->

                        <!-- Icon -->
                        <div class="fadeIn first">
                            <?php if (isset($_GET['inscription']) == 'ok') { ?>
                                <h4 class="display-8 btn-success" style="background-color:rgb(51, 179, 224)">Ajout Reussie</h4>
                                <h6 class="btn-success">Un mail de verification a été envoyer à l'utilisateur</h6>
                            <?php  } ?>
                            <div class="divligne">
                                <h1>Ajouter un membre </h1>
                            </div>

                        </div>

                        <!-- Login Form -->
                        <form method="post" name="ajout">
                            <input type="text" title='Veuiller renseigner votre nom' name="nom" id="nom" placeholder="Nom">


                            <input type="text" title='Veuiller renseigner votre prenom' name="prenom" id="prenom" placeholder="Prenom">


                            <input type="email" title='Veuiller renseigner votre email' name="email" id="email" placeholder="Entrer email">

                            <input type="password" title='Veuiller renseigner votre mot de passe' name="mdp1" id="mdp1" placeholder="Entrer mot de passe">


                            <input type="password" title='Veuiller renseigner une deuxieme fois le mot de passe' name="mdp2" id="mdp2" placeholder="Confirmer votre mot de passe">

                            <br>
                            <span class="input-group-addon">+33</span>
                            <input type="number" title='Veuiller renseigner un Numero au quelle nous pourrons vous contacter si besoin' maxlength="10" class="number" minlength="10" name="contact" id="contact" placeholder="Numero">
                            <div class=" container input-group registration-date-time">
                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                <input class="form-control" name="hbd" id="hbd" type="date">
                            </div>
                            <div class=" container select">
                                <select name="typeUser" id="typeUser">

                                    <option value="1">Membre</option>
                                    <option value="4">Adherant</option>
                                    <option value="3">Etudiant</option>
                                    <option value="1">Formateur</option>
                                    <option value="2">Admin</option>

                                </select>
                            </div>
                            <input type="text" title='Veuiller renseigner votre addresse' name="addresse" id="addresse" placeholder="Adresse">
                            <small id="emailHelp" class="form-text text-muted">
                                Remarque : Nous ne partagerons jamais vos Informations Personnelles avec qui que ce soit.</small>


                            <input type="submit" class="fadeIn fourth" name="submitMembre" id="submitMembre" value="ajouter">

                            <div class="alert" role="alert" id="erreur">

                            </div>
                    </div>
                    </form>
                    <div class="fadeIn" style="margin-bottom:20px">
                        <?php
                        if (isset($msg) && isset($_POST['submitMembre'])) {
                            echo '<br><button type="button" class="btn btn-danger">' . $msg . "</button>";
                        }
                        ?>
                    </div>
                    <script type="text/javascript" src="../JS/verifAdd.js">


                    </script>



                </div>
            <?php
            }

            //PAGE D'AJOUT DE SERVICE
            else if ($_GET['motif'] == 2) {
            ?>


                <div style=" margin-bottom: 355px;">
                    <div class="wrapper fadeInDown">
                        <div id="formContent">
                            <!-- Tabs Titles -->

                            <!-- Icon -->
                            <div class="fadeIn first">
                                <?php if (isset($_GET['inscription']) == 'ok') { ?>
                                    <h4 class="display-8 btn-success" style="background-color:rgb(51, 179, 224)">Ajout Reussie</h4>
                                <?php  } ?>
                                <div class="divligne">
                                    <h1>Ajouter un service </h1>
                                </div>

                            </div>

                            <!-- Login Form -->
                            <form method="post" name="ajout" enctype="multipart/form-data">
                                <input type="text" title='Veuiller renseigner votre nom' name="nom" id="nom" placeholder="Nom">


                                <input type="text" title='Veuiller renseigner une description' name="detail" id="detail" placeholder="Description">

                                <br>

                                <div class=" container select">
                                    <select name="typeService" id="typeService">

                                        <option value="1">Service de base</option>
                                        <option value="2">Service Aeroclub</option>


                                    </select>

                                </div>
                                <br>
                                <input class="fadeIn third" type="file" name="image">
                                <br>
                                <br>
                                <small id="emailHelp" class="form-text text-muted">
                                    Remarque : Nous ne partagerons jamais vos Informations Personnelles avec qui que ce soit.</small>


                                <input type="submit" class="fadeIn fourth" name="submitService" id="submitService" value="ajouter">

                                <div class="alert" role="alert" id="erreur">



                                </div>
                            </form>
                            <div class="fadeIn" style="margin-bottom:20px">
                                <?php
                                if (isset($msg) && isset($_POST['submitService'])) {
                                    echo '<br><button type="button" class="btn btn-danger">' . $msg . "</button>";
                                }
                                ?>
                            </div>
                            <script type="text/javascript" src="../JS/verifAdd.js">


                            </script>
                            <!-- Remind Passowrd -->



                        </div>
                    </div>
                <?php
            }
            //PAGE D'AJOUT DE COURS EN PDF+NOM COUR
            else if ($_GET['motif'] == '3') {
                ?>
                    <div style=" margin-bottom: 355px;">
                        <div class="wrapper fadeInDown">
                            <div id="formContent">
                                <!-- Tabs Titles -->

                                <!-- Icon -->
                                <div class="fadeIn first">
                                    <?php if (isset($_GET['inscription']) == 'ok') { ?>
                                        <h4 class="display-8 btn-success" style="background-color:rgb(51, 179, 224)">Ajout Reussie</h4>

                                    <?php  } ?>
                                    <div class="divligne">
                                        <h1>Ajouter une formation </h1>
                                    </div>

                                </div>

                                <!-- Login Form -->
                                <form method="post" name="ajout" enctype="multipart/form-data">
                                    <input type="text" title='Veuiller renseigner le nom de la formation' name="nom" id="nom" placeholder="Nom formation">



                                    <br>
                                    <br>

                                    <div class="">
                                        <input class="fadeIn third" type="file" name="cours" accept="application/pdf">
                                    </div>
                                    <br>
                                    <br>
                                    <small id="emailHelp" class="form-text text-muted">
                                        Remarque : Seul le format pdf est autorisé </small>



                                    <input type="submit" class="fadeIn fourth" name="submitFormation" id="submitFormation" value="ajouter">

                                    <div class="alert" role="alert" id="erreur">

                                    </div>
                            </div>
                            </form>
                            <div class="fadeIn" style="margin-bottom:20px">
                                <?php
                                if (isset($msg) && isset($_POST['submitFormation'])) {
                                    echo '<br><button type="button" class="btn btn-danger">' . $msg . "</button>";
                                }
                                ?>
                            </div>
                            <script type="text/javascript" src="../JS/verifAdd.js">


                            </script>



                        </div>
                    </div>
                <?php
            }





            //PAGE D'AJOUT D'AVION
            else if ($_GET['motif'] == '4') {
                ?>
                    <div style=" margin-bottom: 355px;">
                        <div class="wrapper fadeInDown">
                            <div id="formContent">
                                <!-- Tabs Titles -->

                                <!-- Icon -->
                                <div class="fadeIn first">
                                    <?php if (isset($_GET['inscription']) == 'ok') { ?>
                                        <h4 class="display-8 btn-success" style="background-color:rgb(51, 179, 224)">Ajout Reussie</h4>

                                    <?php  } ?>
                                    <div class="divligne">
                                        <h1>Ajouter un Avion </h1>
                                    </div>

                                </div>

                                <!-- Login Form -->
                                <form method="post" name="ajout" >
                                    <input type="text" title='Veuiller renseigner la reference ' name="type" id="type" placeholder="Reference de l'avion">
                                    <br>
                                    <br>
                                    <div class=" container select">
                                        <span class="input-group-addon">Type d'utilisation</span>
                                        <select name="utilisationType" id="utilisationType">
                                            <option value="1">Ecole</option>
                                            <option value="2">Voyage</option>
                                        </select>

                                    </div>
                                    <br>
                                    <span class="input-group-addon">€</span>
                                    <input type="number" title='Veuiller renseigner le tarif solo ' min=0.1 step="any" maxlength="5" class="number" minlength="3" name="tarifSolo" id="tarifSolo" placeholder="Tarif Solo">
                                    <br><span class="input-group-addon">€</span>
                                    <input type="number" title='Veuiller renseigner le tarif instruction ' min=0.1 step="any" maxlength="5" class="number" minlength="3" name="tarifInstruction" id="tarifInstruction" placeholder="Tarif Instruction" step=any>

                                    <br>
                                    <br>
                                    <small id="emailHelp" class="form-text text-muted">
                                        Remarque : Seul le format pdf est autorisé </small>
                                    <input type="submit" class="fadeIn fourth" name="submitAvion" id="submitAvion" value="ajouter">

                                    <div class="alert" role="alert" id="erreur">

                                    </div>
                            </div>
                            </form>
                            <div class="fadeIn" style="margin-bottom:20px">
                                <?php
                                if (isset($msg) && isset($_POST['submitAvion'])) {
                                    echo '<br><button type="button" class="btn btn-danger">' . $msg . "</button>";
                                }
                                ?>
                            </div>
                            <script type="text/javascript" src="../JS/verifAdd.js">


                            </script>



                        </div>
                    </div>

                    ?>
                </div>
        <?php
            }

            require("INCLUDE/footer.php");
        } else {
            header("Location:../indexA.php");
        }
        ?>