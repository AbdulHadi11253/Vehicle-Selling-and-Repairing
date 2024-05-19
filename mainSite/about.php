<?php
    require_once ('../class/aboutUs/aboutUs.php');

    /*this code for about us rules in main content*/
    $obj_aboutUs = new AboutUs();
    $rules_result = $obj_aboutUs->all_aboutUs_rules_info();
    $all_result = mysqli_fetch_assoc($rules_result);

    /*this code for choosing us reason in main content*/
    $choose_us_result = $obj_aboutUs->all_choose_us_info();
    $all_choose_us_result = mysqli_fetch_assoc($choose_us_result);

    /*this code for about us Team member in main content*/
    $team_member = $obj_aboutUs->all_team_member_info();

    /*this code for services in main content*/
    $service = $obj_aboutUs->all_service_info();

    /*this code for user post in footer and sidebar*/
    $user_post_result = $obj_aboutUs->all_userPost_info_for_footer();

    /*this code for user post picture in footer*/
    $user_post_picture = $obj_aboutUs->all_userPost_picture_for_footer();

    /*this code for contact us Address in footer*/
    $contact_address = $obj_aboutUs->all_contact_address_info();
    $all_contact_address = mysqli_fetch_assoc($contact_address);

    /*this code for contact us Social Address in footer*/
    $social_address = $obj_aboutUs->all_social_address_info();
    $all_social_address = mysqli_fetch_assoc($social_address);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Power | About Us</title>
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
                                <i class="fa fa-envelope-o pr-5 pl-10"></i>
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
                    <li><a href="car_buy.php">Buy Car</a></li>
                   
                    <li><a href="about.php" class="active">Our Services</a></li>
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

<!-- page banner start-->
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="breadcrumb-area">
                    <h2>ABOUT US</h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page banner end -->

<!-- About body start-->
<div class="about-body">
    <!-- Page section start-->
    <div class="page-section video-section">
    <div class="container">
        <div class="row" style="margin-top: 100px;">
        <div class="col-lg- col-md-6 col-sm-12 col-xs-12" >
    <div class="text-overlay">
        <h2 class="title">Vehicles Selling And Repairing</h2>
        <p class="text-justify">Discover seamless solutions for all your vehicle needs with our comprehensive service offering. From expert repairs to hassle-free selling, trust us to keep you on the road with confidence.</p>
        <p class="text-justify">Experience convenience and reliability with our dual services catered to vehicle enthusiasts. Whether it's selling your current ride or ensuring it's in top-notch condition, we've got you covered every step of the way.</p>
        <!-- Icon list -->
        
        <a href="contact.php" class="btn btn-contact">Contact us</a>
    </div>
</div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="video-background">
 <img src="../mainsite/img/details/big-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Page section end-->

    <!-- Page Section start-->
    <section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                <h2 class="title">FAQ's</h2>
                <div class="panel-div">
                    <div class="panel-group" id="accordion" role="tablist">

                        <!-- FAQ 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="fa fa-plus"></i>How can I ensure I get a fair price when selling my car?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    We strive to offer fair prices to all our customers based on market value, condition, and other relevant factors. Our team will assess your car thoroughly to provide you with the best possible offer.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-plus"></i>Do you offer a warranty or guarantee on repairs?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Yes, we stand behind our repair services with a warranty to ensure your peace of mind. If you encounter any issues after the repair, simply reach out to us, and we'll address them promptly.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-plus"></i>Can I schedule a repair appointment online?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Absolutely! You can easily schedule a repair appointment through our online booking system. Simply choose a convenient date and time, and our team will be ready to assist you.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="fa fa-plus"></i>What types of payment methods do you accept for car repairs?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    We accept various payment methods, including cash, credit/debit cards, and bank transfers. You can choose the option that works best for you when settling your repair bill.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="fa fa-plus"></i>Is financing available for car repairs or purchases?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    Yes, we offer financing options for both car repairs and purchases. Our flexible financing plans allow you to get the services you need without straining your budget. Contact us for more information on our financing options.
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

    <!-- Page Section end-->
    
   
<!-- About body end-->


<!-- Serviceslist start-->
<div class="serviceslist text-center">
    <div class="container">
        <div class="title text-center">Our Services</div>
        <div class="row">

            <?php foreach ($service as $all_service){ ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="Services-box">
                        <i class="<?php echo $all_service['service_icon']?>"></i>
                        <h3><?php echo $all_service['service_title']?></h3>
                        <p><?php echo $all_service['service_desc']?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Serviceslist end-->

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