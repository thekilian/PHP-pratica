/*
Press any key!
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2059

As a user ,you can enter any character from the keyboard. So write a program to determine whether the character entered is a capital letter, a small letter, a digit or a special symbol.
Output should print exactly as in sample output.I.e "capital letter","small letter","number","special symbol" for respective answers.

Enter a character:G
capital letter

Enter a character:a
small letter

Enter a character:$
special symbol

Enter a character:78
number

<?php 
    
   echo "Enter a character:";
   $char = trim(fgets(STDIN));
   $ord = ord($char);
     
    //{Write your code here

    //} 
  
  exit;
?>
*/