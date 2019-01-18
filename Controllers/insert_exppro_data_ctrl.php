<?php
    session_start();
    require('../Models/db_connec_mdl.php');

        //Récupération des données du formulaire
        $start = $_POST['start_date_exp'];
        $end = $_POST['end_date_exp'];
        $firm = $_POST['firm_name_exp'];
        $location = $_POST['location_exp'];
        $job = $_POST['job_exp'];
        $mission = $_POST['mission_exp'];
        $type = $_POST['type_contract_exp'];
        $id = $_SESSION['id'];

        //Insértion dans la bdd des données taper par l'utilisateur
        $insert = $bdd->prepare("INSERT INTO exp_pro(start_date_exp, end_date_exp, firm_name_exp, location_exp, job_exp, mission_exp, type_contract_exp, users_id_users) VALUES(:start_exp, :end_exp, :firm, :loca, :job, :mission, :type_con, :id)");
        $insert->execute(array(':start_exp'=>$start, ':end_exp'=>$end, ':firm'=>$firm, ':loca'=>$location, ':job'=>$job, ':mission'=>$mission, ':type_con'=>$type, 'id'=>$id));
        
?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../create_form.php" ); 
?>