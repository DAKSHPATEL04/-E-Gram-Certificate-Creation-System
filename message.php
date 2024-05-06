<?php

include('config.php');

include('.\auth.php');

?>



<link href="searchbirth.css" rel="stylesheet">
<h2>Message</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
                <th>ID</th>

                <th> Name</th>
                <th>phone</th>
                <th>Message</th>
                <th>Reply</th>


            </tr>
        </thead>
        <?php
        if (isset($_SESSION['auth'])) {
            $uid = $_SESSION['auth_user']['user_id'];


            $query = "SELECT * FROM message WHERE uid='$uid'";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {


        ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?></td>
                            <td> <?php echo $row['name']; ?></td>
                            <td> <?php echo $row['pno']; ?></td>
                            <td> <?php echo $row['message']; ?></td>
                            <td> <?php echo $row['reply']; ?></td>




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