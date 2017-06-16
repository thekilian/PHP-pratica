<!--
Age in five years
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2028

Ask the user for their name. Then display their name to prove that you can recall it. Ask them for their age. Then display what their age would be five years from now. Then display what their age would be five years ago.

Hello. What is your name?:Percy_Bysshe_Shelley
Hi Percy_Bysshe_Shelley! How old are you?34
Did you know that in five years you will be 39 years old?
And five years ago you were29! Imagine that!

#PHP  
echo "Hello. What is your name?:";
 
$Name = trim(fgets(STDIN));

//{ write your code here

//}
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Age in 5 years</title>
</head>
<body>
	<form method="POST">
		<label>Hello. What is your name?</label><br/>
		<input type="text" name="name" placeholder="Your name" required><br/><br/>
		<label>How old are you?</label><br/>
		<input type="number" name="age" placeholder="Your age" required><br/><br/>
		<input type="submit" value="Age in 5 years"><br/>
	</form>
	<hr/>
</body>
</html>

<?php
$name = $_POST['name'];
$age = $_POST['age'];
$future = $age + 5;
$past = $age - 5;

echo "Did you know that in five years you will be ".$future." years old?"."<br/>";
echo "And five years ago you were ".$past."! Imagine that!";

?>