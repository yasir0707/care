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
<!-- // Header  -->

<div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container">
            <ol class="breadcrumb opacity-5">
                <li><a href="#">Home</a></li>
                <li><a href="#">Doctor</a></li>
                <?php

include 'conn.php';
$name = $_GET['name'];

$query = "SELECT * from `viewdoctor3` where `email` = '$name'";
$check = mysqli_query($conn,$query);

while($res = mysqli_fetch_assoc($check)){
?>
                <li class="active"><?php echo $res['name'] ?></li>
            </ol>
            <h1 class="font-weight-300"><?php echo $res['name'] ?></h1>
        </div>
    </div>


    <?php
}
?>
    <div class="margin-tb-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <?php

include 'conn.php';
$name = $_GET['name'];

$query = "SELECT * from `viewdoctor3` where `email` = '$name'";
$check = mysqli_query($conn,$query);

while($res = mysqli_fetch_assoc($check)){
?>
                    <div class="margin-bottom-30px box-shadow">
                        <img src="<?php echo $res['image'] ?>" alt="">
                        <div class="padding-30px background-white">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="rating clearfix">
                                        <span class="float-left text-grey-2"><i class="far fa-map"></i> <?php echo $res['city'] ?> </span>
                                        <ul class="float-right">
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row no-gutters">
                                        <div class="col-4"><a href="#" class="text-lime"><i class="far fa-bookmark"></i> Open Now!</a></div>
                                        <div class="col-4 text-center"><a href="#" class="text-red"><i class="far fa-heart"></i> Save</a></div>
                                        <div class="col-4 text-right"><a href="#" class="text-blue"><i class="far fa-hospital"></i> Hospital</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="margin-bottom-30px box-shadow">
                        <div class="padding-30px background-white">
                            <h3><i class="far fa-hospital margin-right-10px text-main-color"></i> About Clinic</h3>
                            <hr>
                            <p class="text-grey-2"><?php echo $res['description'] ?>  </p>
                        </div>
                    </div>

                    <div class="margin-bottom-30px box-shadow">
                        <div class="padding-30px background-white">
                            <h3><i class="far fa-map margin-right-10px text-main-color"></i> Clinic Location</h3>
                            <hr>
                            <div class="map-distributors-in">
                                <div id="map-distributors">

                                    <script >
                                        $(function() {
                                            $("#map-distributors").goMap({
                                                zoom: 6,
                                                maptype: 'ROADMAP',
                                                markers: [

                                                    {
                                                        address: '37.822350, -113.558284',
                                                        icon: 'assets/img/icon_marker_1.png',
                                                        html: '<div class="background-white width-250px"><div class="padding-top-50px padding-lr-20px"> <div class="z-index-2 position-relative"> <h5 class="margin-bottom-20px"><a class="text-dark" href="#">Alrayan Eye Clinic</a></h5> <div class="rating clearfix"> <span class="float-left text-grey-2"><i class="far fa-map"></i> California</span> <ul class="float-right"> <li class="active"></li> <li class="active"></li> <li class="active"></li> <li class="active"></li> <li></li> </ul> </div> </div> </div> </div> </div>'
                                                    },



                                                ],
                                                hideByClick: true
                                            });
                                            $("#default").click(function() {
                                                $("#dump").html($.dump($.goMap.getMarkers()));
                                            });
                                            $("#clearall").click(function() {
                                                $.goMap.clearMarkers();
                                            });
                                            $("#json").click(function() {
                                                $("#dump").html($.goMap.getMarkers("json"));
                                            });
                                            $("#data").click(function() {
                                                $("#dump").html($.goMap.getMarkers("data"));
                                            });

                                            $('.gm-style-iw').parent().css('width', 'auto');


                                        });

                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="margin-bottom-30px box-shadow">
                    </div>

              
                </div>
                <div class="col-lg-4">
                    <div class="background-second-color border-radius-10 margin-bottom-45px text-white box-shadow">
                        <h3 class="padding-lr-30px padding-top-20px"><i class="far fa-clock margin-right-10px"></i> Work Time</h3>
                        <div class="padding-bottom-30px">
                            <ul class="padding-0px margin-0px">
                                <li class="padding-lr-30px padding-tb-10px">Monday <span class="float-right"><?php echo $res['Mon'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Tuesday <span class="float-right"><?php echo $res['Tue'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Wednesday <span class="float-right"><?php echo $res['Wed'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Thursday <span class="float-right"><?php echo $res['Thu'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Friday  <span class="float-right"><?php echo $res['Fri'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px ba-2">Saturday  <span class="float-right"><?php echo $res['Sat'] ?></span></li>
                                <li class="padding-lr-30px padding-tb-10px">Sunday    <span class="float-right"><?php echo $res['Sun'] ?></span></li>
                            </ul>
                        </div>
                    </div>

     
<?php
}
?>
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

        </div>
                    
</body>
</html>

<?php
include 'footer.php'
?>