<?php

    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        //Selection BDD
            $req = $bdd->prepare("SELECT mail_user, keypass_user, id_users FROM users WHERE mail_user = :mail AND keypass_user = :pass");
            $req->execute(array('mail'=>$mail, 'pass'=>$password));

            $result = $req->fetch();

            //Condition qui cherche dans l'array si le mail existe
            if (!$result){
                
                echo 'Mauvais identifiant ou mot de passe !';

            }else{

                    //Si le mail existe alors on garde l'id liée au mail grâce à session_start();
                    session_start();
                    $_SESSION['id'] = $result['id_users'];

                    echo 'Vous êtes connecté !';
                    header( "refresh:3;url=../intermediaire.php" ); 
            }

?>