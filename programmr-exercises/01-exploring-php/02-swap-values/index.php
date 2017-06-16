<!--
Swap the values of two variables
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2030

Write a program to swap the values of two variables.
Enter the 1st number:48
Enter the 2nd number:12
1st Number:12
2nd Number:48

#PHP
   echo "Enter the 1st Number:";
   $number1 = trim(fgets(STDIN));

   echo "Enter the 2nd number:";
   $number2=trim(fgets(STDIN));
     
     //{Write down your logic here
     
     
     
     
     
     //} 
  echo "1st Number:".$number1;
  echo "\n";
  echo "2nd Number:".$number2;
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Swap the values of two variables</title>
</head>
<body>
  <form method="POST">
    <label>Enter the 1st number:</label><br/>
    <input type="number" name="number1" required><br/><br/>
    <label>Enter the 2nd number:</label><br/>
    <input type="number" name="number2" required><br/><br/>
    <input type="submit" value="Swap it"><br/><br/>
  </form>
  <hr/>
</body>
</html>

<?php
$number1 = $_POST['number2'];
$number2 = $_POST['number1'];

/* Se não tiver "POST":
  $temp = $number1;
  $number1 = $number2;
  $number2 = $temp;
*/

echo "1st Number:".$number1;
echo "<br/>";
echo "2nd Number:".$number2;

?>