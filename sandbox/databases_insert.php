<?php 
	// Database Connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "widgetabcd";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	// 1. Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php 
	// Often these are form values in $_POST
	$menu_name = "Today's Widget Trivia";
	$position = 4;
	$visible = 1;

	// Escape all strings
	$menu_name = mysqli_real_escape_string($connection, $menu_name);
	// 2. Perform database query

	//Classic query
	// $query = "INSERT INTO subjects (menu_name, position, visible)
	// 					VALUES ('{menu_name}', {$position}, {$visible})";

	// structured query
	$query  = "INSERT INTO subjects (";
	$query .= " menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= " '{$menu_name}', {$position}, {$visible}";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
	} else {
		// Failure
		// $message = "Subject creation failed";	
		die("Database query failed. " . mysqli_error($connection));
	}	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Database Insert</title>
	</head>
	<body>

	</body>
</html>		

<?php 
		// 5. Close database connection
		mysqli_close($connection);
?>
