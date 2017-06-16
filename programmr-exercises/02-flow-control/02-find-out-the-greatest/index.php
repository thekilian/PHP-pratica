<!--
Find out the greatest
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2052

Find out the largest out of the three numbers you enter.

Input:
5
4
3
Output:
5

Input:
2
8
9
Output:
9

# PHP    
  $largest=0;   
  echo "Enter the 1st Number:";   
  $number1 = trim(fgets(STDIN));   
   
  echo "Enter the 2nd number:";   
  $number2=trim(fgets(STDIN));   
     
  echo "Enter the 3rd number:";   
  $number3=trim(fgets(STDIN));   
    ///{Write your logic here      
                
    ///}    
  echo "The Largest number is :";   
  echo $largest;   
  exit;   
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Find out the greatest</title>
</head>
<body>
  <form method="POST">
    <input type="number" name="num1" placeholder="Enter the 1st number" required><br/><br/>
    <input type="number" name="num2" placeholder="Enter the 2nd number" required><br/><br/>
    <input type="number" name="num3" placeholder="Enter the 3rd number" required><br/><br/>
    <input type="submit" value="Find out the greatest number"><br/><br/>
  </form>
</body>
</html>

<?php

if(isset($_POST) && !empty($_POST)) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $num3 = $_POST['num3'];

  echo "Your 1st number is: ".$num1."<br/>";
  echo "Your 2nd number is: ".$num2."<br/>";
  echo "Your 3rd number is: ".$num3."<br/>";
  echo "<hr/>";

  if($num1 > $num2 && $num1 > $num3) { 
    echo "<strong>The largest number is :".$num1."</strong>";
  } elseif($num2 > $num1 && $num2 > $num3) { 
    echo "<strong>The largest number is :".$num2."</strong>"; 
  } else { 
    echo "<strong>The largest number is :".$num3."</strong>"; 
  }
}
?>