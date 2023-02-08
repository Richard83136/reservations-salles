<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Planning</title>
  <link rel="stylesheet" href="styleplanning.css">
</head>
<body>

<header>
<?php include('header.php'); ?>
</header>



<?php


	$con=mysqli_connect("localhost","root","","reservationsalles");
	mysqli_set_charset($con, "utf8");
	$date="SELECT * FROM reservations";
	$query=mysqli_query($con, $date);
	$result=mysqli_fetch_all($query);


?>
<div class="fond_ecran_reservation">
<section >

<article style="padding-top:10%;">
<table class="tableau">
	<thead >
		<tr style="padding-left:2%;padding-right:2%;" >
			<th >
			</th>
			<th class="ligne-jours"  >
				&nbsp;Lundi&nbsp;
			</th>
			<th  class="ligne-jours" >
				&nbsp;Mardi&nbsp;
			</th>
			<th  class="ligne-jours">
				&nbsp;Mercredi&nbsp;
			</th>
			<th class="ligne-jours">
				&nbsp;Jeudi&nbsp;
			</th>
			<th class="ligne-jours">
				&nbsp;Vendredi&nbsp;
			</th>
			<th class="ligne-jours">
				&nbsp;Samedi&nbsp;
			</th>
			<th class="ligne-jours">
				&nbsp;Dimanche&nbsp;
			</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		for($ligne =8; $ligne <= 19; $ligne++ )
		{
			echo "<tr style='border:2px solid black;'>";
			echo "<td style='border:2px solid black;padding:10px;'>".$ligne."h</td>";

			for($colonne = 1; $colonne <= 7; $colonne++)
			{
				echo "<td style='border:2px solid black;padding:10px;'>";
				foreach($result as $value)
				{
				$jour=date("w", strtotime($value[3]));
				$h=date("H", strtotime($value[3]));
				if($h==$ligne && $jour== $colonne)
				{
					echo $value[1];
				?>
					<form method="get" action="reservation.php">	
						<!-- <input name="id" class="btn btn-info" type="submit" value="Detail" > -->
						<button class="boutondetail" type="submit" name="id" value="<?=$value[0]?>" style="border-radius:20px;background-color:cornflowerblue;padding:0 10px 0 10px;">Detail</button>

						<input name="test" type="hidden" value="<?php echo $value[0];
						// var_dump($value);
						 ?>">  
					
					</form>	
				<?php					
				}
			}
				echo "</td>";
			}
		}
		echo "</tr>";

?>
		
</table>


</article>

</section>
</div>

</body>

</html> 