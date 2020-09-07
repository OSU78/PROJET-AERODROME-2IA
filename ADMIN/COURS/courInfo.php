<?php

require_once ("INCLUDE/Bdd.php");
$connection=new Bdd();
$connection->bddConnect();

/**
 * Class CourInfo
 * LA CLASSE Cour-Info servira pour chercher et afficher les information sur un Cours en focntion du types(Client-prestataire-Admin)
 */
class CourInfo
{
   
    public function __construct(){

    }

    

        public function affichageHtml($connections){

            ?><table id="mytable" class="table table-bordred table-striped">

            <thead>

            <th>Id</th>
            <th>Nom</th>
            <th>Edit</th>

           
            </thead>
            <tbody><?php
              
                    $req_cours=$connections->bddConnect()->query('SELECT * FROM cours ORDER BY idCours DESC');


            while($liste_cours=$req_cours->fetch()){
                $id=$liste_cours['idCours'];
                ?>
                <tr>
                    <td><?=$liste_cours['idCours']?></td>
                    
                    <td><?=$liste_cours['nomC']?></td>
                    <td><p><a class="none2"href="courDetail.php?id=<?=$liste_cours['idCours']?>">plus</a></p></td>
            
                </tr>
            <?php }?>
            </tbody>
            </table>
            <?php

        }

    



     
 


}