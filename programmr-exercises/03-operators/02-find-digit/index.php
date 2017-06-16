<!--
Find digit in unit place
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2044

Write a simple program to print the digit in unit place of a number entered by the user.
Enter Number:3457
7

#PHP
$answer=0;
   echo "Enter Number:";
   $number = trim(fgets(STDIN));

     
     //{Write down your logic here



     //} 
  echo $answer;
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Find digit in unit place</title>
</head>
<body>
	<form method="POST">
		<label>Enter number:</label><br/>
		<input type="number" name="number" placeholder="Enter your number here" required/><br/><br/>
		<input type="submit" value="Check the last digit"/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST) && !empty($_POST)) {
	$answer = 0;
	$number = $_POST['number'];

	echo "Your number is: ".$number;
	echo "<br/>";

	if($number < 0) {
		$answer = "-".substr($number, -1);
		echo "The answer is: ".$answer;
	} else {
		$answer = substr($number, -1); 
		echo "The answer is: ".$answer;
	}
	
	//if(is_float($number)) { //para float - exercício pede para mostrar o primeiro número antes do ponto, mas está mostrando o último
		//$answer = substr($number, 0, 1);
		//echo "The answer is: ".$answer;
	//}

	exit;
?>