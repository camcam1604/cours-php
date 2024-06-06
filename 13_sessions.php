<?php
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
}

if ($username == 'Camille' && $password == 'password') {
    // Set Session variable
    $_SESSION['username'] = $username;
    // Redirect user to another page
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
?>
<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>