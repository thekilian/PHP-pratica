<!--
Gross Salary Check!
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2060

In a company an employee is paid as under:
If his basic salary is less than Rs. 1500, then HRA = 10% of basic salary and DA = 90% of basic salary.
If his salary is either equal to or above Rs. 1500, then HRA = Rs. 500 and DA = 98% of basic salary.
If the employee's basic salary is input by the user write a program to find his gross salary.
Gross salary= basic salary+HRA+DA

Enter salary:2678
Total Salary-5802.44


Enter salary:2500
Total Salary-5450


#PHP
   echo "Enter salary:";
   $salary = trim(fgets(STDIN));

     
    //{Write down your logic here
     
     //} 
   exit;
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gross Salary Check</title>
</head>
<body>
	<form method="POST">
		<label>Enter salary:</label><br/>
		<input type="number" name="salary" placeholder="Your salary" required/><br/><br/>
		<input type="submit" value="Check"/>
	</form>
	<hr/>
</body>
</html>

<?php

$hra = 0;
$da = 0;
$total = 0;

if(isset($_POST['salary']) && !empty($_POST['salary'])) {
	$salary = $_POST['salary'];

	if($salary < 1500) {
		$hra = ($salary * 10) / 100;
		$da = ($salary * 90) / 100;

		$total = $salary + $hra + $da;

		echo "Total Salary-".$total;

	} elseif($salary >= 1500) {
		$hra = 500;
		$da = ($salary * 98) / 100;

		$total = $salary + $hra + $da;

		echo "Total Salary-".$total;
	}
}
exit;
?>