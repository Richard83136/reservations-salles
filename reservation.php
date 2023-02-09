<?php
session_start();
include('header.php');
?>


<?php
    $mysqli = new mysqli("localhost", "root", "", "reservationsalles");
    $recup = $_GET['id'];
    $request = $mysqli->query("SELECT titre, description, debut, fin FROM reservations WHERE id = $recup");
    
    $results = $request -> fetch_array(MYSQLI_ASSOC);
    ?>
    <div style="background-image:linear-gradient(rgba(255, 255, 255, 0.193),rgba(255, 255, 255, 0.136)), url('./images/salle1.jpg');width:100%;height:750px;padding-top:10%;">
    <?php
    echo "<table style='border:1px solid black;margin:auto;padding-top:10%;background-color:bisque;'><tr style='border:1px solid black;'>";
    
    
    ?>
    <th style='border:1px solid black;padding-left:2%;padding-right:2%; text-align:center;'> Titre </th> 
    <th style='border:1px solid black;padding-left:2%;padding-right:2%; text-align:center;'> description </th> 
    <th style='border:1px solid black;padding-left:2%;padding-right:2%; text-align:center;'> Début reservation </th> 
    <th style='border:1px solid black;padding-left:2%;padding-right:2%; text-align:center;'> Fin<br> réservation </th> 

    <?php
    // }
    echo "</tr>";
    // foreach ($_GET as $key => $value) 
    // {
       echo "<tr style='border:1px solid black;text-align:center;padding:10px;'>";
       foreach ($results as $value)//chaque resultat affiché
       {
             echo "<td style='border:1px solid black;text-align:center;padding:10px;'>" . $value . "</td>";//chaque valeur correspondante
       }
       echo "</tr>";
       $results = $request -> fetch_array(MYSQLI_ASSOC);
    // }
    echo "</table>";
   
    


    ?>
</div>
    


