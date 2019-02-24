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
			//This is e6 but I saved it  over e4
			$castles = array(); 

			if (isset($_POST["submitB"])){
				$castles= $_POST['castleOpt'];
				/* processForm(); */
			}

			displayForm($castles);
			function displayForm($castles){
		?>

				<form action = "e7.php" method = "post">
					<table>
						<tr> <td> <label for = "landmark"> Landmark: </label> </td> 
						<td>  
								<select id = "castleOpt" name = "castleOpt[]" multiple = "multiple" >
									<option value = "caerlaverock.jpg" <?php if (in_array("caerlaverock.jpg",$castles)) echo "selected = 'selected'"; else echo "";?> > Caerlaverock Castle </option>
									<option value = "edinburgh.jpg"<?php if (in_array("edinburgh.jpg",$castles)) echo "selected = 'selected'"; else echo "";?> > Edinburgh Castle </option>
									<option value = "glamis.jpg"<?php if (in_array("glamis.jpg",$castles)) echo "selected = 'selected'"; else echo "";?>  > Glamis Castle</option>
									<option value = "eileandonan.jpg"<?php if (in_array("eileandonan.jpg",$castles)) echo "selected = 'selected'"; else echo "";?>>Eilean Donan Castle</option>
									<option value = "stirling.jpg"<?php if (in_array("stirling.jpg",$castles)) echo "selected = 'selected'"; else echo "";?>>Stirling Castle</option>
								</select>
						</td> </tr>

						<tr> <td> </td>
							 <td> <input id = "submitB" name = "submitB" type = "submit" value = "Submit"> </td>
						</tr>

					</table>
				</form>


		<?php
				/* print_r($castles); */

				foreach ($castles as $castle){
					echo  "<img src = \"scottishCastles\\$castle\" margin = \"10px\" width = \"225\" height = \"250\"> </br>\n"; 
				}
			}

		?>


	</body>

</html>

