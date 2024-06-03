<?php
for ($x = 0; $x <= 10; $x++) {
	echo "Number : $x <br>";
};

echo "<br>";

$num = 1;

while ($num <= 5) {
	echo "Number : $num <br>";
	$num++;
};

echo "<br>";

do {
	echo "Number : $num <br>";
	$num++;
} while ($num <= 5);

echo "<br>";

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $num) {
	echo "Number : $num <br>";
};
echo "<br>";
$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $posts) {
	echo "{$index}-{$posts} <br>";
};
echo "<br>";
$person = [
    'first_name' => 'Camille',
    'last_name' => 'Parisot',
    'email' => 'cmll.prst.001@gmail.com',
];
foreach ($person as $key => $value) {
	echo "{$key} - {$value} <br>";
}
?>