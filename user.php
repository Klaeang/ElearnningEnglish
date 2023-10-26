<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>ElearningEnglish</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
        
</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?" required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> +66 830753380 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#">patthanuny@gmail.com</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div class="social">
                                <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end topbar -->

            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="user.php">Home</a></li>
                            <li class="dropdown yamm-fw yamm-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Course Menu <b class="fa fa-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content clearfix">
                                            <div class="row-fluid">
                                                <div class="col-md-6 col-sm-6">
                                                    <h4>Course Pages</h4>
                                                    <ul>
                                                        <a href="course1.html" target="_blank">Courses 1</a>
                                                        <a href="course2.html" target="_blank">Courses 2</a>
                                                        <a href="course3.html" target="_blank">Courses 3</a>
                                                        <a href="course4.html" target="_blank">Courses 4</a>
                                                        <a href="course5.html" target="_blank">Courses 5</a>
                                                        <a href="course6.html" target="_blank">Courses 6</a>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="menu-widget text-center">
                                                        <div class="image-wrap entry">
                                                            <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                                            <div class="magnifier">
                                                                 <a href="#" title=""><i class="flaticon-add"></i></a>
                                                            </div>
                                                        </div><!-- end image-wrap -->
                                                        <h5><a href="#">Example Course</a></h5>
                                                    </div><!-- end widget -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                          
                            
                            
                            <li><a href="page-contact.html">Contact</a></li>
                            <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>
                            
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
        </header>

        <section id="home" class="video-section js-height-full">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                    <p>Learning English Web</p>
                    <small>เว็บนี้สร้างขึ้นเพื่อใช้เป็นสื่อการเรียนการสอนภาษาอังกฤษนอกห้องเรียน</small>
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="#" class="btn btn-primary wow slideInLeft">Read More</a> &nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-default wow slideInRight">Buy Now</a>
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
            <div class="slider-bottom">
                <span>Explore <i class="fa fa-angle-down"></i></span>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="upload/device_01.png" alt="" class="img-responsive wow slideInLeft">
                        </div><!-- end module -->
                    </div><!-- end col -->
                    <div class="col-md-8">
                        <div class="custom-module p40l">
                            <h2>We are a passionate <mark>learning system</mark> from<br>
                            London. Do beautiful and easy-to-use digital <br>
                            design & web development</h2>

                            <p>Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero.</p>

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first">
                                    <ul class="check">
                                        <li>Custom Shortcodes</li>
                                        <li>Visual Page Builder</li>
                                        <li>Unlimited Shortcodes</li>
                                        <li>Responsive Theme</li>
                                        <li>Tons of Layouts</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <ul class="check">
                                        <li>Font Awesome Icons</li>
                                        <li>Pre-Defined Colors</li>
                                        <li>AJAX Transitions</li>
                                        <li>High Quality Support</li>
                                        <li>Unlimited Options</li>
                                    </ul><!-- end check -->    
                                </div><!-- end col-lg-4 -->
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last">
                                    <ul class="check">
                                        <li>Shopping Layouts</li>
                                        <li>Pre-Defined Fonts</li>
                                        <li>Style Changers</li>
                                        <li>Footer Styles</li>
                                        <li>Header Styles</li>
                                    </ul><!-- end check -->
                                </div><!-- end col-lg-4 --> 
                            </div><!-- end row -->   

                            <hr class="invis">

                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-primary">Learn More About us</a>
                            </div>

                        </div><!-- end module -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>[บทเรียนล่าสุด]</h3>

                </div><!-- end title -->

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Javascript</small>
                                    <a href="#" title="">Modern JavaScript Linting With ESLint</a>
                                </h4>
                                <p>Fusce interdum, elit sit amet vehicula malesuada, eros libero elementum orci.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 21</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$22.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_02.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Design</small>
                                    <a href="#" title="">Designing Game UI Assets in Adobe Illustrator</a>
                                </h4>
                                <p>Curabitur condimentum velit non odio mattis tristique. Nam vitae orci aliquam. </p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 41</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 33 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$55.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_03.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>PHP Coding</small>
                                    <a href="#" title="">How to Become a Web Developer: Learn PHP</a>
                                </h4>
                                <p>Donec auctor nec nibh sit amet pulvinar. Mauris nulla elit, lacinia ac facilisis mattis.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 35</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 1 Hrs.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$51.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_04.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>PHP Coding</small>
                                    <a href="#" title="">How to Build a Custom Theme for Drupal 8</a>
                                </h4>
                                <p>Pellentesque ut enim dictum, interdum lorem eget, vulputate eros sed felis euismod.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 35</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 45 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$51.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->

                    <div class="caro-item">
                        <div class="course-box">
                            <div class="image-wrap entry">
                                <img src="upload/course_01.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                     <a href="#" title=""><i class="flaticon-add"></i></a>
                                </div>
                            </div><!-- end image-wrap -->
                            <div class="course-details">
                                <h4>
                                    <small>Javascript</small>
                                    <a href="#" title="">Modern JavaScript Linting With ESLint</a>
                                </h4>
                                <p>Fusce interdum, elit sit amet vehicula malesuada, eros libero elementum orci.</p>
                            </div><!-- end details -->
                            <div class="course-footer clearfix">
                                <div class="pull-left">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-user"></i> 21</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i> 15 Min.</a></li>
                                    </ul>
                                </div><!-- end left -->

                                <div class="pull-right">
                                    <ul class="list-inline">
                                        <li><a href="#">$22.00</a></li>
                                    </ul>
                                </div><!-- end left -->
                            </div><!-- end footer -->
                        </div><!-- end box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="section-button text-center">
                    <a href="#" class="btn btn-primary">ดูบทเรียนทั้งหมด</a>
                </div>
            </div><!-- end container -->
        </section>

        
    <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
        <h3 class="mt-4">ยินดีต้อนรับ : <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h3>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="js/videobg.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6502e456b1aaa13b7a76d1cf/1ha9knt7p';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>