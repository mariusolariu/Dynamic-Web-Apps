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
			td {
				padding: 10px 10px;
			}
		</style>
		<script>

		</script>
	</head>

	<body>

				<?php
					$myMovie = array("Title" => "Godfather", "Director" => "Francis Ford Coppola", "Year" => "1972");
					$stars = array("Stars" => "me </br> you </br> others </br>");
					$myMovie = array_merge($myMovie, $stars);

					$myMovie1 = array("Title" => "Sound of Music", "Director" => "Robert Wise", "Year" => "1965");
					$myMovie1 = array_merge($myMovie1, $stars);

					$myMovie2 = array("Title" => "Wizard of Oz", "Director" => "Victor Fleming", "Year" => "1939");
					$myMovie2 = array_merge($myMovie2, $stars);

					$myMovies = array($myMovie, $myMovie1, $myMovie2);

					echo "<table> <tr> <th> Title </th> <th> Director </th> <th> Year </th> <th>  Stars </th> </tr>";

							foreach ($myMovies as $movie){


										echo "<tr>";
												foreach ($movie as $key => $value){
													echo "<td> {$value} </td>";		
												}
										echo "</tr>";


							}

					echo "</table>";

				?>
	</body>

</html>

