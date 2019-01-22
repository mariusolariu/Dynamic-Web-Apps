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
			$x=10;
		
			echo "x multiple of 2? " . (($x % 2 == 0)? "yes" : "no") . "<br>";
			echo "x multiple of 3? " . (($x % 3 == 0)? "yes" : "no") . "<br>";
			echo "x multiple of 2 and 3? " . ((($x % 3 == 0) && ($x % 2 ==0))? "yes" : "no") . "<br>";
			echo "x multiple of 2 or 3? " . ((($x % 3 == 0) || ($x % 2 ==0))? "yes" : "no") . "<br>";
		?>
	</body>

</html>

