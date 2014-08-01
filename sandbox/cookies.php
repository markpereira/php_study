<?php 
	// Remember: Setting cookies must be before *any* HTML output 
	//					 unless output bufferinf is turned on	
	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24*7); // one week in seconds
	setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>
		<?php //option 1
			if (isset($_COOKIE["test"])) {
				$test = $_COOKIE["test"];
			} else {
				$test = "";
			}
			echo $test;		// common use is to look up a user in the database, check user preferences, timezones etc...
		?>
		<br />
		<?php // option 2 is a nice clean way is to use the ternary operator
			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "" ;
			echo $test;	
		?>

	</body>
</html>		
