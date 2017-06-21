<!--
Add negative, even & odd numbers from a list
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2046

Complete the program to print the sum of negative numbers, positive even numbers, positive odd numbers from a list of numbers entered by the user. The list terminates when the number entered is zero.
Enter a number (0 to terminate):3
4
32
5
3
-3
-2
0
Sum of negative numbers = -5

Sum of positive even numbers = 36

Sum of positive odd numbers = 11

#PHP
echo "Enter the numbers (0 to terminate):";

//Write your code here{

//}
echo "Sum of negative numbers = ".$negative_sum."
Sum of positive even numbers = ".$even_sum."
Sum of positive odd numbers = ".$odd_sum ;

exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add negative, even & odd numbers from a list</title>
</head>
<body>
	<form method="POST">
		<label>Enter number:</label><br/>
		<input type="number" name="number" placeholder="Enter number" required/><br/><br/>

		<input type="submit" value="Calculate"/>
	</form>
	<hr/>
</body>
</html>

<?php

$negative_sum = 0;
$even_sum = 0;
$odd_sum = 0;

if(isset($_POST) && !empty($_POST)) {
	$number = $_POST['number'];
	//como receber vários números sem saber a quantidade total?

	if($number < 0) {
		$negative_sum = $number + $number;
	} else {
		if($number % 2 == 0) { 
			$even_sum = $number + $number; //even
		} else {
			$odd = $number + $number; //odd
		}
	}

	if($number == 0) {
		exit; //como encerrar lista de números quando usuário digitar "0" e rodar sistema a partir daí?
	}
}

echo "Sum of negative numbers = ".$negative_sum."
Sum of positive even numbers = ".$even_sum."
Sum of positive odd numbers = ".$odd_sum ;

exit;
?>

