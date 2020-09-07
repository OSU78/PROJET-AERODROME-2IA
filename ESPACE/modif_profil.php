
<?php
require_once('../verification_connexion_service.php');
if( $_SESSION['session_start']==1 ) {
  if($_SESSION['ID']==2){
    require_once('../verification_connexion_service.php');
  }
  else{
    require_once('../verification_connexion.php');
  }
  include('editProfil.php');
  include('head.php');
  include('header.php');
?>
  <link rel="stylesheet" type="text/css" href="../CSS/InscriptionConnexion.css">
  <main>
    <div class="container div-center">
    <nav aria-label="breadcrumb ">
                <ol class="breadcrumb div-margin-left-right">
                    <li class="breadcrumb-item"><a href="../indexA.php">Accueil</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="profil.php">Mon espace</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier son Profil</li>
               
                </ol>
            </nav>
      <hr>
      <div class="row">
        <div class="col-md-9 personal-info">
        <!--<div class="alert alert-info alert-dismissable">
        </div>-->
        <h3>Information personnel</h3>
        <div class="roundedImage roundedImageShadow" style="background:url('<?=$_SESSION['avatar']?>') no-repeat 0px 0px;background-size: cover;" >
          
        </div>
        <div class="container">
          <!--CODE QUI AJOUTE LE LOGO VERIFIER SI LE USER A CONFIRMER SON ADDRESSE EMAIL -->
          <?php
          if($_SESSION['confirme']==1){
            ?>
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
            style="enable-background:new 0 0 25.772 25.772;position: relative;z-index: 1; top: -15px;left: 300px " xml:space="preserve" width="200px" height="30px"  >
            <g>
              <path style="fill:rgb(19, 191, 239);" d="M25.646,13.74l-1.519-2.396l0.901-2.689c0.122-0.367-0.03-0.77-0.365-0.962l-2.458-1.417l-0.452-2.8
              c-0.063-0.382-0.385-0.667-0.771-0.683l-2.835-0.111l-1.701-2.27c-0.232-0.31-0.652-0.413-0.999-0.246l-2.561,1.218l-2.562-1.219
              C9.976,0,9.558,0.103,9.325,0.412l-1.701,2.27L4.789,2.793c-0.385,0.015-0.708,0.3-0.77,0.682l-0.452,2.8L1.109,7.692
              C0.774,7.884,0.621,8.287,0.743,8.654l0.901,2.689L0.126,13.74c-0.207,0.327-0.154,0.754,0.125,1.022l2.047,1.963l-0.23,2.826
              c-0.031,0.387,0.213,0.74,0.584,0.848l2.725,0.785l1.109,2.611c0.152,0.355,0.533,0.561,0.911,0.479l2.78-0.57l2.194,1.797
              c0.149,0.121,0.332,0.184,0.515,0.184s0.365-0.063,0.515-0.184l2.194-1.797l2.78,0.57c0.377,0.08,0.76-0.123,0.911-0.479
              l1.109-2.611l2.725-0.785c0.371-0.107,0.615-0.461,0.584-0.848l-0.23-2.826l2.047-1.963C25.8,14.494,25.853,14.067,25.646,13.74z
              M18.763,9.829l-5.691,8.526c-0.215,0.318-0.548,0.531-0.879,0.531c-0.33,0-0.699-0.185-0.934-0.421L7.081,14.22
              c-0.285-0.29-0.285-0.76,0-1.05l1.031-1.05c0.285-0.286,0.748-0.286,1.031,0l2.719,2.762l4.484-6.718
              c0.225-0.339,0.682-0.425,1.014-0.196l1.209,0.831C18.902,9.029,18.988,9.492,18.763,9.829z"zIndex="-1" transform="translate(130,0)"/>
              
            </svg>
          <?php }
          ?>
        </div>
        <form class="form-horizontal" role="form"  method="post" enctype="multipart/form-data">
         
          
        
          <br>
          <br>
          <label class="col-lg-3 control-label ">Nom:</label>
          <input class="" type="text" placeholder="Nom" name="nom" value="<?=$_SESSION['nomU']?>">

          <label class="col-lg-3 control-label ">Prenom:</label>
          <input class="" type="text" placeholder="Prenom" name="prenom" value="<?=$_SESSION['prenomU']?>">

          
          <label class="col-lg-3 control-label ">Email:</label>
          <input class="" type="text" placeholder="Votr Email" name="email" value="<?=$_SESSION['email']?>">


          <label class="col-lg-3 control-label ">Mot de passe:</label>
          <input class="" type="password" placeholder="Mots de passe" name="mdp1">

          <label class="col-lg-3 control-label ">Confirmation du mot de passe:</label>
          <input type="password" id="password" class="" name="mdp2"placeholder="Confirmation du mot de passe">

          <label class="col-lg-3 control-label ">Contact:</label>
          <input class="" type="text" placeholder="Contact" name="contact" value="<?=$_SESSION['num']?>">

          <label class="col-lg-3 control-label ">Addresse:</label>
          <input class="" type="text" placeholder="Adresse" name="addresse" value="<?=$_SESSION['adresse']?>">

          

          <input type="submit" name="submit" class="fadeIn fourth" value="Mise à jour">
        </form>
        <div class="fadeIn">
          <?php
          if(isset($msg) && isset($_POST['submit']) )
          {
            echo '<br><button type="button" class="btn btn-danger">'.$msg."</button>";
          }
          ?>
        </div>


        
      </div>
    </div>
  </div>
</main>
<?php
include('../INCLUDES/footer.php') ;}
else {
	header("Location:../connexion.php");
}
?>
