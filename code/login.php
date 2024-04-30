<?php
require 'functions.php';
if (isset($_POST["login"])){
  login($_POST);
}

if(isset($_POST['rememberme'])){
  cookie();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <h1>Welcome to Nigga</h1>
  
  <form action="login.php" method="post">
    <label for="email" >Email</label><br>
    <input type="email" name="email" placeholder="Input your Email" require><br>

    <label for="password">Password</label><br>
    <input type="password" name="password" placeholder="Input your password" require><br><br>

    <input type="checkbox" name="rememberme">
    <label for="rememberme">Remember Me</label><br>
    <button type="submit" name="login">Login</button>
    <p>You dont have account?</p>
    <a href="signup.php"> Sign Up</a>
  </form>
  
</body>
</html>