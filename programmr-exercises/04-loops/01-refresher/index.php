<!--
A refresher
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2069

Just a short program to refresh your memory about how to program. Write a program that prompts the user for a name. Then display that name ten times. You must use a loop. If the name given is "Mitchell", display it only five times.

What is your name:gump
gump
gump
gump
gump
gump
gump
gump
gump
gump
gump
 
What is your name:Mitchell
Mitchell
Mitchell
Mitchell
Mitchell
Mitchell

#PHP
echo"What is your name:";
$a = trim(fgets(STDIN));

//{Write ur logic here

//}
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Refresher</title>
</head>
<body>
	<form method="POST">
		<label>What is your name?</label><br/>
		<input type="text" name="name" placeholder="Your name" required/><br/><br/>
		<input type="submit" value="Refresher"/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST['name']) && !empty($_POST['name'])) {
	$name = $_POST['name'];
	$num = 	1;

	if($name == "Mitchell") {
	    for($num == 1; $num <= 5; $num++) {
	    	print "Mitchell<br/>";
	    }    
	} else {
	    for($num == 1; $num <= 10; $num++) {
	    	print $name."<br/>";
	    }
	}
}
exit;
?>