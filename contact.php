<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Round Tours Sri Lanka</title>
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
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <link href="contact-us-form/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>	
        <!-- header area end here -->
        <?php
        include './header.php';
        ?>
        <!-- header area end here -->

        <!-- blog breadcrumb version one strat here -->
        <section class="breadcrumb-blog-version-one">
            <div class="single-bredcurms" style="background-image:url('images/bercums/contact-page.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Contact</h2>
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="active"><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- blog breadcrumb version one end here -->


        
        
        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="contact-title">
                            <h2>Our Office</h2>
                        </div>
                        <div class="address">
                            <p>
                                <strong>Address</strong>
                                <br> No.205, Bokundara , Piliyandala, Sri Lanka.

                            <p>
                                <strong>Website</strong>
                                <br> sublime.lk
                            </p>
                            <p>
                                <strong>Email</strong>
                                <br> mail@sublime.lk
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="contact-title">
                            <h2>Contact</h2>
                        </div>
                        <div class="contact-form">
                            <div id="contact">  
                                <div id="message"></div> 						
                                <!-- Contact Form -->
                                <!--<form class="form" method="post" name="contactform" id="contactform">-->
                                    <div class="form-group">
                                        <input type="text" placeholder="FullName" class="form-control input-validatar" name="txtFullName" id="txtFullName">
                                        <span id="spanFullName"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control input-validatar" name="txtEmail" id="txtEmail">
                                        <span id="spanEmail"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" class="form-control input-validatar" name="txtSubject" id="txtSubject">
                                        <span id="spanSubject"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Country " class="form-control input-validatar" name="txtCountry" id="txtCountry">
                                        <span id="spanCountry"></span>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" rows="6" class="form-control input-validatar" placeholder="Message" id="txtMessage"></textarea>
                                        <span id="spanComments"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Security Code" class="form-control input-validatar" name="captchacode" id="captchacode">
                                        <span id="capspan"></span>
                                    </div>

                                    <span><?php include("./contact-us-form/captchacode-widget.php"); ?></span>
                                    <img src="contact-us-form/img/checking.gif" id="checking"/>
                                    <div class="form-group">
                                        <button type="submit" id="btnSubmit" class="button primary"><i class="fa fa-send"></i>Submit</button>
                                    </div>

                                    <div id="dismessage" align="center" class="msg-success"></div>

                                <!--</form>/ End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- google map start  -->
        <div class="map-wrapper">
            <div class="map-area">
                <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439677.1231566874!2d80.1719846043145!3d5.910608818235198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb5c8067f1%3A0x4768397502edf93!2sSublime+Holdings!5e0!3m2!1sen!2slk!4v1537154780770"  height="600" frameborder="0" style="border:0;width:100%" allowfullscreen></iframe></div>
            </div>
        </div>

        <!-- google map end  -->
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
        <!-- google map api -->
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIW0B_E3g-Yg533xy3yF0WHThi-mFvSNQ"></script>-->
        <!-- map js -->
        <!--<script src="js/google-map.js"></script>-->    
        <!-- main js -->
        <script src="js/custom.js"></script>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <script src="contact-us-form/scripts.js" type="text/javascript"></script>
    </body>

    <!-- Mirrored from getnajmul.com/theme/trabble/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Sep 2018 02:32:14 GMT -->
</html>
