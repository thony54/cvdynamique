<?php
    require('../Models/db_connec_mdl.php');


    //Data from form
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    //Condition qui cherche dans l'array si le mail existe
    $req = $bdd->prepare("SELECT mail_user FROM users WHERE mail_user=:mail");
    $req->execute(array(':mail'=>$mail));

        //rowcount qui permet de vérifier si le mail taper existe déjà
        if ($req->rowCount() > 0){

            echo 'Mail indisponible';

            header( "refresh:3;url=../index.php" );

        }else{

            // Si le mail n'existe pas on insert
            $insert = $bdd->prepare("INSERT INTO users(mail_user, keypass_user) VALUES(:mail, :password)");
            $insert->execute(array('mail'=>$mail,'password'=>$password));

            header( "Location: ../index.php" );
        }
?>
