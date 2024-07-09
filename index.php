<?php
require_once('class/userPost/userpost.php');

/*this code for user post*/
$obj_userPost = new Userpost();
$result = $obj_userPost->all_userPost_info();

require_once('class/userPost/feedback.php');
/*this code for client Feedback*/
$obj_feedback = new Feedback();
$feedback_result = $obj_feedback->all_clientFeedback_info();

/*this code for user post in footer*/
$user_post_result = $obj_userPost->all_userPost_info_for_footer();

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
    <title>Power Vehicles | Home</title>



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="mainSite/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="mainSite/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="mainSite/css/slider.css">
    <link rel="stylesheet" type="text/css" href="mainSite/css/font-awesome-4.5.0/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="mainSite/css/style.css">

    <!-- Fafa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="mainSite/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="mainSite/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="mainSite/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="mainSite/js/html5shiv.min.js"></script>
    <script src="mainSite/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Top header start -->

    <header class="top-header  hidden-xs">
        <div class="container">
            <div class="row">
                <!-- Contact Information Section -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <ul class="list-inline">
                        <li>
                            <a href="tel:03334545112">
                                <i class="fa fa-phone pr-5 pl-10"></i>
                                
                                03334545112
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@ptechagency.com">
                                <i class="fa fa-envelope pr-5 pl-10"></i>
                                info@ptechagency.com
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- User Authentication Section -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="top-buttons">
                        <a href="mainSite/signup.php" class="btn btn-grey btn-sm text-uppercase">
                            <i class="fa fa-user pr-10"></i> Sign Up
                        </a>
                        <a href="mainSite/login.php" class="btn btn-grey btn-sm text-uppercase">
                            <i class="fa fa-lock pr-10"></i> Login
                        </a>
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand-logo" href="index.php">
                        <img src="mainSite/img/png/mainlogo.png" alt="CAR HOUSE">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="mainSite/car_buy.php">Buy Car</a></li>

                        <li><a href="mainSite/about.php">Our Services</a></li>
                        <li><a href="mainSite/client-feedback.php">Repair Car</a></li>
                        <li><a href="mainSite/contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- /.container -->
            </nav>
        </div>
    </div>
    <!-- Main header end-->

    <!-- banner start-->
    <div class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active item-1">
                    <div class="container">
                        <div class="banner-slider-inner-1">
                            <h1 style="background-color: #0066FF; color: white;">Your Dream Ride Awaits!</h1>


                            <h4 style="background-color: #0066FF; color: white;">Explore and own top-notch vehicles with expert guidance.</h4>
                        </div>
                    </div>
                </div>
                <div class="item item-2">
                    <div class="container">
                        <div class="banner-slider-inner-1">
                            <h1 style="background-color: #0066FF; color: white;">Reliable Repairs, Exceptional Service</h1>
                            <h4 style="background-color: #0066FF; color: white;">Explore and own top-notch vehicles with expert guidance.</h4>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="slider-mover-left" aria-hidden="true">
                    <img src="mainSite/img/png/left-chevron.png" alt="left-chevron">
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <img src="mainSite/img/png/right-chevron.png" alt="right-chevron">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- banner end-->

    <!-- display Cars-->
    <div class="recent-car content-area">
    <div class="container">
        <div class="recent-car-content">
            <h4 class="DreamCar">Choose Your Dream car</h4>

            <div class="row">
                <?php $count = 0; // Initialize a counter variable ?>
                <?php foreach ($result as $all_result) { ?>
                    <?php if ($count < 3) { // Check if the counter is less than 3 ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="thumbnail car-box">
                                <img src="mainSite/assets/image/<?php echo $all_result['car_image'] ?>" alt="car-image">
                                <div class="caption car-content">
                                    <h3>
                                        <a href="mainSite/car_details.php?id=<?php echo $all_result['user_post_id'] ?>"><?php echo $all_result['car_name']; ?></a>
                                        <span>$ <?php echo $all_result['car_price'] ?></span>
                                    </h3>
                                    <p class="text-justify"><?php echo substr($all_result['car_details'], 0, 150) . " ..."; ?></p>
                                    <a href="mainSite/car_details.php?id=<?php echo $all_result['user_post_id'] ?>" class="btn details-button">Details</a>
                                </div>
                            </div>
                        </div>
                        <?php $count++; // Increment the counter after each post ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


    

    

    <!-- Recent car end-->

    <!-- Footer start-->
    <footer class="main-footer">
    <div class="container">
        <div class="footer-row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="index.php">
                        <img src="mainSite/img/png/mainlogo.png" alt="logo" style="width: 100%; height: 100%;">
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

            <!-- Add an empty column ds for spacing --> 
            
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

    <script src="mainSite/js/jquery-2.2.0.min.js"></script>
    <script src="mainSite/js/bootstrap.min.js"></script>
    <script src="mainSite/js/bootstrap-slider.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="mainSite/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->
    <script src="mainSite/js/app.js"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-83150110-3', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>