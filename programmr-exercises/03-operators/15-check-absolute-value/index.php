<!--
Check the absolute value
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2049

Write a program that inputs two numbers and gives output as "true" when absolute values are equal , otherwise output "false".
If the numbers are 43 and 43, the program should print "true".
If the numbers are 43 and 46, the program should print "false".
If the numbers are 43 and -43, the program should print "true".
Enter the 1st Number:23
Enter the 2nd Number:-23
true

#PHP
$ans = "false";
   echo "Enter the 1st Number:";
   $number1 = trim(fgets(STDIN));

   echo "Enter the 2nd Number:";
   $number2=trim(fgets(STDIN));
     
     //{Write down your logic here

     //} 
  echo $ans;
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Check the absolute value</title>
</head>
<body>
  <form method="POST">
    <label>Enter the 1st number:</label><br/>
    <input type="number" step="any" name="number1" placeholder="Enter the 1st number" required/><br/><br/>

    <label>Enter the 2nd number:</label><br/>
    <input type="number" step="any" name="number2" placeholder="Enter the 2nd number" required/><br/><br/>

    <input type="submit" value="Check"/>
  </form>
  <hr/>
</body>
</html>

<?php

$ans = "false";

if(isset($_POST) && !empty($_POST)) {
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];

  if(abs($number1) == abs($number2)) {
  	$ans = "true";
  } else {
  	$ans = "false";
  }

}
echo $ans;
exit;
?>