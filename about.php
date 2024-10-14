<?php
   include 'components/connect.php';

   session_start();

   if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
   }else{
      $user_id = '';
   };
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>about</title>

      <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <link rel="stylesheet" href="css/style.css">

   </head>
   <body>
      <?php include 'components/user_header.php'; ?>

      <section class="about">

         <div class="row">

            <div class="image">
               <img src="images/about-img.svg" alt="">
            </div>

            <div class="content">
               <h3>Mengapa Lundry Jung-Hae?</h3>
               <p>Sejak 2023, Jung-Hae laundry hadir untuk melayani anda dengan sepenuh hati. Kami percaya dibalik pakaian yang bernoda tersembunyi kenangan yang berharga. Kami membawa kesegaran baru dalam dunia laundry dengan komitmen untuk menjadikan setiap cucian sebagai bagian dari perjalanan cerita Anda.</p>
               <a href="https://kireiwash.com/about-us/" class="btn">Hubungi Kami</a>
            </div>

         </div>

      </section>
      
      <section class="reviews">
         
         <h1 class="heading">Ulasan Pelanggan</h1>

         <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Staff Junghae Laundry sangat ramah dan membantu. Proses penerimaan dan pengambilan laundry pun cepat dan efisien.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
               <i class="fas fa-star"></i>
               <h3>Asep Kasep</h3>
            </div>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Harga yang ditawarkan Junghae Laundry menurut saya cukup sesuai dengan kualitas pelayanan dan hasil laundry.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Poetri Rusmini</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Pakaian saya selalu bersih dan terawat dengan baik setelah dicuci di Junghae Laundry. Mereka juga sigap menangani noda membandel.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ucok</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Junghae Laundry juga menawarkan layanan laundry kilat yang sangat membantu saya ketika membutuhkan pakaian bersih dalam waktu singkat.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Edith Warchaw</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Harga yang ditawarkan Junghae Laundry menurut saya cukup sesuai dengan kualitas pelayanan dan hasil laundry.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sutikno</h3>
         </div>
         
         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Staff Junghae Laundry sangat ramah dan membantu. Proses penerimaan dan pengambilan laundry pun cepat dan efisien.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Emil Yo</h3>
         </div>
         
         </div>
            <div class="swiper-pagination"></div>
         </div>
      </section>

      <?php include 'components/footer.php'; ?>

      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

      <script src="js/script.js"></script>

      <script>
         var swiper = new Swiper(".reviews-slider", {
            loop:true,
            spaceBetween: 20,
            pagination: {
               el: ".swiper-pagination",
               clickable:true,
            },
            breakpoints: {
               0: {
               slidesPerView:1,
               },
               768: {
               slidesPerView: 2,
               },
               991: {
               slidesPerView: 3,
               },
            },
         });
      </script>
   </body>
</html>