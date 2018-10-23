<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$TOUR = new TourPackage($id);
//$tour_dates = TourDate::getTourDatesById($id);
//$tour_dates =new TourDate($id)
$tour_dates = TourDate::getTourDatesById($id);
?>
<!--dd($TOUR);-->

<!DOCTYPE html>
<html class="" lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $TOUR->title; ?></title>
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
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="css/assets/revolution/layers.css">
        <link rel="stylesheet" href="css/assets/revolution/navigation.css">
        <link rel="stylesheet" href="css/assets/revolution/settings.css">
        <link href="OwlCarousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="OwlCarousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <!--fancybox css-->
        <link href="fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>

        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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

        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/bercums/package1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2><?php echo $TOUR->title; ?></h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li><a href="tour-packages.php">Tour Packages</a></li>
                                    <li class="active">
                                        <?php echo $TOUR->title; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->

        <!-- Start blog -->
        <!--<section class="top-destination-area pt-100 pb-70">-->
        <section class="top-destination-area section-paddings single section  page pt-100 pb-70"  >  

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 back">
                        <?php
                        foreach ($tour_dates as $tour_date) {
//                            dd($tour_date['title']);
                            ?>

                            <div class="row">

                                <div class="col-md-12 " data-animation="fadeInUp" data-time="300">
                                    <h2 class="big-heading">
                                        Day <span class="daySty">
                                            <?php echo $tour_date['title']; ?>
                                        </span>
                                    </h2>
                                    <span class ="hearderline"></span>
                                    <p>
                                        <?php echo $tour_date['description']; ?>
                                    </p>
                                </div>
                                <div class="col-md-12 col-margin">
                                    <div class="sideimg">
                                        <?php
                                        $photos = TourDatePhoto::getTourDatePhotosById($tour_date['id']);
                                        foreach ($photos as $key => $photo) {
                                            if ($key < 4) {
                                                ?>


                                                <div class="col-md-3 col-sm-3 col-xs-12  ">
                                                    <figure>
                                                        <a class="" href="upload/tour-package/date/gallery/<?php echo $photo['image_name']; ?>" class="" data-fancybox="images" >
                                                            <figcaption>
                                                                <i class="fa fa-search" style="font-size:30px;color:#ffff;"></i>
                                                            </figcaption>

                                                            <img src="upload/tour-package/date/gallery/thumb/<?php echo $photo['image_name']; ?>" alt=""/>
                                                        </a>
                                                    </figure>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="header-top-right text-right booknow">
                            <div class="col-md-7 col-xs-9 book-tab">
                                <div class="book-btn booknow">
                                    <a href="booking.php?tour=<?php echo $TOUR->id; ?>">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <!-- Blog Sidebar -->
                        <div class="blog-sidebar">
                            <h3 sideimg>Other Tour Package</h3>
                            <!-- Single Sidebar 2 -->
                            <?php
                            foreach (TourPackage::all() as $ViewOther) {
                                ?>
                                <div class="single-sidebar category">
                                    <a href="view-tour-packages.php?id=<?php echo $ViewOther['id']; ?>">
                                        <h3><?php echo $ViewOther['title']; ?></h3>
                                    </a>      
                                    <div class="col-md-6 col-sm-4 col-xs-4" viewdisimg>
                                        <a href="">
                                            <img src="upload/tour-package/thumb/<?php echo $ViewOther['image_name']; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-8 col-xs-8 qua hidden-xs hidden-sm ">
                                        <div class="qua">
                                            <p><?php
                                                if (strlen($ViewOther['short_description']) > 40) {
                                                    echo substr($ViewOther['short_description'], 0, 68) . '...';
                                                } else {
                                                    echo $ViewOther['short_description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-6 col-sm-8 col-xs-8 qua  hidden-lg hidden-sm hidden-md ">
                                        <div class="qua">
                                            <p><?php
                                                if (strlen($ViewOther['short_description']) > 38) {
                                                    echo substr($ViewOther['short_description'], 0, 38) . '...';
                                                } else {
                                                    echo $ViewOther['short_description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div> 
                                    
                                    
                                    
                                    
                                </div>.<!--/ End Single Sidebar -->
                                <?php
                            }
                            ?>
                        </div>



                        
                        
                        
                        
                        

                    </div>


                </div>
            </div>
        </section>

        <!-- footer start here -->
        <?php
        include './footer.php';
        ?>
        <!-- end footer -->
        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div> <!-- Scroll to top jump button end-->

        <!-- ============================
                JavaScript Files
        ============================= -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.2.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
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
        <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
        <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
        <!-- Revolution Extensions -->
        <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
        <script src="fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>
        <script src="js/assets/revolution/revolution.js"></script>
        <!-- Jquery plugin -->
        <script src="js/plugins.js"></script>
        <!-- select2 js plugin -->
        <script src="js/select2.min.js"></script>    
        <script src="js/colors.js"></script>
        <!-- Jquery plugin -->
        <script src="js/jquery-customselect.js"></script>
        <!-- main js -->
        <script src="js/custom.js"></script>

        <!--slider view desti start here-->


        <script>
            $(document).ready(function () {

                $('.owl-carousel').owlCarousel({

                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    margin: 10,
                    mouseDrag: false,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    nav: true,

                    responsive: {
                        0: {
                            items: 1,
                            nav: false

                        },
                        600: {
                            items: 1,
                            nav: false,
                            navText: false
                        },
                        1000: {
                            items: 1,

                        }
                    }


                });

            });



        </script>
        <script>
            $(document).ready(function () {

                setTimeout(function () {
                    $('.owl-nav').removeClass('disabled');
                }, 1000);

                $('.owl-prev').click(function () {
                    $('.owl-nav').removeClass('disabled');
                });
                $('.owl-next').click(function () {
                    $('.owl-nav').removeClass('disabled');
                });

            });
        </script>

        <!--view slider end here-->

    </body>
</html>
