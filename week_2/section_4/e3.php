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
			
				$cost_of_Television = 569.00;
				echo "Cost of Television: £" . $cost_of_Television . "<br>";

				//elegant way			
				switch (true){
					case ($cost_of_Television >= 750.0):
						$discountP = 20;
					break;		
		
					case ($cost_of_Television >= 500.0):
						$discountP = 15;
					break;		

					case ($cost_of_Television >= 250):
						$discountP = 10;
					break;		

					default:
						$discountP = 5;

				}

				$discount = $discountP / 100 * $cost_of_Television;

				echo "Discount: £" .  $discount . "(" . $discountP . "%)" . "<br>"; 
				echo "Cost to customer: £" . ($cost_of_Television - $discount); 
			?>
	</body>

</html>

