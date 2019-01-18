<?php

    session_start();
    require('../Models/db_connec_mdl.php');


    $id = $_SESSION['id'];

    $delete = "DELETE FROM trainings WHERE users_id_users = '$id'";
    $res = $bdd->exec($delete);
    $delete2 = "DELETE FROM exp_pro WHERE users_id_users = '$id'";
    $res = $bdd->exec($delete2);
    $delete3 = "DELETE FROM realisations WHERE users_id_users = '$id'";
    $res = $bdd->exec($delete3);
    $delete4 = "DELETE FROM activities WHERE users_id_users = '$id'";
    $res = $bdd->exec($delete4);
    $delete5 = "DELETE FROM skills WHERE users_id_users = '$id'";
    $res = $bdd->exec($delete5);
    $delete6 = "DELETE FROM users WHERE id_users = '$id'";
    $res = $bdd->exec($delete6);   

    header("Location: ../index.php")
?>