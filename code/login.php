
<?php
require 'functions.php';
if (isset($_POST["login"])){
login($_POST);
}

if(isset($_POST['rememberme'])){
  cookie();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link href="https://www.dafont.com/mostwasted.font" rel="stylesheet">
    <link rel="stylesheet" href="css\loginstyle.css" />
  </head>
  <body>
    <div class="loginpage">
        <div class ="img">
            <span class="jordan">
               Jordan 1 S
            </span>
        </div>
        <div class="frame-1">
          <span class="scout">Scout</span>
          <span class="sneaker">Sneaker</span>
          <div class="frame-2">
            <div class="newtosneakerscout">
              New To Sneaker Scout? <a href="signup.php" class="signup-link">Sign Up</a>
          </div>
            <div class="welcome-back">Welcome back !</div>
            <div class="never-let-them-know-your-next-move">“Never let them know your next move”</div>
            <div class="frame-3">
                <div class="container1">
                    <form action="login.php" method="post">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Enter-Your-Email">
                        <label for="password">Password</label>
                        <input type="password"  name="password" placeholder="Enter-Your-Password">
                        <div class="container2">
                            <input type="checkbox" name="rememberme">
                            <span class="remember-me">Remember Me</span>
                            <span class="forgot-password">Forgot Password</span>
                        </div>
                        <button class= "button1" type = "submit" name = "login">Sign In</button>
                        <button>Sign In With Google</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>

