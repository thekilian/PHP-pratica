<?php
for($i = 1; $i < 10; $i++) {
	echo $i."</br>";
}

echo "____________________<br/>";
echo "<br/>";

$names = ['Harry', 'Ron', 'Hermione'];
for($i = 0; $i < count($names); $i++) {
	echo $names[$i]."<br/>";
}

echo "____________________<br/>";
echo "<br/>";

/* In this example, we have an array of names. Since it is defined as a list, its keys will be 0, 1 and 2. The loop initializes the variable $i to 0, and it iterates until the value of $i is not less than number of elements in the array, that is, 3. In the first iteration, $i is 0, in the secondm it is 1, and in the third one it is equal to 2. When $i is 3, it will not enter the loop, as the exit condition evaluates to false.
On each iteration, we print the content of the position $i of the array, hence the result of this code will be all three names in the array.
*/