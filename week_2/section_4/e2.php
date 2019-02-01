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

				//elegant way			
				switch (true){
					case ($exam_mark >= 70):
						echo "A";
					break;		
		
					case ($exam_mark >= 60):
						echo "B1";
					break;		

					case ($exam_mark >= 50):
						echo "B2";
					break;		
					
					case ($exam_mark >= 40):
						echo "C";
					break;		

					case ($exam_mark >= 30):
						echo "D";
					break;		
					
					case ($exam_mark >= 1):
						echo "E";
					break;		

					default:
						echo "N";


				}
			?>
	</body>

</html>

