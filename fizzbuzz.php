<?php 
$teller;
for($teller = 1; $teller<100; $teller++)
{
		if($teller%3 == 0 && $teller%5 == 0){
			echo "fizzbuzz <br>";
		} 
		else if ($teller%3 == 0) {
			echo "fizz <br>";
		}
		else if ($teller%5 == 0) {
			echo "buzz <br>";
		}
		else {
			echo $teller . " <br>";
		}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>fizzbuzz</title>
</head>
<body>
	
</body>
</html>