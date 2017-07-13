<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if($conn->connect_error){
		die("Connection failed: ".$conn->connnect_error);
	}
	

	//Prepare and bind
	$stmt = $conn->prepare("INSERT INTO myguests(firstname, lastname, email) 
		VALUES(?, ?, ?)");
	$stmt->bind_param("sss", $firstname, $lastname, $email);

	//Set parameters and execute
	$firstname = "Brian";
	$lastname = "Okinyi";
	$email = "brianokinyi.bo@gmail.com";
	$stmt->execute();

	$firstname = "Abraham";
	$lastname = "Lincoln";
	$email = "abraham@gmail.com";
	$stmt->execute();

	echo "New records created successfully.";

	$stmt->close();
	$conn->close();
?>