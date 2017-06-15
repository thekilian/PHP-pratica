<!--
Ask for certain number
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2263

Ask user for a number abiding these rules: must be even, multiple of 5.

Throw an exception displaying "Correct" if the number meet the rules else display "Wrong".

Enter a number:5
Wrong


Enter a number:140
Correct

#PHP
   function checknum($num)
    {
        if(($num%2==0) && ($num%5==0))
        {
            throw new Exception("Correct");        
        }
        else
        {
            throw new Exception("Wrong");
        }
    }
//{Write your code here
    
    
    
    
    
    
//}
  exit;
-->