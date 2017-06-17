<!--
Temperature Converter
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2058

Complete the program to give the user the option of converting Fahrenheit to Celsius or Celsius to Fahrenheit and depending on user's choice carry out the conversion.

Enter your choice  :
1. Fahrenheit to Celsius:
2. Celsius to Fahrenheit:
1
Enter Temprature in Fahrenheit :100
Celcius :37.777777777778


Enter your choice  :
1. Fahrenheit to Celsius:
2. Celsius to Fahrenheit:
2
Enter Temprature in Celcius :100
Fahrenheit :212

#PHP
echo "Enter your choice :<br/>";
    echo "1. Fahrenheit to Celsius:<br/>";
    echo "2. Celsius to Fahrenheit:<br/>";
    $optn=trim(fgets(STDIN));
    //{Write your code here 
    
    //}
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Temperature Converter</title>
</head>
<body>
	<form method="POST">
		<label>Enter your choice:<br/>
			<strong>1. </strong>Fahrenheit to Celsius:<br/>
			<strong>2. </strong>Celsius to Fahrenheit:
		</label><br/>
		<input type="number" name="choice" placeholder="Enter your choice here" required/><br/><br/>
		
		<label>Enter the temperature:</label><br/>
		<input type="number" name="conv" placeholder="Enter temperature here" required/><br/>
		<input type="submit" value="Temperature Converter"/><br/><br/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST) && !empty($_POST)) {
	$conv = 0;
	$choice = $_POST['choice'];

	if($choice == 1) {
		$conv = ($_POST['conv'] - 32) / 1.8;
		echo "Celsius: ".$conv;
	} else {
		$conv = ($_POST['conv'] * 1.8) + 32;
		echo "Fahrenheit: ".$conv;
	}
	exit;
}

/*
Para converter graus Fahrenheit em graus Celsius, subtraia 32 e divida por 1,8.
°C = (°F − 32) ÷ 1, 8

Para converter graus Celsius em graus Fahrenheit, multiplique por 1,8 e adicione 32.
°F = °C × 1, 8 + 32
*/
?>