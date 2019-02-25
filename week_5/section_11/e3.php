		<?php

			if (isset($_POST["submit"])){
				$submitedCode = $_POST["codeArea"];
				$handle = fopen("./submitedCode.php", "w");

				/* if (is_writable("./")){ */
				/* 	echo "yes </br>"; */
				/* }else{ */
				/* 	echo "no </br>"; */
				/* } */

				if (!$handle) die("Cannot create the file");

				fwrite($handle, $submitedCode);
				fclose($handle);
				header("Location: submitedCode.php");
			}else{
				displayForm();
			}
		?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
	<style>
		table, th, td{
				border: 1px solid black;	
			}
	</style>

	</head>

	<body>
	

		<?php

			function displayForm(){
		?>	
		<form action = "e3.php" method = "post">
			<table>
				<tr> <td>PHP Code:</td> 
					  <td>
							<textarea name = "codeArea" rows = "50" cols = "75">

							</textarea>	
					  </td> </tr>

				<tr>
					<td> </td>
					<td> <input type = "submit" name = "submit" value = "Submit code"> </td>
				</tr>
			</table>
		</form>

		<?php
		   }
		?>
	</body>

</html>

