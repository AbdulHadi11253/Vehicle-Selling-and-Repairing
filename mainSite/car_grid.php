<?php
require_once ('../class/userPost/userpost.php');

/*this code for user post*/
$obj_userPost = new Userpost();
$result = $obj_userPost->all_userPost_info();

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
    <title>Power Vehicles | Buy Car</title>
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
                        <a href="tel:+55-417-634-7071"><i class="fa fa-phone pr-5 pl-10"></i>  <?php echo $all_contact_address['mobile']?></a>
                    </li>
                    <li>
                        <a href="mailto:info@themevessel.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i><?php echo $all_contact_address['email']?>
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
                    <h2>Buy Your Dream Car</h2>
                    <div class="line-dec"></div>
                    <h5>We are here with your dream car. Just choose and Call us.</h5>
                    <p>
                        <a href="../index.php" class="home-btn">Home</a>
                        <a href="#" class="active-page">Car Listing</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page banner end -->

<!-- Content area start-->
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="option-bar">
                   <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-6">
                           <div class="section-heading ">
                               <i class="fa fa-car"></i>
                               <h2>Recent Selling cars</h2>
                               <div class="border"></div>
                               <h4>Choose Your Dream car</h4>
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                           <div class="sorting-options">
                               <a href="car_buy.php" class="change-view-btn "><i class="fa fa-th-list"></i></a>
                               <a href="car_grid.php" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                           </div>
                       </div>
                   </div>
               </div> 

                <div class="row">
                    <?php foreach ($result as $all_result){?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="thumbnail car-box">
                                <!--<a href="#" class="sale">
                                    <span>sale</span>
                                </a>-->
                                <img src="assets/image/<?php echo $all_result['car_image'];?>" alt="car_image">
                                <div class="caption car-content">
                                    <div class="header b-items-cars-one-info-header s-lineDownLeft">
                                        <h3>
                                            <a href="car_details.php"><?php echo $all_result['car_name'];?></a>
                                            <span>৳ <?php echo $all_result['car_price']?></span>
                                       </h3>
                                    </div>
                                    <p class="text-justify"><?php echo substr($all_result['car_details'],0,150)." ...";?></p>
                                    <!--<div class="car-tags">
                                        <ul>
                                            <li>2016</li>
                                            <li>Bensin</li>
                                            <li>Sport</li>
                                            <li>10.888m</li>
                                        </ul>
                                    </div>-->
                                    <div class="ster-fa">
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star orange-color"></i>
                                        <i class="fa fa-star-o orange-color"></i>
                                    </div>

                                     <a href="car_details.php?id=<?php echo $all_result['user_post_id'] ?>" class="btn details-button">Details</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            
                <!-- Page navigation start-->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Page navigation end-->
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12">
                <!-- Sidebar Start-->
                <aside class="sidebar">
                    <div class="section-heading">
                        <i class="fa fa-search"></i>
                        <h2>Search Car</h2>
                        <div class="border"></div>
                        <h4>Search your desire car</h4>
                    </div>

                    <div class="search-block">
                        <h2 class="title">Review Rating</h2>
                        <ul class="ratings">
                            <li>
                                <a href="#">
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(100)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(1525)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(252)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(5665)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(1587)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <span>(554)</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="search-block">
                        <h2 class="title">Brands</h2>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox8" type="checkbox">
                            <label for="checkbox8">
                                Audi
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox9" type="checkbox">
                            <label for="checkbox9">
                                BMW
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox10" type="checkbox">
                            <label for="checkbox10">
                                Mercedes benz
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox11" type="checkbox">
                            <label for="checkbox11">
                                Lamborghini
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox12" type="checkbox">
                            <label for="checkbox12">
                                Buick
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox13" type="checkbox">
                            <label for="checkbox13">
                                Bugatti
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox14" type="checkbox">
                            <label for="checkbox14">
                                Acura
                            </label>
                        </div>
                    </div>

                    <div class="search-block">
                        <h2 class="title">Popular cars</h2>
                        
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox5" type="checkbox">
                            <label for="checkbox5">
                                Lamborghini 2016
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox7" type="checkbox">
                            <label for="checkbox7">
                                Audi
                            </label>
                        </div>
                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox4" type="checkbox">
                            <label for="checkbox4">
                                Jaguar F-Type R
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox3" type="checkbox">
                            <label for="checkbox3">
                                Porsche-Cayen-Last
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox2" type="checkbox">
                            <label for="checkbox2">
                                Mercedes Benz C Class
                            </label>
                        </div>

                        <div class="checkbox checkbox-theme checkbox-circle">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">
                                Vencer Sarthe Supercar
                            </label>
                        </div>
                    </div>

                    <div class="search-block"></div>
                </aside>
                <!-- Sidebar end-->
                
                 <!-- Recent news start-->
                <div class="Recent-news">
                    <h2 class="title">Recent Selling Car</h2>

                    <?php foreach ($user_post_result as $all_user_post_result){ ?>
                        <div class="media">
                            <div class="media-left">
                                <a href="car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>">
                                    <img class="media-object" src="assets/image/<?php echo $all_user_post_result['car_image'];?>" alt="car-image">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="car_details.php?id=<?php echo $all_user_post_result['user_post_id'] ?>"><?php echo $all_user_post_result['car_name']?></a>
                                <div class="line-dec-o"></div>
                                <span>৳ <?php echo $all_user_post_result['car_price']?></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Recent news end-->
                
                <!-- Car box start-->
                <div class="thumbnail car-box">
                    <a href="#" class="sale">
                        <span>sale</span>
                    </a>
                    <img src="img/grid/audi_q7_2017.jpg" alt="Audi-q7-2017">
                    <div class="caption car-content">
                        <div class="header b-items-cars-one-info-header s-lineDownLeft">
                            <h3>
                                <a href="car_details.php">Audi q7 2017</a>
                                <span>$42,605</span>
                            </h3>
                        </div>
                        <p>Next level Pinterest farm-to-table selvage gentrify street art raw denim Helvetica street art pork belly.</p>
                        <div class="car-tags">
                            <ul>
                                <li>2016</li>
                                <li>Bensin</li>
                                <li>Sport</li>
                                <li>10.888m</li>
                            </ul>
                        </div>
                        <a href="car_details.php" class="btn details-button">Preview</a>
                    </div>
                </div>
                <!-- Car box end-->
            </div>
        </div>
    </div>
</div>
<!-- Car list end-->

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