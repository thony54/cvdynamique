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

        //Insértion dans la bdd des données taper par l'utilisateur
        $insert = $bdd->prepare("INSERT INTO trainings(start_date_train, end_date_train, school_train, location_train, title_train, dipl_name_train, users_id_users) VALUES(:start_da, :end_da, :school, :loca, :title, :diplnam, :id)");
        $insert->execute(array(':start_da'=>$start, ':end_da'=>$end, ':school'=>$school, ':loca'=>$loca, ':title'=>$title, ':diplnam'=>$diplnam, ':id'=>$id));
        
?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../create_form.php" );
?>