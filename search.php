<?php
    session_start();
?>
<!DOCTYPE html>
 <html lang="en"> 

    
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>Blood Donation - Activism & Campaign HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

     
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix" data-sticky_header="true">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>Welcome to blood donation center.</p>

                        </div>

                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>   
                        </div> 

                    </div>

                </div> 

            </div> 

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">         
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="drop">
                                    <a href="index.php" title="Home Layout 01">Home</a>
                                </li>
                                <li><a href="about-us.php" title="About Us">About Us</a></li>


                                

                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="registration.php">Registration</a></li>
                                <li><a href="request-blood.php">Request Blood</a></li>
                                <li><a href="search.php">Search donor</a></li>
                                <li>
                                    <?php 
                                    if($_SESSION)
                                    {
                                      echo $_SESSION["email"];
                                      echo "<br/>";
                                      echo '<a href="logout.php">
                                      <button type="button" class="btn btn-success" data-target="#mymodal" data-toggle="modal" style="font-weight: bold;font-size: 14px !important;">
                                            Logout
                                            </button>
                                    </a>';
                                    }
                                    else
                                    {
                                        // echo "<a href='login.php'>Login</a>";
                                        echo '<a href="login.php">
                                            <button type="button" class="btn btn-success" data-target="#mymodal" data-toggle="modal" style="font-weight: bold;font-size: 14px !important;">
                                            Login
                                            </button>
                                    </a>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header>


        <section class="section-appointment">

            <div class="container wow fadeInUp">

                <div class="row">

                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> 

                        <figure class="appointment-img">
                            <img src="images/doctor.jpg" alt="appointment image">
                        </figure>
                    </div> 


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 

                        <div class="appointment-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Search Donor</h3>
          <form action="search1.php" method="POST" class="appoinment-form">
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="bloodgroup">
                                            <option>Blood Group</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="city">
                                            <option>Dhaka</option>
                                            <option>Chittagong</option>
                                            <option>Rajshahi</option>
                                            <option>Khulna</option>
                                            <option>Barishal</option>
                                            <option>Sylhet</option>
                                            <option>Comilla</option>
                                            <option>Cox's Bazar</option>
                                            <option>Chandpur</option>
                                            <option>Gazipur</option>
                                            <option>Tangail</option>
                                            <option>Rangamati</option>
                                            <option>Feni</option>
                                            <option>Mymensingh</option>
                                            <option>Pirojpur</option>
                                            <option>Rajbari</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit" name="submit">Search Donor</button>
                                </div
                            </form>

                        </div>
                    </div> 
                </div> 

            </div> 

        </section>  
        <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <img src="images/logo-footer.png" alt="" />
                                    </div> 

                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <p>
                                            We are world largest and trustful blood donation center. We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                                            We are working all over the world, organizing blood donation campaign to grow awareness among the people to donate blood.
                                        </p>
                                    </div> 

                                </div> 

                            </div> 
                        </div> 

                    </div> 

                  



                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Subscribe Us</h3>
                                    </div>
                                    <p>Signup for regular newsletter and stay up to date with our latest news.</p>
                                    <div class="footer-subscription">
                                        <p>
                                            <input id="mc4wp_email" class="form-control" placeholder="Enter Your Email" name="EMAIL" type="email">
                                        </p>
                                        <p>
                                            <input class="btn btn-default" value="Subscribe Now" type="submit">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> 

                    <div class="col-md-4 col-sm-6 col-xs-12"></div> 
   <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  


                                    <div class="textwidget">                                       

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">abdur.rahaman.ewu082@gmail.com</a><br/><a href="#"></a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Kalachandpur, Gulshan-2<br/>Dhaka-1212, Bangladesh</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Cell:&nbsp; (+880) 01623993016</p>                              

                                    </div>
                                </div> 
                            </div> 
                        </div>  
                    </div> 

                </div> 
            </section> 

          
            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-12">
                            <p class="copyright-text"> Copyright- @ 2018, Blood Donation Center. All rights reserved </p>

                        </div>  <!-- end .col-sm-6  -->
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="#">Causes</a>
                                        </li>
                                        <li>
                                            <a href="donate.html">Events</a>
                                        </li>
                                        <li>
                                            <a href="blog-with-sidebar.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="campaign-grid.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> 
                        </div> 

                    </div>                           

                </div>

            </section> 
        </footer>

       
        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>
    </body>

</html>