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
  
  <tbody>
  <?php
  include 'conn.php';

  $query = "select * from `viewdoctor3`";
  $check = mysqli_query($conn,$query);
  
  while($res = mysqli_fetch_assoc($check)){
?>
<thead>
    <tr>
      <th scope="col">Clinic</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Depart</th>
      <th scope="col">Address</th>
      <th scope="col">Description</th>
      <th scope="col">Iamge</th>
  
    </tr>
  </thead>
    <tr>
      <th><?php echo  $res['clinic'] ?> </th>
      <td><?php echo  $res['name'] ?></td>
      <td><?php echo  $res['email'] ?></td>
      <td><?php echo  $res['gender'] ?></td>
      <td><?php echo  $res['depart'] ?></td>
      <td><?php echo  $res['address'] ?></td>
      <td><?php echo  $res['description'] ?></td>
      <td><img src="<?php echo  $res['image'] ?>" width="50" height="40" /></td>
 
    </tr>
    
  <thead>
    <tr>
      <th scope="col">Monday</th>
      <th scope="col">Tuesday</th>
      <th scope="col">Wednesday</th>
      <th scope="col">Thursday</th>
      <th scope="col">Friday</th>
      <th scope="col">Saturday</th>
      <th scope="col">Sunday</th>
      <th scope="col">Action</th>
   
    </tr>
  </thead>
    <tr>
      <td><?php echo  $res['Mon'] ?></td>
      <td><?php echo  $res['Tue'] ?></td>
      <td><?php echo  $res['Wed'] ?></td>
      <td><?php echo  $res['Thu'] ?></td>
      <td><?php echo  $res['Fri'] ?></td>
      <td><?php echo  $res['Sat'] ?></td>
      <td><?php echo  $res['Sun'] ?></td>
      
      <td>
      <a href="detaildoctor_update.php?email=<?php echo  $res['email']?>"><button class="btn btn-primary">Update</button></a>
    </td>
    
    <br><br>
    </tr>
<?php
  }
  
  ?>
  
  </tbody>
</table>   
        </div>
    </div>
</div>

</body>
</html>