<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $name = $_POST['name_user'];
        $lastname = $_POST['lastname_user'];
        $address = $_POST['address_user'];
        $phone = $_POST['phone_user'];
        $birth = $_POST['date_birth_user'];
        $handicap = $_POST['handicap_user'];
        $obj = $_POST['obj_career_user'];
        $id = $_SESSION['id'];

        //Insértion dans la bdd des données taper par l'utilisateur
        $update = $bdd->prepare("UPDATE users SET name_user=:name_user, lastname_user=:lastname_user, address_user=:address_user, phone_user=:phone_user, date_birth_user=:birth_user, handicap_user=:handicap_user, obj_career_user=:obj_user WHERE id_users=:id");
        $update->execute(array('name_user'=>$name,'lastname_user'=>$lastname,'address_user'=>$address,'phone_user'=>$phone,'birth_user'=>$birth,'handicap_user'=>$handicap,'obj_user'=>$obj, 'id'=>$id));
        
?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../create_form.php" );
?>