<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}

	//Select data from table
	$sql = "SELECT *  FROM myguests";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		//Output data row by row
		while($row = $result->fetch_assoc()){
			echo "id: ".$row['id']." - Name: ".$row['firstname']." ".$row['lastname']
			." - E-mail: ".$row['email']."<br>";
		}
	}else{
		echo "No results.";
	}

	$conn->close();
?>