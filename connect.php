<?php 

	
	$connection = mysqli_connect('localhost', 'root', '', 'users');

	$select_db = mysqli_select_db($connection, 'users');


?>
