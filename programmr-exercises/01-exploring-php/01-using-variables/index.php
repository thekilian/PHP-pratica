<!--
Using variables
http://www.programmr.com/practice/phpcourse_sandbox_1971/node/2031

Three variables have been declared and values have been assigned to each of them. Display the values of these three variables on the screen, as shown below.

This is room #113 
e is close to 2.71828
I am learning a bit about Computer Science

#PHP
$a="113";
$b="2.71828";
$c="Computer Science";
//{ write ur logic here

//}
-->

<?php
$a = "113";
$b = "2.71828";
$c = "Computer Science";

echo "This is room #".$a;
echo "<br/>";
echo "and is close to ".$b;
echo "<br/>";
echo "I am learning a bit about ".$c;

?>