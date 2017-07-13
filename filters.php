<?php 
	//Filter sanitize strings greater than 127
	$str = "<h1>Hello worldT^%^%$%^%&!</h1>";
	$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	echo ("he valus is now $newstr. <br>");
	echo "<hr>";







	//Validate url ====Must contain QueryString====
	$url = "https://www.w3chools.com";
	if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false){
		echo "The url \"$url\" is valid with query";
	}else{
		echo "The url \"$url\" is invalid. <br>";
	}
	echo "<hr>";


	$url = "http://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}





	//Validate a IPV6 address
	$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
	if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
		echo "Your IPV6 $ip is valid. <br>";
	}else{
		echo "Your IPV6 $ip is invalid!<br>";
	}
	echo "<hr><br>";






	//Validate INT and within a range
	$age = 400;
	$min = 0;
	$max = 150;
	if(filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false){
		echo "Could $age really be a valid human?";
	}else{
		echo "Age of $age is a valid human.<br>";
	}
	echo "<hr>";






	//Url
	$url = "http://www.youtube.com";
	//Remove illegal characters
	$url = filter_var($url, FILTER_SANITIZE_URL);
	if(!filter_var($url, FILTER_VALIDATE_URL)===false){
		echo "This is a valid url";
	}else{
		echo "This is not a valid url.<br>";
	}
	echo "<hr><br>";






	//Email
	$email = "Brian!okinyi.bo@gmail.com";
	//Take care of illegal characters 
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	echo "sanitized email is now $email.<br>";
	//Validate email
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
		echo "This is a valid email address.<br>";
	}else echo "This is not a valid email.";
	echo "<hr><br>";



	
	$ip = "127.0.0.1";
	if(!filter_var($ip, FILTER_VALIDATE_IP)===false){
		echo "$ip is a valid ip address.<br>";
	}else echo "$ip is not a valid ip address.<br>";
	echo "<hr>";


	$int = 0;
	if(!filter_var($int, FILTER_VALIDATE_INT)===false || filter_var($int, FILTER_VALIDATE_INT)===0){
		echo ("Integer is valid");
	}else{
		echo "Integer is not valid";
	}



	echo "<hr><br>";
	$str = "<h1>Hello World!</h1>";
	echo "before filter and sanitization: <br>$str";

	$newstr = filter_var($str, FILTER_SANITIZE_STRING);
	echo "New string now is: <br>$newstr";



?>