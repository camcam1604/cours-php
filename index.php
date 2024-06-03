<?php 
if (isset($_POST['submit'])) {
   // echo '<h3>'. $_GET['name']. '</h3>';
    echo '<h3>Username : '. $_POST['name']. '</h3>';
};
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div>
            <label> Name : </label>
            <input type="text" name="name">
        </div>
        <div>
            <label> Password:</label>
            <input type="password" name="password">
        </div>
        <br>
            <input type="submit" name="submit" value="Submit">

        </form>
        