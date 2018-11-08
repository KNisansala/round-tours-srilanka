<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Enjoy your holiday with Round Tours Sri Lanka wirth unforgetable memories">
        <meta name="keywords" content="Round Tour Sri Lanka Photo Album,Photo Gallary<?php foreach (PhotoAlbum::all() as $PhotoAlbum) { ?><?php echo ",";
    echo $PhotoAlbum['title'];
    ?> <?php } ?>. ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photo Album||Round Tour Sri Lanka</title>
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
        <!--fancybox css-->
        <link href="fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>
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
                                <h2>Photo Album </h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li class="active">Photo Album </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->


        <!-- incredible place start here -->
        <div class="pb-70 pt-70 incredible-places ">
            <div class="container">

                <?php
                foreach (PhotoAlbum::all() as $photoAlbum) {
                    ?>
                    <div class="col-md-4 col-sm-6">

                        <a href="photo-album.php?id=<?php echo $photoAlbum['id']; ?>">
                            <div class="single-place">
                                <figure>
                                    <img src="upload/photo-album/<?php echo $photoAlbum['image_name']; ?>" alt="">
                                    <figcaption>
                                        <h3><?php echo $photoAlbum['title']; ?></h3>   
                                        <h4><?php
                                            if (strlen($photoAlbum['description']) > 250) {
                                                echo substr($photoAlbum['description'], 0, 250) . '...';
                                            } else {
                                                echo $photoAlbum['description'];
                                            }
                                            ?></h4>
                                    </figcaption>
                                </figure>
                            </div>
                        </a> 

                    </div> 
                    <?php
                }
                ?>
                <!-- end single place -->
            </div>
        </div> <!-- incredible place end here -->



        <!-- footer start here -->
        <?php
        include './footer.php';
        ?>
        <!-- end footer -->


        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div>    <!-- Scroll to top jump button end-->

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
        <script src="fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>
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
