<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
	</head>

	<body>
		
			<?php
				echo "<table>";
					
				for ($i = 0; $i<10; $i++) {
					echo "<tr>";

					for ($j = 0; $j<5; $j++){
						echo "<td>" . ($i * 5 + $j + 1) . "</td>";
					}

					echo "</tr>";
				
				}

				echo "</table>";
			?>		
			
	</body>

</html>

