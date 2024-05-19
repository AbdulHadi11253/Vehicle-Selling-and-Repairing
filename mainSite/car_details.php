<?php
require_once ('../class/userPost/userpost.php');

    /*View User Post */
    $userPost_id = $_GET['id'];
    $obj_userPost = new Userpost();
    $query_result = $obj_userPost->single_view_userPost_info_by_id($userPost_id);
    $result = mysqli_fetch_assoc($query_result);

    /*this code for user post in footer*/
    $obj_userPost = new Userpost();
    $user_post_result = $obj_userPost->all_userPost_info_for_footer();
    $post_result = mysqli_fetch_assoc($user_post_result); // this code only for car details path..

    /*this code for user post picture in footer*/
    $user_post_picture = $obj_userPost->all_userPost_picture_for_footer();

    /*this code for contact us Address in main content*/
    $contact_address = $obj_userPost->all_contact_address_info();
    $all_contact_address = mysqli_fetch_assoc($contact_address);

    /*this code for contact us Social Address in main content*/
    $social_address = $obj_userPost->all_social_address_info();
    $all_social_address = mysqli_fetch_assoc($social_address);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Power Vehicles | Vehicles Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">


    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.5.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
 <!-- Fafa icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Top header start -->
<header class="top-header hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline">
                    <li>
                        <a href="tel:0332454512"><i class="fa fa-phone pr-5 pl-10"></i>  0332454512</a>
                    </li>
                    <li>
                        <a href="mailto:info@ptechagency.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i>info@ptechagency.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="top-buttons">
                    <a href="signup.php" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-user pr-10"></i> Sign Up</a>
                    <a href="login.php" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-lock pr-10"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start-->
<div class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-logo" href="../index.php">
                    <img src="img/png/mainlogo.png" alt="CAR HOUSE">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="car_buy.php" class="active">Buy Car</a></li>
                   
                    <li><a href="about.php">Our Services</a></li>
                    <li><a href="client-feedback.php">Repair Car</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<!-- Page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>Power Vehicle Details</h2>
                    <div class="line-dec"></div>
                   
                    <p>
                        <a href="../index.php" class="home-btn">Home</a>
                        <a href="car_details.php?id=<?php echo $post_result['user_post_id'] ?>" class="active-page">Car Details</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Car details start-->
<div class="car-details content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="section-heading">
                                
                                <h2>Power Vehicle Price</h2>
                                <div class="border"></div>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                            <div class="car-details-header-price">
                                <br />
                                <h3>$ <?php echo $result['car_price']?></h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>


                <div class="car-detail-slider">
                    <div class="item">
                        <img src="assets/image/<?php echo $result['car_image']?>" alt="car-image">
                    </div>
                </div>

                <div class="clearfix"></div>
                
                
                <!-- Comments box end -->
                
                <!-- Contact form start -->
                <div style="margin-top: 50px;" class="contact-form" >
                    <form id="contact_form" action="http://car-house.sohelrana.me/index.html" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group full-name">
                                    <input type="text" class="input-text" name="full-name" id="full-name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group email address">
                                    <input type="text" class="input-text" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group Phone Number"> 
                                    <input type="text" class="input-text" name="phone-number" id="phone-number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea id="message" class="input-text" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group send-message">
                                    <input type="submit" name="sent message" class=" btn btn-message" value="send message">
                                </div>
                            </div>
                        </div>
                    </form>     
                </div>
                <!-- Contact form end -->
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Car sidebar right Start-->
                <div class="car-sidebar-right">
                    <!-- Car detail block Start-->
                    <div class="car-detail-block mrg-b-30">
                        <div class="section-heading">
                            <i class="fa fa-search-plus"></i>
                            <h2>Car specifications</h2>
                            <div class="border"></div>
                            <h4>Check the car specifications</h4>
                        </div>
                        <h2 class="title">Car Detials</h2>
                        <ul class="car-detail-info-list">
                            <li>
                                <span>Car ID:</span><?php echo $result['user_post_id']?>
                            </li>
                            <li>
                                <span>Car Name:</span><?php echo $result['car_name']?>
                            </li>
                            <li>
                                <span>Car Model Year:</span><?php echo $result['car_model']?>
                            </li>
                            <li>
                                <span>Car Registration Year:</span><?php echo $result['car_registration']?>
                            </li>
                            <li>
                                <span>CNG Status:</span><?php echo $result['cng_status']?>
                            </li>
                            <li>
                                <span>CNG Company:</span><?php echo $result['cng_com']?>
                            </li>
                            <li>
                                <span>Fuel Type:</span><?php echo $result['fuel_type']?>
                            </li>
                            <li>
                                <span>Car CC:</span><?php echo $result['car_cc']?>
                            </li>
                            <li>
                                <span>Gear Type:</span><?php echo $result['gear']?>
                            </li>
                            <li>
                                <span>All Option:</span><?php echo $result['all_option']?>
                            </li>
                            <li>
                                <span>Music Media:</span><?php echo $result['music']?>
                            </li>
                            <li>
                                <span>Car Serial Number:</span><?php echo $result['serial_number']?>
                            </li>
                            <li>
                                <span>Engine Type:</span><?php echo $result['engine']?>
                            </li>
                            <li>
                                <span>Car Mileage:</span><?php echo $result['mileage']?>
                            </li>

                            <li>
                                <span>Doors Number:</span><?php echo $result['doors']?>
                            </li>
                            <li>
                                <span>Car Conditon:</span><?php echo $result['condtion']?>
                            </li>
                            <li>
                                <span>Passenger Capacity:</span><?php echo $result['passenger']?>
                            </li>
                            <li>
                                <span>Car Color:</span><?php echo $result['color']?>
                            </li>
                            <li>
                                <span>Car Others Have:</span><?php echo $result['others']?>
                            </li>
                        </ul>
                    </div>
                    <!-- Car detail block end-->

                    <div class="clearfix"></div>


                    <div class="clearfix"></div>


                    <div class="clearfix"></div>

                    
                   
                </div>
                <!-- Car sidebar right end-->
            </div>
        </div>
    </div>
</div>
<!-- Car details start-->

<!-- Footer start-->
<footer class="main-footer">
    <div class="container">
        <div class="footer-row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="index.php">
                        <img src="./img/png/mainlogo.png" alt="logo" style="width: 100%; height: 100%;">
                    </a>

                    <br><br>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>Quick Links</h2>
                    <div class="line-dec"></div>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Buy Car</a>
                        </li>
                        <li>
                            <a href="#">Our Services</a>
                        </li>
                        <li>
                            <a href="#">Repair Car</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>Contact us</h2>
                    <div class="line-dec"></div>

                    <ul>
                        <li>
                            <a href="#" style="pointer-events: none;">
                                <i class="fa fa-map-marker"></i>
                                K-1 Phase 3 Hayatabad, Peshawar, Khyber Pakhtunkhwa, Pakistan
                            </a>
                        </li>
                        <li>
                            <a href="tel:03324545112">
                                <i class="fa fa-phone"></i> 03324545112
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@ptechagency.com">
                                <i class="fa fa-envelope-o"></i> info@ptechagency.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Add an empty column for spacing -->
            
        </div>
    </div>
</footer>


    <!-- Footer end-->

    <!-- Sub footer start-->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>&copy; <?php echo date('Y') ?> All Right Reserved By Power Vehicles </p>
                </div>
                <div class="col-md-6 col-sm-6 hidden-xs ">
                    <ul>
                        <li>
                        <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                        <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                        <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub footer end-->

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="js/app.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83150110-3', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>