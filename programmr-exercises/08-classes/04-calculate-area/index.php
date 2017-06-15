<!--
Calculate area
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2241

Write a class having two private variables and one member function which will return the area of the rectangle. Also write two functions to set the length and breadth respectively given as input by the user.

Enter length of rectangle:2
Enter breadth of rectangle:3
Area:6

#PHP
    class area
{ 
    private $length;
    private $breadth;
    //{Write your code here
   
   
   
   
   
   
   
   
    //}
}

$area1 = new area();
echo "Enter length of rectangle:";
$area1->setLength(trim(fgets(STDIN)));
echo "Enter breadth of rectangle:";
$area1->setBreadth(trim(fgets(STDIN)));
echo "Area:";
echo $area1->getArea();
  exit;
-->