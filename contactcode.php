
<?php
session_start();

    include('../config.php');

if(isset($_POST['send_btn']))
    {
        
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pno = $_POST['pno'];
        $message = $_POST['message'];
        $reply = $_POST['reply'];
             
         
              
                $user_query = "INSERT into message(name,email,pno,message,reply) values('$name','$email','$pno','$message','$reply')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "birth certificate Added Successfully";
                    header("Location:contactu.php");
                    
                }
           else
           {
            $_SESSION['status']= "birth certificate not Added ";
            header("Location:contactu.php");
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
 