<!--
Convert days to years and weeks
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2047

Write a program to convert the number of days entered by you to the number of years and weeks passed respectively.
Enter days:2
Years-0 Weeks-0

Enter days:560
Years-1 Weeks-80

#PHP
    $years=0;
    $weeks=0;
   echo "Enter days:";
   $days = trim(fgets(STDIN));
     //{Write down your logic here



	   //} 
  echo "Years-".intval($years)." Weeks-".intval($weeks);
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Convert days to years and weeks</title>
</head>
<body>
	<form method="POST">
		<label>Enter days:</label><br/>
		<input type="number" name="days" placeholder="Enter days here" required/><br/><br/>
		<input type="submit" value="Check"/><br/>
	</form>
	<hr/>
</body>
</html>

<?php
$years = 0;
$weeks = 0;

if(isset($_POST['days']) && !empty($_POST['days'])) {
	$days = $_POST['days'];

	$years = $days / 365;
	$weeks = $days / 7;

}

echo "Years: ".intval($years);
echo "<br/>";
echo "Weeks: ".intval($weeks);
exit;

?>