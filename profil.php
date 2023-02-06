<?php
session_start();
include_once("dbconnect.php");
@$login = htmlspecialchars($_POST['login']);
        @$nom = htmlspecialchars($_POST['nom']);
        @$prenom = htmlspecialchars($_POST['prenom']);

       
 //récupère les données du compte 

        $req = $bdd->prepare('SELECT * FROM utilisateurs  WHERE id  = :id');
        $req->execute(array('id' => $_SESSION['id']));
        $donnees = $req->fetch();
        ?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page modification profil</title>
</head>

    <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Module_connexion</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="site.php">Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="logout.php">Deconnexion</a>
            </li>
            
              
             
             </ul>
            </div>
        </div>
      </nav>
</header>
<body>
    <div class="parallax_profil">
        <h2 class="text-center pt-5">Modifiez votre profil ici !!</h2>
        <div class="container " id="page_centrale_connexion">
            <div class="row h-100  ">
                <div class="col-12 h-100 d-flex justify-content-center align-items-center">
                    <form class="w-50" action="profil.php" method="post">
                        <div class="form-group">
                            <label for="login">Modifier votre pseudo</label>
                            <input type="login" name="login" class="form-control form-control-lg" id="login" value="<?php echo $donnees['login'];   ?>">
                        </div>
                        <div class="form-group">
                            <label for="nom">Modifier votre nom</label>
                            <input type="text" name="nom" class="form-control form-control-lg" id="nom" value="<?php echo $donnees['nom'];   ?>">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Modifier votre prénom</label>
                            <input type="text" name="prenom" class="form-control form-control-lg" id="prenom" value="<?php echo $donnees['prenom'];   ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Modifier votre password</label>
                            <input type="password" name="password" class="form-control form-control-lg" id="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmer la modification du password</label>
                            <input type="password" name="confirm_password" class="form-control form-control-lg" id="confirm_password">
                        </div><br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" name="submit" class="btn btn-primary d-block">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>

        <?php if (isset($_POST['submit'])) //verif d'envoi du formulaire
        {
            if (!$_POST['password'] == NULL or !$_POST['confirm_password'] == NULL) //verif pour le password
            {
                if (!$_POST['password'] == NULL and $_POST['confirm_password'] == NULL) {
                    echo ' <div class=row><div class="col-12"><p class="text-center">Vous devez confirmer votre mot de passe</p></div></div> ';
                    
                }
                if ($_POST['password'] == NULL and !$_POST['confirm_password'] == NULL) {
                    echo ' <div class=row><div class="col-12"><p class="text-center">Vous n\'avez pas saisi le champs " Modifier votre password "</p></div></div> ';
                    
                }
                if (!$_POST['password'] == NULL and !$_POST['confirm_password'] == NULL and  $_POST['password'] !== $_POST['confirm_password']) {
                    echo ' <div class=row><div class="col-12"><p class="text-center">Vous devez saisir deux mots de passe identiques</p></div></div> ';
                    
                    
                }
                if ($_POST['password'] === $_POST['confirm_password']) //modification du password
                {
                    $password = $_POST['password'];
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $req = $bdd->prepare('UPDATE utilisateurs SET password = :password WHERE id  = :id');
                    $req->execute(array(
                        'password' => $password,
                        'id' => $donnees['id']));
                }
            } 
            if (!$_POST['login'] == NULL) //verif  changement pour le login
            {
                $req = $bdd->prepare('UPDATE utilisateurs SET login = :login WHERE id  = :id');
                $req->execute(array(
                    'login' => $_POST['login'],
                    'id' => $donnees['id']));
                $_SESSION['login'] = $_POST['login'];
            }
            if (!$_POST['nom'] == NULL ) //verif changement pour le nom
            {
                $req = $bdd->prepare('UPDATE utilisateurs SET nom = :nom WHERE id  = :id');
                $req->execute(array(
                    'nom' => $_POST['nom'],
                    'id' => $donnees['id']));
                
                    $_SESSION['nom'] = $_POST['nom'];
            }
            if (!$_POST['prenom'] == NULL ) //verif et changement pour le prénom
            {
                $req = $bdd->prepare('UPDATE utilisateurs SET prenom = :prenom WHERE id  = :id');
                $req->execute(array(
                    'prenom' => $_POST['prenom'],
                    'id' => $donnees['id']));

                $_SESSION['prenom'] = $_POST['prenom'];
            }
            header('Location: profil.php'); //rafraichissement de la page pour remettre les valeurs affichées dans les inputs à jour
        }
?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
