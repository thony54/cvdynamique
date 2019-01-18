<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $start = $_POST['start_date_train'];
        $end = $_POST['end_date_train'];
        $school = $_POST['school_train'];
        $loca = $_POST['location_train'];
        $title = $_POST['title_train'];
        $diplnam = $_POST['dipl_name_train'];
        $id = $_SESSION['id'];

        //update des données de la bddt
        $update = $bdd->prepare("UPDATE trainings SET start_date_train=:start_da, end_date_train=:end_da, school_train=:school, location_train=:loca, title_train=:title, dipl_name_train=:diplnam, WHERE users_id_users=:id)");
        $update->execute(array(':start_da'=>$start, ':end_da'=>$end, ':school'=>$school, ':loca'=>$loca, ':title'=>$title, ':diplnam'=>$diplnam, 'id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../edit_form.php" );
?>
