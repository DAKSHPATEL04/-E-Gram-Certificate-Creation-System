<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> E-gram </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="user.php">home</a>
      <a href="application.php">Yojana & Events</a>
      <a href="#"></a>
      <a href="user/contactu.php">contact</a>
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
   <h3>Yojana & Events</h3>
   <p> <a href="home.php">home</a> / Yojana & Events </p>
</section>

<!-- about section starts  -->

<section class="about">

  
   <div class="content">
      <h3 class="about-title">Our Yojana</h3>

      <div class="icons-container">
         <div  class="icons">
            <img src="images/about-icon-1.png" alt="">
            <form method="post" action="yojna/scholarship.php">
            <h3>Scholarship</h3>
            <button  type="submit" class="btn btn primary">Apply</button>
           <a href="searchscholarship.php" class="btn btn-primary">Show</a>         
            <span></span>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <form method="post" action="yojna/jeevanbima.php">
            <h3>Jeevan bima</h3>
           <a href="yojna/jeevanbima.php" class="btn btn-primary">Apply</a>
            <a href="searchjeevanbima.php" class="btn btn-primary">Show</a>
            <span></span>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <form method="post" action="yojna/atalpension.php">
            <h3>Atal Pension</h3>
            <a href="yojna/atalpension.php" class="btn btn-primary">Apply</a>
            <a href="searchatalpension.php" type="submit"class="btn btn-primary">Show</a>   
            <span></span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->
<section class="about">

  
<div class="content">
      <h3 class="about-title">Our Events</h3>

      <div class="icons-container">
         <div class="icons">
            <img src="images/about-icon-1.png" alt="">
            <h3>Independence day</h3>
            <a href="events/independence.php" class="btn btn-primary">Show</a>
            
            <span></span>
         </div>
         <div class="icons">
            <img src="images/about-icon-2.png" alt="">
            <h3>Republic day</h3>
            <a href="events/republic.php" class="btn btn-primary">Show</a>
            <span></span>
         </div>
         <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>Diwali</h3>
            <a href="events/Diwali.php" class="btn btn-primary">Show</a>
            <span></span>
         </div>
          <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>Eid</h3>
            <a href="events/eid.php" class="btn btn-primary">Show</a>
            <span></span>
         </div>
          <div class="icons">
            <img src="images/about-icon-3.png" alt="">
            <h3>Christmas</h3>
            <a href="events/christmas.php" class="btn btn-primary">Show</a>
            <span></span>
         </div>
      </div>
   </div>

</section>









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
         <a href="user.php" class="link">home</a>
         <a href="application.php" class="link">yogna & Events</a>
         <a href="Certificate.php" class="link">Certificate</a>
         <a href="user/contactu.php" class="link">contact</a>
      </div>

     
   </div>

   <div class="credit"> created by <span>E-Gram</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->






<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>