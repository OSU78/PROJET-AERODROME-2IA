<?php


if(isset($_POST['submitMembre']))
{
  /*securisation des variable du formulaire*/
  $prenom=htmlspecialchars($_POST['prenom']);
  $nom=htmlspecialchars($_POST['nom']);
  $email=htmlspecialchars($_POST['email']);
  $mdp1=htmlspecialchars($_POST['mdp1']);
  $mdp2=htmlspecialchars($_POST['mdp2']);
  $addresse=htmlspecialchars($_POST['addresse']);
  $phoneNumber = htmlspecialchars($_POST['contact']);
  $hbd = htmlspecialchars($_POST['hbd']);
  $typeUser = htmlspecialchars($_POST['typeUser']);
//echo $hbd;

  /*--------------------------------------*/
  /*Condition de leur validation*/
  if(isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['mdp1']) && !empty($_POST['mdp1']) 
  && isset($_POST['mdp2']) && !empty($_POST['mdp2']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['contact'])
   && !empty($_POST['contact']) && isset($_POST['addresse']) && !empty($_POST['addresse'])
   && isset($_POST['hbd']) && !empty($_POST['hbd']) && isset($_POST['typeUser']) && !empty($_POST['typeUser']))
  {
      if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $requser=$bdd->prepare('SELECT * FROM user WHERE email= ?');
        $requser->execute(array($email));
        $email_exist=$requser->rowCount();

        if($email_exist==0)
        {

          /*envoi de mail de confirmation*/
          $longueurKey = 15;/*LONGUEUR DE LA CLE DE CONFIRMATION 15*/
          $key = "";
          for($i=1;$i<$longueurKey;$i++) {
            $key .= mt_rand(1,9);
          }
          $mdp=$mdp1;
                     //KEY EST LA CLE ALEATOIREMENT GENERER
          /*on securise le mot de passe du client*/
          $mdpsec=hash('sha256', $mdp);
          $confirme=0;
          /*VERIFICATION AGE */
          $year=date("Y");
          $yearTab=str_split($year, 2);
          $hbdTab=str_split($hbd, 2);
          //var_dump($hbdTab);
          //var_dump($yearTab);
          $age=$yearTab[1]-$hbdTab[1];
          echo $age;
          
          if($age>13){
           
          
          if($typeUser==4){
          
          $dateFinSouscription=$year."-12-31";
          
           
                    /*REQUETE PREPARER D'INSERTION DU NOUVEAU MEMBRES*/
            $insertmbr=$bdd->prepare("INSERT INTO user(nomU,prenomU,email,password,numeroTel,adresse,typeUsers,confirmeKey,dateNaissance,ageU,date_fin_souscription) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
            $insertmbr->execute(array($nom, $prenom, $email, $mdpsec, $phoneNumber, $addresse,$typeUser,$key,$hbd,$dateFinSouscription,$age));
  
          }
          else{
                    /*REQUETE PREPARER D'INSERTION DU NOUVEAU MEMBRES*/
            $insertmbr=$bdd->prepare("INSERT INTO user(nomU,prenomU,email,password,numeroTel,adresse,typeUsers,confirmeKey,dateNaissance,ageU) VALUES(?,?,?,?,?,?,?,?,?,?)");
            $insertmbr->execute(array($nom, $prenom, $email, $mdpsec, $phoneNumber, $addresse,$typeUser,$key,$hbd,$age));
  
          }
        

                     //CONTENUE DU MESSAGE
          $header = "MIME-Version: 1.0\r\n";
          $header.='From:"aen.com"<support@Aerodrome_d\'Evreux_Normandie.com>'."\n";
          $header.='Content-Type:text/html; charset="uft-8"'."\n";
          $header.='Content-Transfer-Encoding: 8bit';
          $message='
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/css">
      * {
        -ms-text-size-adjust:100%;
        -webkit-text-size-adjust:none;
        -webkit-text-resize:100%;
        text-resize:100%;
      }
      a{
        outline:none;
        color:#40aceb;
        text-decoration:underline;
      }
      a:hover{text-decoration:none !important;}
      .nav a:hover{text-decoration:underline !important;}
      .title a:hover{text-decoration:underline !important;}
      .title-2 a:hover{text-decoration:underline !important;}
      .btn:hover{opacity:0.8;}
      .btn a:hover{text-decoration:none !important;}
      .btn{
        -webkit-transition:all 0.3s ease;
        -moz-transition:all 0.3s ease;
        -ms-transition:all 0.3s ease;
        transition:all 0.3s ease;
      }
      table td {border-collapse: collapse !important;}
      .ExternalClass, .ExternalClass a, .ExternalClass span, .ExternalClass b, .ExternalClass br, .ExternalClass p, .ExternalClass div{line-height:inherit;}
      @media only screen and (max-width:500px) {
        table[class="flexible"]{width:100% !important;}
        table[class="center"]{
          float:none !important;
          margin:0 auto !important;
        }
        *[class="hide"]{
          display:none !important;
          width:0 !important;
          height:0 !important;
          padding:0 !important;
          font-size:0 !important;
          line-height:0 !important;
        }
        td[class="img-flex"] img{
          width:100% !important;
          height:auto !important;
        }
        td[class="aligncenter"]{text-align:center !important;}
        th[class="flex"]{
          display:block !important;
          width:100% !important;
        }
        td[class="wrapper"]{padding:0 !important;}
        td[class="holder"]{padding:30px 15px 20px !important;}
        td[class="nav"]{
          padding:20px 0 0 !important;
          text-align:center !important;
        }
        td[class="h-auto"]{height:auto !important;}
        td[class="description"]{padding:30px 20px !important;}
        td[class="i-120"] img{
          width:120px !important;
          height:auto !important;
        }
        td[class="footer"]{padding:5px 20px 20px !important;}
        td[class="footer"] td[class="aligncenter"]{
          line-height:25px !important;
          padding:20px 0 0 !important;
        }
        tr[class="table-holder"]{
          display:table !important;
          width:100% !important;
        }
        th[class="thead"]{display:table-header-group !important; width:100% !important;}
        th[class="tfoot"]{display:table-footer-group !important; width:100% !important;}
      }
    </style>
          <td data-bgcolor="bg-module" bgcolor="#eaeced">
                <table class="flexible" width="600" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td class="img-flex"><img src="images/img-02.jpg" style="vertical-align:top;" width="600" height="249" alt=""></td>
                  </tr>
                  <tr>
                    <td data-bgcolor="bg-block" class="holder" style="padding:65px 60px 50px;" bgcolor="#f9f9f9">
                      <table width="100%" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                          <td data-color="title" data-size="size title" data-min="20" data-max="40" data-link-color="link title color" data-link-style="text-decoration:none; color:#292c34;" class="title" align="center" style="font:30px/33px Arial, Helvetica, sans-serif; color:#292c34; padding:0 0 24px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          Aerodrome d\'Evreux Normandie
                          </font></font></td>
                        </tr>
                        <tr>
                          <td data-color="text" data-size="size text" data-min="10" data-max="26" data-link-color="link text color" data-link-style="font-weight:bold; text-decoration:underline; color:#40aceb;" align="center" style="font:16px/29px Arial, Helvetica, sans-serif; color:#888; padding:0 0 21px;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Bonjour '.$prenom.' votre compte Client a été crée avec succès.Veuillez confirmer votre adresse email en cliquant sur le lien ci-dessous.
                          </font></font></td>
                        </tr>
                       
                        <tr>
                          <td style="padding:0 0 20px;">
                            <table width="134" align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">
                              <tbody><tr>
                                <td data-bgcolor="bg-button" data-size="size button" data-min="10" data-max="16" class="btn" align="center" style="font:12px/14px Arial, Helvetica, sans-serif; color:#f8f9fb; text-transform:uppercase; mso-padding-alt:12px 10px 10px; border-radius:2px;" bgcolor="#31be52">
                                  <a target="_blank" style="text-decoration:none; color:#f8f9fb; display:block; padding:12px 10px 10px;" href="http://51.161.9.41/confirmation.php?email='.urlencode($email).'&key='.$key.'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Confirmez votre compte</font></font></a>
                                </td>
                              </tr>
                            </tbody></table>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                  <tr><td height="28"></td></tr>
                </tbody></table>
              </td>
          ';
          /*urlencode pourque tout transite parfaitement bien*/
          mail($email, "Confirmation de compte", $message, $header);
                     /*FIN MAIL
                     //LE MAIL SERA ENVOYER SUR LE COMPTE DE LA PERSONNE*/
                    // header('Location: pageConnexion.php?inscription=ok');
                  }
                  else{
                    $msg='Ce utilisateur n\'a pas l\'age requie pour posseder un compte !';
                  }
                   }
                   else{$msg='Cet email est deja Utiliser!!';}
                 }else{$msg='Adresse mail Invalide';}

             }
             else{$msg="Veuiller remplir tous les champs!";}

           }

          














