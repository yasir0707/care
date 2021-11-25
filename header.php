<?php
session_start();
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
    
<header class="background-white box-shadow">
        <div class="container header-in">

                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <a id="logo" href="home.php" class="d-inline-block margin-tb-15px"><img src="assets/img/logo-1.png" alt=""></a>
                        <a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a>
                    </div>
                    <div class="col-lg-3 col-md-12 position-inherit">
                        <ul id="menu-main" class="nav-menu float-lg-right link-padding-tb-20px">
                            <li class="has-dropdown"><a href="home.php">Home</a> </li>
                            <li class="has-dropdown"><a href="#">Depart</a>
                                <ul class="sub-menu">
                            <?php
                                include 'conn.php';

                                $query = "select * from `depart`";
                                $check = mysqli_query($conn,$query);
                                
                                while($res = mysqli_fetch_assoc($check)){
                              
                                ?>
                                
                                <li><a href="userdoctor_show.php?name=<?php echo $res['depart_name'] ?>"><?php echo  $res['depart_name'] ?> </a></li>
                            <?php
                                }
                            ?>   
                            </ul>
                            </li>
                            <li><a href="contact.php">Conact Us</a></li>
                            <li>
                        </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-12">
                    <?php
                            // session_start();
                            $s_id = $_SESSION["login_id"];
                            if($s_id == null){

                        ?>
                        <a href="admin_login.php" class="margin-tb-20px d-inline-block text-up-small float-left float-lg-right"><i class="far fa-user"></i>  Login</a>
                           <?php
                            }
                                else{

                                
                           ?>
                        <a href="user_profile.php" class="margin-tb-20px d-inline-block text-up-small float-left float-lg-right"><i class="far fa-user"></i><?php echo $s_id ?></a>
                       
                           <?php
                           }
                           ?>     


     

                </div>
                <div class="col-lg-2 col-md-12">
                        <hr class="margin-bottom-0px d-block d-sm-none">
                        <a href="userappoint_profile.php" class="btn btn-sm border-radius-30 margin-tb-15px text-white bg-success  box-shadow float-right padding-lr-20px margin-left-30px">
                          <i class="fas fa-plus-circle"></i>  Show_Appoint
                        </a>
                    </div>
                
                
                    <div class="col-lg-2 col-md-12">
                        <hr class="margin-bottom-0px d-block d-sm-none">
                        <a href="logout.php" class="btn btn-sm border-radius-30 margin-tb-15px text-white background-second-color  box-shadow float-right padding-lr-20px margin-left-30px">
                          <i class="fas fa-plus-circle"></i>  Logout
                        </a>
                    </div>
                
                
                </div>


                </div>
                    
        </div>
    </header>
    <!-- // Header  -->

</body>
</html>