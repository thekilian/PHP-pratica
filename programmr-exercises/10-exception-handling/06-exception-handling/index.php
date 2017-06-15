<!--
Exception handling
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2270

Write a program with the following things done.
Create an own exception such that if variable sum is greater than 100 it should raise an exception and print "The number is greater than 100." else it should display the number.

Enter a number:23
23


Enter a number:123
The number is greater than 100.

#PHP
    class myException extends Exception
{
    public function __construct($errormsg) {
       parent::__construct($errormsg); 
    }

}

echo "Enter a number:";
$num=trim(fgets(STDIN));
//{Write your code here






//}
catch(myException $e)
{
    echo $e->getMessage();
}
  exit;
-->