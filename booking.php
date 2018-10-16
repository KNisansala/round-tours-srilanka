<?php
include_once(dirname(__FILE__) . '/class/include.php');

$tour = '';
$arrivaldate = '';
$departuredate = '';
$noofadults = '';
$noofchildren = '';

if (isset($_GET['tour'])) {
    $tour = $_GET['tour'];
}
if (isset($_GET['arrivaldate'])) {
    $arrivaldate = $_GET['arrivaldate'];
}
if (isset($_GET['departuredate'])) {
    $departuredate = $_GET['departuredate'];
}
if (isset($_GET['noofadults'])) {
    $noofadults = $_GET['noofadults'];
}
if (isset($_GET['noofchildren'])) {
    $noofchildren = $_GET['noofchildren'];
}
$TOUR = new TourPackage($tour);
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
        <!-- Google Fonts Includes -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favi icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/logo/logo2.png" />
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
            <div class="single-bredcurms" style="background-image:url('images/bercums/package1.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bredcrums-content">
                                <h2>Booking</h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
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
                                            <input type="text" placeholder="Full Name" class="form-control input-validatar" name="txtFullName" id="txtFullName" >
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
                                            <input type="text" placeholder=" Arrival Date " class="form-control input-validatar" name="txtArrival" id="txtArrival" value="<?php echo $arrivaldate ?>">
                                            <span id="spanArrival"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <div class="form-group">
                                            <input type="text" placeholder=" Departure Date " class="form-control input-validatar" name="txtDepart" id="txtDepart" value="<?php echo $departuredate; ?>" >
                                            <span id="spanDepart"></span>
                                        </div>

                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <!--<input type="" placeholder="Tour Packages " class="form-control input-validatar" name="txtDepart" id="txtDepart">-->
                                            <span id="spanDepart"></span>
                                            <select class="form-control" name="txtPackage" id="txtPackage" style="background-color: #eee;">
                                                <option value='0'>Select the Package</option>
                                                <?php
                                                foreach (TourPackage::all() as $tour_package) {
                                                    ?>
                                                    <option  value='<?php echo $tour_package['id']; ?>' <?php if ($tour_package['id'] === $tour) {
                                                    echo 'selected="TRUE"';
                                                }; ?>><?php echo $tour_package['title']; ?></option>
                                                <?php }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" placeholder="Number Of Adults" class="form-control input-validatar" name="txtNoOfAdults" id="txtNoOfAdults" value="<?php echo $noofadults; ?>" min="0" >
                                            <span id="spanNoOfAdults"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" placeholder=" Number of Children" class="form-control input-validatar" name="txtNoOfChildren" id="txtNoOfChildren" value="<?php echo $noofchildren; ?>" min="0" >
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
                                        <div class="form-group ">
                                            <span class="capchacode"><?php include("./booking-form/captchacode-widget.php"); ?></span>
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
