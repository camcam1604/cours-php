<?php
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

$age = 21;

if ($age >= '18') {
	echo "You are a child.";}
    else {
        echo "You are an adult."
    ;}

echo "<br>";

$today = date('F j, Y, g:i a');
echo $today;

echo "<br>";

$time = date('H');

if ($time < '12') {
	echo "Have a good morning.";
}
elseif ($time <'17') {
	echo "Good afternoon.";
}
else {
	echo "Have a good evening.";
;}

echo "<br>";

$posts =[];

if (!empty($posts[0])) {
		echo $post[0]
	;}
    else{
        echo 'There are no posts';
    };

echo "<br>";
$postsExist = !empty($posts[0]) ? $posts[0] : 'There are no posts';
echo $postsExist;

echo "<br>";

$favcolor = 'blue';

switch ($favcolor) {
	case'red':
		echo "I like red!";
		break;
	case 'blue':
		echo "I like blue!";
		break;
	case 'green':
		echo "I like green!";
		break;
	default:
		echo "I don't like that color.";
;}
?>