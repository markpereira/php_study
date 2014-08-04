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