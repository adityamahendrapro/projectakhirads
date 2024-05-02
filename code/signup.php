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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registerstyle.css" />
  </head>
  <body>
    <div class="loginpage">
        <div class ="img">
            <span class="jordan">
                Jordan 1 High
            </span>
        </div>
        <div class="frame-1">
          <span class="scout">Scout</span>
          <span class="sneaker">Sneaker</span>
          <div class="frame-2">
            <div class="newtosneakerscout">
              Already Have An Account? <a href="login.php" name="sign in">Sign In</a>
            </div>
            <div class="welcome-back">Join Us !</div>
            <div class="never-let-them-know-your-next-move">“Keep Your Sneak(er) Game Strong”</div>
            <div class="frame-3">
                <div class="container1">
                  <form action="signup.php" method="post">
      
                    <label for="name">Full Name</label>
                    <input type="text" name="name" placeholder="Input your username" require>
                  
                    <label for="email" >Email</label>
                    <input type="email" name="email" placeholder="Input your Email" require>
                  
                    <label for="password">Password</label>
                    <input type="password" name="password1" placeholder="Input your password" minlength="8" require>
                  
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password2" placeholder=" Confirm Password" minlength="8" require>
                        <div class="container2">
                            <input type="checkbox" name="rememberme">
                            <label for="rememberme"> Remember Me</label>
                            <span class="remember-me">
                        </div>
                        <button class= "button1" type = "submit" name = "signup">Sign Up</button>
                        <button>Sign Up With Google</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>