<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $title = $_POST['title_skill'];
        $descri = $_POST['desc_skill'];
        $id = $_SESSION['id'];
        
        //Insértion dans la bdd des données taper par l'utilisateur
        $insert = $bdd->prepare("INSERT INTO skills(title_skill, desc_skill, users_id_users) VALUES(:title, :descri, :id)");
        $insert->execute(array(':title'=>$title, ':descri'=>$descri, ':id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../create_form.php" ); 
?>