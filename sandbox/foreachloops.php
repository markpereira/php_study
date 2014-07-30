<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loops: foreach</title>
	</head>
	<body>
		<?php // basic arrays example
			$ages = array(4,8,15,16,23,42);

			foreach($ages as $age) {
				echo "Age: {$age}<br />";
			}
		?>
		<br />
		<?php  // Mark's example trying to see if he gets it!
			$students = array("Mark", "John", "Andrew", "Simon", "Betty", "Samantha");

			foreach($students as $student) {
				echo "Student: {$student}<br />";
			}
		?>
		<br />
		<?php // foreach using Associative Arrays 

			$person = array (
									"first_name" 	=> "Mark",
									"last_name" 	=> "Pereira",
									"address" 		=> "123 Main Street",
									"city"				=> "Sydney",
									"state"				=> "NSW",
									"zip_code"		=> "2000",
				);

			foreach($person as $attribute => $data) {
				$attr_nice = ucwords(str_replace("_", " ", $attribute));
				echo "{$attr_nice}: {$data}<br />";
			}
		?>
		<br />
		<?php // one more example
			$prices = array(
									"Brand New Computer" 		=> 2000,
									"1 Month of Lynda.com" 	=> 25,
									"Learning PHP" 					=> null);

			foreach($prices as $item => $price) {
				echo "{$item} :  ";
				if (is_int($price)) {
					echo "$" . $price;
				} else {
					echo "priceless";
				}
				echo "<br />";
			}	
		?>
		<br />
	</body>
</html>		
