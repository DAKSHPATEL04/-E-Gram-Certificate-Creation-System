
<?php
session_start();

    include('../config.php');

if(isset($_POST['death_btn']))
    {
         $id = $_POST['id'];
         $uid = $_POST['uid'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $religion = $_POST['religion'];
        $place = $_POST['place'];
        $bdate = $_POST['bdate'];
         $ddate = $_POST['ddate'];
          $gender = $_POST['gender'];
          $Remark=$_POST['Remark'];
          $Status=$_POST['Status'];
              
                $user_query = "INSERT into death(id,uid,name,age,religion,place,bdate,ddate,gender,Remark,Status) values('$id','$uid','$name','$age','$religion','$place','$bdate','$ddate','$gender','$Remark','$Status')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "death certificate Added Successfully";
                    header("Location:../user.php");
                }
           else
           {
            $_SESSION['status']= "death certificate not Added ";
            header("Location:death.php");
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