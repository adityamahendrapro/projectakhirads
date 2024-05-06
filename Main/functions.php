<?php 
session_start();
//connect to Database
$conn = mysqli_connect("localhost","root","","sneakerscout");

function signup($data){
  global $conn;

  $name = $data["name"];
  $email = $data["email"];
  $password1 = $data["password1"];
  $password2 = $data["password2"];

  //cek email
  $confirm_email = mysqli_query($conn, "SELECT email FROM user Where email = '$email' ");
  // var_dump($confirm_email);
  if(mysqli_num_rows($confirm_email) > 0) {
    echo "<script> 
    alert('Email sudah terdaftar.')
    </script>";
    return false;
  } 

  //cek konfirmasi password
  if ($password1 != $password2){
    echo "<script>
      alert('Password tidak sesuai')
      </script>";
    
    return false;
  }

  //enkripsi password
  $password1 = password_hash($password1,PASSWORD_DEFAULT);
  // var_dump($password1);

  //add in database
  mysqli_query($conn, "INSERT INTO user VALUES('', '$name','$email','$password1' )");

  return mysqli_affected_rows($conn);

}


function login($data){
  global $conn;
  $email = $data['email'];
  $password = $data['password'];

  //mengambil data user
  $_SESSION['email'] = $email;

  // Cek email & password
  $query = mysqli_query($conn, "SELECT password FROM user WHERE email = '$email'");

  // Cek apakah email ditemukan dalam database
  if(mysqli_num_rows($query) === 1){
    $row = mysqli_fetch_assoc($query);
    // var_dump(password_verify($password, $row['password']));

    //Verifikasi password
    if(password_verify($password, $row['password'])){
      $_SESSION["login"] = true;
      header("Location: home-login.php");
      exit; 
    }
    else{
      echo "<script>  
      alert('Email atau Password salah.');
      </script>";
    }    
  }else{
    echo "<script> 
    alert('Email atau Password salah.');
    </script>";
  }
}

function access(){
  if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
  }
}

function logout(){
  if(isset($_POST['logout'])){
    $_SESSION=[];
    session_unset();
    session_destroy();
    header('location: login.php');
    exit;    
  }
  
}

function cookie(){

}
?>