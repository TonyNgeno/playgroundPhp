<!DOCTYPE html>
<html>
<head>
	<title>Safaricom | Selfcare</title>
	<style>
		.center{
		}
	</style>
</head>
<body>
	<div class="center">
		Selfcare:<br>
		0:Flex<br>
		1:My Account<br>
		2:Internet & Bundle Subscriptions<br>
		3:Products & Services<br>
		4:MPESA<br>
		5:My Subsriptions<br>
		6:Advantage Plus<br>
		7:Stori Ibambe<br>
		98:MORE<br>
		<form action="menu100.php" method="post">
			<!--Enter your option-->
			<input type="text" name="Option" required="" autofocus>
			<input type="submit" name="submit" value="Send">
		</form>
	</div>
</body>
</html>

<?php 
	$option = $_POST['Option'];
	switch ($option) {
		case 0:
			$ussd_string = "1:Sh2499: 3,500 Flex for 30 days<br>";
			$ussd_string .= "2:Sh1999: 2,700 Flex for 30 days<br>";
			$ussd_string .= "3:Sh999: 1,100 Flex for 30 days<br>";
			$ussd_string .= "4:Sh599: 700 Flex for 7 days<br>";
			$ussd_string .= "5:Sh99: 115 Flex daily<br>";
			$ussd_string .= "98:MORE";
			break;
		case 1:
			$ussd_string = "My Account<br>";
			$ussd_string .= "1:My Balance<br>";
			$ussd_string .= "2:Top Up<br>";
			$ussd_string .= "3:Top Up Other<br>";
			$ussd_string .= "4:Sambaza<br>";
			$ussd_string .= "5:My Number<br>";
			$ussd_string .= "6:SIM Swap<br>";
			$ussd_string .= "7:Tarrif Migration";
			break;
		case 2:
			$ussd_string = "0:Safaricom 4G Bundles & SIM Check<br>";
			$ussd_string .= "1:Daily Bundles<br>";
			$ussd_string .= "2:Buy 7 Day Bundle<br>";
			$ussd_string .= "3:Buy 30 Day Bundle<br>";
			$ussd_string .= "4:Power Hour Bundle<br>";
			$ussd_string .= "5:My Data Manager<br>";
			$ussd_string .= "6:Check Balance<br>";
			$ussd_string .= "98:MORE";
			break;
		case 3:	//
			$ussd_string = "1:International Calling Bundles<br>";
			$ussd_string .= "2:Safaricom Guarantee<br>";
			$ussd_string .= "3:Okoa Jahazi<br>";
			$ussd_string .= "4:Bonga Points<br>";
			$ussd_string .= "5:SMS More for Less<br>";
			$ussd_string .= "6:Skiza<br>";
			$ussd_string .= "7:Safaricom Roaming<br>";
			$ussd_string .= "0:BACK  00:HOME  98:MORE<br>";
			break;
		case 4:	//MPESA
			$ussd_string = "USSD Service<br>";
			$ussd_string .= "1:M-PESA Products<br>";
			$ussd_string .= "2:My M-PESA Information<br>";
			$ussd_string .= "3:M-PESA Agent Services<br>";
			$ussd_string .= "4:Merchant Services<br>";
			break;
		case 5:	//Check
			$ussd_string = "Check My Subsriptions<br>";
			$ussd_string .= "1:Data Bundles<br>";
			$ussd_string .= "2:SMS Bundles<br>";
			$ussd_string .= "3:Skiza<br>";
			$ussd_string .= "4:Premium Services and Games<br>";
			$ussd_string .= "5:Create Your Plan<br>";
			$ussd_string .= "6:Marketing Messages<br>";
			$ussd_string .= "7:Weekly Notifications";
		case 6:	//Advantage plus
			$ussd_string = "Select your preferred Plan:<br>";
			$ussd_string .= "1:Ksh1999 (900Min,500MB,500SMS)<br>";
			$ussd_string .= "2:Ksh1499 (600Min,300MB,300SMS)<br>";
			$ussd_string .= "3:Ksh1249 (400min,200MB,200SMS)<br>";
			$ussd_string .= "0:BACK  00:HOME  98:MORE<br>";
			break;
		case 7:	//Stori Ibambe
			$ussd_string = "1:Check my Target<br>";
			$ussd_string .= "2:Check my STORO Bonus Balance<br>";
			$ussd_string .= "3:Check my Daily Spend<br>";
			$ussd_string .= "4:Unsubscribe<br>";
			$ussd_string .= "4:Subscribe<br>";
			break;
		case 98:  //Stori Ibambe
			$ussd_string = "8:Get your PUK Number<br>";
			$ussd_string .= "9:Safaricom Home<br>";
			$ussd_string .= "10:Find a Shop<br>";
			$ussd_string .= "0:BACK<br>";
			break;

		default:
			echo "Invalid Option";
			break;
	}
	echo $ussd_string;
?>