<!--
Quadrant point
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2247

Create a class called Point that includes two instance variables - x(type int) and y(type int). Provide a constructor that initializes the two instance variables. Provide the following function in the Point class :

public int quadrant()

The function should return which quadrant of x/y this point object falls in. 
Quadrant 1 contains all points whose x and y values are both positive. 
Quadrant 2 contains all points with negative x but positive y. 
Quadrant 3 contains all points with negative x and y values. 
Quadrant 4 contains all points with positive x but negative y. 
If the point lies directly on x and/or y axis return 0.

Write a PHP program that demonstrates class Point's capabilities. Create a Point object and display object's quadrant.

x-coordinate: 3
y-coordinate: 4
Quadrant 1


x-coordinate: -3
y-coordinate: 4
Quadrant 2


x-coordinate: 3
y-coordinate: 0
Quadrant 0

#PHP
    echo "x-coordinate: ";
    $x = trim(fgets(STDIN));
    echo "y-coordinate: ";
    $y = trim(fgets(STDIN));
    class Point
    {
     //{Write down your logic here
     
     
     
     
     
     
     
     
     
     
     //}
    }
    $p = new Point($x,$y);
    echo "Quadrant ".$p->quadrant();
  exit;
-->