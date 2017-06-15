<!--
Calculate area of circle
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2246

Calculate the area of a circle. The program should declare a class circle. In this class, create a function to calculate area of circle and other required functions.
Take pi = 3.14

Enter radius of circle:12
Area:452.16


Enter radius of circle:5
Area:78.5

#PHP
class circle  
{  //{Write down your logic here
   
   
   
   
   
   //} 
}  
    
   echo "Enter radius of circle:";
   $radius = trim(fgets(STDIN));
  
     
    $circle = new circle();
    $circle->setradius($radius);
    $area = $circle->area();
    
    echo "Area:".$area;
    exit;
-->