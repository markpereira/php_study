<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Functions: Defining</title>
	</head>
	<body>
		<?php 

		function say_hello(){
			echo "Hello World!<br />";
		}

		say_hello();
		
		function say_hello_to($word) {
			echo "Hello {$word}!<br />";
		}

		say_hello_to("World!");
		say_hello_to("Everyone!!");
		
		say_hello_loudly();
		
		function say_hello_loudly() {
			echo "HELLO WORLD!<br />";
		}

		?>
		<br />
		<?php 

		function say_name($name) {
			echo "Hello there {$name}. How are you going today? <br />";	
		}

		say_name("Mark")
		?>
		<br />
	</body>
</html>		
