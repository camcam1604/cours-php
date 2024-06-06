<?php
$file = 'extras/users.txt';

if (file_exists($file)){
    //echo readfile('extras/users.txt');

    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    
    fclose($handle);
    echo $content;
} else {
    $handle = fopen($file, 'w');
    $content = 'Camille' . PHP_EOL . 'Sara' . PHP_EOL . 'Karen' . PHP_EOL . 'Lucie';

    fwrite($handle, $content);
    fclose($handle);
}

?>