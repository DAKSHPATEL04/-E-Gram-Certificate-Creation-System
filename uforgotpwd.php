<?php

include('config.php');

if(isset($_POST['submit']))
{
  
    $name = $_POST['name'];  
   
    $password = $_POST['password'];
    $conpassword = $_POST['confirmpassword'];

   

        if($password == $conpassword)
        {
            $checkusername = "UPDATE userss SET password='$password' WHERE name='$name'";
            $checkusername_run = mysqli_query($con,$checkusername);
        }
        if ($checkusername_run){
          echo '<script>alert("Your password successully changed")</script>';
            echo "<script>window.location.href ='home.php'</script>";
            
    }
    else
    {
        echo '<script>alert("Your password not match")</script>';
    }
  

}
?>

<link rel="stylesheet" type="text/css" href="uforgotpwd.css">

<form method="post" action="#" >
  <h1 class="">Change Password</h1>
  <div>
    <label class="label-name">
      <input type="name"  name="name" placeholder="name" required />
      <span class="required">Name</span>
    </label>
  </div>
  <div>
    <label class="label-password">
      <input type="pwd"  name="password" placeholder="pwd"  required />
      <span class="required">Password</span>
    </label>
  </div>
 
  
  <div>
    <label class="label-password">
      <input type="text"  name="confirmpassword" placeholder="Password" required />
      <span class="required"> Confirm Password</span>
    </label>
  </div>
  <input type="submit"  name="submit" value="Done"/>
  <div class="email">
    <p><a href="home.php">Already Have Account ? Sign In</a></p>
  </div>
 
</form>