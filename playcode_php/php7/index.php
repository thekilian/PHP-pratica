<?php
require "Book.php";

$book = new Book(1234, 'title', 'author');
$string = (string) $book;
var_dump($book);

echo '<br>';
echo '------';
echo '<br>';

echo $book;
echo '<br>';
echo '------';
echo '<br>';
echo $string;
echo '<br>';
echo '------';
echo '<br>';