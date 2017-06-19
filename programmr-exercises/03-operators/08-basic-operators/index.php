<!--
Basic Operators
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2039

Write a program that evaluates the following things for two int numbers: Sum,Diff,Product,Quotient,Remainder,Increment first no, Decrement second no. 
Also print a third number. If first number is greater than second number then third number= 1. If not, assign third number= 0.
Enter 1st number:20
Enter 2nd number:10
30
10
200
2
0
21
9
1

#PHP
  echo "Enter the 1st number:";
  $number1 = trim(fgets(STDIN));

   echo "Enter the 2nd number:";
   $number2=trim(fgets(STDIN));
     
     //{Write down your logic here
  
    //} 
    exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Operators</title>
</head>
<body>
	<form method="POST">
		<label>Enter the 1st number:</label><br/>
		<input type="number" name="number1" placeholder="Enter the 1st number" required/><br/><br/>

		<label>Enter the 2nd number:</label><br/>
		<input type="number" name="number2" placeholder="Enter the 2nd number" required/><br/><br/>

		<input type="submit" value="Calculate"/>
	</form>
	<hr/>
</body>
</html>

<?php

$result = 0;

if(isset($_POST) && !empty($_POST)) {
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];

	echo "Number 1 is: ".$number1."<br/>";
	echo "Number 2 is: ".$number2."<br/>";

	$sum = $number1 + $number2;
	echo $sum."<br/>";

	$diff = $number1 - $number2;
	echo $diff."<br/>";

	$prod = $number1 * $number2;
	echo $prod."<br/>";

	$quot = $number1 / $number2;
	if($number1 / $number2) {
		if($number1 < $number2) {
			$div = substr($quot, 0, 1);
			echo $div."<br/>";
		} else {
			echo $quot."<br/>";
		}

		if($number2 == 0) {
			echo "You can't divide by zero.<br/>";
		}
	}

	$rem = $number1 % $number2;
	echo $rem."<br/>";

	$number1++;
	echo $number1."<br/>";

	$number2--;
	echo $number2."<br/>";

	if($number1 > $number2) {
		echo "Number 3 is: 1";
	} else {
		echo "Number 3 is: 0";
	}

}
exit;
?>