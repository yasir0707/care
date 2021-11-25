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
    <!-- admin style -->
    <link rel="stylesheet" href="assets/css/sb-admin.css">
    <!-- jquery library  -->
    <script  src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- fontawesome  -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


</head>

<body>
    
<header class="background-white box-shadow fixed-top z-index-99">
        <nav class="container-fluid header-in">
            <div class="row">
                <div class="col-xl-2 col-lg-2">
                    <a id="logo" href="index.html" class="d-inline-block margin-tb-15px"><img src="assets/img/logo-1.png" alt=""></a>
                    <a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a>
                </div>
                <div class="col-xl-6 col-lg-8 position-inherit">
       
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <hr class="margin-bottom-0px d-block d-sm-none">
                    <a href="admin_login.php" class="btn btn-sm border-radius-30 margin-tb-15px text-white background-second-color  box-shadow float-right padding-lr-25px margin-left-30px"><i class="fas fa-plus-circle  margin-right-7px"></i>  Logout</a>

                    <div class="nav-item dropdown float-left">
        
   </div>

                    <div class="nav-item float-left">
                      </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- // Header  -->


    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark z-index-9  fixed-top" id="mainNav">

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav navbar-sidenav background-main-color admin-nav" id="admin-nav">
                <li class="nav-item">
                    <span class="nav-title-text">Main</span>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link " href="dashboard-home.html">
                        <i class="fas fa-fw fa-home"></i><span class="nav-link-text">
                        <?php
                            // session_start();
                            $s_id = $_SESSION["login_id"];
                            if($s_id == null){
                                header('location:admin_login.php');
                        
                            }
                                else{

                                
                           ?>
                        <a  class="nav-link"><span class="nav-link-text"><?php echo $s_id ?></span></a>
                       
                           <?php
                           }
                           ?>  

                        </span>
                    </a>
                </li>
               
               <?php
               include 'conn.php';

                   $query = "SELECT  * from `deataildoctor` where `doctor`= '$s_id' ";
                   $check = mysqli_query($conn,$query);
                   
                   if(mysqli_num_rows($check) > 0){
                       ?>

<li class="nav-item" data-toggle="tooltip" data-placement="right" title="My items">
                    <a class="nav-link" href="doctorprofile_show.php">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Show profile</span>
              </a>
                </li>   
                       <?php
                   }
                   else{
                    ?>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My items">
                                  <a class="nav-link" href="detaildoctor.php">
                              <i class="fa fa-fw fa-table"></i>
                              <span class="nav-link-text">Add Detail</span>
                            </a>
                              </li>
                            
              
                                     <?php
                   }

               ?>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My Favorites">
                    <a class="nav-link" href="doctor_appoint.php">
                <i class="fa fa-fw fa-heart"></i>
                <span class="nav-link-text">Show Appointment</span>
              </a>
                </li>
              
            </ul>




        </div>
    </nav>
</body>
</html> 
