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

        //update des données de la bdd
        $update = $bdd->prepare("UPDATE exp_pro SET start_date_exp=:start_exp, end_date_exp=:end_exp, firm_name_exp=:firm, location_exp=:loca, job_exp=:job, mission_exp=:mission, type_contract_exp=:type_con WHERE users_id_users=:id");
        $update->execute(array(':start_exp'=>$start, ':end_exp'=>$end, ':firm'=>$firm, ':loca'=>$location, ':job'=>$job, ':mission'=>$mission, ':type_con'=>$type, 'id'=>$id));

?>

<script>
    alert ('Infos sauvegardées');
</script>

<?php
    header( "refresh:1;url=../edit_form.php" ); 
?>