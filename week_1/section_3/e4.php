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
			$current_day = date("N");

			echo (($current_day == 6) || ($current_day == 7) ? "It is the weekend" : "It is a weekday");

		?>
			
	</body>

</html>

