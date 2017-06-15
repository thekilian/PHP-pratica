<!--
Press any key!
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2059

As a user, you can enter any character from the keyboard. So write a program to determine whether the character entered is a capital letter, a small letter, a digit or a special symbol.
Output should print exactly as in sample output.I.e "capital letter","small letter","number","special symbol" for respective answers.

Enter a character:G
capital letter

Enter a character:a
small letter

Enter a character:$
special symbol

Enter a character:78
number

#PHP
   echo "Enter a character:";
   $char = trim(fgets(STDIN));
   $ord = ord($char);
     
    //{Write your code here

    //} 
  
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Press any key</title>
</head>
<body>
	<form method="POST">
		<label>Enter a character:</label>
		<input type="text" name="key" required><br/><br/>
		<input type="submit" value="Check"><br/><br/>
	</form>
</body>
</html>

<?php
if(isset($_POST['key'])) {
	$key = $_POST['key'];
	echo "Your character is: ".$key;
	echo "<br/>";

	if(ctype_alpha($key)) {
		if(ctype_upper($key)) {
			echo "<strong>capital letter</strong>";
		} else {
			echo "<strong>small letter</strong>";
		}		
	}  elseif(ctype_digit($key)) {
		echo "<strong>number</strong>";		
	} else {
		echo "<strong>special symbol</strong>";
	}
}
?>