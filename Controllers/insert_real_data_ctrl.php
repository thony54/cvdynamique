<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $title = $_POST['title_rea'];
        $descri = $_POST['desc_rea'];
        $start = $_POST['start_date_rea'];
        $end = $_POST['end_date_rea'];
        $id = $_SESSION['id'];

        //Insértion dans la bdd des données taper par l'utilisateur
        $insert = $bdd->prepare("INSERT INTO realisations(title_rea, desc_rea, start_date_rea, end_date_rea, users_id_users) VALUES(:title, :descri, :start_da, :end_da, :id)");
        $insert->execute(array(':title'=>$title, ':descri'=>$descri, ':start_da'=>$start, ':end_da'=>$end, ':id'=>$id));
        
?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../create_form.php" ); 
?>