<?php
session_start();

    include('../config.php');

if(isset($_POST['atalpension_btn']))
    {
        $id = $_POST['id'];
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $bdate = $_POST['bdate'];
        $mno = $_POST['mno'];
        $adno = $_POST['adno'];
        $city = $_POST['city'];
        $pcode = $_POST['pcode'];
        $married = $_POST['married'];
        $gender = $_POST['gender'];
        $income = $_POST['income'];
        $address = $_POST['address'];
        $bank = $_POST['bank'];
         $bbank = $_POST['bbank'];
          $ano = $_POST['ano'];
          $Remark=$_POST['Remark'];
          $Status=$_POST['Status'];
              
                $user_query = "INSERT into atalpension( id,uid, name, bdate, mno, adno, city, pcode, married, gender, income, address, bank, bbank, ano,Remark,Status) values('$id','$uid','$name','$bdate','$mno','$adno','$city','$pcode','$married','$gender','$income','$address','$bank','$bbank','$ano','$Remark','$Status')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                        
                    $_SESSION['status']= "atalpension form Added Successfully";
                    header("Location:../application.php");
                }
           else
           {
            $_SESSION['status']= "atalpension form not Added ";
            header("Location:atalpension.php");
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