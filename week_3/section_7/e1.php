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
			$radius = 2.5;

			function computeCircleArea($rad){
				return pi() * $rad * $rad;
			}

			echo "Radius: {$radius} cm </br>";
			echo "Area: " . number_format(computeCircleArea($radius), 2, ".", "") .  " cm<sup>2</sup>" ;

		?>

	</body>

</html>

