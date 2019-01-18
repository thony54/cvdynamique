<!doctype html>
<html lang="en">
<head>
  <title>curriculum</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style_create_form.css">

</head>
<body>

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">A propos de moi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mes expériences</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Formations et mes diplomes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#skills" role="tab" aria-controls="skills" aria-selected="false">Mes compétences</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#realisations" role="tab" aria-controls="realisations" aria-selected="false">Mes réalisations</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#activites" role="tab" aria-controls="activites" aria-selected="false">Centres d'intérêt</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">

    <!--Formulaire avec un controller par onglet du cv-->
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <form method="post" action="Controllers/insert_users_data_ctrl.php">
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="firstname"  placeholder="Votre Prénom" name="name_user">
        </div>
        <div class="form-group">
          <label for="lastname">Nom de famille</label>
          <input type="text" class="form-control" id="lastname" placeholder="Votre Nom de famille" name="lastname_user">
        </div>
        <div class="form-group">
          <label for="adress">Adresse</label>
          <input type="text" class="form-control" id="adress" placeholder="Votre adresse" name="address_user">
        </div>
        <div class="form-group">
          <label for="mail">Adresse mail</label>
          <input type="mail" class="form-control" id="mail" placeholder="Votre Email" name="mail_user">
        </div>
        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="text" class="form-control" id="phone" placeholder="Votre numéro de téléphone" name="phone_user">
        </div>
        <div class="form-group">
          <label for="birth">Date de naissance</label>
          <input type="date" class="form-control" id="birth" name="date_birth_user">
        </div>
        <div class="form-group">
          <label for="handicap">Particularité(s)</label>
          <input type="text" class="form-control" id="handicap" name="handicap_user">
        </div>
        <div class="form-group">
          <label for="objectif">Objectif de carrière</label>
          <input type="longtext" class="form-control" id="objectif" placeholder ="Vos perspectives de carrière" name="obj_career_user">
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>
      </form>
    </div>

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <form method="post" action="Controllers/insert_exppro_data_ctrl.php">
        <div class="form-group">
          <label for="contrat">Type de contrat</label>
          <input type="text" class="form-control" id="contrat" name="type_contract_exp>
        </div>
        <div class="form-group">
          <label for="firm_name">Nom de l'entreprise</label>
          <input type="text" class="form-control" id="firm_name" placeholder="" name="firm_name_exp">
        </div>
        <div class="form-group">
          <label for="lastname">Lieu d'activité</label>
          <input type="text" class="form-control" id="place" placeholder="" name="location_exp">
        </div>
        <div class="form-group">
          <label for="lastname">Date de début</label>
          <input type="text" class="form-control" id="start_date" placeholder="" name="start_date_exp">
        </div>
        <div class="form-group">
          <label for="lastname">Date de fin</label>
          <input type="text" class="form-control" id="end_date" placeholder="" name="end_date_exp">
        </div>
        <div class="form-group">
          <label for="lastname">Durée de l'activité</label>
          <input type="text" class="form-control" id="duration" placeholder="" name="job_exp">
        </div>
        <div class="form-group">
          <label for="lastname">Votre mission</label>
          <input type="text" class="form-control" id="mission" placeholder="" name="mission_exp">
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>
      </form>
    </div>

    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <form method="post" action="Controllers/insert_trainings_data_ctrl.php">
        <div class="form-group">
          <label for="lastname">formation(s)</label>
          <input type="text" class="form-control" id="formation" placeholder="" name="title_train">
        </div>
        <div class="form-group">
          <label for="lastname">etablissement</label>
          <input type="text" class="form-control" id="school" placeholder="" name="school_train">
        </div>
        <div class="form-group">
          <label for="lastname">Lieu</label>
          <input type="text" class="form-control" id="train_place" placeholder="" name="location_train">
        </div>
        <div class="form-group">
          <label for="lastname">Date de début</label>
          <input type="text" class="form-control" id="start_train" placeholder="" name="start_date_train">
        </div>
        <div class="form-group">
          <label for="lastname">Date de fin</label>
          <input type="text" class="form-control" id="end_train" placeholder="" name="end_date_train">
        </div>
        <div class="form-group">
          <label for="lastname">Diplomes</label>
          <input type="text" class="form-control" id="diplome" placeholder="" name="dipl_name_train">
        </div>
        <div class="form-group">
          <label for="lastname">obtenu</label>
          <input class="form-control" id="diplome" placeholder="" name="dipl_validate_train">
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>
      </form>
    </div>

    <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="profile-tab">
      <form method="post" action="Controllers/insert_skills_data_ctrl.php">
        <div class="form-group">
          <label for="lastname">Type de compétence</label>
          <input type="text" class="form-control" id="title_skills" placeholder="" name="title_skill">
        </div>
        <div class="form-group">
          <label for="lastname">Description</label>
          <input type="text" class="form-control" id="desc_skills" placeholder="" name="desc_skill">
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>
      </form>
    </div>

    <div class="tab-pane fade" id="realisations" role="tabpanel" aria-labelledby="profile-tab">
      <form method="post" action="Controllers/insert_real_data_ctrl.php">
        <div class="form-group">
          <label for="lastname">Réalisations ou projets effectués</label>
          <input type="text" class="form-control" id="title_rea" placeholder="" name="title_rea">
        </div>
        <div class="form-group">
          <label for="lastname">description</label>
          <input type="text" class="form-control" id="desc_rea" placeholder="" name="desc_rea">
        </div>
        <div class="form-group">
          <label for="lastname">date de début</label>
          <input type="text" class="form-control" id="start_date_rea" placeholder="" name="start_date_rea">
        </div>
        <div class="form-group">
          <label for="lastname">date de fin</label>
          <input type="text" class="form-control" id="end_date_rea" placeholder="" name="end_date_rea">
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>
      </form>
    </div>
    <div class="tab-pane fade" id="activites" role="tabpanel" aria-labelledby="profile-tab">
      <form method="post" action="Controllers/insert_activities_data_ctrl.php">
        <div class="form-group">
          <label for="lastname"></label>
          <input type="text" class="form-control" id="title_act" placeholder="vos hobbies" name="title_act">
        </div>
        <div class="form-group">
          <label for="lastname"></label>
          <input type="text" class="form-control" id="desc_act" placeholder="décrivez votre hobbies si vous le souhaitez" name="desc_act">
        </div>
        <button type="submit" class="btn btn-success">envoyer</button>
      </form>
    </div>
  </div>

</body>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>
