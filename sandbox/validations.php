<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Validations</title>
	</head>
	<body>
		<?php

		// * presence
		//value option 1
		$value = trim("0");
		if (!isset($value) || (empty($value) && !is_numeric($value))) {
			echo "Validation failed. Nothing entered<br />";
		}

		//value option 2
		$value = trim("0");
		if (!isset($value) || $value === "") {
			echo "Validation failed. Nothing entered<br />";
		}

		// * string length
		//minimum length
		$value = "abcde";
		$min = 3;
		if (strlen($value) < $min) {
			echo "Validation failed - min 3 characters.<br />";
		}
		// max length
		$max = 6;
		if (strlen($value) > $max) {
			echo "Validation failed - max 6 characters.<br />";	
		}
		// * type
		$value = "22";
		if (!is_string($value)) {
			echo "Validation failed. This value is not a string<br />";	
		}
		// * inclusion in a set
		$value = "1";
		$set = array("1", "2", "3", "4");
		if (!in_array($value, $set)) {
			echo "Validation failed - This number is not in the array<br />";	
		}

		// * uniqueness
		// uses a database to check uniqueness


		// * format
		//use a regex on a string
		// preg_match($regex, $subject)
		if (preg_match("/PHP/", "PHP is Fun.")) {
			echo "A match was found.";
		} else {
			echo "A match was not found";
		}

		$value = "nobody@nowhere.com";
		if (!preg_match("/@/", $value)) {
			echo "<br />Validation failed.<br />";	
		}

		if (strpos($value, "@") === false){
			echo "Validation failed.<br />";
		}



		?>
	</body>
</html>		
