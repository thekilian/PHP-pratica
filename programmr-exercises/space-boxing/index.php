/*
Space Boxing
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2056

Julio Cesar Chavez Mark VII is an interplanetary space boxer, who currently holds the championship belts for various weight categories on many different planets within our solar system. However, it is often difficult for him to recall what his "target weight" needs to be on earth in order to make the weight class on other planets. Write a program to help him keep track of this.

It should ask him what his earth weight is, and to enter a number for the planet he wants to fight on. It should then compute his weight on the destination planet based on the table below:

#	Planet	Relative gravity
1	Venus	0.78
2	Mars	0.39
3	Jupiter	2.65
4	Saturn	1.17
5	Uranus	1.05
6	Neptune	1.23
So, for example, if Julio weighs 128 lbs. on earth, then he would weigh just under 50 lbs. on Mars, since Mars' gravity is 0.39 times earth's gravity. (128 * 0.39 is 49.92)

Please enter your current earth weight(in pounds):128
I have information for the following planets:
1. Venus   2. Mars   3. Jupiter   4. Saturn   5. Uranus   6. Neptune
Which planet are you visiting:2
Your weight would be 49.92 pounds on that planet.

<?php

echo"Please enter your current earth weight(in pounds):";
$weight = trim(fgets(STDIN));

echo"I have information for the following planets :<br>";
echo"1.Venus   2.Mars   3.Jupiter   4.Saturn   5.Uranus   6.Neptune;<br>Which planet are you visiting:";
$planet = trim(fgets(STDIN));

// {write ur logic here
 
//}
?>
*/