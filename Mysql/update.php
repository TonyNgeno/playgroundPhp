<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if($conn->connect_error)
		echo "Connection failed: ". $conn->connect_error;

	//Update records
	$sql = "UPDATE myguests SET lastname = 'Manoti' WHERE id=39";

	//Check update
	if($conn->query($sql) === TRUE){
		echo "Record updated successfully";
	}else{
		echo "Error updating record: ".$conn->error;
	}
	$conn->close();
?>