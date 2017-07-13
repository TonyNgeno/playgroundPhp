<?php 
	$array = array(2, 4, 5, 7, 10);
	foreach ($array as $value) {
			echo $value."<br>";
		}	
	echo "\n\n\n\n";
	$course = array('BBIT'=>'Bachelor of Business and Information Technology', 'CS' => 'Bachelor of Science in Computer Science');
	//Display
	foreach($course as $key => $value){
		echo $key." in full means ".$value."<br>";
	}

	
	

?>