<?php
    session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

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

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

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
                                <li><a href="search.php">Search donar</a></li>
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

        </header> <!-- End main-header  -->

        <!--  HOME SLIDER BLOCK START -->

        <div class="slider-wrap">

            <div id="slider_1" class="owl-carousel owl-theme">

                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content text-center">
                        <div class="container">

                            <div class="slider-contents-info">
                                <h3>Donate blood,save life !</h3>
                                <h2>
                                    Your Donation Can bring
                                    <br>
                                    smile at others face
                                </h2>
                                <a href="registration.php" class="btn btn-slider">Become a Bonar <i class="fa fa-long-arrow-right"></i></a>
                            </div> <!-- end .slider-contents-info  -->
                        </div><!-- /.slider-content -->
                    </div>
                </div>

                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content text-center">
                        <div class="container">
                            <div class="slider-contents-info">
                                <h3>Donate blood,save life !</h3>
                                <h2>
                                    Donate your blood and
                                    <br>
                                    Inspires to others
                                </h2>
                                <a href="request-blood.php" class="btn btn-slider">Request Blood <i class="fa fa-long-arrow-right"></i></a>
                            </div><!-- /.slider-content -->
                        </div> <!-- end .slider-contents-info  -->
                    </div>

                </div>
            </div>

        </div>
        <!-- HOME SLIDE BOX END -->

        <!-- HIGHLIGHT CTA  START-->   

        <section class="cta-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>We are helping people from 02 years</h2>
                        <p>
                            You can give blood at any of our blood donation venues all over the world. 
                            We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                        </p>
                    </div> <!--  end .col-md-8  -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a class="btn btn-cta-1" href="request-blood.php">REQUEST FOR BLOOD</a>
                    </div> <!--  end .col-md-4  -->
                </div> <!--  end .row  -->
            </div>
        </section> 
    <!-- HIGHLIGHT CTA  END -->   


        <!--  SECTION DONATION PROCESS START -->

        <section class="section-content-block section-process">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Donation</span> Process</h2>
                        <p class="section-subheading">The donation process from the time you arrive center until the time you leave</p>
                    </div>                     

                </div> 

                <div class="row wow fadeInUp">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">

                                <img src="images/donationpro1.jpg" alt="process" />
                                <div class="step">
                                    <h3>1</h3>
                                </div>
                            </figure> <!-- end .process-img  -->

                            <article class="process-info">
                                <h2>Registration</h2>   
                                <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                            </article>

                        </div> 

                    </div> 



                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/donationpro2.jpg" alt="process" />
                                <div class="step">
                                    <h3>2</h3>
                                </div>
                            </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                            <article class="process-info">                                   
                                <h2>Screening</h2>
                                <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                            </article>

                        </div> 

                    </div> 


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/donationpro3.jpg" alt="process" />
                                <div class="step">
                                    <h3>3</h3>
                                </div>
                            </figure> <!-- end .process-img  -->

                            <article class="process-info">
                                <h2>Donation</h2>
                                <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                            </article>

                        </div> 

                    </div> 



                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="process-layout">

                            <figure class="process-img">
                                <img src="images/donationpro4.jpg" alt="process" />
                                <div class="step">
                                    <h3>4</h3>
                                </div>
                            </figure> <!-- end .process-img  -->

                            <article class="process-info">
                                <h2>Refreshment</h2>
                                <p>You can also stay in sitting room until you feel strong enough to leave our center. You will receive awesome drink from us in donation zone. </p>
                            </article>

                        </div> 

                    </div> 

                </div> 

            </div> 

        </section>  
        <!--  SECTION DONATION PROCESS END-->

        


<!-- DONAR OPINION START-->

        <section class="section-content-block section-client-testimonial">

            <div class="container"> 

                <div class="testimonial-container text-center">

                    <div class="col-md-10 col-md-offset-1 col-sm-12">

                        <div class="testimony-layout-1">
                            <h3 class="people-quote">Donor Opinion</h3>
                            <p class="testimony-text">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else’s life makes me feel great!                                 
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>

                            <h6>Brandon Munson</h6>
                            <span>CTO, Fulcrum Design, USA</span>

                        </div> 

                    </div> 

                    <div class="col-md-10 col-md-offset-1 col-sm-12">

                        <div class="testimony-layout-1">
                            <h3 class="people-quote">Donor Opinion</h3>
                            <p class="testimony-text">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.                                   
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>

                            <h6>Brandon Munson</h6>
                            <span>CTO, Fulcrum Design, USA</span>

                        </div>

                    </div> 

                    <div class="col-md-10 col-md-offset-1 col-sm-12">

                        <div class="testimony-layout-1">
                            <h3 class="people-quote">Recipient Opinion</h3>
                            <p class="testimony-text">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.                                   
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </p>

                            <h6>Brandon Munson</h6>
                            <span>CTO, Fulcrum Design, USA</span>

                        </div> 

                    </div> 

                </div>    

            </div> 

        </section> 

        <!-- DONAR OPINION END-->
    

       

        <!--  PICTURE GALLERY START  -->

        <section class="section-content-block no-bottom-padding section-secondary-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Photo Gallery</h2>
                        <p class="section-subheading">Funny Facts Regarding Your Blood Group(no scientifical explanation only for fun)</p>
                    </div>                       


                </div> 

            </div> 

            <div class="container-fluid wow fadeInUp">

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/a.jpg">

                            <figure class="gallery-img">

                                <img src="images/a.jpg" alt="gallery image" />

                            </figure> 

                        </a>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/aa.jpg">

                            <figure class="gallery-img">

                                <img src="images/aa.jpg" alt="gallery image" />

                            </figure> 

                        </a> 

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/b.jpg">

                            <figure class="gallery-img">

                                <img src="images/b.jpg" alt="gallery image" />

                            </figure> 

                        </a>

                    </div>

                </div> 

                <div class="row no-padding-gallery">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/bb.jpg">

                            <figure class="gallery-img">

                                <img src="images/bb.jpg" alt="gallery image" />

                            </figure> 

                        </a> 

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/o.jpg">

                            <figure class="gallery-img">

                                <img src="images/o.jpg" alt="gallery image" />

                            </figure> 

                        </a>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/oo.jpg">

                            <figure class="gallery-img">

                                <img src="images/oo.jpg" alt="gallery image" />

                            </figure> 

                        </a> 

                    </div>

                </div> 

            </div>

        </section> 
         <!--  PICTURE GALLERY END  -->

       
        

        <!-- START FOOTER  -->

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
                                            <input id="mc4wp_email" class="form-control" required="" placeholder="Enter Your Email" name="EMAIL" type="email">
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

            <!--FOOTER CONTENT  -->

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
                            </div> <!--  end .footer-nav  -->
                        </div> <!--  end .col-lg-6  -->

                    </div> <!-- end .row  -->                                    

                </div> <!--  end .container  -->

            </section> <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

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


<!-- Mirrored from templates.bwlthemes.com/blood_donation/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Mar 2018 15:43:53 GMT -->
</html>