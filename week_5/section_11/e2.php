		<?php
			//creates a session or resumes one based on a session identifier passed via GET/POST request or passed via a cookie
			session_start();
			DEFINE("IMGS_FOLDER", "./scottishCastles");

			$selectedImg = "";
			$imgs = array();

			if (isset($_POST["submit"])){
				$imgs = $_SESSION["images"];
				$selectedImg = $_POST["imgFile"];
			}else{
				//read only once the countries
				$handle = opendir(IMGS_FOLDER);
				
				while ($filename = readdir($handle)){
					if (($filename != ".") && ($filename != "..")){
						$imgs[] = $filename;
					}
				}	

				closedir($handle);
				
				$_SESSION["images"] = $imgs;
				$selectedImg = $imgs[0];

				/* print_r($_SESSION["countries"]); */
			}

	
			displayForm($selectedImg, $imgs);
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

			function displayForm($selectedImg, $imgs){
		?>	
		<form action = "e2.php" method = "post">
			<table>
				<tr> <td> Image: </td> 
					  <td>
					 		<?php
								foreach ($imgs as $img){
									echo "<input type = 'radio' name='imgFile' value='${img}' " .
									 ($img === $selectedImg ? "checked" : "")  .
									">" . substr($img, 0, -4) . "</br>";
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
				$imgPath = IMGS_FOLDER . "/". $selectedImg;
				echo "</br> <img src = '${imgPath}' alt = 'A castle'>";
		   }
		?>
	</body>

</html>

