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
			
				$exam_mark = 65;
				echo "Exam mark: " . $exam_mark . "<br>";

					if ($exam_mark >= 40){
						echo "Passed";
					}else{
						echo "Failed";
					}

			?>
	</body>

</html>

