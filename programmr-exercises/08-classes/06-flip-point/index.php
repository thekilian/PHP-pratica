<!--
Flip point
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2248

Write a PHP program that accepts two integers(x coordinate and y coordinate). Create a Point class that should have a constructor and the following function: 

public void flip() 

Function should swap and print the x and y coordinates.

Enter x coordinate: 4
Enter y coordinate: 5
x=5
y=4

#PHP
class point
   {
     //{Write down your logic here
       
       
       
       
       
       
       
       
       
     //}
   }
   
   echo "Enter x coordinate:";
   $x = trim(fgets(STDIN));
   echo "Enter y coordinate:";
   $y = trim(fgets(STDIN));
   
   $ob = new point($x,$y);
   $ob->flip();
   
   echo "x=".$ob->x."\ny=".$ob->y;
   exit;
-->