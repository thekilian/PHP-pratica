<!--
Digit at 100's place
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2045

Write a program to display the hundreds place digit of a number.
Enter Number:346
3

#PHP
   $ans=0;
   echo "Enter Number:";
   $number = trim(fgets(STDIN));
   
     
     //{Write down your logic here






     //} 
  echo $ans;
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Digit at 100's place</title>
</head>
<body>
	<form method="POST">
		<label>Enter number:</label><br/>
		<input type="number" step="any" name="number" placeholder="Enter number" required/><br/><br/>

		<input type="submit" value="Check"/>
	</form>
	<hr/>
</body>
</html>

<?php

$ans = 0;

if(isset($_POST['number']) && !empty($_POST['number'])) {
	$number = $_POST['number'];

	$ans = substr($number, 0, 1);

	echo $ans;
}
exit;
?>