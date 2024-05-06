<?php

include('../config.php')
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="birth.css">
</head> 
<body>
<div class="receipts-wrapper">
      <div class="receipts" id="printableArea"> 
<div id="container">

  <h1>&bull; DEATH CERTIFICATE &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
   

  </div>
  <form action="#" method="post" id="contact_form">
  <?php
                                       if(isset($_GET['t_id']))
                                       {
                                       $user_id = $_GET['t_id'];
                                       $query= "SELECT * FROM death WHERE id='$user_id'";
                                       $query_run = mysqli_query($con, $query);
                                       if(mysqli_num_rows ($query_run) > 0)
                                       {
                                       foreach($query_run as $row)
                                       {
                                                ?>
    
      <div class="form-group">
      <label for="">Certificate No</label>
      <input type="text" placeholder="Certificate No" name="id" id="name_input"  value="<?php echo  $row['id']  ?>" required>
    </div>
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" placeholder="full name " name="name" id="name_input" value="<?php echo  $row['name']  ?>"required>
    </div>
    <div class="form-group">
      <label for=""> Age </label>
      <input type="text" placeholder="Age" name="age" id="age_input"  value="<?php echo  $row['age']  ?>" required>
    </div>
    <div class="form-group">
      <label for="name">Religion</label>
      <input type="text" placeholder="Religion" name="religion" id="religion_input" value="<?php echo  $row['religion']  ?>" required>
    </div>
    <div class="form-group">
      <label for=""> Place Of Death</label>
      <input type="text" placeholder="Place Of Death" name="place" id="place_input" value="<?php echo  $row['place']  ?>" required>
    </div>
    <div class="form-group">
      <label for=""> Date OF Birth</label>
      <input type="text" placeholder="Date OF Birth" name="bdate" id="date_input" value="<?php echo  $row['bdate']  ?>" required>
    </div>
    <div class="form-group">
      <label for="">Date Of Death</label>
      <input type="text" placeholder="Date Of Death" name="ddate" id="date_input" value="<?php echo  $row['ddate']  ?>"required>
    </div>
    <div class="form-group">
      <label for=""> Gender </label>
      <input type="text" placeholder="gender" name="Gender" id="gender_input" value="<?php echo  $row['gender']  ?>" required>
    </div> 
    <div class="form-group">
      <label for=""> Remark </label>
      <input type="text" placeholder="Your apllication still pending" name="Remark" id="Remark_input" value="<?php echo  $row['Remark']  ?>" required>
      
    </div>
    <div class="form-group">
      <label for=""> Status </label>
      <input type="text" placeholder=" pending" name="Status" id="Status_input" value="<?php echo  $row['Status']  ?>" required>
    </div> 
    </div> 
    
      
    

  </form><!-- // End form -->
  
 
 </div><!-- // End #container -->
 </div>
 <?php }
 }
 
 
 }
 ?>
  <script>
 function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
 
      document.body.innerHTML = printContents;
 
      window.print();
 
      document.body.innerHTML = originalContents;
 }
   </script>
   <a href="../user.php" type="submit" class=" btn btn-primary">Done</a>
  <input type="button" class="btn btn-primary btn-sm float-right" onclick="printDiv('printableArea')" value="Download" />
 
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 
 <!-- custom js file link  -->
 <script src="script.js"></script>
 </body> 
 </html>