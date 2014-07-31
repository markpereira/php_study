<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Functions: Default Argument Values</title>
	</head>
	<body>
		<?php 

		function paint($room="office",$color="blue") {
			return "The color of the {$room} is {$color}.<br />";
		}
		echo paint();
		echo paint("bedroom", "yellow");
		echo paint("bedroom", null);
		echo paint("study");

		?>
	</body>
</html>		
