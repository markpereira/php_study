<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Functions: Arguments</title>
	</head>
	<body>
		<?php

			function say_hello_to($word) {
			echo "Hello {$word}!<br />";
			}

			$name = "John Doe";
			say_hello_to($name);
		?>
		<br />
		<?php 

			function better_hello($greeting, $target, $punct) {
				echo $greeting . " " . $target . $punct . "<br />";
			}

			better_hello("Hello", $name, "!");
			better_hello("Bonjour", $name, "!!!");
			better_hello("Bonjour", $name, null);

		?>
		<br />
		Mark's test
		<br />
		<?php 

			function say_hello($greeting, $name) {
				echo "{$greeting} World!... My name is {$name}<br />";
			}

			say_hello("Bonjour", "Mark");
			say_hello("Hello", "Jane");
			say_hello("Ciao", "Don");

		?>
	</body>
</html>		
