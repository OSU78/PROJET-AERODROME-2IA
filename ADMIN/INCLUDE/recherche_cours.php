<?php

include('config.php');
if(isset($_GET['cour'])){

  $cour =htmlspecialchars($_GET['cour']);

  $req = $bdd->query('SELECT * FROM cours WHERE nomS LIKE "%'.$cour.'%"');
  

  $requ = $req->fetchAll();

  foreach ($requ as $r){
    ?>
    

    <table id="mytable" class="table table-bordred table-striped" style="transition: 0.5s">

     <thead>

       <th>Id</th>
       <th>Nom</th>

      
       
       <th>Edit</th>

     </thead>
     <tbody>

      <tr>
        <td><?=$r['idCours']?></td>
       
        <td><?=$r['nomC']?></td>
        
        <td><p><a class="none2"href="courDetail.php?id=<?=$r['idCours']?>">plus</a></p></td>
        
      </tr>
      
    </tbody>
  </table>


  <?php
}


}


?>
