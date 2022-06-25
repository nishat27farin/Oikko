<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are offering you books,stationary products,learning products for you special child and so on at very reasonable price. So you are getting all learning products at one place. Isn't it great!</p>
         <p>So what are you waiting for! Hurry up and purchase from Oikko  </p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.jpg" alt="">
         <p>Oikko is best place to purchase books and stationary accessories.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nishat Shama</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.jpg" alt="">
         <p>Best service in best price.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Munwar Anjum</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.jpg" alt="">
         <p>Oikko is best in a word.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Shahriyar Ismam</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.jpg" alt="">
         <p>I have purchased brail for a special child. They are going a great job.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Tania Tabassum</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.jpg" alt="">
         <p>Love their service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Adib Arman</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.jpg" alt="">
         <p>Just love their products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sumaiya Habib</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="https://en.wikipedia.org/wiki/Rabindranath_Tagore" class="fab fa-wikipedia-w"></a>
         </div>
         <h3>Rabindranath Tagore</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="https://en.wikipedia.org/wiki/Kazi_Nazrul_Islam" class="fab fa-wikipedia-w"></a>
         </div>
         <h3>Kazi Nazrul Islam</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="https://en.wikipedia.org/wiki/Muhammed_Zafar_Iqbal" class="fab fa-wikipedia-w"></a>
            <a href="https://www.facebook.com/our.zafar.sir" class="fab fa-facebook-f"></a>
         </div>
         <h3>Muhammed Zafar Iqbal</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="https://en.wikipedia.org/wiki/Humayun_Ahmed" class="fab fa-wikipedia-w"></a>
         </div>
         <h3>Humayun Ahmed</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="https://en.wikipedia.org/wiki/Zahir_Raihan" class="fab fa-wikipedia-w"></a>
         </div>
         <h3>Zahir Raihan</h3>
      </div>

      <div class="box">
         <img src="images/author-6.png" alt="">
         <div class="share">
            <a href="https://www.facebook.com/tamim.shahriar.subeen" class="fab fa-facebook-f"></a>
         </div>
         <h3>Tamim Shahriar Subin</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>