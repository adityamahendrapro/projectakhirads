<?php
require "functions.php";
// session_start();
access();
logout();


$email = $_SESSION['email'];
$querry = mysqli_query($conn,"SELECT * FROM user where email = '$email'");
$row = mysqli_fetch_assoc($querry);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>
  <h1>Profile</h1>
  <table>
    <tr>
      <th>FULL NAME</th>
     <th><?php echo $row['name']; ?></th> 
    </tr>
  </table>
 <form action="profile.php" method="post">
  <button name="logout" type="submit">Log out</button>
 </form>
  
</body>
</html>