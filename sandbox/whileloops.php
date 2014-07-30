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
		Even and Odd.
		<?php 
			$count = 0;
			while ($count <= 10) {
				if ($count % 2) {
					echo "<b>{$count}, </b>";
				} else {
				echo $count . ", ";	
				}
				$count ++; // increment by one
			}
			echo "<br />";
		?>
	</body>
</html>		
