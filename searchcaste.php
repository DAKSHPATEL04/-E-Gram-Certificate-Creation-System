<?php

include('config.php');

include('./auth.php');

?>



<link href="searchbirth.css" rel="stylesheet">
<h2> Caste Certificate</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
                <th>ID</th>

                <th>NAME</th>

                <th>ACTION</th>
            </tr>
        </thead>
        <?php
        if (isset($_SESSION['auth'])) {
            $uid = $_SESSION['auth_user']['user_id'];


            $query = "SELECT * FROM caste WHERE uid='$uid'";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {


        ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['name']; ?></td>


                            <td><a href="services/castshow.php?t_id=<?php echo $row['id']; ?>" class="btn-btn-primary">View</a></td>
                        </tr>
            <?php
                }
            }
        }
            ?>
                    <tbody>
    </table>
    <a href="user.php" type="submit" class=" btn btn-primary">BACK</a>
</div>