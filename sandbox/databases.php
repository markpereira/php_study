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
	// 2. Perform database query
	// below - Assembling a query
	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result) {
		die("Database query failed");
	}	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
		<ul>
		<?php 
		// 3. Use return data (if any)
			while($subject = mysqli_fetch_assoc($result)) {
				// This is how we work with mysql result sets (because it's not a PHP array).
				// Fetching the subject increments the array pointer. Cannot use "foreach" here.
				//output data from each subject
		?>
			<li><?php echo $subject["menu_name"] . " (" . $subject["id"] .")"; ?></li>	
		<?php
			}
		?>
	</ul>

		<?php 
		// 4. Release returned data
		mysqli_free_result($result);
		?>

	</body>
</html>		

<?php 
		// 5. Close database connection
		mysqli_close($connection);
?>
