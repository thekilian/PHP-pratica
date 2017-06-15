<!--
Sorting of array
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2101

Write a program that asks the user to type 4 integers of an array. The program will then sort the array in ascending order and display it.


Enter 4 integer values in an array:3
2
6
7
The sorted array is:2
3
6
7


Enter 4 integer values in an array:32
21
67
73
The sorted array is:21
32
67
73

#PHP
 $data=Array();
 echo "Enter 4 integer values in an array:";
 for($i=0;$i<4;$i++)
 {
    $data[$i]=trim(fgets(STDIN));
 }
 //{Write your code here
 
 
 
 
 
 
 
 
 
 //}
 echo "The sorted array is:";
 
  for($i=0;$i<4;$i++)
 {
    echo $data[$i]."</br>";
 }
  exit;
-->