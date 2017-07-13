<html<head>
</head>
<body>
	<form action="main.php" method="post">
		Username:
		<input type="text" name="Username" placeholder="Login" value="">
		<input type="submit" name="Submit" value="Login">

	</form>
</body>
</html>


<?php
	if(isset($_POST['submit'])){
		$username = $_POST['Username'];
		if(!empty($username)){
			if($username === 'Admin'){
				echo "Username is correct.<br>";
			}else 
				echo "Incorrect username<br>";
		}else{
			echo "Blank username!";
		}
	}//End isset
?>