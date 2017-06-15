<!--
Spring month check
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2061

The duration between March 20 (inclusive) and June 20 (inclusive) is Spring time.
Write a program which takes month and day as positive integer input and shows whether its a spring time or not.

Enter Month:4
Enter Day:29
Spring

Enter Month:8
Enter Day:2
Not Spring

#PHP
   echo "Enter Month:";
    $m=trim(fgets(STDIN)); 

    echo "Enter Day:";
    $d=trim(fgets(STDIN));
    //{Write your code here

    //}
    exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Spring Month Check</title>
</head>
<body>
	<form method="POST">
		<label>Enter Month (number):</label>
		<input type="number" name="month" required><br/><br/>
		<label>Enter Day (number):</label>
		<input type="number" name="day" required><br/><br/>
		<input type="submit" value="Check"><br/><br/>
	</form>
</body>
</html>

<?php
if(isset($_POST[]) && !empty($_POST)) {
	$month = $_POST['month'];
	$day = $_POST['day'];

	if($month <= 1 && $month >= 12) {
		//echo "Month OK!"; //teste
	}

	if($day <= 1 && $day >= 31) {
		//echo "Day ok!"; //teste
	}
}

//var_dump($_POST);

?>
<!--
March 20 (inclusive) and June 20 (inclusive) is Spring time
-->
