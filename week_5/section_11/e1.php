		<?php
			//creates a session or resumes one based on a session identifier passed via GET/POST request or passed via a cookie
			session_start();

			$selectedCountry = "China";
			$countries = array();

			if (isset($_POST["submit"])){
				$countries = $_SESSION["countries"];
				$selectedCountry = $_POST["selectC"];
			}else{
				//read only once the countries
				$handle = fopen("./countries.txt", "r");
				
				while ($line = fgets($handle)){
					$countries[] = substr($line, 0 , -2);
				}	

				fclose($handle);
				
				 /* echo "Last char: " . ($countries[0] === $selectedCountry) . "</br>"; */ 
				 /* echo $countries[0] . ".</br>"; */
				 /* echo $selectedCountry . ".</br>"; */
				$_SESSION["countries"] = $countries;

				print_r($_SESSION["countries"]);
			}

	
			displayForm($selectedCountry, $countries);
		?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<script>

		</script>
	<style>
		table, th, td{
				border: 1px solid black;	
			}
	</style>

	</head>

	<body>
	

		<?php

			function displayForm($selectedCountry, $countries){
		?>	
		<form action = "e1.php" method = "post">
			<table>
				<tr> <td> Country: </td> 
					 <td> <select name = "selectC">
							<?php
								foreach ($countries as $country){
									echo "<option value = \"${country}\" " .
										  (($country == $selectedCountry) ? "selected = 'selected'>" : ">")  .
										 " ${country} </option>";
								}	
							?>
						  </select>
					 </td> </tr>

				<tr>
					<td> </td>
					<td> <input type = "submit" name = "submit" value = "submit country"> </td>
				</tr>
			</table>
		</form>

		<?php
				echo "Country selected: ${selectedCountry}";
		   }
		?>
	</body>

</html>

