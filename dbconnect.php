
<?php
session_start();
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=reservationsalles;charset=utf8', 'root', '');
        $bdd ->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_WARNING);
        } 
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservationsalles";
$tablename = "reservation";

// translate these
$months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');
$headings = array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi');   
?>


