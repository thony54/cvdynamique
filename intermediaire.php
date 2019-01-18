<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/style_intermediaire.css">
  <link rel="stylesheet" href="../Js/delete_cv.js" type="text/javascript">

</head>
<body>
  
  <div class="container">
    
  <a id="anime" target="_blank">Curriculum</a>

    <div id="un" class="row d-flex justify-content-center">

      <!--page intermédiaire qui affiche 3 boutons créer, modifier et supprimer-->
      <div class="col-3">
        <a href="Controllers/pdf.php"><button type="submit" class="btn btn-success">PDF</button></a>
      </div>
      <div class="col-3">
        <a href="create_form.php"><button type="submit" class="btn btn-success">créer cv</button></a>
      </div>
      <div class="col-3">
        <a href="edit_form.php"><button type="submit" class="btn btn-success">modifier cv</button></a>
      </div>
      <div class="col-3">
        <button type="submit" class="btn btn-danger" onclick="myFonction()">supprimer cv</button>
      </div>

    </div>
  </div

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<script> function myFonction() {
    var delcv = prompt("Êtes vous sûr de vouloir supprimer l'entièreté de votre CV ?('oui' ou 'non')")

    if (delcv === "oui"){
      window.location.replace("Controllers/delete_cv.php");
    }else if(delcv === "non"){
      window.location.replace("intermediaire.php");
    }
}</script>