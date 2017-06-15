<!--
Insertion at a specified position in an array
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2103

Write a program that asks the user to type 4 integers in an array. The program must insert 3 at the index position 1 , and then shift each element down and drop off the last element. 
The program must then print the final array.

Enter 4 integer values:1
3
4
5
New array:1
3
3
4

#PHP
   echo "Enter 4 integer values:";
   $i=0;
   while($i<4){
   $num[$i] = trim(fgets(STDIN));$i++;}

     
     //{Write your code here
  
  
  
  

     //} 
     echo "New array:";
     for($i=0;$i<4;$i++) echo $num[$i]."<br>";
  
  exit;
-->