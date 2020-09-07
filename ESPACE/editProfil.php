
<?php 
      if(isset($_POST['submit']))
      {
        /*securisation des variable du formulaire*/
     $prenom=htmlspecialchars($_POST['prenom']);
        $nom=htmlspecialchars($_POST['nom']);
        $email=htmlspecialchars($_POST['email']);
        $mdp1=htmlspecialchars($_POST['mdp1']);
        $mdp2=htmlspecialchars($_POST['mdp2']);
        $contact=htmlspecialchars($_POST['contact']);
        $addresse=htmlspecialchars($_POST['addresse']);
      
       
        /*--------------------------------------*/

        /*Condition de leur validation*/
    if(isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['mdp1']) && !empty($_POST['mdp1']) && isset($_POST['mdp2']) 
        && !empty($_POST['mdp2']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact']) && !empty($_POST['contact']) && isset($_POST['addresse']) && !empty($_POST['addresse']))
    {
    
      
        $nom_lenght=strlen($nom);
        $prenom_lenght=strlen($prenom);
        if($prenom_lenght<=255){
        if($nom_lenght<=255){
       
    
          
              if(filter_var($email,FILTER_VALIDATE_EMAIL)){
          $requser=$bdd->prepare('SELECT * FROM user WHERE email= ?');
          $requser->execute(array($email));
          $email_exist=$requser->rowCount();


          if($email_exist=2)
            {
            
              if($mdp1==$mdp2)
              {
               
                $mdp1_taille=strlen($mdp1);
                if($mdp1_taille>=8 && $mdp1_taille<=255){
                  $mdp=hash('sha256', $mdp1);
                   $tail_contact=strlen($contact);
                if($tail_contact==10){
                  $tail_address=strlen($addresse);
                  if($tail_address>=5){
                   
                 



              /*envoi de mail de confirmation*/
               $longueurKey = 15;/*LONGUEUR DE LA CLE DE CONFIRMATION 15*/
                     $key = "";
                     for($i=1;$i<$longueurKey;$i++) {
                        $key .= mt_rand(0,9);
                     }
                     //KEY EST LA CLE ALEATOIREMENT GENERER


                     
                     /*REQUETE PREPARER D'INSERTION DU NOUVEAU MEMBRES*/
                     
//Insertion dans la base de données

              $insertmbr=$bdd->prepare("UPDATE user SET nomU=?,prenomU=?,email=?,password=?,numeroTel=?,adresse=? WHERE email=?");
              $insertmbr->execute(array($nom,$prenom,$email,$mdp,$contact,$addresse,$_SESSION['email']));


                   

                     
              header('Location:profil.php?profil_modify=ok');
              
             
              }
                else{
                  $msg="l'addresse doit contenir minimum 5 caracteres!";
                }
              }
                else{$msg="Le format du contact est invalide!";}
              }else{$msg="Le Mot de Passe doit contenir au moins 8 Caracteres et ne doit pas depasser 255 Caracteres";}
              
              }
            else
              { 
                $msg='Les deux mot de passe ne corresponde pas veuiller reeseyer!';
            }
        }
            else{$msg='Cet email est deja Utiliser!!';}
        }else{$msg='Adresse mail Invalide';}
           
         
        }
        else{$msg='la taille minimal autoriser pour le Nom est depasser';}}
          else{$msg='la taille minimal autoriser pour le Prenom est depasser';}
        }
        else{$msg="Veuiller remplir tous les champs!";}














        if(isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['mdp1']) && !empty($_POST['mdp1']) && isset($_POST['mdp2']) && !empty($_POST['mdp2']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact']) && !empty($_POST['contact']) && isset($_POST['addresse']) && !empty($_POST['addresse']) )
    {
    
        $pseudo_lenght=strlen($pseudo);
        $nom_lenght=strlen($nom);
        $prenom_lenght=strlen($prenom);
        if($prenom_lenght<=255){
        if($nom_lenght<=255){
          if($pseudo_lenght<=255){
            $requser_pseudo=$bdd->prepare('SELECT * FROM membres WHERE pseudo= ?');
          $requser_pseudo->execute(array($pseudo));
          $pseudo_exist=$requser_pseudo->rowCount();
            if($pseudo_exist==1){
              if(filter_var($email,FILTER_VALIDATE_EMAIL)){
          $requser=$bdd->prepare('SELECT * FROM membres WHERE email= ?');
          $requser->execute(array($email));
          $email_exist=$requser->rowCount();


          if($email_exist==1)
            {
              if($mdp1==$mdp2)
              {
               
                $mdp1_taille=strlen($mdp1);
                if($mdp1_taille>=8 && $mdp1_taille<=255){
                  $mdp=$mdp1;
                   $tail_contact=strlen($contact);
                if($tail_contact==10){
                  $tail_address=strlen($addresse);
                  if($tail_address>=5){
                    $tail_code_postal=strlen($code_postal);
                    if($tail_code_postal>=4){



              /*envoi de mail de confirmation*/
               $longueurKey = 15;/*LONGUEUR DE LA CLE DE CONFIRMATION 15*/
                     $key = "";
                     for($i=1;$i<$longueurKey;$i++) {
                        $key .= mt_rand(0,9);
                     }
                     //KEY EST LA CLE ALEATOIREMENT GENERER
                    

                     $confirme=0;
                     /*REQUETE PREPARER D'INSERTION DU NOUVEAU MEMBRES*/
              $insertmbr=$bdd->prepare("UPDATE membres SET nom=?,prenom=?,pseudo=?,email=?,mdp=?,contact=?,addresse=?,code_postal=? WHERE email=?");
              $insertmbr->execute(array($nom,$prenom,$pseudo,$email,$mdp,$contact,$addresse,$code_postal,$_SESSION['email']));


                   
              
                     
              header('Location:profil.php?profil_modify=ok');
                }
                else{
                  $erreur="Le code postal est incorrect";
                }
              }
                else{
                  $erreur="l'addresse doit contenir minimum 5 caracteres!";
                }
              }
                else{$erreur="Le format du contact est invalide!";}
              }else{$erreur="Le Mot de Passe doit contenir au moins 8 Caracteres et ne doit pas depasser 255 Caracteres";}
              
              }
            else
              { 
                $erreur='Les deux mot de passe ne corresponde pas veuiller reeseyer!';
            }
        }
            else{$erreur='Cet email est deja Utiliser!!';}
        }else{$erreur='Adresse mail Invalide';}
            }else{$erreur="Pseudo deja utiliser!!Choississer un Autre";}
            }
          else{$erreur='pseudo trop Long!!';}
        }
        else{$erreur='la taille minimal autoriser pour le Nom est depasser';}}
          else{$erreur='la taille minimal autoriser pour le Prenom est depasser';}
        }
        else{$erreur="Veuiller remplir tous les champs!";}
      }

    
?>
