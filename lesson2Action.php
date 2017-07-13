<?php 
	$age = $_POST['Age'];

	echo "Your age is $age.<br>";
	if($age > 60){
		echo "You are <b>Elderly</b><br>";
	}else if($age >= 35){
		echo "You are <b>Aged</b><br>";
	}else if($age >= 20){
		echo "You are <b>Youth</b><br>";
	}else if($age >= 13){
		echo "You are <b>Teen</b><br>";
	}else if($age >= 1){
		echo "You are <b>Child</b><br>";
	}
?>