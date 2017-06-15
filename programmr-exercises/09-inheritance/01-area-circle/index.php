<!--
Area of a circle using inheritance
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2256

Write a PHP program to print the area of circle using inheritance. Write a class circle that inherits the area method defined in class shape and prints the area of the circle.

Enter the radius:5
Radius is 5 and Area is:78.5

#PHP
abstract class shape
    {
        abstract protected function area($value);
        public function printArea($value) 
        {
            print $this->area($value) . "\n";
        }
    }
    //{Write down your logic here
   
   
   
   
   
    //} 
    
    echo "Enter the radius:";
    $radius = trim(fgets(STDIN));
    $circle1= new circle;
    echo "Radius is {$radius} and Area is:";
    echo $circle1->area($radius);
    exit;
-->