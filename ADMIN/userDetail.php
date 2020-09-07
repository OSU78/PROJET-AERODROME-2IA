<?php
require_once('../verification_connexion_service.php');
if ($_SESSION['session_start'] == 1 && $_SESSION['idT'] == 2) {
    require("INCLUDE/head.php");
    require("INCLUDE/header.php");
    //require_once('INCLUDES/editMembres.php');


?>

    <main>


        <section class="div-center">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb div-margin-left-right">
                    <li class="breadcrumb-item"><a href="indexA.php">Accueil</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="../ESPACE/profil.php">Mon espace</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="index_admin.php">Administration</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="membres.php">Nos membres</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details</li>
                </ol>
            </nav>



            <table id="mytable" class="table table-bordred table-striped">

                <?php
                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $idU = htmlspecialchars($_GET['id']);
                    $req_user = $bdd->prepare('SELECT * FROM user WHERE idUser =?');
                    $req_user->execute(array($idU));
                    $user_infos = $req_user->fetch();
                    //var_dump($user_info);
                    $user_exist = $req_user->rowCount();
                    if ($user_exist >= 1) {
                        $user_infos['typeUsers'];
                        if ($user_infos['typeUsers'] == 0) {
                            $typeUsers = "Membre";
                        } else if ($user_infos['typeUsers'] == 1) {

                            $typeUsers = '<p class="btn btn-success">Formateur</p>
                <style>
                    .btn-success{
                        background-color: white;
                        border: solid 1px green;
                        color: black;
                    }
                </style>';
                        } 
                        //POUR ADMIN
                        else if ($user_infos['typeUsers'] == 2) {
                            $typeUsers = '
                <p class="btn btn-danger">Admin</p>
                <style>
                    .btn-danger{
                        background-color: white;
                        border: solid 1px red;
                        color: black;
                    }
                   
                </style>';
                        }
                        //POUR ADHERANT
                        else if ($user_infos['typeUsers'] == 4) {
                            $typeUsers = '
                <p class="btn btn-danger">Adhérant</p>
                <style>
                    .btn-danger{
                        background-color: white;
                        border: solid 1px red;
                        color: black;
                    }
                   
                </style>';
                        }
                          //POUR ETUDIANT
                          else if ($user_infos['typeUsers'] == 3) {
                            $typeUsers = '
                <p class="btn btn-danger">Etudiant</p>
                <style>
                    .btn-danger{
                        background-color: white;
                        border: solid 1px red;
                        color: black;
                    }
                   
                </style>';}
                        ?>

                        <tr>
                            <th>Nom :</th>
                            <td><?= $user_infos['nomU'] ?></td>
                        </tr>
                        <tr>
                            <th>Prenom :</th>
                            <td><?= $user_infos['prenomU'] ?></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><?= $user_infos['email'] ?></td>
                        </tr>
                        <tr>
                            <th>Status :</th>
                            <td><?= $typeUsers ?></td>
                        </tr>
                        <tr>
                            <th>Contact :</th>
                            <td><?= $user_infos['numeroTel'] ?></td>
                        </tr>
                        <?php
                        if($user_infos['typeUsers']==4){
                            ?> 
                              <tr>
                            <th>date d'echeance : </th>
                            <td>
                                <p><?=$user_infos['date_fin_souscription']?></p>
                            </td>
                        </tr>
 <?php
                        }
                        ?>
                        <tr>
                            <th>Profil :</th>
                            <td>
                                <p><a class="none2" href="membres.php?delete=<?= $user_infos['idUser'] ?>">supprimer le profil</a></p>
                            </td>
                        </tr>
                        <?php
                        if ($user_infos['typeUsers'] != 0) {
                        ?>
                            <tr>
                                <th>Edit :</th>
                                <td>
                                    <p><a class="none2" href="membres.php?deleteRole=<?= $user_infos['idUser'] ?>">supprimer le role</a></p>
                                </td>
                            </tr>
                        <?php
                        } else if ($user_infos['typeUsers'] == 0) {
                        ?>
                            <tr>
                                <th>Edit :</th>
                                <td>
                                    <p><a class="none2" href="membres.php?addRole=<?= $user_infos['idUser'] ?>&typeUser=1">ajouter comme formateur</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>Edit :</th>

                                <td>
                                    <p><a class="none2" href="membres.php?addRole=<?= $user_infos['idUser'] ?>&typeUser=4">ajouter comme adhérant</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>Edit :</th>

                                <td>
                                    <p><a class="none2" href="membres.php?addRole=<?= $user_infos['idUser'] ?>&typeUser=2">ajouter comme admin</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>Edit :</th>
                                <td>
                                    <p><a class="none2" href="membres.php?addRole=<?= $user_infos['idUser'] ?>&typeUser=3">ajouter comme etudiant</a></p>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
            </table>
            </table>


        <?php } else {
        ?>
            <h4>USER NOT FOUND</h4>
    <?php
                    }
                } ?>

        </section>


    </main>



<?php

    require("INCLUDE/footer.php");
} else {
    header("Location:../indexA.php");
}
?>