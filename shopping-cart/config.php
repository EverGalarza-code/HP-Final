<?php
	$conn = new mysqli("localhost","root","","hp-db");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>