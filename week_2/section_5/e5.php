<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
	</head>

	<body>
		<h1> Just a simple exemple </h1>			
		<?php
			$lotr = "When Mr. Baggins of Bag End announced that he would shortly be celebrating his eleventy-first birthday with a party of special magnificence, there was much talk and excitement in Hobbiton.";

			for ($i=0; $i < strlen($lotr); $i++){
				if ($i % 2 == 0){
					echo "<font color='red'>a</font>";
				}else{
					echo $lotr[$i];
				}
			}
		?>

	</body>

</html>

