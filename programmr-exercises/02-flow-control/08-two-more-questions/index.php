<!--
Two more questions
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2054

Two More Questions Using if statements with compound conditions (like &&), make a guessing game of two questions.

Question 1: Does it belong inside or outside or both?
Question 2: Is it alive?
 	
		| inside		| outside	| both
alive		| houseplant		| bison		| dog
not alive	| shower curtain	| billboard	| cell phone

TWO MORE QUESTIONS, BABY!:
Think of something and I'll try to guess it!:
Question 1) Does it belong inside or outside or both?:outside
Question 2) Is it alive?:no
Obviously the nonliving thing on your mind is a billboard!

TWO MORE QUESTIONS, BABY!:
Think of something and I'll try to guess it!:
Question 1) Does it belong inside or outside or both?:inside
Question 2) Is it alive?:yes
Obviously the living thing on your mind is a houseplant!

TWO MORE QUESTIONS, BABY!:
Think of something and I'll try to guess it!:
Question 1) Does it belong inside or outside or both?:both
Question 2) Is it alive?:no
Obviously the nonliving thing inside/outside on your mind is a cell phone!

#PHP
echo"TWO MORE QUESTIONS, BABY!:";

echo"\nThink of something and I'll try to guess it!:";

echo"\nQuestion 1: Does it belong inside or outside or both?:";

$a=trim(fgets(STDIN));

echo"Question 2: Is it alive?:";

$b=trim(fgets(STDIN));

//{write down your logic here

//}

-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Two more questions</title>
</head>
<body>
	<form method="POST">
		<h4>Think of something and I'll try to guess it!</h4>
		<label>Does it belong inside or outside or both?</label><br/>
		<input type="text" name="where"><br/><br/>
		<label>Is it alive (yes or no)?</label><br/>
		<input type="text" name="alive"><br/><br/>
		<input type="submit" value="Check"><br/><br/>
	</form>
	<hr/>
</body>
</html>

<?php
if(isset($_POST) && !empty($_POST)) {
	$where = $_POST['where'];
	$alive = $_POST['alive'];

	if($alive == 'yes') {
		if($where == 'inside') {
			echo "Obviously the living thing on your mind is a houseplant!";
		} elseif($where == 'outside') {
			echo "Obviously the living thing on your mind is a bison!";
		} else {
			echo "Obviously the living thing inside/outside on your mind is a dog!";
		}
	} else {
		if($where == 'inside') {
			echo "Obviously the nonliving thing on your mind is a shower curtain!";
		} elseif($where == 'outside') {
			echo "Obviously the nonliving thing on your mind is a billboard!";
		} else {
			echo "Obviously the nonliving thing inside/outside on your mind is a cell phone!";
		}
	}

}
?>
