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
                            <h3 class="join-heading">Become a donar</h3>

<?php  
if(isset($_POST['submit'])){
  
$con = mysqli_connect('localhost','root','','blood_donation');
if($con)
{
    //echo"success"; 
}
else{
    echo "error";
}
  
$name = $_POST['name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$bloodgroup = $_POST['bloodgroup'];
$city = $_POST['city'];

if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
if(empty($username)) {
            echo "<font color='red'>User Password field is empty.</font><br/>";
        }
if(empty($phone)) {
            echo "<font color='red'>Phone Number field is empty.</font><br/>";
        }
if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
if(empty($bloodgroup)) {
            echo "<font color='red'>Bloodgroup field is empty.</font><br/>";
        }
if(empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }
 
$sql_u = "SELECT * FROM donar WHERE username = '$phone'";
$sql_e = "SELECT * FROM donar WHERE email = '$email'";

$res_u = mysqli_query($con,$sql_u) ;
$res_e = mysqli_query($con,$sql_e) or die(mysqli_error($con));


if (mysqli_num_rows($res_u) > 0) {
  # code...
 // $name_error = "sorry.....username already taken";
    echo "<font color='red'> Number Already Exists !</font><br/>";
}

if (mysqli_num_rows($res_e) > 0) {
  # code...
  // $name_error = "sorry.....email already used";
    echo "<font color='red'> Sorry..! Email Already Exists.</font><br/>";

} 

else {
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 

    $sql = "INSERT INTO donar(name,username,phone,email,bloodgroup,city,image) VALUES('$name','$username','$phone','$email','$bloodgroup','$city','$file')";
  
        if(mysqli_query($con,$sql))
        {
            echo "<font color='green'>Succesfully Registered. Thanks<font><br/>";
        }
        else{
            echo "<font color='red'> Error!!! Please Try Again.</font><br/>";
        }
    }

}
  
  ?>
                           <form action="" method="POST" enctype="multipart/form-data" class="appoinment-form" name="registration">
                                <div class="form-group col-md-6">
                                    <input id="your_name" class="form-control" placeholder="Name" type="text" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_username" class="form-control" placeholder="Password" type="password" name="username">
                                </div>
                                 <div class="form-group col-md-6">
                                    <input id="your_phone" class="form-control" placeholder="Phone" type="text" name="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_email" class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" placeholder="Blood Group" name="bloodgroup">
                                            
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
                                        <select class="form-control" placeholder="City" name="city">
                                           
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
                                <div>
                                    Select image to upload:
                                <input type="file" name="image" />
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit" name="submit">Register</button>
                                </div>

                            </form>

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