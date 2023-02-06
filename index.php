<?php
include('dbconnect.php');
include('header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page accueil</title>
</head>

    <!-- <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Reservation de salles</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="planning.php">Planning</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="connexion.php">Connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="inscription.php">Inscription</a>
              </li>
              
              
             </ul>
            </div>
        </div>
      </nav>
</header> -->
<body>
    
    <div class="parallax_accueil">
        <h1 class="text-center pt-5">Reserver votre salle </h1><br><br><br>
        <p style="text-align:center; color:white;">Vous devez vous inscrire , et/ou vous connecter afin de pouvoir poursuivre sur notre site</p>
    </div>  
    <div class="parallax" style="background-image: url('./img/salle1.jpg'); height:520px;background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
  <h1 style="color:black; text-align:center; padding-top:150px;">Réservation <br>de salles</h1>
</div>
  <div class="parallax1" >

    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <h2 class="text-center" style="font-size:2em;"><span style="font-size:2em; color:brown">B</span>ienvenue</h2><br>
            <p style="font-size:20px;text-align:justify;padding-left: 35%;" >Nous vous accueillerons dans un<br>univers calme et serein à l'abri de l'agitation<br>quotidienne<br><br>
            Les salles à la location que nous proposons, vous permettrons de travailler sereinement en équipe
            sur vos projets le temps  d’une heure, d'une journée, d'une semaine, ou plus  ………..<br>
            Que ce soit pour des conférences en visio<br> (connection wifi intégrée à la location) ou 
            des séminaires, regardez nos salles à votre disposition<br>Vous pouvez faire défiler les photos à votre droite &#10132;</p>
        </div>

        <div class="col-6 " style="margin-top: 10%;">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/sallewooden.jpg" class=" d-block mx-auto w-75" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/salleinspirational.jpg" class="d-block mx-auto w-75" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/sallebrick.jpg" class="d-block mx-auto w-75" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/sallestreet.jpg" class="d-block mx-auto w-75" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/sallemeeting.jpg" class="d-block mx-auto w-75" alt="...">
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</div><br><br>
<div class="parallax">
  <div class="trouver container-fluid" style="background-color:bisque; height:920px;">
    <h3 style="text-align:center;padding-top:2%;padding-bottom: 2%;font-size: 40px;">Nous trouver à Toulon ? </h3>

    <img src="./img/cartetoulon.png" class="d-block mx-auto w-50"alt="notreadresse">
  <p style="color:blue; text-align:center; font-size: 20px;"><br><a href="https://goo.gl/maps/ge5ifQgRjtQEjF3K8" target="_blank" style="color:black;" >Cliquez ici pour vous rendre sur Google Maps </a> </p>
  </div>
</div>


</div>
<footer>
  <div class="row">
    <div class="col">
      <h5>&copy; 2023 | Reservation de salles</h5>
    </div>
    <div class="col">
      <h6 style="padding-top:5px;">By Richard.Schulze</h6>
    </div>
  </div>
</footer>



</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>    










    