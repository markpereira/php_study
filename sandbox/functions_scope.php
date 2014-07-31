
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Functions: Scope</title>
	</head>
	<body>
		<?php 

		$bar = "outside"; // global scope

		function foo() {
			global $bar;
			if (isset($bar)) {
				echo "foo: " . $bar . "<br />";
			}
			$bar = "inside"; // local scope
		}

		echo "1: " . $bar . "<br />";
		foo();

		echo "2: " . $bar . "<br />";

		?>
	<br />
		<?php 

		$cat = "outside (global)"; // global variable

		function where_is_cat() {
			global $cat;
			if (isset($cat)) {
				echo "The cat is {$cat} - inside the function. <br />"; 
			}
			$cat = "inside (local)"; // local variable
		}

		echo "The cat is {$cat}  - outside the function. <br />"; 
		where_is_cat();
		echo "The cat is {$cat} - outside the function after function is called. <br />"; 

		?>
	<br />
	</body>
</html>		
