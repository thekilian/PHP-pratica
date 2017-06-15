<!--
Is it there or not?
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2098

Create an array that can hold 5 integers, and get input from user. Prompt the user for an integer. Search through the array. 
Depending on the availability of the entered integer, display a message as shown below.

Enter 5 numbers in array:45
39
32
12
44
Value to find:43
45 39 32 12 44
43 is not in the array


Enter 5 numbers in array:43
39
32
12
44
Value to find:43
43 39 32 12 44
43 is in the array

#PHP
   $i=0;
   echo "Enter 5 numbers in array:";
   $arr = array();
   while($i < 5)
   {
     $arr[] = trim(fgets(STDIN));
     $i++;
   }
   echo "Value to find:";
   $number = trim(fgets(STDIN));
     
     //{Write down your logic here
     
     
     
     
     
     
     
     
     //}
     if($f)
     echo "\n".$number." is in the array";
     else
     echo "\n".$number." is not in the array";
  exit;
-->