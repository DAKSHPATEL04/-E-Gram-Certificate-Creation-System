
<?php
session_start();

    include('../config.php');

if(isset($_POST['marraige_btn']))
    {
         $id = $_POST['id'];
         $uid = $_POST['uid'];
        $hname = $_POST['hname'];
        $wname = $_POST['wname'];
        $place = $_POST['place'];
        $hage = $_POST['hage'];
        $wage = $_POST['wage'];
         $date = $_POST['date'];
         $Remark=$_POST['Remark'];
         $Status=$_POST['Status'];
         
              
                $user_query = "INSERT into marraige(id,uid,hname,wname,place,hage,wage,date,Remark,Status) values('$id','$uid','$hname','$wname','$place','$hage','$wage','$date','$Remark','$Status')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "marraige certificate Added Successfully";
                    header("Location:../user.php");
                }
           else
           {
            $_SESSION['status']= "marraige certificate not Added ";
            header("Location:marraige.php");
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