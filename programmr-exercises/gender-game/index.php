/*
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

<?php
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
?>
*/