<?php 

    require('../Models/db_connec_mdl.php');

        //Données récupérées du formulaire et comparées aux données de la BDD
        $mail = $_POST['mail'];
        $password = $_POST['password'];

            $req = $bdd->prepare("SELECT mail_user, keypass_user, id_users FROM users WHERE mail_user = :mail AND keypass_user = :pass");
            $req->execute(array('mail'=>$mail, 'pass'=>$password));

            $result = $req->fetch();

            if (!$result){
                
                echo 'Mauvais identifiant ou mot de passe !';

            }else{

                    session_start();
                    $_SESSION['id'] = $result['id_users'];

                    header( "Location: ../intermediaire.php" ); 
            }
            
?>