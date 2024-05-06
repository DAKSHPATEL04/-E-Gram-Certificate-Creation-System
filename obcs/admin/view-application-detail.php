<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['obcsaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
  {
    $vid=$_POST['id'];
    $name=$_POST['name'];
    $fname=$_POST['fname'];
   $mname=$_POST['mname'];
   $date=$_POST['date'];
    $place=$_POST['place'];
     $religion=$_POST['religion'];
     $gender=$_POST['gender'];
     $Remark=$_POST['Remark'];
     $Status=$_POST['Status'];

$sql= "UPDATE birth SET name='$name',fname='$fname', mname='$mname', date='$date',place='$place', religion='$religion', gender='$gender',Remark='$Remark',Status='$Status' WHERE id='$vid'";
$query=$dbh->prepare($sql);


 $query->execute();

  echo '<script>alert("Remark has been updated")</script>';
 echo "<script>window.location.href ='all-birth-application.php'</script>";
}


  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Manage Application Form | Online Birth Certificate System</title>
  
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- charts CSS
		============================================ -->
    <link rel="stylesheet" href="css/c3.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
  
    <div class="wrapper-pro">
      <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
       
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Application Form</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->

            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>View <span class="table-project-n">Detail of</span> Application</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                       
                                         <?php
                               $vid=$_GET['viewid'];

$sql="SELECT * FROM birth WHERE id=:vid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':vid', $vid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                <table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Application Details</td></tr>
<tr align="center">
<td colspan="4" style="font-size:20px;color:red">
 Application Number:   <?php  echo $row->id;?></td></tr>
   
 
<tr align="center">

 <tr>
    <th scope>Full Name</th>
    <td><?php  echo $row->name;?></td>
    <th scope>Gender</th>
    <td><?php  echo $row->gender;?></td>
  </tr>
   <tr>
    <th scope>Date of Birth</th>
    <td><?php  echo $row->date;?></td>
    <th scope>Place of Birth</th>
    <td><?php  echo $row->place;?></td>
  </tr>
  <tr>
    <th scope>Name of Father</th>
    <td><?php  echo $row->fname;?></td>
    <th scope>Religion</th>
    <td><?php  echo $row->religion  ;?></td>
  </tr>
     <tr>
    <th scope>Name of Mother</th>
    <td><?php  echo $row->mname;?></td>
    <th scope>Date of apply</th>
    <td><?php  echo $row->Dateofapply;?></td>
  </tr>
  <tr>
    
    <th>Order Final Status</th>

   <td> <?php  
   
if($row->Status=="Verified")
{
 echo "Your application has been verified";
}

if($row->Status=="Rejected")
{
echo "Your application has been cancelled";
}


if($row->Status=="")
{
 echo "Pending";
}


    ;?></td>
    <th >Admin Remark</th>
   <?php if($row->Status==""){ ?>

                    <td><?php echo "Your application has still pending"; ?></td>
<?php } else { ?>                  <td><?php  echo htmlentities($row->Status);?>
                 </td>
                 <?php } ?>
 </tr>
   
 
    
 
  <?php $cnt=$cnt+1;}} ?>
</table>
<?php 

if ($status==""){
?> 
<p align="center"  style="padding-top: 20px">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  

<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                <form method="post" name="submit">

                                
                               
    <tr>
    <th>ID:</th>
    <td>
    <input name="id" placeholder="Remark"  value="<?php  echo $row->id;?>"rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr>                       
     <tr>
    <th> Full Name:</th>
    <td>
    <input name="name" placeholder="Remark" value="<?php  echo $row->name;?>"rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr> 
   <tr>
    <th>Name Of Father:</th>
    <td>
    <input name="fname" placeholder="Remark" value="<?php  echo $row->fname;?>" rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr> 
  
   
    <tr>
    <th>Name Of Mother :</th>
    <td>
    <input name="mname" placeholder="Remark"  value="<?php  echo $row->mname;?>"rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr> 
    <tr>
    <th>Birth Date :</th>
    <td>
    <input name="date" dateholder="Remark" value="<?php  echo $row->date;?>" rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr> 
    <tr>
    <th>Birth Place :</th>
    <td>
    <input name="place" placeholder="Remark"  value="<?php  echo $row->place;?>"rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr> 
    <tr>
    <th>Religion :</th>
    <td>
    <input name="religion" placeholder="Remark" rows="12" cols="14" value="<?php  echo $row->religion;?>" class="form-control wd-450" required="true"></td>
  </tr>     
  <tr>
    <th>Gender :</th>
    <td>
    <input name="gender" placeholder="Remark" rows="12" cols="14" value="<?php  echo $row->gender;?>" class="form-control wd-450" required="true"></td>
  </tr> 
  <tr>
    <th>Remark :</th>
    <td>
    <input name="Remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></td>
  </tr>  
  <tr>
    <th>Status :</th>
    <td>

   <select name="Status" class="form-control wd-450" required="true" >
     <option value="Verified" selected="true">Verified</option>
     <option value="Rejected">Rejected</option>
   </select></td>
  </tr>             
   
 
 
</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
  </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
        </div>
    </div>
  <?php include_once('includes/footer.php');?>
   
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>


</body>

</html><?php }  ?>
