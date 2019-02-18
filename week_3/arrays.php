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
			$colors = array("Red", "Blue", "Green");
			echo $colors[0] . "</br>";
			
			echo "Content of array : ";
			foreach ($colors as $val){
				echo $val . " ";
			}

			echo "</br>";
	
			$myString = print_r($colors);
			echo "<pre>" . $myString . "</pre> </br>";

			//associative array - used map rows of a DB table 
			$simpsons = array("dad" => "Homer", "son" => "Bart", "daughter" => "Lisa");
		
			echo $simpsons["son"] . "</br>";

			foreach ($simpsons as $key => $val){
				echo $val . " ";
			}

			echo "</br>";			

			function sum($x, $y){
				return $x + $y;
			}

			echo "The sum: " . sum(3, 7) . "</br>";

			class student{
				//default: public
				private  $firstName;

				//constructor - same name as the class
				function student($in_name){
					$this -> firstName = $in_name;
				}

				function getName(){
					return $this -> firstName;
				}
			}

			$student1 = new student("Rod");


			echo $student1 -> getName() . "</br>";

			$authors = array( 0 => "Steinbeck", 1 => "Kafka", 2=> "Tolkien", 47 => "Dickens" );
			$lastIndex = count( $authors ) - 1;

			echo "Tricky index of a sparse array:" . $lastIndex . "</br>";
			echo "Last element: " . $authors[47] . "</br>";

			//Here's how to use each() to retrieve an array element with a value of false
			$myArray = array( true );
			$element = each( $myArray );
			$key = $element["key"]; // $key now equals 0
			$val = $element["value"]; // $val now equals false
			echo "Key = $key and value = $val </br>";
			echo (false == null) . " </br>";	
			//false == null in PHP

			echo array_unshift( $authors, "Hardy", "Melville" ) . "<br>";

			//add element to end of array
			$authors[] = "Eminescu";
			echo print_r($authors) . "</br>";

			$fruitString = "apple,pear,banana,strawberry,peach";
			$fruitArray = explode( ",", $fruitString );
			echo print_r($fruitArray) . "</br>";

		?>
	</body>

</html>

