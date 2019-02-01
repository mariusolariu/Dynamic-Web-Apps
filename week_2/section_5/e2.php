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

			if ((stristr($lotr, "d")) && (stristr($lotr, "e"))){
				$i = strpos($lotr, "d");
				$j = strpos($lotr, "e");

				echo "The letter " . "'" . (($i > $j ? "d" : "e")) . "' appears in front of " . "'" . (($i > $j ? "e" : "d")) . "'";   
			}
		?>
	</body>

</html>

