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
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
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
                                <h2>Booking</h2>
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="active"><a href="contact.html">Booking</a></li>
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
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title-3i">
                            <h2>Booking</h2>
                        </div>

                        <div class="panel panel-white3 post panel-shadow">
                            <div class="contact-form">
                                <div id="contact">  

                                    <div id="message"></div> 
                                    <div class="col-md-6 col-sm-12 col-xs-12">  
                                        <div class="form-group">
                                            <input type="text" placeholder="Full Name" class="form-control input-validatar" name="txtFullName" id="txtFullName">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" placeholder="Enter Email" class="form-control input-validatar" name="txtEmail" id="txtEmail">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group">
                                            <input type="text" placeholder=" Arrival Time " class="form-control input-validatar" name="txtArrival" id="txtArrival">
                                            <span id="spanArrival"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group">
                                            <input type="text" placeholder=" Departure Time " class="form-control input-validatar" name="txtDepart" id="txtDepart">
                                            <span id="spanDepart"></span>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <!--<input type="" placeholder="Tour Packages " class="form-control input-validatar" name="txtDepart" id="txtDepart">-->
                                            <span id="spanDepart"></span>
                                            <select class="form-control" name="txtPackage" id="txtPackage" style="background-color: #eee;">
                                                <option selected="true">-- Please Select Your Package --</option> 
                                                <option value="10 Days Adventure " selected="true">10 Days Adventure   </option>
                                                <option value="Adventure 8 Days  ">Adventure 8 Days           </option>
                                                <option value="Adventure 6 Days">Adventure 6 Days </option>
                                                <option value="Culture  6 Days ">Culture  6 Days</option>
                                                <option value="Culture 8 Days">Culture 8 Days</option>
                                                <option value="Cultural 12 Days">Cultural 12 Days</option>
                                                <option value="5 Days Romantic">5 Days Romantic</option>
                                                <option value="7 Days Romantic">7 Days Romantic</option>
                                                <option value="12 Days Romantic">12 Days Romantic</option>
                                                <option value="Sinharaja Rain Forest">Sinharaja Rain Forest</option>
                                                <option value="Kanneliya Rain Forest">Kanneliya Rain Forest</option>
                                                <option value="Yala national park">Yala national park</option>
                                                <option value="Whales & Dolphin Watching">Whales & Dolphin Watching</option>
                                                <option value="Madu Ganga River">Madu Ganga River</option>
                                            </select>


                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" placeholder="No Of adults" class="form-control input-validatar" name="txtNoOfAdults" id="txtNoOfAdults">
                                            <span id="spanNoOfAdults"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" placeholder=" Number of Children" class="form-control input-validatar" name="txtNoOfChildren" id="txtNoOfChildren">
                                            <span id="spanNoOfChildren"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="6" class="form-control input-validatar" placeholder="Message" id="txtMessage"></textarea>
                                            <span id="spanMessage"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6  col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Security Code" class="form-control input-validatar" name="captchacode" id="captchacode">
                                            <span id="capspan"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                                            <img src="booking-form/img/checking.gif" id="checking"/>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group">
                                            <button type="submit" id="btnSubmit" class="button primary"><i class="fa fa-send"></i>Book Now</button>
                                        </div>

                                        <div id="dismessage" align="center" class="msg-success"></div>
                                    </div>
                                    <!--</form>/ End Contact Form -->
                                </div
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



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

        <script src="booking-form/scripts.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script>
            $(function () {
                $("#txtArrival").datepicker();
                $("#txtDepart").datepicker();
            });




        </script>

    </body>
</html>
