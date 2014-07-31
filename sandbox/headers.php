<?php 
	header("HTTP 1.1/ 404 Not Found");
	header("X-Powered-By: None of your business");
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Headers</title>
	</head>
	<body>
		<?php 
			// header("HTTP 1.1/ 404 Not Found");
			// if this worked then maybe you have output buffering turned on.
		?>

		<pre>
			<?php
				print_r(headers_list()) ;
			?>
		</pre>	
	</body>
</html>		
