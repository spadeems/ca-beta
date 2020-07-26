<?php
$con= mysqli_connect("mysql.spadeems.org","techbizotech1","vishal2000","campusammb");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$instname=$_POST['instname'];
	$caddress=$_POST['caddress'];
	$paddress=$_POST['paddress'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$prog=$_POST['prog'];
	$year=$_POST['year'];
	$url=$_POST['url'];
	$pin=$_POST['pin'];
	$dob=$_POST['dob'];
	$father=$_POST['father'];

	$q='INSERT INTO `details` (`fname`,`lname`,`contact`,`dob`,`father`,`caddress`,`paddress`,`instname`,`city`,`pin`); 
	VALUES ("'.$fname.'","'.$lname.'","'.$contact.'","'.$dob.'","'.$father.'","'.$caddress.'","'.$paddress.'","'.$instname.'","'.$city.'","'.$pin.'")';
	$query='INSERT INTO `details`(`fname`, `lname`, `contact`, `dob`, `father`, `caddress`, `paddress`, `instname`, `city`, `pin`, `prog`, `year`, `email`, `url`, `state`) VALUES ("'.$fname.'","'.$lname.'","'.$contact.'","'.$dob.'","'.$father.'","'.$caddress.'","'.$paddress.'","'.$instname.'","'.$city.'","'.$pin.'","'.$prog.'","'.$year.'","'.$email.'","'.$url.'","'.$state.'")';
		if(mysqli_query($con,$query))
		{
			header('location:new2.php');
		}
		else
		{
			echo"NOT Successful";
		}
}
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from portotheme.com/html/porto/8.0.0/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 18:05:03 GMT -->

<head>


    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Register</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css">
    <script src="master/style-switcher/style.switcher.localstorage.js"></script>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    <!---PULSE ANIMATION-->
    <style>
        @keyframes shadow-pulse {
            0% {
                box-shadow: 0 0 0 0px rgba(0, 115, 255, 0.2);
            }

            100% {
                box-shadow: 0 0 0 25px rgba(0, 115, 255, 0);
            }
        }
		input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  }
    </style>

</head>

