<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>Planning</title>
      
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
					<?php

    					if (isset($_SESSION['login']) === TRUE) { ?>
						<button class="boutondetail" type="submit" name="id" value="<?=$value[0]?>" style="border-radius:20px;background-color:cornflowerblue;padding:0 10px 0 10px;">Detail</button>
						<input name="test" type="hidden" value="<?php echo $value[0];
						// var_dump($value);
						 ?>">  
						</form>	
						<?php }else{?>
							
							<p style="font-size:10px;">(Vous devez vous connecter pour voir le détail)</p>
						<?php }
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html> 
