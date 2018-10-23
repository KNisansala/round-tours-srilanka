<?php
include_once(dirname(__FILE__) . '/class/include.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Round Tours Sri Lanka</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo2.png">
        <!-- bootstrap css -->
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
        <?php
        include './slider.php';
        ?>

        <!-- slider area end here -->

        <section class="tabbased-search-area tabbased-search-area-2">
            <div class="container">
                <!--tab menu 2 start--> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable-menu background-opacity">
                            <ul class="tab-menu" id="myTab1">

                            </ul>
                        </div>
                    </div>
                </div>  
                <!--tab menu 2 end--> 

                <!--tab content 2 start--> 
                <div class="row">
                    <div class="col-md-12 bg-shadoow-image">
                        <div class="tab-content tab-content-2" id="tab-content1">
                            
                            <div class="tab-pane active" id="hotels">
                                <div class="hotels-form">
                                    <form action="booking.php" method="get">

                                        <div class="hotel-input-4 input-b-2">
                                            <div class="selectop">
                                                <select class="form-control1" name="tour"  style="background-color: #eee;">
                                                    <option value=''>Select the Package</option>
                                                    <?php
                                                    foreach (TourPackage::all() as $tour_package) {
                                                        ?>
                                                        <option value='<?php echo $tour_package['id']; ?>'><?php echo $tour_package['title']; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="hotel-input-2 input-s-3">
                                            <input type="text" name="arrivaldate" id="datepicker" class="hotel-input-first" placeholder="Check-In">
                                        </div>
                                        <div class="hotel-input-2 input-s-3">
                                            <input type="text" name="departuredate" id="datepicker1" class="hotel-input-first" placeholder="Check-out">
                                        </div>
                                        <div class="hotel-input-1 input-s-2">
                                            <input type="number" name="noofadults" id="noofadults" class="hotel-input-first" placeholder="Adults" min="0">
                                        </div>
                                        <div class="hotel-input-1 input-s-2">
                                            <input type="number" name="noofchildren" id="noofchildren" class="hotel-input-first" placeholder="Childrens" min="0">
                                        </div>

                                        <div class="search-btn-2">
                                            <button type="submit">Book Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <!--tab content 2 end--> 
            </div>
        </section> 
        <!--end header tab based search area-->

        <section class="section-paddings welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-welcome-area">
                            <div class="single-imag">
                                <img src="images/welcome/wel2.jpg" alt="" class="img-thumbnail img-responsive">
                            </div>
                            <div class="overlay-image">
                                <img src="images/welcome/wel1.jpg" alt="" class="img-thumbnail img-responsive">
                            </div>
                        </div>
                    </div> 
                    <!--welcome area left side end--> 

                    <div class="col-md-6">
                        <div class="single-welcome-text">
                            <div class="section-title-version-2">
                                <h2>Welcome to Round Tour Sri Lanka</h2>
                                <h5>Ayubowan </h5>
                                <div class="welcome-content">
                                    <p> Accompanied by palms clasped together with a gentle bow of the head is the way a visitor is greeted in Sri Lanka. It is hard to beat Sri Lanka’s charismatic multicultural, multi faceted ambience and magnificent setting in the tropics. The island of Sri Lanka is a land of great variety and texture, a visitor to Sri Lanka is exposed to an upbeat of colours and rhythms of many cultures, smiles of hospitality, spicy food, a nature lovers paradise with breath taking scenic landscapes and mosaic of lush green paddy fields, cooler climates and wildlife safaris from the moment he sets foot in Sri Lanka. An ideal holiday destination, though beach lovers will have to make some tough choices throughout most of the country, as the coastline seems endless, offering some of world’s finest tropical sandy beaches
                                    </p>
                                    <a href="about-us.php" class="read-more hvr-fade">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!--welcome area right side end--> 
                </div>
            </div>
        </section> 
        <!-- welcome area start end here -->

        <section class="tour-package-bg image-bg-padding-100 herounit-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-version-2-white text-center welcomearea">
                            <h2>Let’s Enjoy Excellent Tour Packages</h2>
                            <spam class ="tourpack">
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
                            </spam>
                        </div>
                    </div>
                    <!--tour packages carosual--> 
                    <div class="popular-packages-carasoul owl-carousel">
                        <?php
                        foreach (TourPackage::all() as $tour) {
                            ?>
                            <div class="single-package-carasoul">
                                <div class="package-location">
                                    <img src="upload/tour-package/<?php echo $tour['image_name']; ?>" alt="">
                                    <span>$<?php echo $tour['price']; ?></span>
                                </div>

                                <div class="package-details">
                                    <div class="package-places">
                                        <a href="view-tour-packages.php?id=<?php echo $tour['id']; ?>"> <h4> <?php echo $tour['title']; ?> </h4></a> 
                                        <span> <i class="fa fa-clock-o"></i> 4 Days, 5 Nights Stay</span>
                                        <div class="details">
                                            <p><?php
                                                if (strlen($tour['short_description']) > 110) {
                                                    echo substr($tour['short_description'], 0, 110) . '...';
                                                } else {
                                                    echo $tour['short_description'];
                                                }
                                                ?></p>

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
                                <div class="package-long-btn hvr-shutter-out-horizontal">
                                    <a href="view-tour-packages.php?id=<?php echo $tour['id']; ?>">  Read More </a> 
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>  
                    <!--tour packages carosual end--> 
                </div>
            </div>
        </section>
        <!-- Tour Packages end here -->



        <!-- most popular destination Start here -->

        <section class="pb-70 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Most popular destination</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                        </div>
                    </div>
                </div>
                <div class="destination-slider-active owl-carousel hidden-lg hidden-md hidden-sm">
                    <?php
                    foreach (Destination::all() as $key => $destination) {
                        if ($key < 1) {
                            ?>

                            <div class="single-destination">
                                <figure>
                                    <a href="view-destination.php?id=<?php echo $destination['id']; ?>"><img src="upload/destination/<?php echo $destination['image_name']; ?>" alt="">
                                    </a>
                                    <figcaption>
                                        <a href="view-destination.php?id=<?php echo $destination['id']; ?>" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>

                                    </figcaption>
                                </figure>
                                <div class="des-city">
                                    <a href="view-destination.php?id=<?php echo $destination['id']; ?>"> <h4> <?php echo $destination['title']; ?> </h4></a>
                                    <p><?php
                                        if (strlen($destination['short_description']) > 45) {
                                            echo substr($destination['short_description'], 0, 48) . '...';
                                        } else {
                                            echo $destination['short_description'];
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div> 

                            <!--single popular destination  end-->


                            <?php
                        }
                    }
                    ?>

                </div>
                <div class="destination-slider-active owl-carousel hidden-xs">
                    <?php
                    foreach (Destination::all() as $key => $destination) {
                        if ($key <5) {
                            ?>

                            <div class="single-destination">
                                <figure>
                                    <a href="view-destination.php?id=<?php echo $destination['id']; ?>"><img src="upload/destination/<?php echo $destination['image_name']; ?>" alt="">
                                    </a>
                                    <figcaption>
                                        <a href="view-destination.php?id=<?php echo $destination['id']; ?>" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>

                                    </figcaption>
                                </figure>
                                <div class="des-city">
                                    <a href="view-destination.php?id=<?php echo $destination['id']; ?>"> <h4> <?php echo $destination['title']; ?> </h4></a>
                                    <p><?php
                                        if (strlen($destination['short_description']) > 45) {
                                            echo substr($destination['short_description'], 0, 48) . '...';
                                        } else {
                                            echo $destination['short_description'];
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div> 

                            <!--single popular destination  end-->


                            <?php
                        }
                    }
                    ?>

                </div>

                <span class="btnviewall">
                    <div class="row">
                        <a href="Destination.php" class="view-all hvr-fade">View All</a>
                    </div>
                </span>
            </div>
        </section> 
        <!-- Last minute offer end here -->
        <!-- testimonial area start here (single)-->
        <section class="testimonial-area-5">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-white text-center mbt-100">
                        <h2>What travellers Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-5-active owl-carousel">
                <?php
                foreach (Comments::all() as $key => $gustComment) {
                    if ($key < 6) {
                        ?>
                        <!-- single testimonial start -->
                        <div class="single-testimonial">
                            <img src="upload/comments/<?php echo $gustComment['image_name']; ?>" alt="1" class="img-circle">
                            <div class="testimonial-messages">
        <!--                                <p><?php
                                echo $gustComment['comment'];
                                ?></p>-->
                                <p><?php
                                    if (strlen($gustComment['comment']) > 200) {
                                        echo substr($gustComment['comment'], 0, 200) . '...';
                                    } else {
                                        echo $gustComment['comment'];
                                    }
                                    ?></p>


                            </div>
                            <div class="author-bio">
                                <h3><?php echo $gustComment['name']; ?></h3>
                                <span><?php echo $gustComment['title']; ?></span>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>
                <!-- single testimonial end -->
            </div>

        </section><!-- testimonial area end here -->


        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-version-2-black text-center galleryheading">
                            <h2>Gallery from Travelars</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
                        </div>
                    </div>
                </div>
                <!-- gallery iteam start here -->
                <div class="grid-3">
                    <div class="col-sm-12 col-md-6 grid-item">
                        <figure>
                            <img src="images/gallery/gal1.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gal1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span> Demodara nine arch bridge </span></h4>

                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/galltumb1.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gall1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Horton Place</span></h4>

                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/galltumb2.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gall2.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Horton Place</span></h4>

                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/galltumb3.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gall3.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Nuwara Eliya</span></h4>

                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal5.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/5b55ffa49a52204f77142a4b25bf96c5.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Udawalawa Safari</span></h4>

                            </figcaption>
                        </figure>
                    </div> <!--single gallery end -->

                    <div class=" col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal6.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/20180714_112059.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Yala Safari</span></h4>

                            </figcaption>
                        </figure>
                    </div>
                    <!--single gallery end -->
                    <!--single gallery -->
                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal7.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/124-fresco-sigiriya.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Sigiriya</span></h4>

                            </figcaption>
                        </figure>
                    </div> <!--single gallery end -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal8.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/beach4.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Hikkaduwa</span></h4>

                            </figcaption>
                        </figure>
                    </div> <!--single gallery end -->
                </div> <!-- gallery item end here -->
            </div>
        </section> <!-- gallery section end here -->

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
    </body>

</html>
