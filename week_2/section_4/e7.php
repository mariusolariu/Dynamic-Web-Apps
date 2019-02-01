<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
		<style>
			table, th, tr, td{
					border: 2px solid black;
			}
		</style>

	</head>

	<body>
		<table>
			<tr>
				<th> n </th>
				<th> n! </th>
			</tr>

			<?php
				for ($i=1; $i <= 10; $i++){
					echo "<tr>";

						$fact = 1;
						for ($j = 1; $j <= $i; $j++){
							$fact *= $j;
						}

						echo "<td>" . $i . "</td> <td>" . $fact . "</td>";

					echo "</tr>";
				}

			?>

		</table>

	</body>

</html>

