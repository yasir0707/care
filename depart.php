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
    
     <div class="container margin-bottom-100px">
        <!--======= log_in_page =======-->
        <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

            <div class="form-output">
                <form method="POST" action="">
                    <div class="form-group label-floating">
                        <label class="text-center font-weight-bold">Add Depart </label>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Depart Name</label>
                        <input class="form-control" placeholder="" type="text" name="departName">
                    </div>
                    <div class="form-group label-floating">
                        <input class="btn btn-success" type="submit" name="submit" id="clck" value="Add Depart">
                    </div>


               
                </form>
            </div>
        </div>
        <!--======= // log_in_page =======-->


    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include 'conn.php';

  $query = "select * from `depart`";
  $check = mysqli_query($conn,$query);
  
  while($res = mysqli_fetch_assoc($check)){
?>
    <tr>
      <th><?php echo  $res['depart_id'] ?> </th>
      <td><?php echo  $res['depart_name'] ?></td>
      <td><a href="depart_del.php?id=<?php echo  $res['depart_id']?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
<?php
  }
  
  ?>
  
    <tr>
  </tbody>
</table>
</div>

</div>
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

if(isset($_POST['submit'])){
    $name = $_POST['departName'];
    
    $query = 	"INSERT INTO `depart` VALUES(null,'$name')";
    $check = mysqli_query($conn,$query);

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