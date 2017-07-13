<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	//Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Check connection
	if($conn->connect_error){
		echo "Connection failed: ".$conn->connect_error;
	}

	//Delete records
	$sql = "DELETE FROM myguests WHERE id = 40";
	//Check deletion
	if($conn->query($sql) === TRUE){
		echo "Records were deleted";
	}else{
		echo "Failed to delete: ".$conn->error;
	}
	$conn->close();
?>