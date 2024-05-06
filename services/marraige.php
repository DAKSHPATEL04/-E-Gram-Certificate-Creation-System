<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "obcsdb";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        include('C:\wamp64\www\DK\Final E-gram\E-gram\auth.php');
    ?>


 
    <?php
        $query2 = "select * from marraige order by id desc limit 1";
        $result2 = mysqli_query($conn,$query2);
        $row = mysqli_fetch_array($result2);
        $last_id = $row['id'];
        if ($last_id == "")
        {
            $customer_ID = "MCNO1";
        }
        else
        {
            $customer_ID = substr($last_id, 4);
            $customer_ID = intval($customer_ID);
            $customer_ID = "MCNO" . ($customer_ID + 1);
        }
    ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="birthreg.css">
</head>
<body>
    <div class="registration-form">
        <form action="marraigecode.php" method="post">
            <div class="form-group">
                <label class="create-account">MARRAIGE CERTIFICATE</label>
            </div>
            <div class="form-group">
                <input name="id" type="text" class="form-control item" id="Certificate Number" placeholder="certificate number" value="<?php echo $customer_ID; ?>" readonly>
            </div>
            <div class="form-group">
            <input name="uid" type="hidden" value="<?php echo $_SESSION['auth_user']['user_id']?>" class="form-control item">
                <input name="hname" type="text" class="form-control item" id="Husband name" placeholder="Husband name">
            </div>
            <div class="form-group">
                <input name="wname" type="text" class="form-control item" id="Wife name" placeholder="Wife name">
            </div>
            <div class="form-group">
                <input name="place" type="text" class="form-control item" id="Marraige place" placeholder="Marraige place">
            </div>
             <div class="form-group">
                <input name="hage" type="text" class="form-control item" id="Husband Age" placeholder="Husband Age">
            </div>
            

              <div class="form-group">
                <input name="wage" type="text" class="form-control item" id="Wife Age" placeholder="Wife Age">
            </div>
            <div class="form-group">
            <label for="name">Marraige Date</label>
                <input name="date" type="date" class="form-control item" id="Marraige Date" placeholder="Marraige Date">
            </div>

            
           
        
        <div class="form-group">
           <div class="form-group">
                <button name="marraige_btn" type="submit" value="ADD" class="btn btn-block create-account">Submit</button>
            </div> 
             <a href="../user.php" type="submit" class=" btn btn-primary">Done</a> 
            </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
