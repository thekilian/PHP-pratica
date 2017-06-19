<!--
even and odd numbers
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2035

write a program to determine if the number is odd or even, even numbers are numbers can be evenly devided by 2

input: 1
output: odd


input: 6
output: even


input: -3
output: odd

#PHP
   echo "Enter the Number:";  
   $number1 = trim(fgets(STDIN));  
  
     //{  
     //write down your logic here  

     //}   
  
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Even and odd numbers</title>
</head>
<body>
	<form method="POST">
		<label>Enter the number:</label><br/>
		<input type="number" name="number" placeholder="Enter the number" required/><br/><br/>
		<input type="submit" value="Even or odd?"/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST['number']) && !empty($_POST['number'])) {
	$number = $_POST['number'];

	if($number % 2 == 0) {
		echo "even";
	} else {
		echo "odd";
	}
}
exit;
?>