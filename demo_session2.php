<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<?php 
		//Session varibles set from the previous page
		echo "The favorite color is ".$_SESSION["favcolor"]."<br>";
		echo "The favorite animal is ".$_SESSION["favanimal"]."<br>";

		echo "session variables can also be viewed this way<br>";
		print_r($_SESSION);

		//Remove all session variables
		session_unset();

		//Destroy the session
		session_destroy();
	?>
</body>
</html>