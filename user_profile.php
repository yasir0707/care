<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="content-wrapper">
    <div class="container-fluid overflow-hidden">
        <div class="row margin-tb-90px margin-lr-10px sm-mrl-0px ">
    
                <div class="col-lg-6 float-center margin-lr-100px">
                    <div class="background-second-color border-radius-10 margin-bottom-45px text-white box-shadow">
                        <h3 class="padding-lr-30px padding-top-20px"><i class="far fa-clock margin-right-10px"></i> </h3>
                        <div class="padding-bottom-30px">
  <?php
include 'conn.php';
$s_id = $_SESSION["login_id"];

  $query = "SELECT * from `user` where `email`='$s_id'";
  $check = mysqli_query($conn,$query);
  
  while($res = mysqli_fetch_array($check)){ 
?> 
                        <ul class="padding-0px margin-0px">
                                <li class="padding-lr-30px padding-tb-10px">Name <span class="float-right text-center"><?php echo  $res['name'] ?> </span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Email <span class="float-right"><?php echo  $res['email'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Phone <span class="float-right"><?php echo  $res['phone'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Gender <span class="float-right"><?php echo  $res['gender'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Address  <span class="float-right"><?php echo  $res['address'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Date-of-Birth  <span class="float-right"><?php echo  $res['dob'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ">Action  <span class="float-right"><a href="user_update.php"><button class="btn btn-success">Update</button></a></li>
                           
                            </ul>
                            <?php
  }
  
  ?>
                        </div>
                    </div>
                </div>

                </div>
                    </div>
                </div>

</body>
</html>
<?php
include 'footer.php'
?>