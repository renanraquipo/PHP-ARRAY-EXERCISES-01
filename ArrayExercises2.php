<?php

	$C = array("Tokyo", "Mexico City", "New York City", "Mumbai, Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
	 	<meta charset="UTF-8">
	 	<title>Large Cities</title>
	</head>
	<body>

	 	<h1 style="color: skyblue; font-weight: bold;">Large Cities</h1><br>
	<?php
	 	for ($i = 0; $i < COUNT($C); $i++) {
	 		echo $C{$i} . ", ";
	 	}
    ?>
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($C); $i++) {
	 			echo "<li>{$C{$i}}</li>";
	 		}
	 		?>

	 	</ul>


	<?php array_push($C, "Los Angeles", "Calcutta", "Osaka", "Beijing");
	?>

	<?php sort($C); 
	?>
	 	<ul>
	 		<?php
	 		for ($i = 0; $i < COUNT($C); $i++) {
	 			echo "<li>{$C{$i}}</li>";
	 		}
	 		?>
	 	</ul>

	</body>
	</html>