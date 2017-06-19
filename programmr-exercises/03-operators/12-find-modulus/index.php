<!--
find the modulus of 2 numbers
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2036

write a simple program to find the modulus of 2 numbers and output it.

Input:
5
2
Output:
1


Input:
4
2
Output:
0

#PHP
 $mod=0;  
   echo "Enter the 1st Number:";  
   $number1 = trim(fgets(STDIN));  
  
   echo "Enter the 2nd number:";  
   $number2=trim(fgets(STDIN));  
     //{  
     //write down your logic here  

     //}   
  echo "modulus is:";  
  echo $mod;  
  exit;  
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Find the modulus of 2 numbers</title>
</head>
<body>
  <form method="POST">
    <label>Enter the 1st number:</label><br/>
    <input type="number" step="any" name="number1" placeholder="Enter the 1st number" required/><br/><br/>

    <label>Enter the 2nd number:</label><br/>
    <input type="number" step="any" name="number2" placeholder="Enter the 2nd number" required/><br/><br/>

    <input type="submit" value="Find the modulus!"/>
  </form>
  <hr/>
</body>
</html>

<?php

$mod = 0;

if(isset($_POST) && !empty($_POST)) {
  $number1 = $_POST['number1'];
  $number2 = $_POST['number2'];

  $mod = ($number1 % $number2);

  echo "modulus is:".$mod;
}
exit;
?>