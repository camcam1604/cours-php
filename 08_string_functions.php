<?php

$string = 'Hello World!';
echo strlen($string);

echo "<br>";

echo strpos($string, 'o');

echo "<br>";

echo strrpos($string, 'o');

echo "<br>";

echo strrev($string);

echo "<br>";

echo strtolower($string);

echo "<br>";

echo strtoupper($string);

echo "<br>";

echo ucwords($string);

echo "<br>";

echo str_replace('World', 'Everyone', $string);

echo "<br>";

echo substr($string, 0, 5);

echo "<br>";

echo substr($string, 5);

echo "<br>";

if (str_starts_with($string, 'Hello')) {
    echo "Yes, the string starts with 'Hello'";
};

echo "<br>";


if (str_ends_with($string, 'ld!')) {
    echo "Yes, the string ends with '!'";
};

echo "<br>";

$string2 = "<h1>Hello World!</h1>";
echo htmlentities($string2);	

echo "<br><br>";

printf('%s is a %s ', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float
?>