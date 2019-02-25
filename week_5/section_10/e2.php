<!DOCTYPE html>

	<?php
		if (isset($_POST["submitB"])){
			if (isset($_POST["markI"])){
				setcookie("name", $_POST["markI"], time() + 60 * 60 * 24, "", "", false, true);
				setcookie("time", time(), time() + 60 * 60 * 24, "", "", false, true);
				header("Location: e2.php");
			}

		}else if (isset($_COOKIE["name"])){
				echo "Hello " . $_COOKIE["name"] . ". ";

				$currentTime = time();
				$firstLoginTime = $_COOKIE["time"];
				$diff = $currentTime - $firstLoginTime;

				$hours = (int)($diff / 3600);
				$diff -= $hours * 3600;

				$minutes = (int)($diff / 60);
				$diff -= $minutes * 60;

				$seconds = $diff;

				echo "Your first visited this page ${hours} hour(s), ${minutes} minute(s) and ${seconds} second(s) ago";

		}else{
			displayForm();
		}
			

	?>
<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<style>
			table, tr, td{
				border: 1px solid black;
			}

		</style>
		<script>
			
		</script>
	</head>
	
	<body>

		<?php
			function displayForm(){
		?>
				<table>
					<form action = "e2.php"  method = "post">
						<tr> <td> Name: </td>
							 <td> <input type = "text" name = "markI" > </td>
						</tr>
			
						<tr>
							<td> </td>
							<td> <input id = "submitB" type = "submit" name = "submitB" value = "Submit"> </td>
						</tr>

					</form>

				</table>

		<?php
			}			
		?>

	</body>

</html>

