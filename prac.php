


<?php

	echo "<p>Writing files in the server.</p>";
	$myfile = fopen("testfile.txt", "w") or die("Unable to open file");
	$txt = "Brian Okinyi\n";
	fwrite($myfile, $txt);
	$txt = "Faith Imani";
	fwrite($myfile, $txt);

	fclose($myfile);







	echo "Today is ".date("l d")."<br>";

	date_default_timezone_set("America/New_York");
	echo "The server time in America is ".date("h.i.sa")."<br>";

	print "Unix Epoch January 1 1970 00:00:00 GMT<br>";
	$d= mktime(00, 00, 00, 1, 1, 1970);
	echo "Created date is ".date("Y-m-d h:i:sa", $d)."<br>";

	$d=strtotime("next year");
	echo "<p>The created time is ".date("Y/m/d h:i:sa", $d)."</p>";

	echo "<p>The next six Saturdays</p>";
	$startdate=strtotime("Saturday");
	$enddate=strtotime("+6 weeks", $startdate);
	while($startdate<$enddate){
		echo date("M d", $startdate)."<br>";
		$startdate = strtotime("+1 week", $startdate);
	}

	echo "<p>Number of days until 8th August</p>";
	$d1=strtotime("August 08");
	$d2=ceil(($d1-time())/60/60/24);
	echo "There are ".$d2." days until election date.";

	echo "<p>Reading file webdictionary.txt</p>";
	echo readfile("webdictionary.txt");

	echo "<p>Using fopen</p>";
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	echo fread($myfile, filesize("webdictionary.txt"));
	fclose($myfile);

	echo "<p>Read line by line while !feof</p>";
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file");
	while (!feof($myfile)){
		echo fgets($myfile)."<br>";
	}
	fclose($myfile);

	include 'footer.php';
?>
<html>
<body>



	<form action="c:\xampp\htdocs\prac\action.php" method="POST" target="_blank">
		Name:<br/> 
		<input type="text" name="name"><br/>
		E-mail: <br/>
		<input type="text" name="email"><br/>
		Website:<br/>
		<input type="website" name="website"><br/>
		Comment:<br/>
 		<textarea name="comment" rows="3" cols="100" placeholder="Say something..."></textarea><br/>
 		<input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Femal<br/>
		<input type="submit" value="Submit">
	</form>

	<h3>Multidimensional arrays</h3>
</body>
</html>

