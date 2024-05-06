<?php 
session_start();

    include('../config.php');
    if(isset($_POST['sbtn']))
    {
    	$appno = $_POST['appno'];

    	$user_query = "SELECT * FROM scholarship WHERE appno='$appno'";
    	 $user_query_run = mysqli_query($con ,$user_query);
    	}
    ?>