//AJOUT DE SERVICE
if(isset($_POST['submitService']))
{
  /*securisation des variable du formulaire*/
  
  $nom=htmlspecialchars($_POST['nom']);
  $detail=htmlspecialchars($_POST['detail']);
  $typeService = htmlspecialchars($_POST['typeService']);

  /*--------------------------------------*/
  /*Condition de leur validation*/
  if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['detail']) && !empty($_POST['detail']) && isset($_POST['typeService']) && !empty($_POST['typeService']) )
  {
     if($typeService==2){
       $typeService=1;
     }
     else if($typeService==1){
       $typeService=0;
     }
        $requser=$bdd->prepare('SELECT * FROM services WHERE nomS= ?');
        $requser->execute(array($nom));
        $nom_exist=$requser->rowCount();

        if($nom_exist==0)
        {

       
       
        if($typeService==0){
          $insertsrv=$bdd->prepare("INSERT INTO services(nomS,detailS,typeServices,idUserService) VALUES(?,?,?,?)");
                        $insertsrv->execute(array($nom,$detail,$typeService,$_SESSION['ID']));
                        header('Location:add.php?motif=2&inscription=ok');
        }
        //Verif de la taille du fichier
        else if($typeService==1){
 
          $acceptable = array(
            'image/jpeg',
            'image/jpg',
            'image/gif',
            'image/png'
            );

      if(in_array($_FILES['image']['type'],$acceptable)){
            
        
        $maxsize = 2097152; //2Mo 210241024
                      if(($_FILES['image']['type'] <= $maxsize)){
              $id=$_SESSION['ID'];
              $image_name=$id.".".date('Y-m-d-H-i-s');
              $filename=$_FILES['image']['name'];
              $temp_array=explode(".",$filename);/*permet de transformer une chaine de caractere en tableau*/
              $extension=end($temp_array);/*on prend le dernier element du tableau avec end*/
              $chemin_image='IMAGES/'.$image_name.'.'.$extension;
              /*Deplacement du fichier uploader vers son emplacement final*/


              move_uploaded_file($_FILES['image']['tmp_name'] , $chemin_image);

                      
                        $insertsrv=$bdd->prepare("INSERT INTO services(nomS,detailS,typeServices,imgS,idUserService) VALUES(?,?,?,?,?)");
                        $insertsrv->execute(array($nom,$detail,$typeService,$chemin_image,$_SESSION['ID']));

                      header('Location:add.php?motif=2&inscription=ok');

        }else{
          $msg="Taille maximum : 2Mo";
        }
      }
      else{
        $msg="format autoriser : png";
      }
      }
    }
                   else{$msg='Cet nom est deja Utiliser!!';}
                

             }
             else{$msg="Veuiller remplir tous les champs!";}

           }












           //AJOUT DE FORMATION
