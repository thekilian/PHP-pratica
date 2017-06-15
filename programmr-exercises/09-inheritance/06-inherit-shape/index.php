<!--
Inheritance shape
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2252

Implement 2 classes Square and Rectangle that inherit the Shape class and override the function Area.

Select one option:
1. Area of Rectangle 2. Area of Square :1
Enter Length:4
Enter Breadth:6
Area of Rectangle:24


Select one option:
1. Area of Rectangle 2. Area of Square :2
Enter Side:4
Area of Square:16

#PHP
 class Shape
 {
    function Area()
    {
        return 0;
    }
 }
 //{Write your code here
 
 
 
 
 
 
 
 
 
 
 
 
 //}

echo "Select one option:</br>";
echo "1. Area of Rectangle 2. Area of Square :";
$opt=trim(fgets(STDIN));
switch($opt)
{
    case 1: $rect= new Rectangle(); echo "Area of Rectangle:".$rect->Area();break;
    case 2: $sqare = new Square(); echo "Area of Square:".$sqare->Area();break;
    default : echo "Invalid option";
}
  exit;
-->