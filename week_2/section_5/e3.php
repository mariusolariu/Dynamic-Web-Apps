<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
	</head>

	<body>
		<h1> just a test </h1>
		<?php
			$lotr = "When Mr. Baggins of Bag End announced that he would shortly be celebrating his eleventy-first birthday with a party of special magnificence, there was much talk and excitement in Hobbiton.";

			$lotr2 = "";
			for ($i = 0; $i < strlen($lotr) - 1; $i++){
				if (($lotr[$i] == ' ')){
					$lotr2 = $lotr2 .  substr_replace($lotr[$i], "</br>", $i, 0);
				}else{
					$lotr2 = $lotr2 . $lotr[$i];
				}
			}

			echo $lotr2;
		?>
	</body>

</html>

