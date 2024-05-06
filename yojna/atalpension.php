<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obcsdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
include('../auth.php');
?>



<?php
$query2 = "select * from atalpension order by id desc limit 1";
$result2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($result2);
$last_id = $row['id'];
if ($last_id == "") {
    $customer_ID = "AANO1";
} else {
    $customer_ID = substr($last_id, 4);
    $customer_ID = intval($customer_ID);
    $customer_ID = "AANO" . ($customer_ID + 1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="ap.css">

</head>

<body>

    <div class="container">

        <form action="atalpensioncode.php" method="post">

            <div class="row">

                <div class="col">

                    <h3 class="title" style="text-align:center;">Atal Pension</h3>


                    <div class="inputBox">
                        <span>Application No :</span>
                        <input name="id" type="text" class="form-control item" id="Certificate Number" placeholder="certificate number" value="<?php echo $customer_ID; ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Full Name :</span>
                        <input name="uid" type="hidden" value="<?php echo $_SESSION['auth_user']['user_id'] ?>" class="form-control item">
                        <input name="name" type="text" placeholder="name">
                    </div>
                    <div class="inputBox">
                        <span>Date of birth:</span>
                        <input name="bdate" type="date" placeholder="Date of birth">
                    </div>
                    <div class="inputBox">
                        <span>Mobile Number:</span>
                        <input name="mno" type="text" placeholder="Mobile Number" maxlength="10">
                    </div>
                    <div class="inputBox">
                        <span>Adhar Number:</span>
                        <input name="adno" type="text" placeholder="1111-2222-3333-4444" maxlength="12">
                    </div>
                    <div class="inputBox">
                        <span>City:</span>
                        <input name="city" type="text" placeholder="City">
                    </div>
                    <div class="inputBox">
                        <span>Pincode:</span>
                        <input name="ano" type="text" placeholder="Pincode" maxlength="6">
                    </div>

                </div>

                <div class="col">

                    <h3 class="title" style="text-align:center;">Form</h3>

                    <div class="inputBox">
                        <span>Married :</span>
                        <input name="married" type="text" placeholder="Yes/No">
                    </div>

                    <div class="inputBox">
                        <span>Gender :</span>
                        <input name="gender" type="text" placeholder="male/female">
                    </div>

                    <div class="inputBox">
                        <span> Annual Income :</span>
                        <input name="income" type="text" placeholder="Annual Income">
                    </div>
                    <div class="inputBox">
                        <span> Address:</span>
                        <input name="address" type="text" placeholder="Address">
                    </div>
                    <div class="inputBox">
                        <span>Bank:</span>
                        <input name="bank" type="text" placeholder="Bank">
                    </div>
                    <div class="inputBox">
                        <span>Bank Branch:</span>
                        <input name="bbank" type="text" placeholder="Bank Branch">
                    </div>
                    <div class="inputBox">
                        <span>Account Number:</span>
                        <input name="ano" type="text" placeholder="1111-2222-3333-4444" maxlength="14">

                    </div>

                </div>

                <input name="atalpension_btn" type="submit" value="submit" class="submit-btn">
                <a href="../application.php">Back</a>

        </form>

    </div>

</body>

</html>