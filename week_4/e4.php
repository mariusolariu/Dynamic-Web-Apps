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
			$castle = "caerlaverock.jpg"; 

			if (isset($_POST["submitB"])){
				$castle = $_POST['castleOpt'];
				/* processForm(); */
			}

			displayForm($castle);
			function displayForm($castle){
		?>

				<form action = "e4.php" method = "post">
					<table>
						<tr> <td> <label for = "landmark"> Landmark: </label> </td> 
						<td>  
								<select id = "castleOpt" name = "castleOpt" size = "1" >
									<option value = "caerlaverock.jpg" <?php if ($castle === "caerlaverock.jpg") echo "selected = 'selected'"; else echo "";?> > Caerlaverock Castle </option>
									<option value = "edinburgh.jpg"<?php if ($castle === "edinburgh.jpg") echo "selected = 'selected'"; else echo "";?> > Edinburgh Castle </option>
									<option value = "glamis.jpg"<?php if ($castle === "glamis.jpg") echo "selected = 'selected'"; else echo "";?>  > Glamis Castle</option>
									<option value = "eileandonan.jpg"<?php if ($castle === "eileandonan.jpg") echo "selected = 'selected'"; else echo "";?>>Eilean Donan Castle</option>
									<option value = "stirling.jpg"<?php if ($castle === "stirling.jpg") echo "selected = 'selected'"; else echo "";?>>Stirling Castle</option>
								</select>
						</td> </tr>

						<tr> <td> </td>
							 <td> <input id = "submitB" name = "submitB" type = "submit" value = "Submit"> </td>
						</tr>

					</table>
				</form>

				<img src = "scottishCastles/<?php echo $castle?>" alt = "Caerlaverock Castle" height = "250" width = "225" style = "margin:10px;"> 

		<?php
			}

		?>


	</body>

</html>

