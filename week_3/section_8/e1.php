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
		
			class Calculator{
				private static $total = 0;

				public function add($x){
					Calculator::$total += $x;
					
					return Calculator::$total; 
				}

				public function substract($x){
					Calculator::$total -= $x;

					return Calculator::$total;
				}

				public function multiply($x){
					Calculator::$total *= $x;
	
					return Calculator::$total;
				}

				public function divide($x){
					if ($x != 0){
						Calculator::$total /= $x;
					}else{
						echo "Can't divide by 0 <br>";
					}

					return Calculator::$total;
				}
			}

			$calc = new Calculator();

			echo "Total: " . $calc->add(4) . "<br>";
			echo "Total: " . $calc->add(12) . "<br>";
			echo "Total: " . $calc->add(8) . "<br>";
			echo "Total: " . $calc->substract(16) . "<br>";
			echo "Total: " . $calc->multiply(4) . "<br>";
			echo "Total: " . $calc->divide(8) . "<br>";

		?>

	</body>

</html>

