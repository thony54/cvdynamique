<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $title = $_POST['title_act'];
        $descri = $_POST['desc_act'];
        $id = $_SESSION['id'];

        //update des données de la bdd
        $update = $bdd->prepare("UPDATE activities SET title_act=:title, desc_act=:descri WHERE users_id_users=:id");
        $update->execute(array(':title'=>$title, ':descri'=>$descri, ':id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../edit_form.php" ); 
?>