<?php

require_once ("INCLUDE/Bdd.php");
$connection=new Bdd();
$connection->bddConnect();

/**
 * Class ServiceInfo
 * LA CLASSE Service-Info servira pour chercher et afficher les information sur un Services en focntion du types(Client-prestataire-Admin)
 */
class ServiceInfo
{
    private $serviceType=0;
    private $req_services;
    private $type_services=5;
    private $type_services2=0;
    private $liste_services;

    public function __construct(){

    }

    

        public function affichageHtml($connections){

            ?><table id="mytable" class="table table-bordred table-striped">

            <thead>

            <th>Id</th>
            <th>Nom</th>
            <th>Status</th>
            <th>Edit</th>

           
            </thead>
            <tbody><?php
              
                    $req_services=$connections->bddConnect()->query('SELECT * FROM services ORDER BY idService DESC');


            while($liste_services=$req_services->fetch()){
                $id=$liste_services['idService'];
                ?>
                <tr>
                    <td><?=$liste_services['idService']?></td>
                    
                    <td><?=$liste_services['nomS']?></td>
                    <td><?=$this->getServiceTypeName($connections,$id)?></td>
                    <td><p><a class="none2"href="serviceDetail.php?id=<?=$liste_services['idService']?>">plus</a></p></td>
            
                </tr>
            <?php }?>
            </tbody>
            </table>
            <?php

        }

        public function getServiceTypeName($connections,$idU){
            $req_services=$connections->bddConnect()->query('SELECT typeServices FROM services where idService ='.$idU);
          
            $l=$req_services->fetch();
         
            if ($l['typeServices']==0){
                ?>
                <p>Service de base</p>
                <?php
            }
            else if ($l['typeServices']==1){
                ?>
                <p class="btn btn-success">Service AéroClub</p>
                <style>
                    .btn-success{
                        background-color: white;
                        border: solid 1px green;
                        color: black;
                    }
                </style>
                <?php
            }
              
              
    
    
            }


            public function getServiceType(): int
            {
                return $this->serviceType;
            }



     
 


}