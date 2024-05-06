<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <header class="header">

      <a href="#" class="logo"><img src=""></img> E-gram </a>

      <nav class="navbar">
         <div id="close-navbar" class="fas fa-times"></div>
         <a href="../user.php">home</a>
         <a href="../application.php">Yogna & Events</a>
         <a href="contactu.php">contact</a>
      </nav>


   </header>

   <!-- account form section starts  -->

   <div class="account-form">

      <div id="close-form" class="fas fa-times"></div>

      <div class="buttons">
         <span class="btn active login-btn">login</span>
         <span class="btn register-btn">register</span>
      </div>

      <form class="login-form active" action="">
         <h3>login now</h3>
         <input type="email" placeholder="enter your email" class="box">
         <input type="password" placeholder="enter your password" class="box">
         <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
            <a href="#">forgot password?</a>
         </div>
         <input type="submit" value="login now" class="btn">
      </form>

      <form class="register-form" action="">
         <h3>register now</h3>
         <input type="email" placeholder="enter your email" class="box">
         <input type="password" placeholder="enter your password" class="box">
         <input type="password" placeholder="confirm your password" class="box">
         <input type="submit" value="register now" class="btn">
      </form>

   </div>

   <!-- account form section ends -->

   <!-- header section ends -->

   <section class="heading-link">
      <h3>contact us</h3>
      <p> <a href="../user.php">home</a> / contact </p>
   </section>

   <!-- contact section starts  -->

   <section class="contact">

      <h1 class="heading"> get in touch </h1>

      <div class="icons-container">

         <div class="icons">
            <i class="fas fa-clock"></i>
            <h3> Service :</h3>
            <p>24h service</p>
         </div>

         <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>phone :</h3>
            <p>+91-9106829219</p>
            <p>+91-8757135198</p>
         </div>

         <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3> email : </h3>
            <p>keyurkalsariya29@gmail.com</p>
            <p>dakshpatel@gmail.com</p>
         </div>

         <div class="icons">
            <i class="fas fa-map"></i>
            <h3>address :</h3>
            <p>Navsari, india - 396445</p>
         </div>

      </div>

      <div class="row">

         <div class="image">
            <img src="images/contact-img.png" alt="">
         </div>
         <?php
         include('..\auth.php');
         ?>
         <form action="contactcode.php" method="post">
            <h3>send us a message</h3>

            <input name="uid" type="hidden" value="<?php echo $_SESSION['auth_user']['user_id'] ?>" class="box">

            <input type="text" placeholder="name" name="name" id="name" class="box">

            <input type="email" placeholder="email" name="email" id="email" class="box">
            <input type="number" placeholder="phone" name="pno" id="pno" class="box">
            <textarea name="message" class="box" placeholder="message" id="message" cols="30" rows="10"></textarea>
            <button type="submit" value="ADD" name="send_btn" class="btn">Submit</button>

         </form>

      </div>

   </section>

   <!-- contact section ends -->

   <!-- faq section starts  -->



   </section>

   <!-- faq section ends -->

   <!-- logo slider starts  -->


   <!-- logo slider ends -->







   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3> <i class="fas fa-lightbulb"></i> E-gram </h3>
            <p>An initiative of Egram society, Under department of panchayat </p>
            <div class="share">
               <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
               <a href="https://twitter.com/i/flow/login" class="fab fa-twitter"></a>
               <a href="https://www.instagram.com/accounts/login/" class="fab fa-instagram"></a>
               <a href="https://in.linkedin.com/?trk=IN-SEM_google-adwords_Jordan-brand-sign-up&mcid=6844056167778418689&trk2=ga_campid=14650114788_asid=127961666300_crid=545833659295_kw=linkedin%20login_d=c_tid=kwd-12704335873_n=g_mt=e_geo=9050515_slid=&gclid=CjwKCAjwu_mSBhAYEiwA5BBmf6lmK8MiM0YvQFCsHhY3W612eqSjWWFVMupxIMXB5s46OSmrOLBnjBoCe5oQAvD_BwE&gclsrc=aw.ds" class="fab fa-linkedin"></a>
            </div>
         </div>



         <div class="box">
            <h3></h3>
            <a href="#" class="link"></a>
            <a href="#" class="link"></a>
            <a href="#" class="link"></a>
            <a href="#" class="link"></a>
            <a href="#" class="link"></a>
         </div>
         <div class="box">
            <h3>quick links</h3>
            <a href="../user.php" class="link">home</a>
            <a href="../application.php" class="link">yogna & Events</a>
            <a href="../Certificate.php" class="link">Certificate</a>

         </div>


      </div>
      <div class="credit"> created by <span>E-Gram </span> | all rights reserved! </div>

   </section>

   <!-- footer section ends -->





   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>