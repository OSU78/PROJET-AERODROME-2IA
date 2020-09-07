<?php

require_once ("INCLUDE/Bdd.php");
$connection=new Bdd();
$connection->bddConnect();

/**
 * Class AvionInfo
 * LA CLASSE Avion-Info servira pour chercher et afficher les information sur un Avions en focntion du types(Client-prestataire-Admin)
 */
class AvionInfo
{
   
    public function __construct(){

    }

    

        public function affichageHtml($connections){

            ?><table id="mytable" class="table table-bordred table-striped">

            <thead>

            <th>Id</th>
            <th>Nom</th>
            <th>Tarif/SOLO</th>
            <th>Tarif/INSTR</th>
            <th>Edit</th>

           
            </thead>
            <tbody><?php
              
                    $req_avions=$connections->bddConnect()->query('SELECT * FROM avions ORDER BY idAvions');


            while($liste_avions=$req_avions->fetch()){
                $id=$liste_avions['idAvions'];
                ?>
                <tr>
                    <td><?=$liste_avions['idAvions']?></td>
                    
                    <td><?=$liste_avions['type']?></td>
                    <td><?=$liste_avions['tarifSolo']?> €</td>
                    <td><?=$liste_avions['tarifInstructeur']?> €</td>
                    <td><p><a class="none2"href="avionDetail.php?id=<?=$liste_avions['idAvions']?>">plus</a></p></td>
            
                </tr>
            <?php }?>
            </tbody>
            </table>
            <?php

        }

    



     
 


}