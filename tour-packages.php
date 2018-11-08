<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <meta name="description" content="Round Tour Sri Lanka is the best Way for the gusts who looking extraordinary travel experience with perfectly match their desires">
        <meta name="keywords" content="Round Tour Sri Lanka Tour Packages, Tour Packages<?php foreach (TourPackage::all() as $AllTour) {   ?><?php echo ","; echo $AllTour['title']; ?> <?php }?>. ">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tour Packages||Round Tour Sri Lanka</title>
        <!-- Google Fonts Includes -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favi icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo2.png">
              <!-- bootstrap v3.3.6 css -->
              <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Button Hover animate css -->
        <link rel="stylesheet" href="css/hover-min.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- slick css -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/chosen.min.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/jquery-customselect.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- magnific Css -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!--lightbox css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.1/ekko-lightbox.min.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style> 
            @media only screen and (max-width: 768px) {
                .header-bottom-area .logo-area {
                    margin-top: -34px;
                    position: absolute;
                }
            }

            .single-package-carasoul{
                margin-bottom: 25px;
            }
        </style>

    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>	 
        <!-- header area start here -->
        <?php
        include './header.php';
        ?>
        <!-- header area end here -->

        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/bercums/package1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Tour Packages</h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li class="active">Tour Packages</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->

        <!-- popular destination strat -->
        <section class="blog-contents-version-one pt-100 pb-70 pt-70 popular-packages">
            <div class="container">
                <div class="row">
                    <!-- single package -->
                    <?php
                    foreach (TourPackage::all() as $AllTour) {
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-package-carasoul">
                                <div class="package-location">
                                    <img src="upload/tour-package/<?php echo $AllTour['image_name']; ?>" alt="">
                                    <span>
    <?php echo $AllTour['price']; ?>$
                                    </span>
                                </div>
                                <div class="package-details">
                                    <div class="package-places">
                                        <a href="view-tour-packages.php?id=<?php echo $AllTour['id']; ?>">
                                            <h4>
                                                <?php
                                                if (strlen($AllTour['title']) > 23) {
                                                    echo substr($AllTour['title'], 0, 20) . '...';
                                                } else {
                                                    echo $AllTour['title'];
                                                }
                                                ?>


                                            </h4>
                                        </a>    
                                        <!--<span> <i class="fa fa-clock-o"></i> 4Days, 5Nights Stay</span>-->
                                        <div class="details">
                                            <p> <?php
                                                if (strlen($AllTour['short_description']) > 64) {
                                                    echo substr($AllTour['short_description'], 0, 66) . '...';
                                                } else {
                                                    echo $AllTour['short_description'];
                                                }
                                                ?>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="package-ratings-review">
                                        <ul class="two-column">
                                            <li>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <p>(27 Reviews)</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="package-long-btn hvr-shutter-out-horizontal btntourpack">

                                    <a href="view-tour-packages.php?id=<?php echo $AllTour['id']; ?>">View</a>

                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                    <!--End single package -->


                </div>             
            </div>
        </section><!-- single popular destination  end-->

        <!-- footer start here -->
        <?php
        include './footer.php';
        ?>
        <!-- end footer -->

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div> <!--End Scroll to top-->

        <!-- ============================
                JavaScript Files
        ============================= -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.2.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- slick js -->
        <script src="js/slick.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- counter js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- waypoints js -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- magnific js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Image loaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- chossen js -->
        <script src="js/chosen.jquery.min.js"></script>   
        <!-- Jquery plugin -->
        <script src="js/plugins.js"></script>
        <!-- select2 js plugin -->
        <script src="js/select2.min.js"></script>    
        <script src="js/colors.js"></script>
        <!-- Jquery plugin -->
        <script src="js/jquery-customselect.js"></script>
        <!-- main js -->
        <script src="js/custom.js"></script>
    </body>
</html>
