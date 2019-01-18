<!doctype html>
<html lang="en">
    <head>
        <title>Projet CV Dynamique</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/style_index.css">
    </head>
        <body>

        <div class="container">
            <div id="un" class="row d-flex justify-content-between">

            <!--Formulaire connexion-->
            <form action="Controllers/signIn_ctrl.php" method="post">

                <!--inputemail,inputpassword-->
                <div id="deux" class="form-group">
                    <label for="inputemail">Email address</label>
                    <input type="email" class="form-control" name="mail" id="inputemail" aria-describedby="emailHelp" placeholder="exemple@gmail.com">

                    <small id="emailHelp" class="form-text text-muted">L'e-mail que vous entrez sera conservé dans votre CV</small>
                </div>
                <div id="trois" class="form-group">
                    <label for="inputpass">Password</label>
                    <input type="password" class="form-control" name="password" id="inputpass" placeholder="Password">
                </div>

                <!--Input Buttons-->
                <button type="submit" class="btn btn-primary" onclick="signIn()">Connection</button>

            </form>

            <!--Formulaire inscription-->
            <form action="Controllers/signUp_ctrl.php" method="post">

            <!--inputemail, inputpassword-->
            <div id="1" class="form-group">
                <label for="inputemail">Email address</label>
                <input type="email" class="form-control" name="mail" id="inputemail" aria-describedby="emailHelp" placeholder="exemple@gmail.com">

                <small id="emailHelp" class="form-text text-muted">L'e-mail que vous entrez sera conservé dans votre CV</small>
            </div>
            <div id="2" class="form-group">
                <label for="inputpass">Password</label>
                <input type="password" class="form-control" name="password" id="inputpass" placeholder="Password">
            </div>

            <!--Input Buttons-->
            <button type="submit" class="btn btn-danger" onclick="signUp()">Register</button>

            </form>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
