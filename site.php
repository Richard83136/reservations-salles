<?php
session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Site module-connexion</title>
</head>

<header>
  
  <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Module-connexion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="logout.php">Deconnexion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="profil.php">Profil</a>
            </li>
           </ul>
          </div>
      </div>
    </nav>
</header>
<body>
    <div class="parallax_site">
<?php
//  var_dump($_SESSION);
$bonjour = $_SESSION['login'];
  ?> <h1 style="text-align:center; padding-top:10px;" ><?php echo "Bienvenue $bonjour sur notre site";?></h1>
   <div class="text-center mt-5 ">
  <?php 
  if ($_SESSION['login']== 'admin') {?>
    <h4><a href="admin.php" style="color:blue;">Vous êtes ADMIN vous pouvez vous rendre sur le tableau de données des utilisateurs <p>cliquer ici</p></a></h4>
  <?php
  }
   ?>
  </div>
</div>     










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>