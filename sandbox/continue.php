<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Continue</title>
	</head>
	<body>
		<?php // Example of Continue
			for ($count=0; $count <=10; $count++) {
				if  ($count == 5) {
					continue;
				}
				echo $count . ", ";
			}
		?>
		<br />
		<?php // test Continue with odd numbers.(removing even numbers)
			for ($count=0; $count <=30; $count++) {
				if  ($count % 2 == 0) { continue; }
				echo $count . ", ";
			}
		?>
		<br />
		<?php // test Continue with even numbers.(removing odd numbers)
			for ($count=0; $count <=30; $count++) {
				if  ($count % 2 != 0) { continue; }
				echo $count . ", ";
			}
		?>
		<br />
		<br />
		<?php // while loop -- what is wrong with this?
			$count = 0;
			while ($count <= 10) {
				if ($count == 5) {
					$count++;
					continue;
				}
				echo $count . ", ";
				$count++;
			}
		?>
		<br />
		<?php // loop inside a loop using continue
			
			for ($i=0; $i<=5; $i++) {
				if ($i % 2 == 0) { continue(1); }
				for ($k=0; $k<=5; $k++) {
					if ($k == 3) { continue(2); }
					echo $i . "_" . $k . "<br />";
				}
			}
		?>
		<br />
	</body>
</html>		
