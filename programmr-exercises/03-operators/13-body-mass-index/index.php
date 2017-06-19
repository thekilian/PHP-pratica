<!--
Body Mass Index
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2043

The body mass index (BMI) is commonly used by health and nutrition professionals to estimate human body fat in populations.

It is computed by taking the individual's weight (mass) in kilograms and dividing it by the square of their height in meters.

Write a program to calculate BMI for a given set of inputs.

First input is height and second input is weight.

Example

Input:

1.75

#PHP
$bmi=0;
   echo "Your height in m:";
   $height = trim(fgets(STDIN));

   echo "Your weight in kg:";
   $weight = trim(fgets(STDIN));
     //{
     //write down your logic here
    
     //} 
     $bmi = number_format($bmi, 5, '.', '');
  echo "BMI is:";
  echo $bmi;
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Body Mass Index</title>
</head>
<body>
  <form method="POST">
    <label>Enter your height in m:</label><br/>
    <input type="number" step="any" name="height" placeholder="Your height in m" required/><br/><br/>

    <label>Enter your weight in kg:</label><br/>
    <input type="number" step="any" name="weight" placeholder="Your weight in kg" required/><br/><br/>

    <input type="submit" value="Body Mass Index"/>
  </form>
  <hr/>
</body>
</html>

<?php

$bmi = 0;

if(isset($_POST) && !empty($_POST)) {
  $height = $_POST['height'];
  $weight = $_POST['weight'];

  $bmi = $weight / ($height * $height);
  $bmi = number_format($bmi, 5, '.', '');
}
  echo "BMI is:";
  echo $bmi;
  exit;
?>