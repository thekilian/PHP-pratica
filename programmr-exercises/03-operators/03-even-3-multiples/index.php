<!--
Even 3 multiples
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2048

Write a program to see whether a number is an even multiple of 3.
Enter the number:6
yes

the number:9
no

#PHP
echo "Enter the Number:";
   $number = trim(fgets(STDIN));
    //{
    //write down your logic here
  
    //}
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Even 3 multiples</title>
</head>
<body>
	<form method="POST">
		<label>Enter the number:</label><br/>
		<input type="number" name="number" placeholder="Enter the number here" required/><br/><br/>
		<input type="submit" value="Is it an even multiple of 3?"/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST) && !empty($_POST)) {
	$answer = 0;
	$number = $_POST['number'];

	if(($number % 3) == 0) {//se n° for multiplo de 3
		if($number % 2 == 0) { //even
			echo "yes";
		} else {
			echo "no"; //odd
		}
	} else { // se não for múltiplo de 3
		echo "Please, enter a multiple of 3.";
	}
}
exit;