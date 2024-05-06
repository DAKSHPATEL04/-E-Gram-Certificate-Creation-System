<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obcsdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
include('../auth.php');
?>



<?php
$query2 = "select * from scholarship order by id desc limit 1";
$result2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($result2);
$last_id = $row['id'];
if ($last_id == "") {
    $customer_ID = "SCNO1";
} else {
    $customer_ID = substr($last_id, 4);
    $customer_ID = intval($customer_ID);
    $customer_ID = "SCNO" . ($customer_ID + 1);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="ss.css">

</head>

<body>

    <div class="container">

        <form action="scholarshipcode.php" method="post">

            <div class="row">

                <div class="col">

                    <h3 class="title" style="text-align:center;">Scholarship</h3>


                    <div class="inputBox">
                        <span>Application No :</span>
                        <input name="id" type="text" class="form-control item" id="Certificate Number" placeholder="certificate number" value="<?php echo $customer_ID; ?>" readonly>
                    </div>
                    <div class="inputBox">
                        <span>Full name :</span>
                        <input name="uid" type="hidden" value="<?php echo $_SESSION['auth_user']['user_id'] ?>" class="form-control item">
                        <input name="fname" type="text" placeholder="Full name ">
                    </div>
                    <div class="inputBox">
                        <span>School Name:</span>
                        <input name="sname" type="text" placeholder="School Name">
                    </div>
                    <div class="inputBox">
                        <span>Class :</span>
                        <input name="class" type="text" placeholder="Class">
                    </div>
                    <div class="inputBox">
                        <span>Birth Date:</span>
                        <input name="bdate" type="date" placeholder="Birth Date">
                    </div>
                    <div class="inputBox">
                        <span>City:</span>
                        <input name="city" type="text" placeholder="City">
                    </div>
                    <div class="inputBox">
                        <span>Pincode:</span>
                        <input name="pcode" type="text" placeholder="Pincode" maxlength="6">
                    </div>

                </div>

                <div class="col">

                    <h3 class="title" style="text-align:center;">Form</h3>

                    <div class="inputBox">
                        <span>Caste :</span>
                        <input name="caste" type="text" placeholder="Caste">
                    </div>

                    <div class="inputBox">
                        <span>Gender :</span>
                        <input name="gender" type="text" placeholder="Gender">
                    </div>

                    <div class="inputBox">
                        <span>Phone Number :</span>
                        <input name="pno" type="text" placeholder="Phone Number" maxlength="10">
                    </div>
                    <div class="inputBox">
                        <span>Email Id :</span>
                        <input name="email" type="email" placeholder="Email">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input name="address" type="text" placeholder="Address">
                    </div>
                    <div class="inputBox">
                        <span>Bank:</span>
                        <input name="bank" type="text" placeholder="bank">
                    </div>
                    <div class="inputBox">
                        <span>Account Number:</span>
                        <input name="ano" type="text" placeholder="1111-2222-3333-4444" maxlength="14">
                    </div>

                </div>

            </div>

            <input name="scholarship_btn" type="submit" value="submit" class="submit-btn">
            <a href="../application.php">Back</a>
        </form>

    </div>

</body>

</html>