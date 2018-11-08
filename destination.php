<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content=" Its diverse landscapes range from rainforest and arid plains to highlands and sandy beaches. It’s famed for its ancient Buddhist ruins, including the 5th-century citadel Sigiriya, with its palace and frescoes. The city of Anuradhapura, Sri Lanka's ancient capital, has many ruins dating back more than 2,000 years">
        <meta name="keywords" content="Round Tour Sri Lanka Destination ,Destination<?php foreach (Destination::all() as $Destination) { ?><?php echo ",";
    echo $Destination['title']; ?> <?php } ?>. ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Round Tour Sri Lanka</title>
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
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style>  
            @media only screen and (max-width: 768px) {
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
            <div class="single-bredcurms" style="background-image:url('images/bercums/package1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Destination</h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li class="active">Destination</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->

        <!-- popular destination strat -->
        <section class="blog-contents-version-one pt-100 pb-70 pt-70 section-blog-bg blog-2 section-blog-bg-2">
            <div class="container">
                <div class="row">
                    <!-- single travel blog-->
                    <?php
                    foreach (Destination::all() as $destination) {
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-travel-blog single-travel-blog-2">
                                <div class="blog-image">
                                    <a href="#"><img src="upload/destination/thumb1/<?php echo $destination['image_name']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-post-content">
                                        <a href="view-destination.php?id=<?php echo $destination['id']; ?>"><h4><?php echo $destination['title']; ?></h4></a>
                                        <p>
                                            <?php
                                            if (strlen($destination['short_description']) > 105) {
                                                echo substr($destination['short_description'], 0, 95) . '...';
                                            } else {
                                                echo $destination['short_description'];
                                            }
                                            ?>

                                        </p>
                                    </div>
                                    <div class="read-more-btn">
                                        <a href="view-destination.php?id=<?php echo $destination['id']; ?>">Read More <i class="fa fa-angle-right"> </i></a>
                                    </div>
                                    <ul class="soical-share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                    <!-- single travel guide & security end-->


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
