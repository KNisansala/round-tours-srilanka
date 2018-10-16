<?php
include_once(dirname(__FILE__) . '/class/include.php');

if (!isset($_SESSION)) {
    session_start();
}
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
        <link href="contact-us-form/style.css" rel="stylesheet" type="text/css"/>
        <!--sweetAlert css-->
        <link href="control-panel/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Preloader -->
        <!--        <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>	-->
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
                                <h2>Guest Comment</h2>
                                <ul>
                                    <li><a href="./">Home</a></li>
                                    <li class="active">Guest Comment</li>
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
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                        <div class="section-title-3i">
                            <h2>Comment</h2>
                        </div>

                        <div class="panel panel-white2 post panel-shadow">
                            <div class="contact-form">
                                <div id="contact">  
                                    <div id="message"></div> 						
                                    <!-- Contact Form -->
                                    <form class="form" method="post" name="guestcomment" id="guestcomment">
                                        <div class="form-group">
                                            <input type="text" placeholder="FullName" class="form-control input-validatar" name="txtFullName" id="txtFullName">
                                            <span id="spanFullName"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Country " class="form-control input-validatar" name="txtCountry" id="txtCountry">
                                            <span id="spanCountry"></span>
                                        </div>

                                        <span class="md-form">
                                            <div class="file-field">
                                                <div class="btn  btn-sm float-left commentprofile profileUpload">
                                                    <input type="file" placeholder="Profile Image " class="input-validatar" name="txtprofileimg" id="txtprofileimg">
                                                </div>
                                            </div>
                                        </span>
                                        <div class="form-group">
                                            <textarea name="txtMessage" rows="6" class="form-control input-validatar" placeholder="Comment" id="txtMessage"></textarea>
                                            <span id="spanComments"></span>
                                        </div>
                                        

                                        <div class="form-group">
                                            <span class="securitybox">
                                                <input type="text" placeholder="Security Code" class="form-control input-validatar" name="captchacode" id="captchacode">
                                                <span id="capspan"></span>
                                            </span>
                                            <span class="buttoncomment"><?php include("./guest-comment/captchacode-widget.php"); ?></span>
                                            <span class=""> <img src="guest-comment/img/checking.gif" id="checking"/></span>
                                        </div>

                                        <div class="">
                                            <!--<span class="securitybox1">-->
                                                <input type ="hidden" name="btn-comment" id="btn-comment">
                                                <button type="submit" id="btnSubmit" name="btnSubmit" class="button primary"><i class="fa fa-send"></i>Post</button>
                                            <!--</span>-->
                                        </div>

                                        <div id="dismessage" align="center" class="msg-success"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Choose trabble version two start  -->

        <div class="container">
            <div class="section-title-3i">
                <h2>All Reviews</h2>
            </div>
            <section class="choose-trabble-version-2 ">
                <div class="ImageBlock ImageBlock--switch ">
                    <div class="container-fluid contmargin">

                        <div class="row pt-100 pb-65">
                            <div class="col-md-10 col-sm-6 ImageBlock--switch-tab ">

                                <!-- single -traverls -->

                                <div class="container">
                                    <div class="row">
                                        <?php
                                        foreach (Comments::all() as $gustCommentSec) {
                                            ?> 
                                            <div class="col-sm-11">
                                                <div class="panel panel-white post panel-shadow">
                                                    <div class="post-heading">
                                                        <span class="col-lg-1 col-xs-7">
                                                            <div class="pull-left image">
                                                                <img src="upload/comments/<?php echo $gustCommentSec['image_name']; ?>" alt="1" class="img-circle">
                                                            </div>
                                                        </span>
                                                        <span class="col-lg-3 col-xs-5">
                                                            <div class="pull-left meta">
                                                                <div class="title h5">
                                                                    <a href="#"><b><?php echo $gustCommentSec['name']; ?></b></a>

                                                                </div>
                                                                <span><?php echo $gustCommentSec['title']; ?></span>
                                                            </div>
                                                        </span>
                                                    </div> 

                                                    <div class="post-description"> 
                                                        <p><?php
                                                            echo $gustCommentSec['comment'];
                                                            ?></p>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- right side image -->
                </div>
            </section><!-- Choose trabble version two end -->
        </div>

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
        <!-- Image loaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- chossen js -->
        <script src="js/chosen.jquery.min.js"></script>
        <!-- Jquery plugin -->
        <script src="js/plugins.js"></script>  
        <script src="js/colors.js"></script>
        <!-- main js -->
        <script src="js/custom.js"></script>
        <!--sweetalert js-->
        <script src="control-panel/plugins/sweetalert/sweetalert.min.js" type="text/javascript"></script>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!--gust-comment-->
        <script src="js/create-guest-comment.js" type="text/javascript"></script>
    </body>

</html>
