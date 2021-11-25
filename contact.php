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
<div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-center">
            <ol class="breadcrumb opacity-5">
                <li><a href="#">Home</a></li>
                <li class="active">Contact Us</li>
            </ol>
            <h1 class="font-weight-300">Contact Us</h1>
        </div>
    </div>


    <div class="container margin-top-50px margin-bottom-100px">
        <div class="row">
            <div class="col-lg-6">

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

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <p class="text-grey-2">Mauris fermentum porta sem, non hendrerit enim bibendum consectetur. Fusce diam est, porttitor vehicula gravida at, accumsan bibendum tincidunt imperdiet. Maecenas quis magna faucibus, varius ante sit amet, varius augue. </p>
                    </div>
                    <div class="col-lg-6 col-md-6 margin-bottom-45px">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_mail_alt icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Email</h6>
                            <h5 class="font-2 ">info@care.com</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 margin-bottom-45px">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_map_alt icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Address</h6>
                            <h5 class="font-2 ">Gulshan, Karachi<r/h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 sm-mb-30px">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_link icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Website</h6>
                            <h5 class="font-2">www.care.com</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="background-white text-center padding-30px box-shadow border-radius-10">
                            <i class="icon_phone icon-large text-grey-2"></i>
                            <h6 class="font-weight-300 margin-top-15px">Telphone</h6>
                            <h5 class="font-2">+222 123 3019</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>

    
</body>
</html>

<?php
include 'footer.php'
?>