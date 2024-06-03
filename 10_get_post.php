<?php
if (isset($_POST['submit'])) {
    echo '<h3>'. $_GET['username']. '!</h3>';
    echo '<h3>'. $_POST['username']. '!</h3>';
};

?>