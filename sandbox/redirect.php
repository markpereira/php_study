<?php 
	// This is how you redirect to a new page
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
	
	$logged_in = $_GET['logged_in'];
	if ($logged_in == "1") {
		redirect_to("basic.html");	
	} else {
		redirect_to("http://www.google.com");	
	}
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Redirect</title>
	</head>
	<body>
		<?php 

		?>
	</body>
</html>		
