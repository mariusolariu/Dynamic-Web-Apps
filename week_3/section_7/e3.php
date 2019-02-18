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
			$quotation = "Knowledge is power";
			$count = 5;

			function displayNTimes($quotation, $count){
				for ($j = 1; $j <= $count; $j++){
					echo $j . ". " . $quotation . "<br>";	
				}
			}


			displayNTimes($quotation, $count);
		?>

	</body>

</html>

