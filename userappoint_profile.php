<?php   
include 'header.php'
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

    
       
  <div class="border">          
  <?php
  include 'conn.php';
  $s_id = $_SESSION["login_id"];
  
  $query = "SELECT * from `appointview2` where `appoint_by` = '$s_id'";
  $check = mysqli_query($conn,$query);
 
  if(mysqli_num_rows($check) >0){
  while($res = mysqli_fetch_assoc($check)){
   $appoint_date =  $res['appoint_date']; 
    $day =  date('D',strtotime($appoint_date));
    
?>
<div class="content-wrapper">
    <div class="container-fluid overflow-hidden">
        <div class="row margin-tb-90px margin-lr-10px sm-mrl-0px ">

         <div class="col-lg-6 float-center margin-lr-100px">
                    <div class="background-second-color border-radius-10 margin-bottom-45px text-white box-shadow">
                        <h3 class="padding-lr-30px padding-top-20px"><i class="far fa-clock margin-right-10px">Appointment</i> </h3>
                        <div class="padding-bottom-30px">
   <ul class="padding-0px margin-0px">
                                <li class="padding-lr-30px padding-tb-10px">Name <span class="float-right text-center"><?php echo  $res['name'] ?> </span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">City <span class="float-right"><?php echo  $res['city'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Phone <span class="float-right"><?php echo  $res['number'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Gender <span class="float-right"><?php echo  $res['gender'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Address  <span class="float-right"><?php echo  $res['address'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Date-of-Birth  <span class="float-right"><?php echo  $res['dob'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Clinic  <span class="float-right"><?php echo  $res['clinic'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Doctor  <span class="float-right"><?php echo  $res['doctor'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Address  <span class="float-right"><?php echo  $res['address'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Appoint Date  <span class="float-right"><?php echo  $res['appoint_date'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Time  <span class="float-right"><?php echo  $res[$day] ?></span></li>
                            
                                <li class="padding-lr-30px padding-tb-10px ba-2 ">Action  <span class="float-right"><a href="userappoint_delete.php?id=<?php echo $res['appoint_id'] ?>"><button class="btn btn-danger">Appointment Cancel</button></a></li>
                           
                            </ul>
                    
                            </div>
                    </div>
                </div>

                </div>
                    </div>
                </div>

<?php
  }
}else{
    ?>
    
    
  <div id="page-title" class="padding-tb-30px gradient-white">
          <div class="container text-center">
              <ol class="breadcrumb opacity-5">
                  <li><a href="#">Home</a></li>
                  <li class="active">Appointment</li>
              </ol>
              <h1 class="font-weight-300">No Appointment Book</h1>
          </div>
      </div>
    <?php
  
  }  
  ?>
  
  </tbody>
</table>                     
       
</body>
</html>