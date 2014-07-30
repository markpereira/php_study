<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Switch</title>
	</head>
	<body>
		<?php 
			$a = 9;

			switch ($a) {
				case 0:
					echo "a equal 0<br />";
					break;
				case 1:
					echo "a equal 1<br />";
					break;
				case 2:
					echo "a equal 2<br />";
					break;
				case 3:
					echo "a equal 3<br />";
					break;
				default:
					echo "a is not equal to 0, 1, 2, 3<br />";
					break;	
			}
		?>

		<?php // ChineseZodiac
		//Whitesapces doesn't matter
		// colons, semicolons and breaks do
		$year = 2015;
		switch (($year - 4) % 12) {
			case  0: $zodiac = 'Rat';			break;
			case  1: $zodiac = 'Ox'; 			break;
			case  2: $zodiac = 'Tiger'; 		break;
			case  3: $zodiac = 'Rabbit'; 	break;
			case  4: $zodiac = 'Dragon'; 	break;
			case  5: $zodiac = 'Snake'; 		break;
			case  6: $zodiac = 'Horse'; 		break;
			case  7: $zodiac = 'Goat'; 		break;
			case  8: $zodiac = 'Monkey'; 	break;
			case  9: $zodiac = 'Rooster'; 	break;
			case 10: $zodiac = 'Dog'; 		break;
			case 11: $zodiac = 'Pig'; 		break;
		}
		echo "{$year} is the year of the {$zodiac}.";
		?>

		<br />
		
		<?php // case with multiple values
		$user_type = 'customer';

		switch ($user_type) {
			case 'student':
				echo "Welcome!";
				break;
			// if using the same greeting for multiple cases, just add them
			// one after the other and it will echo the same message before the break
			// if the user_type falls into either catergory	
			case 'press': 
			case 'customer':
				echo "Hello";
				break;		
		}
		?>

	</body>
</html>		
