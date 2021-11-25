<?php

session_start();
include 'admin_dash.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabib HTML5 Health Directory Template</title>
    <meta name="author" content="Nile-Theme">
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="directory, doctor, doctor directory, Health directory, listing, map, medical, medical directory, professional directory, reservation, reviews">
    <meta name="description" content="Health Care & Medical Services Directory">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800%7CPoppins:300i,300,400,700,400i,500%7CDancing+Script:700%7CDancing+Script:700" rel="stylesheet">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- owl Carousel assets -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- hover anmation -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- flag icon -->
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- colors -->
    <link rel="stylesheet" href="assets/css/colors/main.css">
    <!-- elegant icon -->
    <link rel="stylesheet" href="assets/css/elegant_icon.css">

    <!-- jquery library  -->
    <script  src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Maps library  -->
    <script  src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script  src="assets/js/jquery.gomap-1.3.3.min.js"></script>

    <!-- fontawesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>
<body>
<div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <h1 class="font-weight-30">Add Doctor</h1>
        </div>
    </div>

<div class="content-wrapper">
    <div class="container-fluid overflow-hidden">
        <div class="row margin-tb-px margin-lr-10px sm-mrl-0px">
    
    
        <div class="container margin-bottom-100px">
        <!--======= log_in_page =======-->
        <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

            <div class="form-output">

                <form method="POST">
                    
                <div class="form-group label-floating">
                        <label class="control-label">Name</label>
                        <input class="form-control" placeholder="" type="text" name="uname">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Email</label>
                        <input class="form-control" placeholder="" type="email" name="email">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Your Password</label>
                        <input class="form-control" placeholder="" type="password" name="pass">
                    </div>


                    <div class="form-group label-floating is-select">
                        <label class="control-label">Gender</label>
                        <select class="selectpicker form-control" name="gender">
						<option  name="Male">Male</option>
						<option  name="Female">Female</option>
					</select>
                    </div>
                    
                    
                    <div class="form-group label-floating is-select">
                        <label class="control-label">City</label>
                        <select class="selectpicker form-control" name="city">
					
                        <?php
  include 'conn.php';

  $query = "select * from `city`";
  $check = mysqli_query($conn,$query);
  
  while($res = mysqli_fetch_assoc($check)){
?>

                    	<option><?php echo $res['city_name'] ?></option>
				
<?php
  }
?>
	</select>
</div>

            <div class="form-group label-floating is-select">
                        <label class="control-label">Depart</label>
                        <select class="selectpicker form-control" name="depart">
					
                        <?php
                    include 'conn.php';

  $query = "select * from `depart`";
  $check = mysqli_query($conn,$query);
  
  while($res = mysqli_fetch_assoc($check)){
?>

                    	<option><?php echo $res['depart_name'] ?></option>
				
<?php
  }
?>
	</select>
</div>
<div class="form-group label-floating">
                        <input class="btn btn-success" type="submit" name="submit">
                    </div>

           
                </form>
            </div>
        </div>
        <!--======= // log_in_page =======-->

    </div>

        </div>
    </div>
</div>

</body>
</html>
<?php

include 'conn.php';
if(isset($_POST['submit'])){
   
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $depart = $_POST['depart'];

    $q = "SELECT * from `login` where `email` = '$email'";
    $checkq = mysqli_query($conn,$q);
    if(mysqli_num_rows($checkq)>0){
        ?>
        <script>
          alert("Already Register");  
          </script>
<?php
    }
else{

    $query = 	"INSERT INTO `doctor` VALUES(null,'$name','$email','$pass','$gender','$depart','$city')";
    $LoginQuery = "INSERT INTO `login` values(null,'$email','$pass',2)";
   
    $check = mysqli_query($conn,$query);
    $Logincheck = mysqli_query($conn,$LoginQuery);

    if($check && $Logincheck){
?>
        <script>
          alert("Add success");  
          </script>
<?php
    }
    else{
       ?>
        <script>
          alert("Add failed");  
          </script>
    <?php
    }

    }
}

?>