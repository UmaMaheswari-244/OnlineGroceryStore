<?php
@include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<section class="about">
   <div class="row">
      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Why choose us?</h3>
         <p>We bring farm-fresh groceries straight to your doorstep. With a wide selection of quality fruits, vegetables, meat, and pantry staples, we ensure freshness, affordability, and a seamless shopping experience every time.</p>         <a href="contact.php" class="btn">Contact us</a>
      </div>
      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>What we provide?</h3>
         <p>We offer a variety of fresh produce, organic foods, dairy products, seafood, and household essentials. Whether you're shopping for daily needs or planning a special meal, we've got everything covered in one place.</p>         <a href="shop.php" class="btn">Our shop</a>
      </div>
   </div>
</section>
<section class="reviews">
   <h1 class="title">Clients reviews</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>The quality of fruits and vegetables here is just amazing. Always fresh and delivered on time. Highly recommend this store!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aarav Kumar</h3>
      </div>
      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I love the variety of organic products available. It's become my go-to place for all my household groceries.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Sneha Reddy</h3>
      </div>
      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>The online ordering experience was smooth and easy. I received everything neatly packed and fresh.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohan Mehta</h3>
      </div>
      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Great service and fast delivery! The meat and seafood section is always well-stocked and fresh.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya Sharma</h3>
      </div>
      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Excellent customer support and a very user-friendly website. I found everything I needed in one place.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Vikram Joshi</h3>
      </div>
      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I'm really impressed by the freshness and affordability of the groceries here. A fantastic shopping experience overall!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anjali Menon</h3>
      </div>
   </div>
</section>
