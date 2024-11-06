<?php
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $number_of_passenger = $_REQUEST['number_of_passenger'];
    $f_date = $_REQUEST['f_date'];
    $t_date = $_REQUEST['t_date'];
    $from = $_REQUEST['from'];
    $fromto = $_REQUEST['fromto'];
    $carrier = $_REQUEST['carrier'];
    $luggage = $_REQUEST['luggage'];
    
    $message = $_REQUEST['message'];

    $to = "bookings@stallioncoaches.com";
    $subject = "Booking Request";
    $message = '
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stallion Coaches</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        table, th, td {
          border:1px solid #cbcbcb;
          border-collapse: collapse;
        }

        .main{
            width: 800px;
            margin: 0px auto;
            padding: 20px;
        }
        </style>

</head>
<body style="background:#e9e9e9; white; padding: 100px 100px; color: #333;">
    <div class="main" style="width: 800px; background: #fff; margin: 0 auto; box-shadow: 2px 2px 8px #ddd; padding: 20px; ">
        <table style="border: 1px solid #cbcbcb; width:100%">
        <table style="border: 1px solid #cbcbcb; width:100%">
         
            <tr>
                <th style="color: #0964ab; padding: 7px 0px; font-size: 26px; letter-spacing: 1px; font-family: "Open Sans", sans-serif; font-weight: 400; border: none; background: #e9e9e9;" colspan="2">Mail from Stallion Coaches </th>
            </tr>
            
        
           
               <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Name :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">' . $name . '</td>
            </tr>
               <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Phone :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px; ">' . $mobile . '</td>
            </tr>
                        <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Email :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">' . $email . '</td>
            </tr>
          
            <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">From Date :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px; ">' . $f_date . '</td>
            </tr>

            <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">To Date :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">' . $t_date . '</td>
            </tr>
                <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Carrier :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px; ">' . $carrier . '</td>
            </tr>
                        <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Destination From :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">' . $from . '</td>
            </tr>
          
            <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Destination To :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px; ">' . $fromto . '</td>
            </tr>

            <tr>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 500; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">Message :</td>
                <td style="font-family: "Open Sans", sans-serif; font-weight: 400; font-size: 24px; border: 1px solid #cbcbcb; padding: 5px 0px; padding: 5px;">' . $message . '</td>
            </tr>

           
        </table>
       
       
    </div>
</body>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <' . $name . '>' . "\r\n";

    mail($to, $subject, $message, $headers);

    echo "<script>alert('Your Booking Request Submit Successfully ');</script>";
    echo "<script>window.location='thankyou.php'</script>";
}
?>

<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stallion Coaches</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/logo/fav.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jarallax.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">




    <link rel="stylesheet" href="csss/classic.css">
    <link rel="stylesheet" href="csss/classic.date.css">



    <!-- Style -->
    <link rel="stylesheet" href="csss/style.css">


</head>

