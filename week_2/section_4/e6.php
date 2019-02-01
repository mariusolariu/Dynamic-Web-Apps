<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
	</head>

	<body>
		<p> The prime numbers less than 100: <br> </p>

		<?php
			//Sieve of Erathostenes : any non-prime number is divisible by a prime number (because it can be factorized)
			$arrPrimeNumb = array_fill(0, 101, true);

			$arrPrimeNumb[0] = false;
			$arrPrimeNumb[1] = false;

			$squareRoot = sqrt(100);
			$prime = 2;

			while ($prime <= $squareRoot){
				//cross all the numbers divisible by current prime

				for ($i = $prime * $prime; $i <= 100; $i+=$prime){
					$arrPrimeNumb[$i] = false;
				}	

				//get next prime
				$j = $prime + 1;
				while (!$arrPrimeNumb[$j]){
					$j++;
				}

				$prime = $j;
	
			}
		
			for ($i = 1; $i <= 100; $i++){
				if ($arrPrimeNumb[$i]) echo $i . " ";
			}

			echo "</br>";
			
	
		?>

	</body>

</html>

