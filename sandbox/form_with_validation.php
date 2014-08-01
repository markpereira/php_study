<?php
		require_once("included_functions.php");
		require_once("validation_functions.php");

		$errors = array();
		$message = "";

		// detect form submission
		if (isset($_POST['submit'])) {
			//form was submitted
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			//validations
			$fields_required = array("username", "password");
			foreach($fields_required as $field) {
				$value = trim($_POST[$field]);
				if (!has_presence($value)) {
				$errors[$field] = ucfirst($field) . " can't be blank";
				}
			}
			// using assoc. array (rest of code is within 'validate_max_length' function)
			$fields_with_max_lengths = array("username" => 30, "password" => 8);
			validate_max_lengths($fields_with_max_lengths);

			if (empty($errors)) {
			// try to login	
				if ($username == "mark" && $password == "password") {
					// successful login
					redirect_to("basic.html");
				} else {
					// there were errors 
					$message = "Username/Password do not match.";
				}
			}

		} else {
			$username = "";
			$message = "Please log in.";

		}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form</title>
	</head>
	<body>
		<?php echo $message; ?><br/>
		<?php echo form_errors($errors); ?><br />

		<form action="form_with_validation.php" method="post">
			Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
			Password: <input type="password" name="password" value="" /><br />
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>	


	</body>
</html>		
