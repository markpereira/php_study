<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loops: while</title>
	</head>
	<body>
		<?php 
			$count = 0;
			while ($count <= 10) {
				if ($count == 5) {
					echo "FIVE, ";
				} else {
				echo $count . ", ";	
				}
				$count ++; // increment by one
			}
			echo "<br/>";
			echo "Count: {$count}";
		?>
		<br />
		<br />

		<h3>Even and Odd Exercise.</h3>
		<br />
		<?php 
			$count = 0;
			while ($count <= 10) {
				if ($count % 2 == 0) {
					echo "{$count} is even.<br />";
				} else {
				echo "{$count} is odd.<br /> ";	
				}
				$count ++; // increment by one
			}
			echo "<br />";
		?>
	</body>
</html>		
