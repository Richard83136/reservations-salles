<?php

    if (isset($_SESSION['login']) == TRUE) { ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
      
      <title>Reservation salles</title>
    </head>
    <body>
      
    </body>
    </html>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  
    <a class="navbar-brand" href="#">Reservation de salles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active text-dark" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="profil.php">Votre profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="planning.php"> Planning</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-dark" aria-current="page" href="reservation-form.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="logout.php">Déconnexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-dark " href="#" >&nbsp;&nbsp;<?php echo $_SESSION ['login'];?></a>
        </li>
        </ul>
    </div>
  </nav>
  

  
       <?php

         } else {?>
     
         <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  
    <a class="navbar-brand" href="#">Reservation de salles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <!--<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="livre-or.php">Livre d'or</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link text-dark" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="planning.php">Planning</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="inscription.php">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="connexion.php">Connexion</a>
        </li>
        
        </ul>
    </div>
  
</nav>
      
        <?php
  }
  ?>
  



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html> 