<body>





    <!-- header-area -->
    <header class="header-style-three transparent-header">
        <div class="header-top-wrap">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-md-6 d-none d-md-block">
                        <div class="header-top-action">
                        <ul>
                                <li><i class="far fa-envelope fa-lg"></i><a href="bookings@stallioncoaches.com"><span
                                            class="__cf_email__" data-cfemail="" style="font-size: large;">Email Us At:- bookings@stallioncoaches.com</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-top-right">
                        <ul>
                                <li class="header-top-social">
                                    <a href="https://api.whatsapp.com/send?phone=+447479470661&amp;text=Hi" target="_blank"><img
                                        src="img/wh.png" style="max-height: 40px;"></a>
                                    <a href="https://m.facebook.com/103520262689148/"><i
                                            class="fab fa-facebook-square fa-lg"></i></a>
                                    <a href="https://www.instagram.com/stallioncoaches/?igshid=YmMyMTA2M2Y%3D"><i
                                            class="fab fa-instagram fa-lg"></i></a>
                                   



                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header menu-area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo">
                                   <a href="index.html" class="sticky-logo-none"><img style="max-width: 200px;"
                                            src="img/logo/new2.png" alt="Logo"></a>
                                   <a href="index.html" class="sticky-logo-active"><img style="max-width: 200px;"
                                            src="img/logo/new2.png" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">Our Services</a></li>
                                        <li><a href="make-a-booking.php">Make a Booking</a></li>
                                        <li><a href="our-fleet.html">Our Fleet</a></li>

                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>

                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="menu-backdrop"></div>
                            <div class="close-btn"><i class="fas fa-times"></i></div>

                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
            <div id="collapse-search-body" class="collapse-search-body collapse">
                <div class="search-body">
                    <div class="container custom-container">
                        <form action="#">
                            <div class="form-item">
                                <input name="search" placeholder="Type here...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content text-center">
                            <h2>Make a Booking </h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Make a Booking </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <section class="contact-area pt-120">
            <div class="container">
                <div class="row">

                    <div class="col-xl-7 col-lg-6">
                        <div class="contact-form-wrap">
                            <div class="login-wrap">
                                <h3 class="widget-title">Get in <span>Touch</span></h3>
                                <form action="#" method="post" class="login-form">
                                    <div class="form-grp">
                                        <label for="name">Your Name <span>*</span></label>
                                        <input type="text" id="name" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-grp">
                                        <label for="email">Contact Number <span>*</span></label>
                                        <input type="text" id="email" name="mobile" placeholder="Contact Number">
                                    </div>
                                    <div class="form-grp">
                                        <label for="email">Your Email <span>*</span></label>
                                        <input type="email" id="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_from">Trip From</label>
                                                <input type="text" class="form-control" id="input_from" name="f_date" placeholder="Start Date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_to">Trip To</label>
                                                <input type="text" class="form-control" id="input_to" name="t_date" placeholder="End Date">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <span class="form-label">Event Type</span>
                                        <select class="form-control" name="carrier" required>
                                            <option value="Luxury Coach" selected hidden>Corporate Event</option>

                                            <option>Airport Pickup/Drop</option>
                                            <option>Sporting Event </option>

                                            <option>Other </option>
                                        </select>

                                        <span class="select-arrow"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">


                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Destination</span>
                                                <div class="form-grp">

                                                    <input type="text" id="name" name="from" placeholder="From">
                                                </div>

                                                <span class="select-arrow"></span>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label"> &nbsp;</span>
                                                <div class="form-grp">

                                                    <input type="text" id="name" name="fromto" placeholder="To">
                                                </div>


                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-grp">
                                        <label for="message">Your Message <span>*</span></label>
                                        <textarea name="message" id="message" placeholder="Hello..."></textarea>
                                    </div>
                                    <button class="btn" type="submit" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- main-area-end -->



        <!-- footer-area -->
        <footer class="footer-bg" data-background="img/bg/footer_bg.jpg">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget black-bg mb-50">
                                <div class="fw-title mb-30">
                                    <h4 class="title">Contact Us</h4>
                                </div>
                                <div class="footer-text mb-45">
                                    <p> Stallion Coaches is a reputable family run business, providing premium and professional luxury coach services.</p>
                                </div>
                                <div class="footer-contact">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone"></i></div>
                                            <div class="content">
                                                <span>PHONE NUMBER</span>
                                                <p><a href="tel:07733324160">07733324160 </a></p>
                                                <p><a href="tel:07769470144"> 07769470144</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fas fa-envelope"></i></div>
                                            <div class="content">
                                                <span>EMAIL ADDRESs</span>
                                                <p><a href="bookings@stallioncoaches.com"><span class="__cf_email__" data-cfemail="">bookings@stallioncoaches.com</span></a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <span>address</span>
                                                <p>26 Manor Road,
                                                    Edgbaston, Birmingham.
                                                    United Kingdom.
                                                    B16 9ND</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-right-wrap">
                                <div class="row justify-content-between">

                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Quick Links</h4>
                                            </div>
                                            <div class="fw-link">
                                                <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="services.html">Our Services</a></li>
                                                    <li><a href="make-a-booking.php">Make a Booking</a></li>
                                                    <li><a href="our-fleet.html">Our Fleet</a></li>
                                                    <li><a href="contact.php">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 col-md-6">
                                        <div class="footer-widget mb-50">


                                            <div class="footer-social">
                                                <ul>
                                                    <li><a href="https://m.facebook.com/103520262689148/"><i class="fab fa-facebook-f"></i></a></li>



                                                    <li> <a href="https://www.instagram.com/stallioncoaches/?igshid=YmMyMTA2M2Y%3D"> <img src="img/insta.png"> </span></a></li>
                                                    <li><a href="#"> <img src="img/youtube.png"></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="copyright-text">
                                <p>Copyright © 2023 || All rights reserved. </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="scroll-top scroll-to-target" data-target="html">
                                <i class="fas fa-angle-up"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->

    </main>



    <!-- JS here -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor/jquery-3.5.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.odometer.min.js"></script>
    <script src="js/jquery.accrue.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <script src="jss/jquery-3.3.1.min.js"></script>
    <script src="jss/popper.min.js"></script>
    <script src="jss/bootstrap.min.js"></script>
    <script src="jss/picker.js"></script>
    <script src="jss/picker.date.js"></script>

    <script src="jss/main.js"></script>

</body>


</html>