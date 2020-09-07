<?php

include('config.php');
if(isset($_GET['service'])){

  $service =htmlspecialchars($_GET['service']);

  $req = $bdd->query('SELECT * FROM services WHERE nomS LIKE "%'.$service.'%"');
  

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
        <td><?=$r['idService']?></td>
        <td><?=$r['nomS']?></td>
        
        <td><p><a class="none2"href="serviceDetail.php?id=<?=$r['idService']?>">plus</a></p></td>
        
      </tr>
      
    </tbody>
  </table>


  <?php
}


}


?>
