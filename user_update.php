<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en-US">

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

    <!-- // Header  -->
    <!-- <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <h1 class="font-weight-600">Care Appointment </h1>
        </div>
    </div> -->

    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <ol class="breadcrumb opacity-5">
                <li><a href="#">Home</a></li>
                <li class="active">Update</li>
            </ol>
            <h1 class="font-weight-300">Update User</h1>
        </div>
    </div>

    <div class="container margin-bottom-100px">
        <!--======= log_in_page =======-->
        <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

            <div class="form-output">

                <form method="POST">
                <div class="form-group label-floating">
                        <label class="control-label">Your Name</label>
                        <input class="form-control" placeholder="" type="text" name="uname" >
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Your Number</label>
                        <input class="form-control" placeholder="" type="number" name="numb" >
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Address</label>
                        <input class="form-control" placeholder="" type="text" name="address">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Date-of-Birth</label>
                        <input class="form-control" placeholder="" type="date" name="dob" max="<?php echo date("Y-m-d")?>">
                    </div>


                    <div class="remember">
                    </div>

                    <div class="form-group label-floating">
                        <input class="form-control btn btn-success" placeholder="" type="submit" name="submit" value="submit">            
                        
                    </div>
              </form>

            </div>
        </div>
        <!--======= // log_in_page =======-->

    </div>

    <script  src="assets/js/sticky-sidebar.js"></script>
    <script  src="assets/js/YouTubePopUp.jquery.js"></script>
    <script  src="assets/js/owl.carousel.min.js"></script>
    <script  src="assets/js/imagesloaded.min.js"></script>
    <script  src="assets/js/wow.min.js"></script>
    <script  src="assets/js/custom.js"></script>
    <script  src="assets/js/popper.min.js"></script>
    <script  src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php
include 'conn.php';
$s_id = $_SESSION["login_id"];
      
if(isset($_POST['submit'])){
    $name= $_POST['uname'];
    $numb= $_POST['numb'];
    $address= $_POST['address'];
    $dob= $_POST['dob'];

   
if($name != null  and $address != null and $dob != null){    

    if($pass == $cpass){
        $query = 	"UPDATE `user` SET `name`='$name',`phone`='$numb',`address`='$address',`dob`='$dob' WHERE `email`= '$s_id'";
       
        $check = mysqli_query($conn,$query);

        if($check){
            ?>
                    <script>
                      alert("Update success");  
                      </script>
            <?php
                }
                else{
                   ?>
                    <script>
                      alert("Update failed");  
                      </script>
                <?php
                }
            
      
}
}
else{
    ?>
    <script>
      alert('All Field is Required!!');  
      </script>
<?php
}
    
}
?>