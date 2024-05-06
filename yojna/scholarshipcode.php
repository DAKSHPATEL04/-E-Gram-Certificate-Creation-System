<?php
session_start();

    include('../config.php');

if(isset($_POST['scholarship_btn']))
    {
        $id = $_POST['id'];
        $uid = $_POST['uid'];
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $class = $_POST['class'];
        $bdate = $_POST['bdate'];
        $city = $_POST['city'];
        $pcode = $_POST['pcode'];
        $caste = $_POST['caste'];
        $gender = $_POST['gender'];
        $pno = $_POST['pno'];
        $email = $_POST['email'];
        $address = $_POST['address'];
         $bank = $_POST['bank'];
          $ano = $_POST['ano'];
          $Remark=$_POST['Remark'];
          $Status=$_POST['Status'];
              
                $user_query = "INSERT into scholarship( id,uid, fname, sname, class, bdate, city, pcode, caste, gender, pno, email, address, bank, ano,Remark,Status) values('$id','$uid','$fname','$sname','$class','$bdate','$city','$pcode','$caste','$gender','$pno','$email','$address','$bank','$ano','$Remark','$Status')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "Scholarship form Added Successfully";
                    header("Location:../application.php");
                }
           else
           {
            $_SESSION['status']= "Scholarship form not Added ";
            header("Location:scholarship.php");
           }
  }

  if(isset($_POST['update']))
    {
        $route_id = $_POST['route_id'];
        $name = $_POST['name'];
        $phone = $_POST['depart'];
        $username =$_POST["duration"];
        $password = $_POST['arrival'];
        $conpassword = $_POST['fare'];
        $query= "UPDATE route SET busname='$name', departure='$phone', duration='$username',arrival='$password', fare='$conpassword' WHERE id='$route_id'";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['status']= "Route updated Successfully";
            header("Location:routes.php");
        }
   else
   {
    $_SESSION['status']= "Route not updated ";
    header("Location:routes.php");
   }
    }

    if(isset($_POST['DeleteUserbtn']))
    {
      $route_id = $_POST['delete_id'];
      $query= "DELETE FROM route WHERE id='$route_id'";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['status']= "Route deleted Successfully";
            header("Location:routes.php");
        }
   else
   {
    $_SESSION['status']= "Route not deleted ";
    header("Location:routes.php");
   }
}

?>