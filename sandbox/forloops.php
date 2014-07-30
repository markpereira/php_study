<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loops: for</title>
	</head>
	<body>
		<?php //while loop example
			$count = 0;
			while ($count <= 10) {
				echo $count . ", ";
				$count ++;
			}
		?>
		<br />
		<?php // for loops
			for($count = 0; $count <= 10; $count++) {
				echo $count . ", ";
			}
		?>
		<br />
		<?php 

			for ($count = 20; $count > 0; $count--) {
				if ($count % 2 == 0) {
					echo "{$count} is even.<br />";					
				} else {
					echo "{$count} is odd.<br />";
				}	
			}
		?>
		<br />
		<h5>Test Example </h5>
		<br />
		<?php 

			for ($count = 0; $count <= 30; $count++) {
				if ($count % 2 == 0) {
					echo "<b>{$count}</b> is an <b>even</b> number.<br />";
				} else {
					echo "<i>{$count}</i> is an <i>odd</i> number.<br />";
				}	
			}
		?>
	</body>
</html>		
