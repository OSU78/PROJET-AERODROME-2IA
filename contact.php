<?php
require("INCLUDES/config.php");
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>

<main>
  <div>
    <div class="content1">
      <section>

    <div  class="div-center">
    <nav aria-label="breadcrumb ">
                <ol class="breadcrumb div-margin-left-right">
                    <li class="breadcrumb-item"><a href="indexA.php">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
    <section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading"> AERODROME D'EVREUX NORMANDIE -CONTACT</h1>
        
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-form-header text-black" ><i class="fa fa-envelope"></i> CONTACT
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primaryO text-right">Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 ">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-black text-uppercase"><i class="fa fa-home"></i> Addresse</div>
                <div class="card-body" style=" color: cadetblue;" >
                    <p>3 rue des Champs Elysées</p>
                    <p>75008 PARIS</p>
                    <p>France</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. +33 12 56 11 51 84</p>
           

                </div>

            </div>
        </div>
    </div>
</div>


    </div>

     
      </section>
    </div>
  </div>
</main>


<?php
require("INCLUDES/footer.php");
?>