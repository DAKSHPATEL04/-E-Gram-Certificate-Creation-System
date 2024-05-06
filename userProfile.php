<?php

include('config.php');
include('C:\wamp64\www\Final E-gram\E-gram\auth.php');

if (isset($_POST['submit'])) {

  $id = $_POST['id'];
  $name = $_POST['name'];


  $password = $_POST['password'];
  $conpassword = $_POST['confirmpassword'];



  if ($password == $conpassword) {
    $checkusername = "UPDATE userss SET name='$name' ,password='$password' WHERE id='$id'";
    $checkusername_run = mysqli_query($con, $checkusername);
  }
  if ($checkusername_run) {
    echo '<script>alert("Profile has been updated")</script>';
    echo "<script>window.location.href ='user.php'</script>";
  } else {
    echo '<script>alert("Profile has been not updated")</script>';
  }
}
?>
<link rel="stylesheet" type="text/css" href="uforgotpwd.css">
<?php
if (isset($_SESSION['auth'])) {
  $uid = $_SESSION['auth_user']['user_id'];

  $query = "SELECT * FROM userss where id='$uid'";
  $query_run = mysqli_query($con, $query);
  if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {
?>

      <form method="post" action="#">

        <h1 class="">User Profile</h1>
        <div>

          <label class="label-name">
            <input name="id" type="hidden" value="<?php echo $_SESSION['auth_user']['user_id'] ?>">
            <input type="name" name="name" placeholder="name" required value="<?php echo $row['name'] ?>" />
            <span class="required">Name</span>
          </label>
        </div>
        <div>
          <label class="label-name">
            <input type="username" name="username" placeholder="username" value="<?php echo $_SESSION['auth_user']['user_username'] ?>" disabled />
            <span class="required">username</span>
          </label>
        </div>
        <div>
          <label class="label-password">
            <input type="text" name="password" placeholder="pwd" value="<?php echo $row['password'] ?>" required />
            <span class="required">Password</span>
          </label>
        </div>


        <div>
          <label class="label-password">
            <input type="text" name="confirmpassword" placeholder="Password" value="<?php echo $row['password'] ?>" required />
            <span class="required"> Confirm Password</span>
          </label>
        </div>
        <input type="submit" name="submit" value="Save Change" />
        <div class="email">
          <p><a href="user.php">BACK</a></p>
        </div>



      </form>

<?php
    }
  }
} ?>