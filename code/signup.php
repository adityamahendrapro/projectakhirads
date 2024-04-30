<?php
require 'functions.php';

if (isset($_POST["signup"])){
  
  if(signup($_POST)> 0){
    // header("login.php"); require
    echo"<script>
      alert('Sign up Succes!')
      </script>";
      
  }else{
    echo mysqli_error($conn);
  }  
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
  <form action="signup.php" method="post">
  <h1>Let's go Nigga</h1>
  <label for="name">Full Name</label><br>
  <input type="text" name="name" placeholder="Input your username" require><br>

  <label for="email" >Email</label><br>
  <input type="email" name="email" placeholder="Input your Email" require><br>

  <label for="password">Password</label><br>
  <input type="password" name="password1" placeholder="Input your password" minlength="8" require><br><br>

  <label for="password">Confirm Password</label><br>
  <input type="password" name="password2" placeholder=" Confirm Password" minlength="8" require><br>

  <button type="submit" name="signup">Sign Up</button>
  <p>You  have account?</p>
  <a href="login.php">Login</a>
  </form>
  
</body>
</html>