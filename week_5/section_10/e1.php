<!DOCTYPE html>

<html>
	<head>
		<meta charset = “utf-8”>
		<title> Dynamic Web Apps </title>
		<style>
			table, tr, td{
				border: 1px solid black;
			}

		</style>
		<script>
			
		</script>
	</head>
	
	<?php
		$lastMark = -1;

		if (isset($_POST["submitB"])){
			$lastMark = (int) $_POST["markI"];
		}

		displayForm($lastMark);
	?>

	<?php

		function displayForm($lastMark){
			$failed; $passed; $queryString;

			if ($lastMark === -1){
				$failed = 0;
				$passed = 0;
			}else{
				$failed = $_GET['failed'];
				$passed = $_GET['passed'];
			
				if ($lastMark >= 40){
					$passed += 1;
				}else{
					$failed += 1;
				}	
			}

			$queryString = "failed=$failed&amp;passed=$passed";
	?>

	<body>
				<table>
					<form action = <?php echo "e1.php?${queryString}" ?> method = "post">
						<tr> <td> Exam Mark: </td>
							 <td> <input type = "text" name = "markI" > </td>
						</tr>
			
						<tr>
							<td> </td>
							<td> <input id = "submitB" type = "submit" name = "submitB" value = "Submit Mark!"> </td>
						</tr>

					</form>

				</table>

		<?php

			/* echo $failed . " " .  $passed; */
			if (($failed > 0) || ($passed > 0)){
				echo "Exams passed: ${passed} </br>";
				echo "Exams failed: ${failed} </br>"; 
			}
	
		}
		?>

	</body>

</html>

