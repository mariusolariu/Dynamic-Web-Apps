<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<style>
			table, td, tr{
				border: 1px solid black;
			}
		</style>
		<script>

		</script>
	</head>

	<body>
		<?php
			if ($_POST["submit"]){
				processForm();
			}else{
				displayForm();
			}


			function displayForm(){	
		?>
		
					<form action = "e8.php" method="post">
						<table>
			

							<tr> <td> Date: </td>
								 <td> <input type = "date" name = "date" value = "<?php echo date('Y-m-d'); ?>"> </td> </tr>

							<tr> <td> </td>
								<td> <input type = "submit" name = "submit" value = "Submit Date"> </td> </tr>

						</table>

					</form>
		<?php
			}

			function processForm(){
				$date = $_POST["date"];
				$selDateArr = explode("-",$date);	
				print_r($selDateArr);
				echo "</br>";				

				$today = explode('-', date('Y-m-d'));
				print_r($today);
				echo "</br>";				

				$currentDays = getNrOfDays($today[0], $today[1], $today[2]);
				echo "Days passed until today inclusive: " . $currentDays;

				$selectedDate = getNrOfDays($selDateArr[0], $selDateArr[1], $selDateArr[2]);

				echo "</br> Difference in days: " . ($selectedDate - $currentDays);
			}


			function getNrOfDays($year, $month, $days){
						$count = 0;

						for ($i = 1; $i <= $year; $i++){
					
							if (($i % 4 === 0) &&
								 (($i % 100 != 0) || ($i % 400 ===0))){
								$count += 366;
							} else {
								$count += 365;
							}
						}

						for ($i = 1; $i <= $month; $i++){

							switch ($i){
								case 1:
									$count += 31;
								  break;
								
								case 2:
										if (($i % 4 === 0) &&
										 (($i % 100 != 0) || ($i % 400 ===0))){
											$count += 29;
										} else {
											$count += 28;
										}
									break;

								case 3:
										$count +=31;
									break;

								case 4:
										$count +=30;
									break;

								case 5:
										$count +=31;
									break;
			
								case 6:
										$count +=30;
									break;

								case 7:
										$count += 31;
									break;

								case 8:
										$count += 31;
									 break;

								case 9:
										$count += 30;
									break;

								case 10:
										$count += 31;
									break;

								case 11:
										$count += 30;
									break;

								case 12:
										$count += 31;
									break;
							}
									
						}

						$count += $days;

				
					return $count;
				}

			
		?>
	</body>

</html>

