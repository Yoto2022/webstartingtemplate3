<?php
//database connection
require_once('logics/dbconnection.php');
$sqlFetchStudent = mysqli_query($conn,
   "SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");

while($FetchStudentRecords = mysqli_fetch_array($sqlFetchStudent))
{
    $no = $FetchStudentRecords['no'];
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
                                
                            <li class="list-group-item">no: <span class="float-right bg-primary"><?php echo $no ?></span></li>
                            <li class="list-group-item">fullname: <span class="float-right bg-secondary"><?php echo $fullname ?></span></li>
                           </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">
                                other information
                            </h4>                  
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            <li class="list-group-item">phonenumber: <span class="float-right bg-primary"><?php echo $phonenumber ?></span></li>   
                                <li class="list-group-item">email: <span class="float-right bg-secondary"><?php echo $email ?></span></li>
                                <li class="list-group-item">gender: <span class="float-right bg-danger"><?php echo $gender ?></span></li>
                                <li class="list-group-item">course: <span class="float-right bg-danger"><?php echo $course ?></span></li>
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