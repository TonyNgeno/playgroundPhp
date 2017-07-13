<?php 
	function customError($errno, $errstr){
		echo "<b>Error:</b> [$errno] $errstr";
		echo "The admin has been notified";
		error_log("Error: [$errno] $errstr", 1, "brianokinyi.bo@gmail.com", "From: mywebsite@sample.com");
	}

	set_error_handler("customError", E_USER_ERROR);

	$test = 2;
	if($test > 1){
		trigger_error("Value must be less than 1.", E_USER_ERROR);
	}
?>