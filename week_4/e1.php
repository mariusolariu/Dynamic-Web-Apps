<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
		
		<style>
			table, td, tr{
				border: 1px solid black;
				padding: 3px 3px;
			}
			
			p {
				color: green;
			}
		</style>
	</head>

	<body>
		<?php
			
			if (isset($_POST["submitB"])){
				processForm();
			}else{
				displayForm();
			}

			function displayForm(){
		?>

				<form action = "e1.php" method = "post">
					<table>
						<tr> <td> <label for = "heightI"> Height: </label> </td> 
						<td>	<input id = "heightI" name = "heightI" type = "text" value = ""> cm </td> </tr>

							
						 <tr> <td> <label for = "widthI"> Width: </label> </td>
							  <td> <input id = "widthI" name = "widthI" value = ""> cm </td> </tr>


						<tr> <td> </td>

							 <td> <input id = "submitB" name = "submitB" type = "submit" value = "Submit"> </td>
						</tr>
		 
					</table>
				</form>

		<?php
			}

			function processForm(){
				$height = $_POST["heightI"];
				$width  = $_POST["widthI"];
				$area  = $height * $width;
	
				echo "<p> Height: " . $height . " cm </p>"; 	
				echo "<p> Width: " . $width . " cm </p>"; 	
				echo "<p> Area: " . $area . " cm<sup>2</sup> </p>"; 	
				echo "<a href=\"e1.php\">Try again!</a>"; 
			
			}	
		?>


	</body>

</html>

