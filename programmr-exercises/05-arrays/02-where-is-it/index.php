<!--
Where is it?
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2099

Create an array that can hold five integers, and fill each slot with a different random value from 1-50. Prompt the user for an integer. 
Search through the array, and if the item is present, give the slot number where it is located. If the value is not in the array, display a single message saying so.
If the value is present more than once, display the message as many times as necessary.

Enter 5 numbers in array:1
2
3
4
3
Value to find:3
1 2 3 4 3
3 is in slot 2
3 is in slot 5


Enter 5 numbers in array:1
2
3
4
5
Value to find:15
1 2 3 4 5
15 is not in the array

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
  exit;
-->