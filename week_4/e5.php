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
			$col = '#ff0000';

			if (isset($_POST["submitB"])){
				processForm();
				$col = $_POST['color'];
			}else{
				$col = '#ffffff';
			}
				displayForm($col);
	

			function displayForm($col){
		?>

				<form action = "e5.php" method = "post">
					<table>
						<tr> <td> <label for = "color"> Color: </label> </td> 
						<td> <input id = "color" name = "color" value = "<?php echo $col; ?>" type = "color">  </td> </tr>

						<tr> <td> </td>
							 <td> <input id = "submitB" name = "submitB" type = "submit" value = "Submit"> </td>
						</tr>

					</table>
				</form>

		<?php
			}

			function processForm(){
				$colorVal = $_POST['color'];
			
				echo "<body bgcolor = \"${colorVal}\">";
			}

		?>

	</body>

</html>

