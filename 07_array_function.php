<?php
$fruits = ['apple', 'banana', 'orange'];

echo count($fruits);
echo "<br>";

echo in_array('banana', $fruits);
echo "<br>";

echo $fruits[0];
echo "<br>";

$fruits[] = 'grape';
echo count($fruits);
echo "<br>";

array_push($fruits, 'grape');
echo count($fruits);
echo "<br>";

array_unshift($fruits, 'watermelon');
echo count($fruits);
echo "<br>";

array_pop($fruits);
echo count($fruits);
echo "<br>";

array_shift($fruits);
echo count($fruits);
echo "<br>";

unset($fruits[2]);
echo count($fruits);
echo "<br>";

$chunkedArray= array_chunk($fruits,2);
var_dump($chunkedArray);
echo "<br>";

$arr1 = [1, 2, 3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);

$arr4 = [...$arr1,...$arr2];
var_dump($arr4);
?>
