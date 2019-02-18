<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<style>
			table, th, td{
				border: 1px solid black;
				border-collapse: collapse;
			}
		</style>
		<script>

		</script>
	</head>

	<body>
				<?php
					$myMovie = array("Title" => "Godfather", "Director" => "Francis Ford Coppola", "Year" => "1972");
					$myMovie1 = array("Title" => "Sound of Music", "Director" => "Robert Wise", "Year" => "1965");
					$myMovie2 = array("Title" => "Wizard of Oz", "Director" => "Victor Fleming", "Year" => "1939");

					$myMovies = array($myMovie, $myMovie1, $myMovie2);

					foreach ($myMovies as $movie){

						echo "</br> <table>";

								foreach ($movie as $key => $value){
									echo "<tr> <td> {$key} </td> <td> {$value} </td> </tr>";		
								}

						echo "</table>";

					}

				?>
	</body>

</html>

