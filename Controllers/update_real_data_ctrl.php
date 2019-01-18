<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $title = $_POST['title_rea'];
        $descri = $_POST['desc_rea'];
        $start = $_POST['start_date_rea'];
        $end = $_POST['end_date_rea'];
        $id = $_SESSION['id'];

        //update des données de la bdd
        $update = $bdd->prepare("UPDATE realisations SET title_rea=:title, desc_rea=:descri, start_date_rea=:start_da, end_date_rea=:end_da WHERE users_id_users=:id)");
        $update->execute(array(':title'=>$title, ':descri'=>$descri, ':start_da'=>$start, ':end_da'=>$end, ':id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../edit_form.php" );
?>
