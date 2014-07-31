<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Functions: Return Values</title>
	</head>
	<body>
		<?php 

				function add($val1, $val2) {
					$sum = $val1 + $val2;
					return $sum;
				}

				$result1 = add(3,4);
				$result2 = add(5,$result1);
				echo $result2;
		?>
	<br />
	<br />
	<?php // ChineseZodiac

		function chinese_zodiac($year) {
			switch (($year - 4) % 12) {
				case  0: return 'Rat';		
				case  1: return 'Ox'; 			
				case  2: return 'Tiger'; 	
				case  3: return 'Rabbit'; 	
				case  4: return 'Dragon'; 
				case  5: return 'Snake'; 		
				case  6: return 'Horse'; 		
				case  7: return 'Goat'; 		
				case  8: return 'Monkey'; 	
				case  9: return 'Rooster'; 	
				case 10: return 'Dog'; 		
				case 11: return 'Pig'; 		
			}	
		}
		$zodiac = chinese_zodiac(2013);
		echo "2013 is the Year of the {$zodiac}.<br />";

		$zodiac = chinese_zodiac(2027);
		echo "2027 is the Year of the {$zodiac}.<br />";
		?>
		<br />
		<br />
		<?php 

			function better_hello($greeting, $target, $punct) {
				return $greeting . " " . $target . $punct . "<br />";
			}

			echo better_hello("Hello", "John Doe", " !!")

		?>
		<br />


============ Mark's Examples ==========



	<br />
	Mark's example for addition
	<br />
		<?php // mark's example for adding two numbers

		function add_2($val1, $val2) {
			$sum = $val1 + $val2;
			return $sum;
		}

		$result = add_2(3,4);
		$result1 = add_2(100,$result);
		echo $result1;


		?>		
	<br />
	<br />
	Mark's example for subtraction
	<br />
		<?php // mark's example for subtracting two numbers

		function subtract($val1, $val2) {
			$value = $val1 - $val2;
			return $value;
		}

		$result = subtract(10,4);
		echo $result;
		?>		
	<br />
	<br />
	Mark's example for division
	<br />
		<?php // mark's example for dividing two numbers

		function divide($val1, $val2) {
			$value = $val1 / $val2;
			return $value;
		}

		$result = divide(21,7);
		echo $result;
		?>		
	<br />
	</body>
</html>		
