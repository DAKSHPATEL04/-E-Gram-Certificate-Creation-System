<?php
session_start();
include('config.php');

if(isset($_POST['login_btn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $log_query= "SELECT * FROM userss WHERE username='$username' AND password='$password'   LIMIT 1";
    $log_query_run = mysqli_query($con, $log_query);
    
    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $row){
            $user_id = $row['id'];
            $user_name = $row['name']; 
            $user_username = $row['username'];
           
        }

        $_SESSION['auth']= true;        
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_username'=>$user_username,
            
        ];

        $_SESSION['status']="Logged in Successfully";
        header('Location: user.php');
        
    }
    else
    {
        $_SESSION['status']="Invalid Username or Password";
        header('Location: home.php');
       }
}
else{
    $_SESSION['status']="Access Denied";
    header('Location: home.php');
}



        if(isset($_POST['check_username']))
    {
        $username = $_POST['username'];

        $checkusername = "SELECT username FROM userss WHERE username ='$username'";
        $checkusername_run = mysqli_query($con,$checkusername);

        if(mysqli_num_rows($checkusername_run) > 0)
        {
         echo "username taken";
        }
        else 
        {
            echo "it available";    
        }


    }


    
 if(isset($_POST['adduser']))
    {
        $name = $_POST['name'];
        $username =trim($_POST["username"]);
        $password = $_POST['password'];
        $conpassword = $_POST['confirmpassword'];

        if($password == $conpassword)
        {
            $checkusername = "SELECT username FROM userss WHERE username ='$username'";
            $checkusername_run = mysqli_query($con,$checkusername);

            if(mysqli_num_rows($checkusername_run) > 0)
            {
              $_SESSION['status']= "Username Taken";
              header("Location:home.php");
              exit;
            }
              else{
                $user_query = "INSERT into userss (name,username,password) values('$name','$username','$password')";
                $user_query_run = mysqli_query($con ,$user_query);
                if($user_query_run)
                {
                    $_SESSION['status']= "Users Added Successfully";
                    header("Location:home.php");
                }
           else
           {
            $_SESSION['status']= "Users not Added ";
            header("Location:home.php");
           }

            }
        }

      else {

        $_SESSION['status']= "Password not match ";
        header("Location:home.php");

      }
     
    }




?>