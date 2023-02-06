<?php session_start(); ?>

<?php
if ($_SESSION['login']!=='admin') {
    header('Location: site.php');
}


include_once("dbconnect.php");

        //récupère les données du compte 
        $req = $bdd->query('SELECT * FROM utilisateurs ');
        $donnees = $req->fetch(PDO::FETCH_ASSOC);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page reservée Admin</title>
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
                <a class="nav-link " aria-current="page" href="logout.php">Deconnection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="profil.php">Profil</a>
              </li>
             </ul>
            </div>
        </div>
      </nav>
</header>
<body>
<div class="acces">
    <?php
$bonjour = $_SESSION['login'];
  ?> <h4 style="text-align:center; padding-top:10px; color:white;" ><?php echo "Cher $bonjour <br>voici l'affichage sous forme de tableau<br> des utilisateurs dans votre base de donnée";?></h4>

        <!-- tableau d'affiche des données utilisateurs -->
        <div class='container  table-responsive-lg'><br>

            <table class="table table-bordered table-hover ">
                <th class="thead-light">
                    <tr>
                        <?php
                        foreach ($donnees as $key => $value) {
                            echo '<th>' . $key . '</th> ';
                        }
                        ?>
                    </tr>
                </th>
                <tb>
                    <tr>
                        <?php
                        echo '<tr>';
                        foreach ($donnees as $key => $value) {
                            echo '<td>' . $value . '</td>';
                        }
                        echo '<tr/>';
                        while (($donnees = $req->fetch(PDO::FETCH_ASSOC))  != NULL) {
                            echo '<tr>';
                            foreach ($donnees as $key => $value) {
                                echo '<td>' . $value . '</td>';
                            }
                            '<tr/>';
                        }
                        ?>
                    </tr>
                </tb>
            </table>
        </div>
</div>
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>