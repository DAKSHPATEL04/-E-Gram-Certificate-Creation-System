







<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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

   <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> E-Gram </a>

   <nav class="navbar">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="home.php">home</a>
      <a href="#service">Services</a>
      <a href="home/contact.php">contact</a>
      <a href="aboutus.php">About As</a>
     
        <a href="obcs/admin/login.php">admin</a>
   </nav>

  <div class="icons">
      <div id="account-btn" class="fas fa-user"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>




</header>


 

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">register</span>
   </div>

   <form class="login-form active" action="logincode.php" method="post">
      <h3>login now</h3>
      <input type="text" placeholder="enter your username" name="username" class="box">
      <input type="password" placeholder="enter your password" name="password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="uforgotpwd.php">forgot password?</a>
      </div>
      <input type="submit" value="login now" name="login_btn" class="btn">
   </form>

   <form class="register-form" action="logincode" method="post">
      <h3>register now</h3>
      <input type="text" placeholder="enter your name" name="name" class="box">
       <input type="text" placeholder="enter your username" name="username" class="box">
      <input type="password" placeholder="enter your password" name="password" class="box">
      <input type="password" placeholder="confirm your password" name="confirmpassword" class="box">
      <input type="submit" value="register now" name="adduser" class="btn">
   </form>



</div>

<!-- account form section ends -->

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">
      
      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url(back.jpg) no-repeat;">
            <div class="content">
               <h3>Digital India!</h3>
               <p>An initiative of Egram society, Under department of panchayat </p>
              
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/3333.jpg) no-repeat;">
            <div class="content">
               <h3>Digital India</h3>
               <p>An initiative of Egram society, Under department of panchayat</p>
              
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url(images/1111.jpg) no-repeat;">
            <div class="content">
               <h3>Digital India</h3>
               <p>An initiative of Egram society, Under department of panchayat</p>
              
            </div>
         </section>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- home section ends -->

<!-- subjects section starts  -->

<section class="subjects" id="service"> 

   <h1 class="heading">our Services </h1>

   <div class="box-container">

      <div class="box">
        
         <img src="images/reg.png" alt="">
         <h3>Birth Certificate </h3>
            <form method="post" action="#">
       <button type="submit" class="btn btn primary">Apply</button>
       <a href="#" class="btn btn-primary">Show</a>
   </form>
      </div>   

   <div class="box">
        
         <img src="images/reg.png" alt="">
         <h3>Caste Certificate </h3>
            <form method="post" action="#">
       <button type="submit" class="btn btn primary">Apply</button>
       <a href="#" class="btn btn-primary">Show</a>
   </form>
      </div>
      

      <div class="box">
         <img src="images/reg.png" alt="">
         <h3>Death Certificate </h3>
         <form method="post" action="#">
       <button type="submit" class="btn btn primary">Apply</button>
        <a href="#" class="btn btn-primary">Show</a>
   </form>
      </div>

     

      <div class="box">
         <img src="images/reg.png" alt="">
         <h3>Marriage Certificate </h3>
        <form method="post" action="#">
       <button type="submit" class="btn btn primary">Apply</button>
        <a href="#" class="btn btn-primary">Show</a>
   </form>
      </div>


   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses">

   <h1 class="heading"> Our Yojana </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="slide slide">
            <div class="image">
               <img src="images/course-1-3.png" alt="">
               <h3>Scholarship</h3>
            </div>
            <div class="content">
               <h3>Scholarship</h3>
              
               <a href="#" class="btn">Apply</a>
            </div>
            </div>       

         <div class="slide slide">
            <div class="image">
               <img src="images/course-1-2.png" alt="">
               <h3>Jeevan bima</h3>
            </div>
            <div class="content">
               <h3>Jeevan bima</h3>
              
               <a href="#" class="btn">Apply</a>
            </div>
         </div>

         <div class="slide slide">
            <div class="image">
               <img src="images/course-1-3.png" alt="">
               <h3>Atal pension</h3>
            </div>
            <div class="content">
               <h3>Atal pension</h3>
              
               <a href="#" class="btn">apply</a>
            </div>
         </div>

        </div>
      
   </div>

</section>

<!-- home courses slider section ends -->









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
         <a href="" class="link">home</a>
      

         <a href="home/contact.php" class="link">contact</a>
      </div>

     
   </div>

   <div class="credit"> created by <span> E-gram</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->







<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>