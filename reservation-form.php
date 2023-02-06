<?php
include('header.php');
include_once("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page reservation</title>
</head>

    
    
<div class="calendrier">
	<div class="planning" style="padding-top:8%;">
<h1 style=" text-align:center;">Calendrier de réservation</h1>
<table border="1" cellpadding="5" width="1000" class=" tableau_resa mx-auto ">
	<tr>
		<td valign="top">
		<form action="book.php" method="post" >
			<h3>Faire une réservation de salle</h3>
			<p><input checked="checked" name="item" type="radio" value="Wooden" /><b>Wooden</b> 
			| <input name="item" type="radio" value="Inspirational" /><b>Inspirational</b> 
			| <input name="item" type="radio" value="Street" /><b>Street</b> 
			| <input name="item" type="radio" value="Meeting" /><b>Meeting</b> 
			| <input name="item" type="radio" value="Brick" /><b>Brick</b></p>
			<table style="width: 70%">
				<tr >
					<td><b>Login:</b></td>
					<td> <input maxlength="100" name="name" required="" type="text" /></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td ><b>Téléphone:</b></td>
					<td>
			<input maxlength="20" name="phone" required="" type="text" /></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Jour de réservation:</b></td>
					<td>
			<input id="from" name="start_day" required="" type="text" /></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td> <select name="start_hour">
			<option selected="selected">08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			</select></td>
					<td>&nbsp;</td>
					<td><select name="end_hour">
          <option selected="selected">--</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			
			
			
			</select></td>
				</tr>
			</table><br>
			<p>
			<input name="book" type="submit" class="d-block mx-auto btn btn-info value="Réserver" />
		</form>
		</td><br>
		<td valign="top"><br>
		<h3 >Annuler la réservation</h3>
		<form action="cancel.php" method="post">
			<p></p>
			ID: <input name="id" required="" type="text" /><br />
			<p>
			<p><input name="cancel" class="d-block mx-auto btn btn-danger" type="submit" value="Effacer" /></p>
		</form>
		</td>
	</tr>
</table><br>

</div>
</div>