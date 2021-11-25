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
<div class="margin-tb-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="row">
<?php

include 'conn.php';
$name = $_GET['name'];
$city = $_GET['city'];     

$query = "SELECT * from `viewdoctor3` where `depart` = '$name' and `city` = '$city'";
$check = mysqli_query($conn,$query);
if(mysqli_num_rows($check)>0){
while($res = mysqli_fetch_assoc($check)){
?>
                        <!-- Doctor -->
                        <div class="col-lg-4 col-md-6 hvr-bob margin-bottom-45px">
                            <div class="background-white box-shadow">
                                <div class="thum">
                                    <a href="userdoctor_detail.php?name=<?php echo $res['email'] ?>"><img src="<?php echo $res['image']?>" alt="" width="230" height="200"></a>
                                </div>
                                <div class="padding-30px">
                                    <span class="text-grey-2"><?php echo $res['depart'] ?></span>
                                    <h5 class="margin-tb-15px"><a class="text-dark" href="#"><?php echo $res['name'] ?></a></h5>
                                    <span class="text-grey-2"><?php echo $res['city'] ?></span>
                                   
                                    <div class="rating clearfix">
                                        <ul class="float-left">
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                        </ul>
                                    </div>
                               <a href="userappoint.php?city=<?php echo $res['city'] ?>&depart=<?php echo $res['email'] ?>"> <button mat-button class="btn btn-primary">Book Appointment</button></a>
                                </div>
                            </div>
                        </div>
                        <!-- // Doctor -->
<?php
}
}
else{
    ?>
    
    
  <div id="page-title" class="padding-tb-30px gradient-white">
          <div class="container text-center">
              <ol class="breadcrumb opacity-5">
                  <li><a href="#">Home</a></li>
                  <li class="active">Doctor</li>
              </ol>
              <h1 class="font-weight-300">No Doctor Available</h1>
          </div>
      </div>
    <?php
  
  }  
  ?>
 
        </div>
                    
                    <ul class="pagination pagination-md ">
                        <li class="page-item disabled"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
                    </ul>

                </div>
                <div class="col-lg-4">

                    <div class="background-white border-radius-10 margin-bottom-45px">
                        <div class="padding-25px">
                            <h3 class="margin-lr-20px"><i class="fas fa-search margin-right-10px text-main-color"></i> Search Filter</h3>
                            <!-- Listing Search -->
                            <div class="listing-search">
                                <form>
                                   
                                    <div class="categories dropdown margin-bottom-20px">
                                        <a class="listing-form d-block border-radius-10" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select City</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <?php
                                            include 'conn.php';

                                            $query = "select * from `city`";
                                            $check = mysqli_query($conn,$query);
  
                                             while($res = mysqli_fetch_assoc($check)){  
                                                ?>
  
                                        <a class="form-control" href="userdoctor_show1.php?name=<?php echo $name ?>&city=<?php echo $res['city_name'] ?>"><button class="dropdown-item text-up-small" type="button"><?php echo  $res['city_name'] ?></button></a>
                                    <?php
                                             }
                                    ?>    
                                    
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <!-- // Listing Search -->
                        </div>
                    </div>


                    <div class="featured-categorey">
                        <div class="row">
                            <div class="col-6 margin-bottom-30px wow fadeInUp">
                                <a href="#" class="d-block border-radius-15 hvr-float hvr-sh2">
                                    <div class="background-main-color text-white border-radius-15 padding-30px text-center opacity-hover-7">
                                        <div class="icon margin-bottom-15px opacity-7">
                                            <img src="assets/img/icon/categorie-1.png" alt="">
                                        </div>
                                        Doctors
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#" class="d-block border-radius-15 hvr-float hvr-sh2">
                                    <div class="background-main-color text-white border-radius-15 padding-30px text-center opacity-hover-7">
                                        <div class="icon margin-bottom-15px opacity-7">
                                            <img src="assets/img/icon/categorie-2.png" alt="">
                                        </div>
                                        Clinics
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 wow fadeInUp" data-wow-delay="0.4s">
                                <a href="#" class="d-block border-radius-15 hvr-float hvr-sh2">
                                    <div class="background-main-color text-white border-radius-15 padding-30px text-center opacity-hover-7">
                                        <div class="icon margin-bottom-15px">
                                            <img src="assets/img/icon/categorie-3.png" alt="">
                                        </div>
                                        Labs
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 wow fadeInUp" data-wow-delay="0.6s">
                                <a href="#" class="d-block border-radius-15 hvr-float hvr-sh2">
                                    <div class="background-main-color text-white border-radius-15 padding-30px text-center opacity-hover-7">
                                        <div class="icon margin-bottom-15px opacity-7">
                                            <img src="assets/img/icon/categorie-4.png" alt="">
                                        </div>
                                        Pharmacies
                                    </div>
                                </a>
                            </div>
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