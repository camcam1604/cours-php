<?php
function registerUser(){
    echo "User has been registered!";
};
registerUser();

echo "<br>";

function registerUser2($username,$age)
{
    echo "User $username has been registered and she is $age years old!";
}

registerUser2('Camille', 21);

echo "<br>";

function add($num1, $num2)
{
    return $num1 + $num2;
};
$sum = add(5, 5);
echo $sum;

echo "<br>";

function subtract($num1 = 10, $num2 = 5){
    return $num1 - $num2;
};
echo subtract();

echo "<br>";

$multiply = fn($num1, $num2)=> $num1 * $num2;

echo $multiply(5, 5);
?>