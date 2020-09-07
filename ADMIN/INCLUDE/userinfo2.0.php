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

    public function allMembers($connections){

        /*Pour les membres (Type=0)*/
        if($this->getUserType()==0){
            $this->affichageHtml($connections,0);
        }

        /*Pour l'administration (Type=2)*/
        else if($this->getUserType()==2){
         $this->affichageHtml($connections,2);
        }
       

    }

        public function affichageHtml($connections,$type_users){

            ?><table id="mytable" class="table table-bordred table-striped">

            <thead>

            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Edit</th>

            <th>Delete</th>
            </thead>
            <tbody><?php
                if($this->getUserType()==5){
                    $req_users=$connections->bddConnect()->query('SELECT * FROM user ORDER BY idUser');

                }
                else{
                    $req_users=$connections->bddConnect()->prepare('SELECT * FROM user WHERE typeUsers=? ORDER BY idUser');
                    $req_users->execute(array($type_users));
                }

            while($liste_users=$req_users->fetch()){
                ?>
                <tr>
                    <td><?=$liste_users['idUser']?></td>
                    <td><?=$liste_users['prenomU']?></td>
                    <td><?=$liste_users['nomU']?></td>
                    <td><?=$liste_users['adresse']?></td>
                    <td><?=$liste_users['email']?></td>
                    <td>0<?=$liste_users['numeroTel']?></td>
                    <td><p><a class="none2"href="membres.php?confirmUser=<?=$liste_users['idUser']?>">confirmer</a></p></td>
                    <td><p><a class="none2"href="membres.php?delete=<?=$liste_users['idUser']?>">supprimer</a></p></td>


                </tr>
            <?php }?>
            </tbody>
            </table>
            <?php

        }



        public function getUserTypeName(){
        
        if ($this->getUserType()==0){
            echo "MEMBRES DU SITES";
        }
       
           else if ($this->getUserType()==2){
               echo "ADMINISTRATEURS DU SITES";
           }
          


        }
    /**
     * @return int
     */
    public function getUserType(): int
    {
        return $this->userType;
    }

    /**
     * @param int $userType
     */
    public function setUserType(int $userType): void
    {
        $this->userType = $userType;
    }

}