<?php
	$servername = 'sql102.epizy.com';
	$user = 'epiz_28317327';
	$pass = 'KHsQU22REx0SK';
	$dbname = 'epiz_28317327_details';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

	$sql = "INSERT INTO `users`(`id`, `name`, `email`, `credits`) VALUES ([value-1],[value-2],[value-3],[value-4])";

	if($conn->query($sql) === TRUE){
		echo "New Record Create Successfully.";
	}
	else{}
		echo "Error!!!".$sql."<br>".$conn->error;
	}
	$conn->close();
?>