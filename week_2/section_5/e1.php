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
			$lotr = "When Mr. Baggins of Bag End announced that he would shortly be celebrating his eleventy-first birthday with a party of special magnificence, there was much talk and excitement in Hobbiton.";

			echo (stripos($lotr, "f") ? "Yes" : "No") . "</br>";
			echo (stripos($lotr, "q") ? "Yes" : "No") . "</br>";
			// why doesnt't it print the below line?!?!?
			echo ((stripos($lotr, "w") === false )? "Yes" : "No") . "</br>";
			echo "php sucks";

		 	if (1) {
				echo "yes";
			}else{
				echo "no";
			}

			echo ((stripos($lotr, "f") === false )?  "No" : "yes") . "</br>";
			echo ((stripos($lotr, "q") === false )?  "No" : "yes") . "</br>";
			echo ((stripos($lotr, "w") === false )?  "No" : "yes") . "</br>";
		?>
	</body>

</html>

