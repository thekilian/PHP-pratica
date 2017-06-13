<!--
Gender Game
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2055

Write a program which displays an appropriate name for a person, using a combination of nested if's and compound conditions. Ask the user for a gender, first name, last name and age.

If the person is female and 20 or over, ask if she is married. If so, display "Mrs." in front of her name. If not, display "Ms." in front of her name. If the female is under 20, display her first and last name.

If the person is male and 20 or over, display "Mr." in front of his name. Otherwise, display his first and last name.

Note that asking a person if they are married should only be done if they are female and 20 or older.

What is your Gender (M or F):F
First Name:Marisa
Last Name:Tomei
Age:32
Are you married:Y
Then I will call you Mrs. Tomei

What is your Gender (M or F):M
First Name:John
Last Name:Moretz
Age:18
Then I will call you John Moretz

# PHP
  $finalName;
  echo "What is your Gender (M or F):";
  $gender = trim(fgets(STDIN));
  echo "First Name:";
  $firstName = trim(fgets(STDIN));
  echo "Last Name:";
  $lastName = trim(fgets(STDIN));
  echo "Age:";
  $age = trim(fgets(STDIN));
    //{
    //write down your logic here
	 
    //} 
  echo "Then I will call you ".$finalName;
  exit;
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gender Game</title>
</head>
<body>
  <form method="POST">
    <label>What is your gender (M or F)?</label>
    <input type="text" name="gender" required><br/><br/>
    <label>What is your first name?</label>
    <input type="text" name="name" required><br/><br/>
    <label>What is your last name?</label>
    <input type="text" name="last" required><br/><br/>
    <label>How old are you?</label>
    <input type="number" name="age" required><br/><br/>
    <input type="submit" value="Gender game!"><br/><br/>
  </form>
</body>
</html>

<?php
$finalName;
  
$gender = $_POST['gender'];
$name = $_POST['name'];
$last = $_POST['last'];
$age = $_POST['age'];
$married = $_POST['married'];

var_dump($_POST);

echo "Your gender is: ".$gender."<br/>";
echo "Your name is: ".$name."<br/>";
echo "Your last name is: ".$last."<br/>";
echo "Your age is: ".$age."<br/>";

if(isset($_POST['gender'])) {
  if($_POST['gender'] == 'F' && $_POST['age'] >= 20) {
    echo "<label>Are you married (Y or N)?</label> <input type='text' name='married' required> <input type='submit' value='?'>";
      if(isset($_POST['married'])) {
        if($_POST['married'] == 'Y') {
          echo "You are married"."<br/>";
          echo "Then I will call you Mrs. ".$last;
        } else {
          echo "You are single"."<br/>";
          echo "Then I will call you Ms. ".$last;
        }
      }
  } elseif ($_POST['gender'] == 'M' && $_POST['age'] >= 20) {
    echo "<label>Are you married (Y or N)?</label> <input type='text' name='married' required> <input type='submit' value='?'>";
      if(isset($_POST['married'])) {
        if($_POST['married'] == 'Y') {
          echo "You are married"."<br/>";
          echo "Then I will call you Mr. ".$last;
        } else {
          echo "You are single"."<br/>";
          echo "Then I will call you ".$name." ".$last;
        }
      }
  }
}
?>