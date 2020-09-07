<?php

include('config.php');
if(isset($_GET['user'])){

  $user =htmlspecialchars($_GET['user']);

  $req = $bdd->query('SELECT * FROM user WHERE nomU LIKE "%'.$user.'%"');
  

  $requ = $req->fetchAll();

  foreach ($requ as $r){
    ?>
    

    <table id="mytable" class="table table-bordred table-striped" style="transition: 0.5s">

     <thead>

       <th>Id</th>
       <th>Nom</th>
       <th>Prenom</th>
      
       
       <th>Edit</th>

     </thead>
     <tbody>

      <tr>
        <td><?=$r['idUser']?></td>
        <td><?=$r['prenomU']?></td>
        <td><?=$r['nomU']?></td>
        
        <td><p><a class="none2"href="userDetail.php?id=<?=$r['idUser']?>">plus</a></p></td>
        
      </tr>
      
    </tbody>
  </table>


  <?php
}


}


?>
