<?php

    /* Client information save in the database*/
    $message = '';
    if(isset($_POST['btn'])){
        require_once('../class/userPost/feedback.php');

        $obj_feedback = new Feedback();
       $message = $obj_feedback->save_cliendFeedback_info($_POST);

    }

    /*this code for user post in footer*/
    require_once ('../class/userPost/userpost.php');
    $obj_userPost = new Userpost();
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
    <title>Power Vehicles | Issues Reported</title>
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
                   
                    <li><a href="about.php">Our Services</a></li>
                    <li><a href="client-feedback.php" class="active">Repair Car</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!-- Success Message -->
            <h3 class="text-center text-success"><?php echo $message; ?></h3>
            <br>
            <!-- end -->
            <div class="well" style="margin-top: 20px">
                <h3 class="text-center text-success">Report Your Vehicle Problem</h3><br>

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="vehicle_make_model" class="col-sm-2 control-label">Vehicle Make & Model</label>
                        <div class="col-sm-8">
                            <input type="text" name="vehicle_make_model" class="form-control" placeholder="e.g., Toyota Camry" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="issue_type" class="col-sm-2 control-label">Issue Type</label>
                        <div class="col-sm-8">
                            <select name="issue_type" class="form-control" required>
                                <option value="">--- Select Issue Type ---</option>
                                <option value="Engine Problem">Engine Problem</option>
                                <option value="Transmission Issue">Transmission Issue</option>
                                <option value="Brake Problem">Brake Problem</option>
                                <option value="Electrical Issue">Electrical Issue</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="issue_description" class="col-sm-2 control-label">Issue Description</label>
                        <div class="col-sm-8">
                            <textarea name="issue_description" class="form-control" rows="4" placeholder="Describe the problem in detail" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="vehicle_image" class="col-sm-2 control-label">Vehicle Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="vehicle_image" accept="image/*" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="repair_status" class="col-sm-2 control-label">Repair Status</label>
                        <div class="col-sm-8">
                            <select name="repair_status" class="form-control" required>
                                <option value="">--- Select Repair Status ---</option>
                                <option value="Under Inspection">Under Inspection</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="btn" class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="btn" style="background-color: #3966FF; color: white" >Submit Report</button>
                        </div>
                    </div>
                </form>
            </div>
            <h1 style="margin-bottom: 200px"></h1>
        </div>
    </div>
</div>



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