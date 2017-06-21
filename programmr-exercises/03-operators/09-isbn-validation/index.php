<!--
ISBN Validation
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2040

An ISBN number is legal if it consists of 10 digits and 1*d_1 + 2*d_2 + 3*d_3 + ... + 10*d_10 is a multiple of 11.
The ISBN number 0-201-31452-5 is valid.
1*5 + 2*2 + 3*5 + 4*4 + 5*1 + 6*3 + 7*1 + 8*0 + 9*2 + 10*0 = 88 and 88 is a multiple of 11.
Write a program which validates an ISBN number.

Enter ISBN number:8535902775
Valid


Enter ISBN number:1843369283
Not Valid

#PHP
echo "Enter ISBN number:";
$isbn=trim(fgets(STDIN)); 
//{Write your code here

//}
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ISBN Validation</title>
</head>
<body>
	<form method="POST">
		<label>Enter ISBN number:</label><br/>
		<input type="number" name="isbn" placeholder="Enter number" required/><br/><br/>
		<input type="submit" value="Check"/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST['isbn']) && !empty($_POST['isbn'])) {
	$isbn = $_POST['isbn'];

	$digit1 = substr($isbn, -1, 1);
	$digit2 = substr($isbn, -2, 1);
	$digit3 = substr($isbn, -3, 1);
	$digit4 = substr($isbn, -4, 1);
	$digit5 = substr($isbn, -5, 1);
	$digit6 = substr($isbn, -6, 1);
	$digit7 = substr($isbn, -7, 1);
	$digit8 = substr($isbn, -8, 1);
	$digit9 = substr($isbn, -9, 1);
	$digit10 = substr($isbn, -10, 1);

	$d1 = 1 * $digit1;
	$d2 = 2 * $digit2;
	$d3 = 3 * $digit3;
	$d4 = 4 * $digit4;
	$d5 = 5 * $digit5;
	$d6 = 6 * $digit6;
	$d7 = 7 * $digit7;
	$d8 = 8 * $digit8;
	$d9 = 9 * $digit9;
	$d10 = 10 * $digit10;

	$sum = $d1 + $d2 + $d3 + $d4 + $d5 + $d6 + $d7 + $d8 + $d9 + $d10;

	if($sum % 11 == 0) {
	    echo "Valid";    
	} else {
	    echo "Not Valid";
	}

}
exit;