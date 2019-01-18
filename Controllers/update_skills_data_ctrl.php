<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $title = $_POST['title_skill'];
        $descri = $_POST['desc_skill'];
        $id = $_SESSION['id'];

        //update des données de la bdd
        $update = $bdd->prepare("UPDATE skills SET title_skill=:title, desc_skill=:descri WHERE users_id_users=:id)");
        $update->execute(array(':title'=>$title, ':descri'=>$descri, ':id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../edit_form.php" ); 
?>