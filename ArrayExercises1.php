<?php

 	$W = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"); 
?>

 	<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta charset="UTF-8">
 		<title>Weather Report</title>
 	</head>
 	<body>

 		<h1 style="color: skyblue; font-weight: bold">Todays Weather Report</h1> 
 		<?php echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $W[5] . " and " . $W[6] . ". Then came " . $W[1] . " with a few " . $W[2] . " and some  " . $W[0] . ". At least we didn't get any " . $W[3] . " or " . $W[4] . ". "; 
 		?>

 	</body>
 	</html>
    