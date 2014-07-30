<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Break</title>
	</head>
	<body>
		<?php // example of break
			for ($count=0; $count <= 10; $count++) {
				if ($count == 5) {
					break;
				}
				echo $count . ", ";
			}
		?>
		<br />
		<?php // loop inside a loop using break
			
			for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { break(1); }
					echo $i . "_" . $k . "<br />";
				}
			}
		?>
		<br />
	</body>
</html>		
