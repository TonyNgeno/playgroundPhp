<html>
<head>
	<title>chiron | variables</title>
</head>
<body>
	<?php
		$num=10;
		$num2=11;
		$answer=$num+$num2;
		echo $answer;
		echo "<br/>";
		$first_name='Felix';
		$last_name='Okinyi';
		$book='Kafka on the Shore';
		echo "<p> The book <b>$book</b> was written by $first_name $last_name</p>";

		echo "\n\n";
		$city = "City Kabanas";
		$state = 'Nairobi';
		$address =$city.', '.$state;
		echo "<b>$address</b>\n\n";
		echo "<br/><br/>";

		$quantity=156;
		$price=122.95;
		$taxrate=0.05;

		$gross=$quantity*$price;
		$net=$gross + ($gross*$taxrate);
		echo "You are purchasing <b>$quantity</b> Carton(s) at a cost of <b>Ksh. $price</b> each. With tax, the total comes to <b>Ksh. $net</b>";

	?>
</body>
</html>