if(isset($_POST['submitFormation']))
{
  /*securisation des variable du formulaire*/
  
  $nom=htmlspecialchars($_POST['nom']);
 

  /*--------------------------------------*/
  /*Condition de leur validation*/
  if(isset($_POST['nom']) && !empty($_POST['nom']) && isset($_FILES['cours']) && !empty($_FILES['cours']))
  {
    
        $requser=$bdd->prepare('SELECT * FROM cours WHERE nomC= ?');
        $requser->execute(array($nom));
        $nom_exist=$requser->rowCount();

        if($nom_exist==0)
        {

       
       
        
 
          $acceptable = array(
            'application/pdf'
            );

      if(in_array($_FILES['cours']['type'],$acceptable)){
            
        
        $maxsize = 3097152; //3Mo 210241024
                      if(($_FILES['cours']['type'] <= $maxsize)){
              $id=$_SESSION['ID'];
              $pdf_name=$id.".".date('Y-m-d-H-i-s');
              $filename=$_FILES['cours']['name'];
              $temp_array=explode(".",$filename);/*permet de transformer une chaine de caractere en tableau*/
              $extension=end($temp_array);/*on prend le dernier element du tableau avec end*/
              $chemin_pdf='COURS/PDF/'.$pdf_name.'.'.$extension;
              /*Deplacement du fichier uploader vers son emplacement final*/


              move_uploaded_file($_FILES['cours']['tmp_name'] , $chemin_pdf);

                      
                        $insertsrv=$bdd->prepare("INSERT INTO cours(nomC,courPdf,idUser) VALUES(?,?,?)");
                        $insertsrv->execute(array($nom,$chemin_pdf,$_SESSION['ID']));

                      header('Location:add.php?motif=3&inscription=ok');

        }else{
          $msg="Taille maximum : 3Mo";
        }
      }
      else{
        $msg="format autoriser : pdf";
      }
      
    }
                   else{$msg='Cet nom de cours existe déja!';}
                

             }
             else{$msg="Veuiller remplir tous les champs!";}

           }







           //AJOUT D'AVION
           if(isset($_POST['submitAvion']))
           {
             /*securisation des variable du formulaire*/
             
             $nom=htmlspecialchars($_POST['type']);
             $useType=htmlspecialchars($_POST['utilisationType']);
             $tarifSolo=htmlspecialchars($_POST['tarifSolo']);
             $tarifInstruction=htmlspecialchars($_POST['tarifInstruction']);
             
           
             /*--------------------------------------*/
             /*Condition de leur validation*/
             if(isset($nom) && !empty($nom) 
                && isset($_POST['utilisationType']) && !empty($_POST['utilisationType']) 
               
                && isset($_POST['tarifSolo']) && !empty($_POST['tarifSolo']) 
                && isset($_POST['tarifInstruction']) && !empty($_POST['tarifInstruction']))
             {
               
                  
                   $useType2=0;
                                 if($useType==1){
                                   $useType2=0;

                                 }
                                 else if($useType==2){
                                  $useType2=1;
                                 }
                                   $insertsrv=$bdd->prepare("INSERT INTO avions(type,utilisation,tarifSolo,tarifInstructeur,idUserAvion) VALUES(?,?,?,?,?)");
                                   $insertsrv->execute(array($nom,$useType2,$tarifSolo,$tarifInstruction,$_SESSION['ID']));
           
                                 header('Location:add.php?motif=4&inscription=ok');
           
           
                        }
                        else{$msg="Veuiller remplir tous les champs!";}
           
                      }
           
                      ?>
