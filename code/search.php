<?php
require "functions.php";
session_start();
access();

if(isset($_POST['search'])){
    search($_POST);
}

function search($data){
    $searchbox = $data['search'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SneakerScout</title>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="css/style.css">

  <header>
    <div id="menu-bar" class="fa fa-bars"></div>
    <a href="index.php" class="logo">Sneaker Scout or Logo</a>
    <nav class="navbar">
      <a href="index.php">Home</a>
      <form action="search.php" method="post">
        <input type="text" name="search" placeholder= >
        <button name="search"> Search</button>
      </form>
      <!-- <a href="#product">Browse</a> -->
      <a href="#fearured">Wishlist</a>
    </nav>
    <div class="icons">
      <a href="#"><i class="fa fa-heart"></i></a>
      <a href="#"><i class="fa fa-shopping-cart"></i></a>
      <a href="login.php"><i class="fa fa-user"></i></a>
    </div>
  </header>
</head>

<body>
<section class="product" id="product">
            <h1 class="heading">latest <span>Products</span></h1>
            <div class="box-container">
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/1.jpg" alt="">
                        <h3>
                        <?php  var_dump($searchbox); ?> 
                        </h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/2.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/3.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/5.jpg" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/7.png" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="icons">
                        <a href="#" class="fa fa-heart"></a>
                        <a href="#" class="fa fa-share"></a>
                        <a href="#" class="fa fa-eye"></a>
                    </div>
                    <div class="content">
                        <img src="img/product4/8.png" alt="">
                        <h3>Nike Shoes</h3>
                        <div class="price">$200 <span>$150</span></div>
                        <div class="stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end product-->
        
        </section> 

</body>

</html>