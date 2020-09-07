<?php

require_once ("Bdd.php");
$connection=new Bdd();
$connection->bddConnect();

/**
 * Class UserInfo
 * LA CLASSE USER-Info servira pour chercher et afficher les information sur un users en focntion du types(Client-prestataire-Admin)
 */
class UserInfo
{
    private $userType=0;
    private $req_users;
    private $type_users=5;
    private $type_users2=0;
    private $liste_users;

    public function __construct(){

    }

    

        public function affichageHtml($connections){

            ?><table id="mytable" class="table table-bordred table-striped">

            <thead>

            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Status</th>
            <th>Edit</th>

           
            </thead>
            <tbody><?php
              
                    $req_users=$connections->bddConnect()->query('SELECT * FROM user ORDER BY idUser DESC');


            while($liste_users=$req_users->fetch()){
                $id=$liste_users['idUser'];
                ?>
                <tr>
                    <td><?=$liste_users['idUser']?></td>
                    <td><?=$liste_users['prenomU']?></td>
                    <td><?=$liste_users['nomU']?></td>
                    <td><?=$this->getUserTypeName($connections,$id)?></td>
                    <td><p><a class="none2"href="userDetail.php?id=<?=$liste_users['idUser']?>">plus</a></p></td>
            
                </tr>
            <?php }?>
            </tbody>
            </table>
            <?php

        }

        public function getUserTypeName($connections,$idU){
            $req_users=$connections->bddConnect()->query('SELECT typeUsers FROM user where idUser ='.$idU);
          
            $l=$req_users->fetch();
         
            if ($l['typeUsers']==0){
                ?>
                <p>Membre</p>
                <?php
            }
            else if ($l['typeUsers']==1){
                ?>
                <p class="btn btn-success">Formateur</p>
                <style>
                    .btn-success{
                        background-color: white;
                        border: solid 1px green;
                        color: black;
                    }
                </style>
                <?php
            }
               else if ($l['typeUsers']==2){
                ?>
                <p class="btn btn-danger">Admin</p>
                <style>
                    .btn-danger{
                        background-color: white;
                        border: solid 1px red;
                        color: black;
                    }
                   
                </style>
                <?php
               }
                  //POUR ADHERANT
                  else if ($l['typeUsers'] == 4) {
                    ?>
        <p class="btn btn-warning">Adhérant</p>
        <style>
            .btn-warning{
                background-color: white;
                border: solid 1px #FFC107;
                color: black;
            }
           
           
        </style><?php
                }
                  //POUR ETUDIANT
                  else if ($l['typeUsers'] == 3) {
            ?>       
        <p class="btn btn-info">Etudiant</p>
        <style>
            .btn-info{
                background-color: white;
                border: solid 1px #17A2B8;
                color: black;
            }
           
        </style>
        <?php
    }
              
    
    
            }


            public function getUserType(): int
            {
                return $this->userType;
            }



     
 


}