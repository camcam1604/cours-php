<?php
setcookie('name', 'Camille', time() + 86400 * 30);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400 * 30, '/');
?>