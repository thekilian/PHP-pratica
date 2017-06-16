<!--
How old are you, specifically?
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2057

Using if statements, else if and else statements, make a program which displays a different message depending on the age given.

age				message
less than 16	You can't drive
16 to 17		You can drive but not vote
18 to 24		You can vote but not rent a car
25 or older		You can do pretty much anything
 
Hey!! what's your name?:Billy_Corgan
Ok Billy_Corgan. How old are you?:17
You can drive but you can't vote.
 
Hey  what's your name?:Sammy_Corgan
Ok Sammy_Corgan. How old are you?:14
You can't drive.

#PHP
echo"Hey!! what's your name?:";
$name = trim(fgets(STDIN));

echo"Ok $name. How old are you?:";
$age = trim(fgets(STDIN));

 //{ write ur logic here


 //}
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>How old are you?</title>
</head>
<body>
	<form method="POST">
		<label>What's your name?</label>
		<input type="text" name="name" placeholder="Your name here" required><br/><br/>
		<label>How old are you?</label>
		<input type="number" name="age" placeholder="Your age here" required><br/><br/>
		<input type="submit" value="Check"><br/><br/>
		<br/><hr/><br/>
	</form>
</body>
</html>

<?php

if(isset($_POST) && !empty($_POST)) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	
	if($age < 16) {
		echo "<strong>You're only ".$age.", ".$name.". Sorry. You can't drive.</strong>";
	} elseif($age >= 16 && $age <= 17) {
		echo "<strong>Hey, ".$name.", you are ".$age.". You can drive but not vote.</strong>";
	} elseif($age >= 18 && $age <= 24) {
		echo "<strong>".$name.", you're ".$age.". You can vote but not rent a car.</strong>";
	} elseif($age >= 25) {
		echo "<strong>You're all set, ".$name.". You're already ".$age.". You can do pretty much anything.</strong>";
	}
}
?>