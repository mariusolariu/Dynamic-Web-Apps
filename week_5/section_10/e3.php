		<?php
			session_start();

			$rolledDice = 0;
			$dices;
	
			if ($_POST["submit"]){
				$rolledDice = rand(1, 6);
				$dices = $_SESSION["dices"];
				$dices[$rolledDice - 1]++;
				$_SESSION["dices"] = $dices;
			}else{
				echo "here";
				$dices = array(0, 0, 0, 0, 0, 0);
				$_SESSION["dices"] = $dices;		
			}		

			displayForm($rolledDice, $dices);
	
		?>	
<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<style>
			table, td, tr, th{
				border: 1px solid black;
				padding: 3px 3px;
			}
		</style>
		<script>
			
		</script>
	</head>

	<body>
		
		<?php

			function displayForm($rolledDice, $dices){
		?>
						<table>
							<form action = "e3.php" method = "POST">
								<tr><td> <img src = <?php  echo "\"./dice_sides/dice${rolledDice}.png\"";  ?> alt = "Dice img"> 	</td> </tr>
								<tr><td> <input type = "submit" name = "submit" value = "Roll Dice"> </td> </tr>
							</form>
						</table>
						
						<p> </p>
					<table>
						<tr>
							<th>  Dice Face </th> <th> Times Rolled  </th>
						</tr>
		<?php
				for ($i = 0; $i < 6; $i++){
					echo "<tr> <td>" . ($i + 1) . "</td> <td> ${dices[$i]} </td> </tr>";	
				
				}

				echo "</table>";
			}

		?>
	</body>

</html>

