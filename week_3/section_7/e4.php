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

				$alt = "Homer Simpson";
				$src = "homer-simpson.png";
				$height = 250;
				$width = 150;

				function displayImage($src, $alt, $height, $width){
					echo "<img src = {$src} alt = {$alt} height = {$height} width = {$width} >";
				}

				displayImage($src, $alt, $height, $width);
		?>
	</body>

</html>

