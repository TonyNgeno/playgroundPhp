<?php 
	session_start(); //Start session
?>

<!DOCTYPE html>
<html>
<body>
	<?php
		$_SESSION["favcolor"] = "red";
		$_SESSION["favanimal"] = "Tiger";

		echo "Session variables are set.";
	?>
</body>
</html>