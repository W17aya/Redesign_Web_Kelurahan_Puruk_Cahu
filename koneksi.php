<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db ='agenda';

	$conn = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error($conn));
?>