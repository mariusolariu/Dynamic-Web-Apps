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

				<form action = "e2.php" method = "post">
					<table>
						<tr> <td> <label for = "usernameI"> Username: </label> </td> 
						<td>	<input id = "usernameI" name = "usernameI" type = "text" value = "">  </td> </tr>

							
						 <tr> <td> <label for = "passI"> Password: </label> </td>
							  <td> <input id = "passI" name = "passI" type="password" value = "">  </td> </tr>


						<tr> <td> </td>

							 <td> <input id = "submitB" name = "submitB" type = "submit" value = "Submit"> </td>
						</tr>
		 
					</table>
				</form>

		<?php
			}

			function processForm(){
				$username = $_POST["usernameI"];
				$password  = $_POST["passI"];
	
				if (($username === "Admin") && ($password === "letmein")){
					header("Location: http://www.bbc.co.uk");
				}else{
					//do nothing
				}
			
			}	
		?>


	</body>

</html>

