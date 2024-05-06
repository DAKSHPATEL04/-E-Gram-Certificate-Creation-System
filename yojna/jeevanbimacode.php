<?php
session_start();

    include('../config.php');

if(isset($_POST['jeevanbima_btn']))
    {
        $id = $_POST['id'];
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $oop = $_POST['oop'];
        $email = $_POST['email'];
        $bdate = $_POST['bdate'];
        $city = $_POST['city'];
        $pcode = $_POST['pcode'];
        $caste = $_POST['caste'];
        $gender = $_POST['gender'];
        $pno = $_POST['pno'];
        $adno = $_POST['adno'];
        $address = $_POST['address'];
         $bank = $_POST['bank'];
          $ano = $_POST['ano'];
          $Remark=$_POST['Remark'];
          $Status=$_POST['Status'];
              
                $user_query = "INSERT into jeevanbima( id,uid, name, oop, email, bdate, city, pcode, caste, gender, pno, adno, address, bank, ano,Remark,Status) values('$id','$uid','$name','$oop','$email','$bdate','$city','$pcode','$caste','$gender','$pno','$adno','$address','$bank','$ano','$Remark','$Status')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "jeevanbima form Added Successfully";
                    header("Location:../application.php");
                }
           else
           {
            $_SESSION['status']= "jeevanbima form not Added ";
            header("Location:jeevanbima.php");
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