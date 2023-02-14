<?php

include('dbconnect.php');
include('header.php');

if(isset($_SESSION['login']))
{
?>

<body >
	
	
	
<div class="parallax_reservation">
<article class="formulairereservation">	
<div class="form-style-5">
	<form method="post" style="width:75%;margin:auto;padding-top:5%;">
	
		<h1 style="text-align:center;padding-bottom:7%;">Réservation de salle</h1>
	
<?php
	
	
	
	$date1= date("Y-m-d");
	$date2= date("H:i");
	$date = $date1."T".$date2;
	
	if(isset($_POST['Ajouter']))
	{
	$debut1= SUBSTR($_POST['datedebut'], 8, 2);
	$fin1 = SUBSTR($_POST['datedefin'], 8, 2);
	$difference2=$fin1-$debut1;
	
	$heuredebut= SUBSTR($_POST['datedebut'],14, 2);
	$heurefin= SUBSTR($_POST['datedefin'],14, 2);
		
	$debut=$_POST['datedebut'];
	$connexion= mysqli_connect("localhost", "root", "", "reservationsalles");
	$query="SELECT *FROM reservations WHERE debut='$debut'";
	$result= mysqli_query($connexion, $query);
	$resultat=mysqli_num_rows($result);
		
	$heure1=SUBSTR($_POST['datedebut'], 11, 2);
	$heure2=SUBSTR($_POST['datedefin'], 11, 2);
	$difference= $heure2 - $heure1;
	$min="08";
	$max="19";
		if(($resultat>0)||($difference != 1)||($min > $heure1)||($max < $heure2)||($difference2 != 0)||($heuredebut != "00")||($heurefin != "00"))
		{
		if($resultat>0){
		?>
		<p class="affichage">
		
        <p style="text-align:center; font-size:20px; color:blue;"><span style="text-align:center; font-size:30px; color:red;" >Attention !!!</span><br>*Créneaux déjà réservé</p>
		
		</p>
		<?php
		}
		if(($heurefin != "00")||($heuredebut != "00")){
		?>
		<p class="affichage">
		
		<p style="text-align:center; font-size:20px; color:blue;"><span style="text-align:center; font-size:30px; color:red;" >Attention !!!</span><br> *Heure pile seulement (ex : 08:00-09:00)</p> 
		
		</p>
		<?php
		}
		if($difference != 1)
		{
		?>
		<p class="affichage">
		
        <p style="text-align:center; font-size:20px; color:blue;"><span style="text-align:center; font-size:30px; color:red;" >Attention !!!</span><br>*Créneaux d'une heure seulement </p>
		
		</p>
		<?php	
		}
		if($difference2 != 0)
		{
		?>
		<p class="affichage">
		<p style="text-align:center; font-size:20px; color:blue;"><span style="text-align:center; font-size:30px; color:red;" >Attention !!!</span><br>*Date début et fin  différente !</p>
		
		</p>
		<?php	
		}
		if($min > $heure1)
		{
		?>
		<p class="affichage">
		<p style="text-align:center; font-size:20px; color:blue;"><span style="text-align:center; font-size:30px; color:red;" >Attention !!!</span>*Heure minium de debut de reservation => 8h<br></p>
		
		</p>
		<?php		
		}
		if($max < $heure2)
		{
		?>
		<p class="affichage">
		<p style="text-align:center; font-size:20px; color:blue;"><span style="text-align:center; font-size:30px; color:red;" >Attention !!!</span>*Heure maximum de fin de reservation => 19h<br></p>
		
		</p>
		<?php		
		}
		}		
		else
		{
		$login=$_SESSION['login'];
		$query1="SELECT  id from utilisateurs WHERE login='$login'";
		$result1= mysqli_query($connexion, $query1);
		$row = mysqli_fetch_array($result1);
		
		$query2="INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`)  VALUES (NULL, '".$_POST['titre']."', '".$_POST['description']."', '".$_POST['datedebut']."', '".$_POST['datedefin']."', '".$row['id']."');";
		$result2= mysqli_query($connexion, $query2);
		header ('location: planning.php');
		}
}
?>
<div class="formu_resa">
			<input required type="text" name="titre" placeholder="Titre *" style="font-size:30px;"  ><br><br>
			<textarea required name="description" placeholder="Description *" style="font-size:30px;" ></textarea><br><br>
		<label>Début :</label>
			<input required name="datedebut" type="datetime-local"  id="meeting-time"  min="<?php echo $date ?>"><br><br>
		<label>Fin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
			<input required name="datedefin" type="datetime-local" id="meeting-time" min="<?php echo $date ?>"><br><br>	
	
	<?php
	if(isset($_SESSION['login']))
	{
	?>
		<input name="Ajouter" type="submit" class="btn btn-success" value="Réserver"  /></div>
	<?php
	}
	?>
	</form>
</div>
</article>

</body>
</html>

<?php
}
else
{
//header ('location: connexion.php');	
}
?>
</div>
