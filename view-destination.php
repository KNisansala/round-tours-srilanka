<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$DESTINATION = new Destination($id);
?>
<!DOCTYPE html>
<html class="" lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content=" Its diverse landscapes range from rainforest and arid plains to highlands and sandy beaches. It’s famed for its ancient Buddhist ruins, including the 5th-century citadel Sigiriya, with its palace and frescoes. The city of Anuradhapura, Sri Lanka's ancient capital, has many ruins dating back more than 2,000 years">
        <meta name="keywords" content="Round Tour Sri Lanka Destination ,Destination<?php foreach (Destination::all() as $Destination) { ?><?php echo ",";
    echo $Destination['title']; ?> <?php } ?>. ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $DESTINATION->title; ?>||Destination||Round Tours Sri Lanka</title>
        <!-- Google Fonts Includes -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favi icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo2.png"
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
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style> @media only screen and (max-width: 768px) {
                .header-bottom-area .logo-area {
                    margin-top: -34px;
                    position: absolute;
                }
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

        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms single-bre" style="background-image:url('images/bercums/package1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2><?php echo $DESTINATION->title; ?></h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li> <a href="destination.php">Destination</a></li>   
                                    <li class="active"><?php echo $DESTINATION->title; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->

        <!-- Start blog -->
        <section class="top-destination-area section-paddings single section  page pt-100 pb-70"  >  
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12 back">
                        <div class="col-md-12">
                            <?php
                            $PHOTOS = DestinationPhoto::getDestinationPhotosById($DESTINATION->id);
                            $count = count($PHOTOS);
                            if ($count > 0) {
                                ?>
                                <div class="destination-slider owl-carousel">
                                    <?php
                                    foreach ($PHOTOS as $photo) {
                                        ?>
                                        <div class="slid"><img img-responsive src="upload/destination/gallery/<?php echo $photo['image_name']; ?> " alt=""/></div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            } else {
                                echo 'No images in the databse';
                            }
                            ?>

                            <div class="single-blog">
                                <div class="blog-content">
                                    <h2><?php echo $DESTINATION->title; ?></h2>
                                    <?php echo $DESTINATION->description; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">

                        <!-- Blog Sidebar -->
                        <div class="blog-sidebar ">
                            <h3 sideimg>Other Destinations</h3>
                            <!-- Single Sidebar 2 -->
                            <?php
                            foreach (Destination::all() as $destinationPlace) {
                                ?>
                                <div class="col-md-12 col-sm-6 col-xs-12  single-sidebar category">
                                    <a href="view-destination.php?id=<?php echo $destinationPlace['id']; ?>">
                                        <h3><?php echo $destinationPlace['title']; ?></h3>
                                    </a>      
                                    <div class="col-md-6 col-sm-4 col-xs-4">
                                        <a href="view-destination.php?id=<?php echo $destinationPlace['id']; ?>">
                                            <img src="upload/destination/thumb/<?php echo $destinationPlace['image_name']; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-sm-8 col-xs-8 qua">
                                        <div class="qua">
                                            <p><?php
                                                if (strlen($destinationPlace['short_description']) > 48) {
                                                    echo substr($destinationPlace['short_description'], 0, 48) . '...';
                                                } else {
                                                    echo $destinationPlace['short_description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div> 
                                </div><!--/ End Single Sidebar -->



                                <?php
                            }
                            ?>
                        </div>

                        <!--/ End Blog Sidebar -->
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
                            height: 500
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
