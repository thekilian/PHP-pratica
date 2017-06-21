<!--
Salary Estimation based on experience
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2038

Take experience and age of a person as input.
If the person is experienced and his age is equal to or more than 35 the salary of the person is 6000.
Otherwise, if the person is experienced and his age is equal to or more than 28 but less than 35, then the salary should be 4800.
For experienced person below 28 yr of age the salary should be 3000 and for inexperienced person the salary should be 2000.
Enter the Experience:1
Enter the age of the person:34
4800

#PHP
cho "Enter the Experience:";
   $exp = trim(fgets(STDIN));

   echo "Enter the age of the person:";
   $age=trim(fgets(STDIN));
     
     //{Write down your logic here

     //} 

echo $salary;

  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Salary estimation based on experience</title>
</head>
<body>
	<form method="POST">
		<label>Do you have experience? (yes = 1, no = 2):</label><br/>
		<input type="number" name="exp" placeholder="yes = 1 / no = 2" required/><br/><br/>

		<label>What's your age?</label><br/>
		<input type="number" name="age" placeholder="Age" required/><br/><br/>

		<input type="submit" value="Check salary"/>
	</form>
	<hr/>
</body>
</html>

<?php

$salary = 0;

if(isset($_POST) && !empty($_POST)) {
	$exp = $_POST['exp'];
	$age = $_POST['age'];

	echo "Experience ".$exp."<br/>";
	echo "Age: ".$age."<br/>";

	if($exp == 1) {
		if($age >= 35) {
			$salary = 6000;
		} elseif($age <= 34 && $age >= 28) {
			$salary = 4800;
		} else {
			$salary = 3000;
		}
	} else {
		$salary = 2000;
	}

	echo $salary;
}

exit;
?>