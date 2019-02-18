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
			$colors = array("red", "green", "blue", "yellow", "purple", "pink");

			function displayInColors($arr){
				foreach ($arr as $col){
					echo "<p style =\"color: {$col};\" > I don't like PHP! </p>";
				}
			}
			
			displayInColors($colors);
		?>

	</body>

</html>

