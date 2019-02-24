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
				displayForm(rand(5,15), rand(5,15), "");
			}

			function displayForm($x, $y, $userAnswer){
		?>

				<form action = "e3.php" method = "post">
					<table>
						<tr> <td> <label for = "f1"> x: </label> </td> 
						<td>	<?php echo $x ?>  </td> </tr>

							
						 <tr> <td> <label for = "f2"> y: </label> </td>
							  <td> <?php echo $y  ?> </td> </tr>

						 <tr> <td> <label for = "f3"> x + y: </label> </td>
							  <td> <input id = "f3" name = "f3" type="text" value = " <?php echo $userAnswer ?>">  </td> </tr>


						<tr> <td> </td>

							 <td> <input id = "submitB" name = "submitB" type = "submit" value = "Submit"> </td>
						</tr>

						<input name = "xVal" type = "hidden" value = " <?php echo $x ?>">
						<input name = "yVal" type = "hidden" value = " <?php echo $y ?>">
		 
					</table>
				</form>

		<?php
			}

			function processForm(){
				$x = intval($_POST['xVal']);
				$y = intval($_POST['yVal']);
				$userAnswer = intval($_POST['f3']);
				$result = $x + $y;

				if ($userAnswer === $result){
					echo "<p> " . $x . " + " . $y . " = " . $result . " - You are correct!";
				}else{
					displayForm($x, $y, $userAnswer);
					echo "<p style = \"color:red;\"> You are wrong! </p>";
				}
			
			}	
		?>


	</body>

</html>

