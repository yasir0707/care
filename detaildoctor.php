<?php   
session_start();
include 'doctor_dash.php'
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

<body >
    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <h1 class="font-weight-30">Add Detail Doctor</h1>
        </div>
    </div>

<div class="content-wrapper">
        <div class="container-fluid overflow-hidden">
            <div class="row margin-tb-9px margin-lr-10px md-mrl-0px">
            
            <div class="container margin-bottom-100px">
       
            <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

<div class="form-output">

    <form method="POST" enctype="multipart/form-data">
        
    <div class="form-group label-floating">
            <label class="control-label">Clinic Name</label>
            <input class="form-control" placeholder="" type="text" name="uname">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Address</label>
            <input class="form-control" placeholder="" type="text" name="address">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Description</label>
            <input class="form-control" placeholder="" type="text" name="desc">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Image</label>
            <input class="form-control" placeholder="" type="file" name="image">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Monday</label>
            <input class="form-control" placeholder="" type="text" name="mon">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Tuesday</label>
            <input class="form-control" placeholder="" type="text" name="tues">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Wednesday</label>
            <input class="form-control" placeholder="" type="text" name="wed">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Thursday</label>
            <input class="form-control" placeholder="" type="text" name="thur">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Friday</label>
            <input class="form-control" placeholder="" type="text" name="fri">
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Saturday</label>
            <input class="form-control" placeholder="" type="text" name="sat">
        </div>
           
        <div class="form-group label-floating">
            <label class="control-label">Sunday</label>
            <input class="form-control" placeholder="" type="text" name="sun">
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
$login_id = $_SESSION["login_id"];
        
if(isset($_POST['submit'])){
    $name = $_POST['uname'];
    $address = $_POST['address'];
    $img = $_FILES['image']['name'];
    $desc = $_POST['desc'];
    $mon = $_POST['mon'];
    $tues = $_POST['tues'];
    $wed = $_POST['wed'];
    $thur = $_POST['thur'];
    $fri = $_POST['fri'];
    $sat = $_POST['sat'];
    $sun = $_POST['sun'];

    $target ="images/".time().".jpg";

    $query = "INSERT INTO  `deataildoctor` Values(null,'$login_id','$name','$address','$target','$desc','$mon','$tues','$wed','$thur','$fri','$sat','$sun')";

    $check = mysqli_query($conn,$query);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    
    if($check){
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


?>
