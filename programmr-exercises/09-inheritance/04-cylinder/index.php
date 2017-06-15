<!--
Cylinder total surface area and volume
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2254

Develop a hierarchic structure of classes:Circle and Cylinder 
The base class is Circle and the derived class is Cylinder. It inherits the method Display() from base class Circle. 
You have to define the new necessary fields and methods and override the method Display() to print the total surface area and volume of the cylinder. 
For a cylinder of height 'h' and radius 'r':
Total surface Area = 2*pi*r*r + 2*pi*r*h
Volume = pi*r*r*h

Select Option:
1.Circle 2.Cylinder:1
Enter Radius:7
Area of circle = 153.86


Select Option:
1.Circle 2.Cylinder:2
Enter Radius:7
Enter Height:7
Total Surface Area of cylinder = 615.44
Volume of cylinder = 1077.02

#PHP
   class Circle
{
    private $radius;
    
    function __construct()
    {
        echo "Enter Radius:";
        $this->radius=trim(fgets(STDIN)); 
    }
    
    function getRadius()
    {
        return $this->radius;
    }
    
    function Display()
    {
        echo "Area of circle = ".$this->radius*$this->radius*3.14;
    }
}

class Cylinder  extends Circle
{
    private $height;
    //{Write your code here
    
    
    
    
    
    //}
-->