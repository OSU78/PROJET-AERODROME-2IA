<?php
require_once('../verification_connexion_service.php');
if ($_SESSION['session_start'] == 1 && $_SESSION['idT'] == 2) {
    require("INCLUDE/head.php");
    require("INCLUDE/header.php");
    //require_once('INCLUDES/editCours.php');
    require_once('COURS/courInfo.php');

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <main>


        <section class="div-center">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb div-margin-left-right">
                    <li class="breadcrumb-item"><a href="indexA.php">Accueil</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="../ESPACE/profil.php">Mon espace</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="index_admin.php">Administration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nos Cours</li>
                </ol>
            </nav>
            <div>
                <?php
                $listeCours = new CourInfo();

                ?>
                <div class="col-md-12">
                    <h4>LISTE Cours</h4>
                    <div class="table-responsive">


                        <div class="form-group">

                            <input style="text-align:center;" class=form-control id="search-cour" type="text" value="" placeholder="Rechercher un ou plusieurs utilisateurs">
                        </div>
                        <div id="result-search"></div>
                        <?php

                        $listeCours->affichageHtml($connection);
                        ?>
                    </div>
                </div>
                <div class="col" style="text-align: center;">
                    <p style="margin-top:4%"><a href="export.php" style="color: black;border: dotted 1.5px black;padding: 12px" style="margin-top: 10px">Export en format CSV</a></p>
                </div>
                <div class="col-12" style="text-align: center;">
                    <?php
                    if (isset($erreur) && isset($_GET['delete']) && !empty($_GET['delete']) || isset($erreur) && isset($_GET['confirmCour']) && !empty($_GET['confirmCour'])) {
                        echo '<br><button type="button" class="btn btn-danger">' . $erreur . "</button>";
                    } else if (isset($msg) && isset($_GET['delete']) && !empty($_GET['delete']) || isset($msg) && isset($_GET['confirmCour']) && !empty($_GET['confirmCour'])) {
                        echo '<br><button type="button" class="btn btn-success">' . $msg . "</button>";
                    }
                    ?>
                </div>
            </div>


            <script>
                console.log("utilisateur");
                $(document).ready(function() {
                    $('#search-cour').keyup(function() {
                        $('#result-search').html('');
                        var cours = $(this).val();
                        if (cours != "") {
                            $.ajax({
                                type: 'GET',
                                url: 'INCLUDE/recherche_cours.php',
                                data: 'cour=' + encodeURIComponent(utilisateur),
                                success: function(data) {
                                    if (data != "") {
                                        $('#result-search').append(data);
                                    } else {
                                        document.getElementById('result-search').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top:10px;color:black'>Oupps !</div><br>"
                                    }
                                }

                            })
                        }
                    });
                });
            </script>
    </main>



<?php

    require("INCLUDE/footer.php");
} else {
    header("Location:../indexA.php");
}
?>