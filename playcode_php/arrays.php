<?php
$names = ['Harry', 'Ron', 'Hermione'];
$status = [
	'name' => 'James Potter',
	'status' => 'dead'
];

// Adding elements:
echo '<strong>ADDING ELEMENTS:</strong><br/>';
$names[] = 'Neville';
$status['age'] = 32;

echo '<strong>print_r:</strong><br/>';
print_r($names);
echo '<br/>';
print_r($status);

echo '<hr/>';

echo '<strong>var_dump:</strong><br/>';
var_dump($names);
echo '<br/>';
var_dump($status);

echo '<hr/>';

// The unset function removes an element from the array:
echo '<strong>DELETING ELEMENTS (unset):</strong><br/>';
unset($status['status']);
echo '<strong>print_r:</strong><br/>';
print_r($status);
echo '<br/><br/>';
echo '<strong>var_dump:</strong><br/>';
var_dump($status);