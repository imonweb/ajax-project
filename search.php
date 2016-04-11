<?php 
	$connection = mysqli_connect('localhost', 'imon', 'p@ssw0rd', 'ajax');
	if(!$connection){
		die("Database connection failed" . mysqli_error($connection));
	}
 ?>