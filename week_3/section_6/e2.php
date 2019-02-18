<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<style>
			table, th, td{
				border: 1px solid black;
				border-collapse: collapse;
			}
		</style>
		<script>

		</script>
	</head>

	<body>
		<table>
			<tr>
				<?php
					$myMovie = array("Title" => "Godfather", "Director" => "Francis Ford Coppola", "Year" => "1972");

					foreach ($myMovie as $key => $value){
						echo "<tr> <td> {$key} </td> <td> {$value} </td> </tr>";		
					}

				?>
		</table>
	</body>

</html>

