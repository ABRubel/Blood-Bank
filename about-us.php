<?php 
    session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    
<!-- Mirrored from templates.bwlthemes.com/blood_donation/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Mar 2018 15:43:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Blood Donation - Activism & Campaign HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
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
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> <!-- end main-header  -->

        <!--  PAGE HEADING -->

        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            About Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / About Us
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->


        <!-- TEAM SECTION START -->
         <section class="section-content-block section-secondary-bg section-our-team">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Our Volunteers</h2>
                        <p class="section-subheading">The volunteers who give their time and talents help to fulfill our mission.</p>
                    </div> <!-- end .col-sm-10  -->                      

                </div> <!-- end .row  -->

                <div class="row">

                    <div class="col-lg-3 col-md-offset-0 col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">       

                            <figure class="team-member">
                                <a href="#" title="Md. Abdur Rahaman">
                                    <img src="images/rubel.jpeg" alt="Rubel" />
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>Md. Abdur Rahaman</h3>                                   
                                <h4>ID - 2014-2-60-082</h4>
                            </article>
                            

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="https://www.facebook.com/" target="_blank" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> 

                    </div> 

                    <div class="col-lg-3 col-md-offset-0 col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">    
                            <figure class="team-member">
                                <a href="#" title="Zahidul Islam Nishat">
                                    <img src="images/zahid.jpg" alt="zahid"/>
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>Zahidul Islam Nishat</h3>                              
                                <h4>ID - 1520369042</h4>
                            </article>

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="https://www.facebook.com/profile.php?id=100016446338885" target="_blank" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> <!--  end team layout-1 -->

                    </div> <!--  end .col-md-4 col-sm-12  -->

                    <div class="col-lg-3 col-md-offset-0 col-md-3 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <div class="team-layout-1">       

                            <figure class="team-member">
                                <a href="#" title="Monir Hossain">
                                    <img src="images/monir.jpg" alt="monir" />
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>Md. Monir Hossain</h3>                                   
                                <h4>ID - 1521507042</h4>
                            </article>
                            

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="https://www.facebook.com/monir.wahid1" target="_blank" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> 

                    </div>
                </div> 
                

            </div> 

        </section> 

        <!-- TEAM SECTION END -->
 



        <!-- HIGHLIGHT CTA  -->   

        <section class="cta-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>We are helping people from 40 years</h2>
                        <p>
                            You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                        </p>
                    </div> <!--  end .col-md-8  -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <a class="btn btn-cta-1" href="request-blood.php">Request For Blood</a>
                    </div> <!--  end .col-md-4  -->
                </div> <!--  end .row  -->
            </div>
        </section> 


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