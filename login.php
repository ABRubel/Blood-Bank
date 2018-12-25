<?php
session_start();
    if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email=$_POST['email'];
$pass=$_POST['password'];
    
$sql = "SELECT * FROM donar where email = '$email' and username = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] =$row["email"];
        $_SESSION["phone"] = $row["phone"];
        $_SESSION["bloodgroup"] =$row["bloodgroup"];
        $_SESSION["city"] = $row["city"];
        $_SESSION["image"] = $row["image"];

         	header("location: profile.php");
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
    }
?>




<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=iso-8859-1" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Blood Donation - Activism & Campaign HTML5 Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />

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
                            <a class="logo" href="index.html"><img alt="" src="images/logo.png"></a>
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
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> <!-- end main-header  -->

        <!--  PAGE HEADING -->
            
        <div style="width:35%; height: 25%;background:rgba(105,139,105, 0.2);background-attachment: fixed;margin:100px auto; padding:50px;border-radius:10px;border:1px solid #FFFFFF);box-shadow: 0px 0px 5px #edeaea inset;/*box-shadow: 0px 1px 24px rgba(99, 22, 99, 1) inset;*/transition:1s;" class="login-container">
            <form action="" method="post">
                <h5> Please, Use Your Access ID</h5>
                
                <input style="width: 70%; display: block;padding: 2px;margin: 5px 0px;border-radius: 5px;border: 1px, solid rgb(182, 182, 205);box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3) inset; " type="email" placeholder="Email" name="email">
                
                <input style="width: 70%; display: block;padding: 2px;margin: 5px 0px;border-radius: 5px;border: 1px, solid rgb(182, 182, 205);box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3) inset; " type="password" placeholder="Password" name="password">
               
                <a href="#"><button style="display: block; background-color: lightcoral;margin: 10px 0; padding: 2px 12px;font-size: 16px;font-family: Consolas;color:white;border: 1px solid lightcoral;border-radius: 8px;font-weight: 700;text-shadow: 0px 0px 0px #D7D9D8;cursor: pointer;transition: 1s;"type="submit">Login</button></a> 
                
            </form>
                
                <div class="SignUP">
	 			   <h5 style="color: red">If You Have don't access ID,  Please Sign Up here</h5>
   			       <a href="registration.php"><button style="display: block; background-color: forestgreen;margin: 5px 0; padding: 2px 12px;font-size: 16px;font-family: Consolas;color:white;border: 1px solid forestgreen;border-radius: 8px;font-weight: 700;text-shadow: 0px 0px 0px #D7D9D8;cursor: pointer;transition: 1s;"type="submit">Sign Up</button></a> 
	 		</div>
            
        </div>



       






       <!-- START FOOTER  -->

        <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

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

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">monir.hossain@northsouth.edu</a><br/><a href="#"></a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Road-2,3/A Bashundhara<br/>Dhaka-1200, Bangladesh</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 0174 9183 644<br/>Cell:&nbsp; (+880) 0723 161 343</p>                              

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
                            <p class="copyright-text">  Copyright- NSU-327 Project @ 2018, Blood Donation Center. </p>

                        </div>  <!-- end .col-sm-6  -->

                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home</a>
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
                                            <a href="contact.html">Contact</a>
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


<!-- Mirrored from templates.bwlthemes.com/blood_donation/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Mar 2018 15:43:53 GMT -->
</html>

    