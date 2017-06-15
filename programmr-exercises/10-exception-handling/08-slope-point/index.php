<!--
Slope point
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2264

A class called "Point" includes two instance variable - $x , $y. Provide a constructor that initialises the two instance variables.
Add the following method to the Point class :
function Slope()

The method returns the slope of the line drawn between the current point and the target point, using the formula (y2-y1)/(x2-x1) to determine the slope between two points (x1,y1) and (x2,y2).
Note that this formula fails for the points with identical x-coordinates so throw an "Exception" as shown below. 
Enter x coordinate of current point:4
Enter y coordinate of current point:5
Enter x coordinate of target point:5
Enter y coordinate of target point:6
1

Enter x coordinate of current point:10
Enter y coordinate of current point:3
Enter x coordinate of target point:10
Enter y coordinate of target point:3
Zero is an invalid denominator. Please try again:
Enter x coordinate of current point:10
Enter y coordinate of current point:3
Enter x coordinate of target point:50
Enter y coordinate of target point:100
2.425

#PHP
    class Point
 {
    public $x;
    public $y;
    
    function slope()
    {
        do{
            echo "Enter x coordinate of current point:";
            $this->x=trim(fgets(STDIN));
            echo "Enter y coordinate of current point:";
            $this->y=trim(fgets(STDIN));
            echo "Enter x coordinate of target point:";
            $x=trim(fgets(STDIN));
            echo "Enter y coordinate of target point:";
            $y=trim(fgets(STDIN));
            //{Write your code here
            
            
            
            
            
            
            
            
            
            //}
        } while($this->x==$x);
    
    }
 }
 
 $point = new Point();
 echo $point->slope();
  exit;
-->