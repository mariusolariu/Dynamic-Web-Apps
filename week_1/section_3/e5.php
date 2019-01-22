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
			$current_hour = (int)date("h");

			echo date("h:i a") .  " ";

			$am_or_pm = date("a");			

			echo (strcmp($am_or_pm, "pm") < 0) ? 
				(($current_hour >= 5) && ($current_hour <= 11) ? "Good morning!" : "Good night!")
			 : 
				(($current_hour == 12) || ($current_hour <= 5) ? "Good afternoon!" : ( ($current_gour >= 6) && ($current_hour <= 10) ? "Good evening" : "Good night!" ));
		
		?>		
	</body>

</html>

