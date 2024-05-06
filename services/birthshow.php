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

 

  <h1>&bull; BIRTH CERTIFICATE &bull;</h1>
  <div class="underline">
  </div>
  <div class="icon_wrapper">
  
  </div>
  <form action="#" method="post" id="contact_form">
  <?php
                                       if(isset($_GET['t_id']))
                                       {
                                       $user_id = $_GET['t_id'];
                                       $query= "SELECT * FROM birth WHERE id='$user_id'";
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
      <label for="name">Name</label>
      <input type="text" placeholder="full name " name="name" id="name_input" value="<?php echo  $row['name']  ?>"required>
    </div>
    <div class="form-group">
      <label for=""> Father name </label>
      <input type="text" placeholder="Father Name" name="fathername" id="name_input"  value="<?php echo  $row['fname']  ?>" required>
    </div>
    <div class="form-group">
      <label for="name"> Mother Name</label>
      <input type="text" placeholder="mother name" name="mothername" id="name_input" value="<?php echo  $row['mname']  ?>" required>
    </div>
    <div class="form-group">
      <label for=""> birth Date</label>
      <input type="text" placeholder="Birthdate" name="birthdate" id="date_input" value="<?php echo  $row['date']  ?>" required>
    </div>
    <div class="form-group">
      <label for=""> Birth place</label>
      <input type="text" placeholder="Birthplace" name="Birthplace" id="place_input" value="<?php echo  $row['place']  ?>" required>
    </div>
    
    <div class="form-group">
      <label for="">Religion</label>
      <input type="text" placeholder="Religion" name="Religion" id="religion_input" value="<?php echo  $row['religion']  ?>"required>
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
    
    <?php }
}


}
?>
  </form><!-- // End form -->
  
 
</div><!-- // End #container -->
</div>

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