<?php
include 'header.php';
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
<section class="banner padding-tb-200px sm-ptb-80px background-overlay" style="background-image: url('bg.jpg');">
        <div class="container z-index-2 position-relative">
            <div class="title">
                <h1 class="text-title-large text-main-color font-weight-300 margin-bottom-15px">Health Directory</h1>
                <h4 class="font-weight-300 text-main-color text-up-small">A better Doctors , Clinics &amp; Labs . We'll help you find it</h4>
            </div>
            <div class="row margin-tb-60px">
                <div class="col-lg-8">
                    <div class="listing-search">
                        <form class="row no-gutters" method="GET" action="userdoctor_show1.php">
                            <div class="col-md-3">
                            <select class="selectpicker form-control listing-form" name="city">
					
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
                            <div class="col-md-3 ">
                            <select class="selectpicker form-control listing-form" name="name">
					
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
                            <div class="col-md-3">
                                <input class="listing-bottom background-second-color box-shadow"  value="Search" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">   
                <div class="col-lg-12">
                    <div class="row">
                    
  <?php
  include 'conn.php';

  $query = "select * from `depart`";
  $check = mysqli_query($conn,$query);
  
  while($res = mysqli_fetch_assoc($check)){
?>
                        <div class="col-md-3 col-6 sm-mb-30px wow fadeInUp p-3"  data-wow-delay="0.2s">
                            <a href="userdoctor_show.php?name=<?php echo $res['depart_name'] ?>" class="d-block border-radius-15 hvr-float hvr-sh2">
                                <div class="background-main-color text-white border-radius-15 padding-20px text-center opacity-hover-7">
                                    <div class="icon margin-bottom-15px opacity-7">
                                        <img src="assets/img/icon/categorie-1.png" alt="">
                                    </div>
                                    <?php echo  $res['depart_name'] ?>
                                </div>
                            </a>
                        </div>
<?php
  }
  
  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

<?php
include 'footer.php';
?>