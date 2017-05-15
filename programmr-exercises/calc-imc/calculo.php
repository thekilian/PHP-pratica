<<<<<<< HEAD:programmr-exercises/calc-imc/calculo.php
<?php
/* BMI Calculator
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2053
Create a program to Calculate body mass index (BMI) by using some if statements to show the category for a given BMI.
The body mass index (BMI) is commonly used by health and nutrition professionals to estimate human body fat in populations.
It is computed by taking the individual's weight (mass) in kilograms and dividing it by the square of their height in meters.
BMI		category
less than 15.0	very severely underweight
15.0 to 16.0	severely underweight
16.1 to 18.4	underweight
18.5 to 24.9	normal weight
25.0 to 29.9	overweight
30.0 to 34.9	moderately obese
35.0 to 39.9	severely obese
40.0 and up	very severely (or "morbidly") obese

Your height in meter:1.80
Your weight in kilogram:54
Your BMI is 16.667
BMI Category:underweight

Your height in meter:1.86
Your weight in kilogram:64
Your BMI is 18.499
BMI Category:normal wight

<?php
$BMI=0;
echo "Your height in meter:";
$height = trim(fgets(STDIN));
echo "Your weight in kilogram:";
$weight = trim(fgets(STDIN));
  ///{write down your logic here
 ///}
exit;
?>
*/

$BMI = 0;

$height = $_POST['height'];
echo "Your height in meter is: ".$height;
echo "<br/>";

$weight = $_POST['weight'];
echo "Your weight in kilogram is: ".$weight;
echo "<br/>";

$mult = $height * $height;

$BMI = $weight / $mult;
echo "Your BMI is ".$BMI;
echo "<br/>";

$category = "";

if($BMI < 15.0) {
	$category = "very severely underweight";
} elseif($BMI <= 15.0 && $BMI >= 16.0) {
	$category = "severely underweight";
} elseif($BMI <= 16.1 && $BMI >= 18.4) {
	$category = "underweight";
} elseif($BMI <= 18.5 && $BMI >= 24.9) {
	$category = "normal weight";
} elseif($BMI <= 25.0 && $BMI >= 29.9) {
	$category = "overweight";
} elseif($BMI <= 30.0 && $BMI >= 34.9) {
	$category = "moderately obese";
} elseif($BMI <= 35.0 && $BMI >= 39.9) {
	$category = "severely obese";
} elseif($BMI > 40.0) {
	$category = "very severely (or 'morbidly') obese";
}
echo "BMI Category: ".$category;
echo "<br/><br/>";
echo "<a href='index.php'>Voltar</a>";
exit;
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora IMC</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="container">
		<h2>Calculadora de IMC</h2>
		<hr/>
		
		<form method="POST" action="calculo.php">
			<div class="form-group">
				<input class="form-control" type="number" name="height" placeholder="Please type your height">
			</div>
			<div class="form-group">
				<input class="form-control" type="number" name="weight" placeholder="Please type your weight">
			</div>
				<button class = "btn btn-success btn-block">Calculate</button>
		</form>
	</div>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
>>>>>>> origin/master:Calc-IMC/index.php
