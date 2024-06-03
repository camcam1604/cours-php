<?php

$number = [1, 2, 3, 4, 5];
//$colors = ['red', 'green', 'blue'];

echo $number[2];
echo "<br>";
//echo $colors[1];

var_dump($number);
echo "<br>";
//var_dump($colors);

$colors = [
    1  => 'red',
    2 => 'green',
    3 => 'bleu',
];
echo $colors[2];
echo "<br>";

$user1 = [
    'first_name' => 'Camille',
    'last_name' => 'Parisot',
    'email' => 'cmll.prst.001@gmail.com',
];
$user2 = [
    'first_name' => 'Karen',
    'last_name' => 'Basnier',
    'email' => 'karen.banier@gmail.com'
];

$users = [$user1, $user2];

echo $users[0]['email'];
?>


