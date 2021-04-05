<?php
	$servername = 'sql102.epizy.com';
	$user = 'epiz_28317327';
	$pass = 'KHsQU22REx0SK';
	$dbname = 'epiz_28317327_details';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}


?>