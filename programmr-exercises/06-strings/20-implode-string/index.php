<!--
implode string
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2111

write a program to regroup words contained in a 4 elements array to make a string, make empty space between each word

input:
i
am
ahmed
mohamed
output: i am ahmed mohamed


input:
please
close
the
door
output: please close the door

#PHP
   $arr = array();   
   
 for($i = 0 ; $i<4; $i++)  
 {  
         echo "Enter the word: ";   
        $word = trim(fgets(STDIN));   
        $arr[$i] = $word;  
           
 }   
   ///write your code here{  
  
  
  echo implode(' ',$arr);
    
  
     /// }  
      exit; 
-->