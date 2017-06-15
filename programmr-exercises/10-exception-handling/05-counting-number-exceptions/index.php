<!--
Counting number of exceptions
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2268

Write a program to input a number num and run a loop from 0 to num. The program should throw an exception whenever the loop counter variable is a multiple of 4, and display the number of execptions at the end.

Enter a number:12
Number of exceptions:3


Enter a number:0
Number of exceptions:0

#PHP
    echo "Enter a number:";
$num=trim(fgets(STDIN));
$count=0;
for($i=1;$i<=$num;$i++)
{   //Write your code here  
    
    
    
    //
    catch(Exception $e)
    {
        $count++;
    }
}

echo "Number of exceptions:".$count;
  exit;
-->