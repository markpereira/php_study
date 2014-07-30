<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Booleans</title>
	</head>
	<body>
		<?php // Booleans are best used with conditionals?>
		<?php 
			$result1 = true;
			$result2 = false;
		?>
		Result1: <?php echo $result1; ?><br />
		Result2: <?php echo $result2; ?><br />

		result2 is boolean? <?php echo is_bool($result2); ?><br />
		<br />
		
		<?php
		// basic conditional example 
			$number = 3.14;
			if( is_float($number) ) {
				echo "It is a float.";
			}
			?>
	</body>
</html>		
