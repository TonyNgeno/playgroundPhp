<html>
<body>
<?php>
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $website = $comment = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["name"])){
			$nameErr = "Name is required";
		}else{
			$name = test_input($_POST["name"]);
		}
		if(empty($_POST["email"])){
			$emailErr = "Email is required";
		}else{
			$email = test_input($_POST["email"]);
		}
		if(empty($_POST["website"])){
			$websiteErr = "Website is required";
		}else{
			$website = test_input($_POST["website"]);
		}
		if(empty($_POST["comment"])){
			$comment = "";
		}else{
			$comment = test_input($_POST["comment"]);
		}
		if(empty($_POST["gender"])){
			$genderErr = "Gender is required";
		}else{
			$gender = test_input($_POST["gender"]);
		}
	}

?>
</body>
</html>