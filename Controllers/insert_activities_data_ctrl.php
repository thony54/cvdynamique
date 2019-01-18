<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $title = $_POST['title_act'];
        $descri = $_POST['desc_act'];
        $id = $_SESSION['id'];

        //Insértion dans la bdd des données taper par l'utilisateur
        $insert = $bdd->prepare("INSERT INTO activities(title_act, desc_act, users_id_users) VALUES(:title, :descri, :id)");
        $insert->execute(array(':title'=>$title, ':descri'=>$descri, ':id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../create_form.php" );
?>