<body>

    <div class="body">
        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-color-primary header-body-bottom-border  bg-dark navbar-dark">

                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="home.html">
                                        <img alt="Spade" width="200" height="48" data-sticky-width="82"
                                            data-sticky-height="40" src="https://raw.githubusercontent.com/spadeems/web/master/img/brand-logo-white.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="dropdown-item dropdown-toggle" href="home.html"
                                                        style="color:white;">Home</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="about.html"
                                                        style="color:white;">About</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item dropdown-toggle" href="youth.html"
                                                        style="color:white;">Youth</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item dropdown-toggle" href="membership.html"
                                                        style="color:white;">Membership</a>
                                                </li>
                                                <li>
                                                    <!-- navbar contact us -->
                                                    <a class="dropdown-item dropdown-toggle" href="contact-us.html"
                                                        style="color:white;">Contact Us</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!-- <button type="button" style="position: right; " 
                                                class="btn btn-primary">Join Now</button> -->
                                    </div>
                                    <button type="button" style="position: right; " class="btn btn-primary">Join
                                        Now</button>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">

            <section class="page-header page-header-classic">
                <div class="container">
                    <!--<div class="row">
                        <div class="col">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Pages</li>
                            </ul>
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col p-static">
                            <h1 data-title-border>Details</h1>

                        </div>
                    </div>
                </div>
            </section>

            <div class="container">

                <div class="row">
                    <div class="col">

                        <div class="featured-boxes">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="featured-box featured-box-primary text-left mt-5">
                                        <div class="box-content" style="background-color: ghostwhite;">
                                            <h4 class="color-primary font-weight-semibold text-6 text-uppercase mb-3">
                                                Personal Details</h4>
                                            <form  id="frmSignUp" method="post" class="needs-validation">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">First Name</label>
                                                        <input type="text" placeholder="Your Name name" name="fname" value=""
                                                            data-msg-required="Please enter your name."
                                                            class="form-control form-control-lg" required>
                                                    </div>
													 <div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">Last Name</label>
                                                        <input type="text" placeholder="Your Last name" name="lname" value=""
                                                            data-msg-required="Please enter your name."
                                                            class="form-control form-control-lg" required>
                                                    </div>
													
                                                    <div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">Contact
                                                            No.</label>
                                                        <input type="text" placeholder="Your mobile no." name="contact" value=""
                                                            class="form-control form-control-lg" minlength="10"
                                                            maxlength="10" required>
                                                    </div>
													<div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">Date of Birth
                                                            </label>
                                                        <input type="text" placeholder="YYYY-MM-DD"  name="dob" value=""
                                                            class="form-control form-control-lg" minlength="10"
                                                            maxlength="10" required>
                                                    </div>
                                                
												<div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">Father's Name
                                                            </label>
                                                        <input type="text" placeholder="Your Father's Name" name="father" value=""
                                                            class="form-control form-control-lg" minlength="10"
                                                            maxlength="10" required>
                                                    </div>
													</div>
													<div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">Current Address
                                                            </label>
                                                        <input type="text" placeholder="Enter your current address" name="caddress" value=""
                                                            class="form-control form-control-lg" minlength="10"
                                                             required>
                                                    </div>
													<div class="form-group col-lg-6">
                                                        <label
                                                            class="required font-weight-bold text-dark text-2">Permanent Address
                                                            </label>
                                                        <input type="text" placeholder="Enter your permanent address" name="paddress" value=""
                                                            class="form-control form-control-lg" minlength="10"
                                                             required>
                                                    </div>
													
                                                <div class="form-row">
                                                    <div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">Institute
                                                            Name</label>
                                                        <input type="text" placeholder="Your Institute name" name="instname" value=""
                                                            class="form-control form-control-lg" required>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">Institute City
                                                            </label>
                                                        <input type="text" placeholder="Enter City Name" name="city" value=""
                                                            class="form-control form-control-lg" required>
                                                    </div>
													<div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">State
                                                            </label>
                                                        <input type="text" placeholder="Enter State Name" name="state" value=""
                                                            class="form-control form-control-lg" required>
                                                    </div>
													<div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">Pin Code
                                                            </label>
                                                        <input type="text" placeholder="Enter Pin Code" name="pin" value=""
                                                            class="form-control form-control-lg" required>
                                                    </div>
                                                
												<div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">Program of Study
                                                            </label>
                                                        <input type="text" placeholder="Enter your program of study" name="prog" value=""
                                                            class="form-control form-control-lg" required>
                                                    </div>
													
													<div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">Year of Completion :
                                                            </label>
                                                        <select id="year" name="year">
														<option value="year">Year</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2019">2019</option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
                                                        </select>
                                                    </div>
													</div>
													
                                                <div class="form-row">
                                                    <div class="form-group col-lg-6">
                                                        <label class="required font-weight-bold text-dark text-2">E-mail
                                                            Address</label>
                                                        <input type="email" placeholder="Your email" name="email" value=""
                                                            data-msg-required="Please enter your email address."
                                                            data-msg-email="Please enter a valid email address."
                                                            maxlength="100" class="form-control form-control-lg"
                                                            required>
                                                    </div>
													<div class="form-group col-lg-6">
                                                        <label class="font-weight-bold text-dark text-2">LinkedIn URL
                                                            </label>
                                                        <input type="text" placeholder="Your LinkedIn URL" name="url" value=""
                                                            class="form-control form-control-lg" required>
                                                    </div>
													
													<div class="form-group col-lg-3">
                                                        <input type="submit" name="submit" value="Submit"
                                                            class="btn btn-primary btn-modern float-center"
                                                            data-loading-text="Loading...">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <footer class="py-4 footer" id="footer">

            <div class="container text-center text-md-left">
                <div class="footer-ribbon">
                    <span>Get in Touch</span>
                </div>
                <!-- <button type="button" style="position: absolute;
				right: 100px;
				top: 5px;" class="btn btn-primary">Join Now</button> -->

                <div class="row text-center text-md-left mt-3 pb-3">

                    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3 mx-auto mt-3 order-sm-1 order-md-1 order-lg-1">
                        <img src="https://raw.githubusercontent.com/spadeems/web/master/img/brand-logo-white.png"
                            alt="spadeems logo" class="img-fluid"><br><br>
                        <p class="text-left ">SPADE is a team of experienced professionals who are guided by their own
                            passion to deliver exhilarating outcomes in the fields of marketing, technical, events,
                            advertising, brand promotions, as well as in exhibitions. With our
                            creative minds at work. we offer the most innovative solutions to help clients take their
                            brands to a whole new level.

                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn  border px-1 py-0  mx-1" href="https://www.facebook.com/marketingspade/"
                                    target="_blank">
                                    <i class="fab fa-facebook-f text-light"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  border px-1 py-0  mx-1" href="https://www.instagram.com/marketingspade/"
                                    target="_blank">
                                    <i class="fab fa-instagram  text-light"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  border px-1 py-0  mx-1" href="https://wa.me/917508450610/"
                                    target="_blank">
                                    <i class="fab fa-whatsapp  text-light"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  border px-1 py-0  mx-1" href="https://twitter.com/EmsSpade/"
                                    target="_blank">
                                    <i class="fab fa-twitter  text-light"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  border px-1 py-0  mx-1"
                                    href="https://www.linkedin.com/company/marketingspade/" target="_blank">
                                    <i class="fab fa-linkedin  text-light"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  border px-1 py-0  mx-1" href="https://www.youtube.com/spadeems/"
                                    target="_blank">
                                    <i class="fab fa-youtube  text-light"></i>
                                </a>
                            </li>
                        </ul>
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-2 col-xl-2 mx-auto mt-3 order-sm-2 order-md-3 order-lg-2 ">
                        <h6 class="text-uppercase text-light mb-4 font-weight-bold">Useful links</h6>
                        <p>
                            <a href="services.php">Services</a>
                        </p>
                        <p>
                            <a href="about.html">About</a>
                        </p>
                        <p>
                            <a href="contact-us.html">Contact</a>
                        </p>
                        <p>
                            <button type="button" style="position: relative;
							top:5px;
							animation: shadow-pulse 1s infinite;
							cursor: pointer;
							" class="btn btn-primary">Join Now</button>
                        </p>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3 mx-auto mt-3 order-sm-3 order-md-4 order-lg-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold ">Contact</h6>
                        <p>
                            <i class="fa fa-home mr-3"></i> SPADE Event Management Services Private Ltd.<br> 167 New
                            Defence Colony,
                            <br>Jalandhar Cantt</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i>
                            <a href="/cdn-cgi/l/email-protection#d9b0b7bfb699aaa9b8bdbcbcb4aaf7bab6b4f6"><span
                                    class="__cf_email__ "
                                    data-cfemail="bbd2d5ddd4fbc8cbdadfdeded6c895d8d4d6">info@spadeems.com</span></a>
                        </p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> <a href="tel:+917508450610">+91 75084
                                50610</a>
                        </p>
                        <p>
                            <i class="fab fa-whatsapp mr-3"></i> <a href="https://wa.me/917508450610">+91
                                75084 50610</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3 col-xl-3 mx-auto mt-3 order-sm-4 order-md-2 order-lg-4">
                        <!-- <a class="twitter-timeline" data-width="400" data-height="100%" data-dnt="true" data-theme="light" href="https://twitter.com/EmsSpade?ref_src=twsrc%5Etfw">Tweets by EmsSpade</a>
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmarketingspade%2F&tabs=timeline&width=300&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
                            width="300" height="100%" style="border:none;overflow:hidden;min-height: 400px"
                            scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
            <hr class="bg-white">

            <div class="footer-copyright text-center">
                Copyright: © 2020
                <a href="https://spadeems.com/" style="text-decoration: none;">
                    <strong class="text-primary">SPADE EMS</strong>
                </a>
                All Rights Reserved.
            </div>
        </footer>
    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path=""
        data-skin-src=""></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>


    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42715764-5', 'auto');
        ga('send', 'pageview');
    </script>

</body>

<!-- Mirrored from portotheme.com/html/porto/8.0.0/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jul 2020 18:05:03 GMT -->

</html>
