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
				$x = 1;
				$y = 2;
				$z = 3;
				$w = 4;
				$v = 5;

				function average($x, $y, $z, $w, $v){
					return ($x + $y +$z +$w +$z) / 5;
				}
	
				function maximum($x, $y, $z, $w, $v){
					$max = $x > $y ? $x : $y;
					$max = $max > $z ? $max : $z;
					$max = $max > $w ? $max : $w;
					$max = $max > $v ? $max : $v;

					return $max; 
				}

				function minimum($x, $y, $z, $w, $v){
					$min = $x < $y ? $x : $y;
					$min = $min < $z ? $min : $z;
					$min = $min < $w ? $min : $w;
					$min = $min < $v ? $min : $v;

					return $min; 
				}
			
				echo "x = $x <br> y = $y <br> z = $z <br> w = $w <br> v = $v <br>";
				echo "Average value: " . average($x,$y,$z,$w,$v)."<br>";
				echo "Max val: " . maximum($x,$y,$z,$w,$v)."<br>";
				echo "Min val:" . minimum($x,$y,$z,$w,$v)."<br>";

			?>
	</body>

</html>

