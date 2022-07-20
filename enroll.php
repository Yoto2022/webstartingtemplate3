<?php
    $server="localhost";
    $username="root";
    $password="";
     $database="web2";

                // connect to database and form
$conn=mysqli_connect($server,$username,$password,$database);
   



if( isset($_POST[ 'submitButton'] ) )
{
    //1fetch form data
    
    
    $fullname=$_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
     $course=$_POST['course'];
            
  
  
  
                 //2submit form data




  $insertData = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
   
    VALUES('$fullname','$phonenumber','$email','$gender','$course')");
        if($insertData)
{
    $response = "Data submitted successfully .";
}

else{
    $response = "Error occurred" .mysqli_error($conn);
}


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stlesheet" href="style.css">
</head>
<body>
        <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Zalego academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbardisplaynavigations">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-link active">Home</a>
                        <a href="Aboutus.php" class="nav-link active">About us</a>
                        <a href="enroll.php" class="nav-link active">Register Now</a>
                 </div>
            </div>
          </div> 
     </nav> -->

     <main class="text-center p-5 mb-4 bg-light">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <ul style="list-style-type:none ;">
            <li>
                    <span><i class="fa fa-calendar"></i> <span>
                    <span>20th July 2022</span>
            </li>
            <li>
                    <span><i class="fa fa-map-marker"></i> <span>
                    <span>Zalego Academy<br>Devan Plaza</span>
                    </li>
        </ul>
    </main>
    <div class="row">
    <div class="col-lg-12 text-center">
        <p>Looking for a place to kickstart your career in technology? <br> Whether you're a location,new in town or just cruising through we've got <br> loads of great tips and events for you </p>
</div>
    </div>
    <div class="sign-up-card">
        <h3 class="text-center p-5">Sign Up Today</h3>
        <form action="enroll.php" method="POST">

            <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <label for="full name" class="form-label"><b>Full name:</b></label>
                    <input type="text" class="form-control" name="fullname" id="full name" placeholder="Enter your full name">
                </div>

                <div class="col-lg-6">
                    <label for="phone" class="form-label"><b>Phone number:</b></label>
                    <input type="tel" class="form-control" name="phonenumber" id="full name" placeholder="+2547...">
                </div>
          </div>
        
        
          <div class="row">
            <div class="col-lg-6">
                <label for="E-mail" class="form-label"><b>Email address:</b></label>
                <input type="email" class="form-control"  name="email"id="full name" placeholder="Enter your email">
            </div>
            
                <div class="col-lg-6">
                    <label for="gender" class="form-label"><b>What is your gender</b></label>
                    <select class="form-select" name="gender"  aria-label="Default select example">
                        <option selected>--select your gender--</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
            </div>
                <p class="mt-5">in order to complete your registration to the bootcamp you are required to select one course you will be <br> undertaking.Please NOTE that this will be your learning track during thr 2-weeks immersion
                </p>
                
                <div class="mb-5 mt-5 col-lg-6">
                    <label for="course" class="form-label"><b>What's your preffered course?</b></label>
                    <select class="form-select" name="course"  aria-label="Default select example" name="course">
                        <option value="disable selected">...select your course--</option>
                        <option value="Web design">Web design</option>
                        <option value="Web development">Web development</option>
                        <option value="Android">Android</option>
                        <option value="Game development">Game development</option>
                        <option value="Graphic design">Graphic design</option>
                        <option value="Cyber security">Cyber security</option>
                    </select>
                </div>
               
            </div>
           
         </div>
        <p>You agree by providing your information you understand all our data privacy and protection policy <br> outlined in our Terms & conditions and the Privacy Policy statements</p>
         
        <div class="form check mb-5 mt-5">
            <input class="form-check-label" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault mt-1">
                Agree terms and conditions
            </label>
        </div>
        <div class="row">
           <div class="col-lg-3">
                <button class="btn btn-primary mb-7" name="submitButton">Submit application</button>
        </div>
            </div>
            <div class="container3 col-lg-12 mb-3" style="text-align: center;">
                <p style="color:gray">Subscribe to get information,latest news about<br>Zalego Academy</p>
            </div>
            <div class="col-lg-12" style="text-align: center; margin-bottom: 3px;">
                            <input type="email" placeholder="Enter e-mail address">
                            <button class="btn btn-primary">Subscribe</button>
            </div>
            </form>  
        
            <hr>
            <footer class="align-items: center;">
                &copy;company 2022
            </footer>
         </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>