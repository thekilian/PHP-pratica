<?php

$i = 1;

for($i; $i < 101; $i++) {
	if($i % 3 == 0 && $i % 5 == 0) {
		echo "BuzFizz <br/>";
	} else if($i % 3 == 0) {
		echo "Buzz <br/>";
	} else if($i % 5 == 0) {
		echo "Fizz <br/>";
	} else {
		echo $i."<br/>";
	}
}