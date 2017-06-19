<!--
A Dumb Calculator
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2037

Make a simple numeric calculator. It should prompt the user for three numbers. Then add the numbers together and divide by 2. Display the result. Your program must support numbers with decimals and not just integers.

Input:
10
20
30
Output:
30


Input:
1.5
2.5
3.5
Output:
3.75

#PHP
$result=0;
    
   echo "Enter the 1st Number:";
   $number1 = trim(fgets(STDIN));

   echo "Enter the 2nd number:";
   $number2=trim(fgets(STDIN));
   
    echo "Enter the 3rd Number:";
   $number3 = trim(fgets(STDIN));
   
     ///{ WRITE YOUR CODE HERE

     ///} 
 
  exit;
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dumb Calculator</title>
</head>
<body>
	<form method="POST">
		<label>Enter the 1st number:</label><br/>
		<input type="number" step="any" name="number1" placeholder="Enter the 1st number" required/><br/><br/>

		<label>Enter the 2nd number:</label><br/>
		<input type="number" step="any" name="number2" placeholder="Enter the 2nd number" required/><br/><br/>

		<label>Enter the 3rd number:</label><br/>
		<input type="number" step="any" name="number3" placeholder="Enter the 3rd number" required/><br/><br/>

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
	$number3 = $_POST['number3'];

	$result = ($number1 + $number2 + $number3) / 2;

	echo $result;
}
exit;
?>