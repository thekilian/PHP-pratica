<!--
Sum of complex numbers
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2244

Perform addition operation on complex data using class and object. The program should ask for real and imaginary part of two complex numbers, and display the real and imaginary parts of their sum.

First complex number:
Real part:12
Imaginary part:3
Second complex number:
Real part:11
Imaginary part:2
Sum is:
Real part-23 
Imaginary part-5


First complex number:
Real part:2
Imaginary part:3
Second complex number:
Real part:-1
Imaginary part:-1
Sum is:
Real part-1
Imaginary part-2

#PHP
    class complexno
{
 //{Write your code here





 //}   
}

$comp1 = new complexno();
$comp2 = new complexno();
echo "First complex number:</br>";
echo "Real part:";
$comp1->real=trim(fgets(STDIN));
echo "Imaginary part:";
$comp1->imag=trim(fgets(STDIN));
echo "Second complex number:</br>";
echo "Real part:";
$comp2->real=trim(fgets(STDIN));
echo "Imaginary part:";
$comp2->imag=trim(fgets(STDIN));
$comp1->add($comp2);
echo "Sum :<br/>";
echo "Real Part-".$comp1->real."<br>";
echo "Imaginary Part-".$comp1->imag;
exit;
-->