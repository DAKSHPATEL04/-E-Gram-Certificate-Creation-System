
<?php
session_start();

    include('../config.php');

if(isset($_POST['birth_btn']))
    {
         $id = $_POST['id'];
         $uid = $_POST['uid'];
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $date = $_POST['date'];
        $place = $_POST['place'];
         $religion = $_POST['religion'];
          $gender = $_POST['gender'];
          $Remark=$_POST['Remark'];
     $Status=$_POST['Status'];
         
                $user_query = "INSERT into birth(id,uid,name,fname,mname,date,place,religion,gender,Remark,Status) values('$id','$uid','$name','$fname','$mname','$date','$place','$religion','$gender','$Remark','$Status')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "caste certificate Added Successfully";
                    header("Location:../user.php");
                }
           else
           {
            $_SESSION['status']= "caste certificate not Added ";
            header("Location:birth.php");
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










