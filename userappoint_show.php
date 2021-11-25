<?php   
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

<body >
<div class="content-wrapper">
    <div class="container-fluid overflow-hidden">
        <div class="row margin-tb-90px margin-lr-10px sm-mrl-0px">

  <div class="border">          
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Doctor</th>
      <th scope="col">Phone</th>
      <th scope="col">Appointment</th>
      <th scope="col">DOB</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php
  include 'conn.php';

  $query = "select * from `appoint`";
  $check = mysqli_query($conn,$query);
  
  if(mysqli_num_rows($check) > 0){

  while($res = mysqli_fetch_assoc($check)){
?>
    <tr>
      <th><?php echo  $res['appoint_id'] ?> </th>
      <td><?php echo  $res['name'] ?></td>
      <td><?php echo  $res['city'] ?></td>
      <td><?php echo  $res['doctor'] ?></td>
      <td><?php echo  $res['number'] ?></td>
      <td><?php echo  $res['appoint_by'] ?></td>
      <td><?php echo  $res['dob'] ?></td>
      <td><?php echo  $res['appoint_date'] ?></td>
      <td><?php echo  $res['gender'] ?></td>
      <td>   <a href="user_del.php?id=<?php echo  $res['user_id']?>"><button class="btn btn-danger">Delete</button></a>
   </td>
    </tr>
<?php
  }
}else{
  ?>
  
  
<div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <ol class="breadcrumb opacity-5">
                <li><a href="#">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
            <h1 class="font-weight-300">Contact Us</h1>
        </div>
    </div>
  <?php

}
  
  ?>
  
  </tbody>
</table>
 </div>   
        </div>
    </div>
</div>

</body>
</html>