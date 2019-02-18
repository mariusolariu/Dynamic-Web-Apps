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

			$movies = array("Gladiator", "Lord of the Rings", "A beautiful mind", "Limitless", "American Sniper");
			$j = 1;

			foreach ($movies as $i){
				echo $j . ". " .  $i . "</br>";
				$j++;
			}
		?>
	</body>

</html>

