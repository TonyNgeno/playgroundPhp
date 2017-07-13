<DOCTYPE html>
<html>
<head>
	<title>chiron | Registration</title>
</head>
<body>
	<p>Please complete this form to submit your feedback</p></br>
	Name: 
	<form autocomplete="on" method="POST" action="results.php" target="_blank">
		<select name="title">
			<option value="Mr.">Mr.</option>
			<option value="Mrs.">Mrs.</option>
			<option value="Ms.">Ms.</option>
		</select><input type="text" name="name"><br/><br/>
		Email Address: <input type="email" name="email"><br/>
		Response: This is <input type="radio" name="response" value="excellent" >Excellent 
		<input type="radio" name="response" value="okay" >Okay 
		<input type="radio" name="response" value="boring" >Boring
		<br/>
		Comment: <textarea name="comment" rows="3" cols="50"></textarea><br/>
		<input type="submit" name="submit" value="Submit my Feedaback">
	</form>
	<?php

	?>

</body>
</html>