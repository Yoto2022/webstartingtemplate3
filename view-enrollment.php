<?php
//database connection
require_once('logics/dbconnection.php');
$sqlFetchStudent = mysqli_query($conn,
   "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($FetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
{
    $fullname = $FetchStudentRecords['fullname'];
    $phonenumber = $FetchStudentRecords['phonenumber'];
    $email = $FetchStudentRecords['email'];
    $gender = $FetchStudentRecords['gender'];
    $course = $FetchStudentRecords['course'];
    $created_at = $FetchStudentRecords['created_at'];
}   

?>

<!DOCTYPE html>
<html>
 <?php require_once("includes/headers.php") ?> 
<body>
	<!-- All our code. write here   -->
	<?php require_once("includes/navbar.php") ?>
	<div class="sidebar">
	<?php require_once("includes/sidebar.php") ?>
	</div>
	<div class="maincontent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">
                                Personal Information
                            </h4>                  
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full Name: <span class="float-right bg-primary"><?php echo $fullname ?></span></li>
                                <li class="list-group-item">Email: <span class="float-right bg-secondary"><?php echo $phonenumber ?></span></li>
                                <li class="list-group-item">Phone Number: <span class="float-right bg-danger"><?php echo $email ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">
                                Personal Information
                            </h4>                  
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Gender: <span class="float-right bg-primary"><?php echo $gender ?></span></li>
                                <li class="list-group-item">course: <span class="float-right bg-secondary"><?php echo $course ?></span></li>
                                <li class="list-group-item">created_at: <span class="float-right bg-danger"><?php echo $created_at ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

	
    <?php require_once("includes/scripts.php") ?>
</body>
</html>