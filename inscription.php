<?php
include('verification_inscription.php');
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>

<link rel="stylesheet" type="text/css" href="CSS/InscriptionConnexion.css">

<main class="ConnexionPage">

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <?php if (isset($_GET['inscription']) == 'ok') { ?>
                    <h1 class="display-4 btn-success">Inscription Reussie</h1>
                    <h2 class="btn-success">Un mail de verification vous a ete envoye</h2>
                <?php  } ?>
                <div class="divligne">
                    <h1>Inscription </h1>
                </div>

            </div>

            <!-- Login Form -->
            <form method="post" name="inscription">
                <input type="text" title='Veuiller renseigner votre nom' name="nom" id="nom" placeholder="Nom" value="<?php if (isset($nom)) {
                                                                                                                            echo $nom;
                                                                                                                        } ?>">


                <input type="text" title='Veuiller renseigner votre prenom' name="prenom" id="prenom" placeholder="Prenom" value="<?php if (isset($prenom)) {
                                                                                                                                        echo $prenom;
                                                                                                                                    } ?>">


                <input type="email" title='Veuiller renseigner votre email' name="email" id="email" placeholder="Entrer email" value="<?php if (isset($email)) {
                                                                                                                                            echo $email;
                                                                                                                                        } ?>">


                <input type="password" title='Veuiller renseigner votre mot de passe' name="mdp1" id="mdp1" placeholder="Entrer mot de passe">


                <input type="password" title='Veuiller renseigner une deuxieme fois le mot de passe' name="mdp2" id="mdp2" placeholder="Confirmer votre mot de passe">

                <br>
                <span class="input-group-addon">+33</span>
                <input type="number" title='Veuiller renseigner un Numero au quelle nous pourrons vous contacter si besoin' maxlength="10" class="number" minlength="10" name="contact" id="contact" placeholder="Numero" value="<?php if (isset($contact)) {
                                                                                                                                                                                                                                        echo $contact;
                                                                                                                                                                                                                                    } ?>">




                <input type="text" title='Veuiller renseigner votre addresse' name="addresse" id="addresse" placeholder="Adresse" value="<?php if (isset($addresse)) {
                                                                                                                                                echo $addresse;
                                                                                                                                            } ?>">

                <div class="form-group text-center">
                    <p class="text-secondary zeta">
                        <br>
                        By joining, you agree to the <a href="#">Terms and Privacy Policy</a>.
                    </p>
                </div>
                <input type="submit" class="fadeIn fourth" name="submit" id="submit" value="s'inscrire">

                <div class="alert" role="alert" id="erreur">

                </div>
        </div>
        </form>
        <div class="fadeIn">
            <?php
            if (isset($msg) && isset($_POST['submit'])) {
                echo '<br><button type="button" class="btn btn-danger">' . $msg . "</button>";
            }
            ?>
        </div>
        <script type="text/javascript" src="JS/verif.js">


        </script>
        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="connexionSalarier.php">Se connecter si vous avez déjà un compte</a>
        </div>



    </div>
    </div>
</main>







<?php

require("INCLUDES/footer.php");
?>