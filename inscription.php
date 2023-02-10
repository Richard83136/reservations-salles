<?php
include("dbconnect.php");

        @$login = htmlspecialchars($_POST['login']);
        
        @$password = ($_POST['password']);
        if ($_POST == NULL) // génération d'un formulaire de base
    { 
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page d'inscription</title>
</head>

    <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">reservation de salles</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Retour</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="connexion.php">Connexion</a>
              </li>
              
             </ul>
            </div>
        </div>
      </nav>
</header>
<body>
    <div class="parallax_inscription">  
    <h1 class="text-center pt-5">Bienvenue sur la page d'inscription </h1>   

            
            
            <div class="container " id="page_centrale_connexion">
                <div class="row h-100  ">
                    <div class="col-12 h-100 d-flex justify-content-center align-items-center">
                        <form class="w-50" action="inscription.php" method="post">
                            <div class="form-group form-control-lg">
                                <label for="login">Choisissez votre Login:</label>
                                <input type="login" name="login" class="form-control form-control-lg" id="login">


                            </div>
                            

                            

                            
                            <div class="form-group form-control-lg">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control form-control-lg" id="password">
                            </div>
                            <div class="form-group form-control-lg">
                                <label for="confirm_password">Confirmez le Password:</label>
                                <input type="password" name="confirm_password" class="form-control form-control-lg" id="confirm_password">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary">S'enregistrer</button>


    </div></div>


                        </form>
                    </div>
                </div>

            </div>

            <?php
        } else {
            $req = $bdd->prepare(' SELECT * FROM utilisateurs  WHERE login = ?'); //on va chercher dans la bdd si le login existe déjà
            $req->execute(array($login));
            $donnees = $req->fetch();
            if (@$donnees['login'] == $_POST['login']) // on compare le résultat, si c'est le cas on générère un form avec le message " login déjà utilisé " 
            {
            ?>
                <div style="background-image:linear-gradient(rgba(255, 255, 255, 0.274),rgba(255, 255, 255, 0.295)), url('images/salleinspirational.jpg');width:100%;height:840px;background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: scroll;margin-top: -10px;">
                <h3 style="text-align:center; padding-top:10%;">Login déjà utilisé veuillez en choisir un autre</h3>
                <button style="background-color:red; border-radius:20px;display:block;margin:auto;height:30px;"><a href="inscription.php" style="color:white;">retour formulaire inscription</a> </button></div>
                <?php
            } else {
                if ($_POST['login'] != NULL  and  $_POST['password'] != NULL and  $_POST['confirm_password'] != NULL)
                // si tous les champs sont remplis, on peu passer à la suite
                {
                    if (@$_POST['confirm_password'] === @$_POST['password'])
                    // on verifie d'abord que les mdp sont bien identiques
                    {
                        $req = $bdd->prepare('INSERT INTO utilisateurs(login, password) VALUES(:login, :password)');
                        $req->execute(array(
                            'login' => $login,
                            'password' => $password,));
                        header('Location: connexion.php'); //redirection
                    } else
                    // si mdp non identiques, on génère le formulaire avec un message
                    { ?>
                        <div style="background-image:linear-gradient(rgba(255, 255, 255, 0.274),rgba(255, 255, 255, 0.295)), url('images/salleinspirational.jpg');width:100%;height:840px;background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: scroll;margin-top: -10px;">
                        <h3 style="text-align:center; padding-top:10%;">Les mots de passe ne sont pas identiques</h3>
                <button style="background-color:red; border-radius:20px;display:block;margin:auto;height:30px;"><a href="inscription.php" style="color:white;">retour formulaire inscription</a> </button></div>
                    <?php
                    }
                } else
                // if empty :
                { ?>
                    <div style="background-image:linear-gradient(rgba(255, 255, 255, 0.274),rgba(255, 255, 255, 0.295)), url('images/salleinspirational.jpg');width:100%;height:840px;background-repeat: no-repeat;background-position: center;background-size: cover;background-attachment: scroll;margin-top: -10px;">
                    <h3 style="text-align:center; padding-top:10%;">Veuillez remplir tous les champs</h3>
                <button style="background-color:red; border-radius:20px;display:block;margin:auto;height:30px;"><a href="inscription.php" style="color:white;">retour formulaire inscription</a> </button></div>
        <?php
                }}
            }
        $bdd = null;
        ?>


    


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
