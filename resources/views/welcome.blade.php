<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Mobile viewport optimized -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

    <!-- Meta Tags - Description for Search Engine purposes -->
    <meta name="description" content="Cariera - Job Board HTML Template">
    <meta name="keywords" content="cariera job board, HTML Template, job board html, job listing, job portal, job postings, jobs, recruiters, recruiting, recruitment">
    <meta name="author" content="GnoDesign">

    <!-- Website Title -->
    <title>Cariera - Job Board HTML Template</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700,800|Varela+Round" rel="stylesheet">

    <!-- CSS links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!-- =============== Start of Header 1 Navigation =============== -->
    <header class="header1">
        <nav class="navbar navbar-default navbar-static-top fluid_header centered">
            <div class="container">
                
                <!-- Logo -->
                <div class="col-md-2 col-sm-6 col-xs-8 nopadding">
                    <a class="navbar-brand nomargin" href="index.html"><img src="images/logo.svg" alt="logo"></a>
                    <!-- INSERT YOUR LOGO HERE -->
                </div>

                <!-- ======== Start of Main Menu ======== -->
                <div class="col-md-10 col-sm-6 col-xs-4 nopadding">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Start of Main Nav -->
                    <!-- End of Main Nav -->
                </div>
                <!-- ======== End of Main Menu ======== -->

            </div>
        </nav>
    </header>
    <!-- =============== End of Header 1 Navigation =============== -->





    <!-- ===== Start of Main Search Section ===== -->
    <section class="main overlay-black">

        <!-- Start of Wrapper -->
        <div class="container wrapper">
            <h1 class="capitalize text-center text-white">your career starts now</h1>

            <!-- Start of Form -->
            <form class="job-search-form row pt40" action="results" method="post">
                <input type="hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                
                <!-- Start of category input -->
                <div class="col-md-4 col-sm-12 search-categories">
                    <label for="search-categories">Category</label>
                    <select name="combinations" class="selectpicker" id="search-categories" data-live-search="true" title="Any Category" data-size="5" data-container="body">
                        @foreach ($combinations as $combination)
                        <option value="{{ $combination->id}}">{{ $combination->title}}</option>
                        @endforeach
                    </select>
                </div>       

                <!-- Start of location input -->
                <div class="col-md-4 col-sm-12 search-location">
                <label for="search-categories">Category</label>
                    <select name="universities" class="selectpicker" id="search-categories" data-live-search="true" title="Any Category" data-size="5" data-container="body">
                        @foreach ($universities as $university)
                        <option value="{{ $university->name}}">{{ $university->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Start of submit input -->
                <div class="col-md-4 col-sm-12 search-submit">
                    <button type="submit" name = "search-course" class="btn btn-blue btn-effect btn-large"><i class="fa fa-search"></i>search</button>
                </div>

            </form>
            <!-- End of Form -->

        </div>
        <!-- End of Wrapper -->

    </section>
    <!-- ===== End of Main Search Section ===== -->





    <!-- ===== Start of Popular Categories Section ===== -->
    <section class="ptb80" id="categories">
        <div class="container">

            <div class="section-title">
                <h2>popular categories</h2>
            </div>

            <div class="row nomargin">
                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-university"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="/">By University</a>
                            <p>Search courses using Combination and University</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been the standard dummy text since 1500s.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-university"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="/by-location">By Location</a>
                            <p>Search courses using Combination and Location</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been the standard dummy text since 1500s.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-university"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="/by-jobs">By Job</a>
                            <p>Search courses using Combination and Dream Job</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been the standard dummy text since 1500s.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->

                <!-- Start of Category div -->
                <div class="col-md-3 col-sm-6 col-xs-12 cat-wrapper">
                    <div class="category ptb30">

                        <!-- Icon -->
                        <div class="category-icon">
                            <i class="fa fa-university"></i>
                        </div>

                        <!-- Category Info - Title -->
                        <div class="category-info pt30">
                            <a href="/by-interest">By Interest</a>
                            <p>Search courses using Combination and Interest</p>
                        </div>

                        <!-- Category Description -->
                        <div class="category-descr">
                            <span>Lorem Ipsum is simply dummy text of the printing industry. Lorem has been the standard dummy text since 1500s.</span>
                        </div>

                    </div>
                </div>
                <!-- End of Category div -->
            </div>



        </div>
    </section>

    
    <!-- ===== End of Popular Categories Section ===== -->
    <!-- ===== Start of Job Post Section ===== -->
    <section class="ptb80" id="job-post">
        <div class="container">

            <!-- Start of Job Post Main -->
            <div class="col-md-8 col-sm-12 col-xs-12 job-post-main">
                <h2 class="capitalize"><i class="fa fa-briefcase"></i>latest jobs</h2>

                <!-- Start of Job Post Wrapper -->
                <div class="job-post-wrapper mt60">

                    <!-- Start of Single Job Post 1 -->
                    <div class="single-job-post row nomargin">
                        <!-- Job Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div class="job-company">
                                <a href="company-page-1.html">
                                    <img src="images/companies/envato.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Job Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="job-page.html">php senior developer</a>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-building-o"></i>envato</span>
                                <span class="location"><i class="fa fa-map-marker"></i>Melbourn, Australia</span>
                            </div>
                        </div>

                        <!-- Job Category -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="javascript:void(0)" class="btn btn-green btn-small btn-effect">full time</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single Job Post 1 -->

                    <!-- Start of Single Job Post 2 -->
                    <div class="single-job-post row nomargin">
                        <!-- Job Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div class="job-company">
                                <a href="company-page-1.html">
                                    <img src="images/companies/google.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Job Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="job-page.html">department head</a>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-building-o"></i>google</span>
                                <span class="location"><i class="fa fa-map-marker"></i>berlin, germany</span>
                            </div>
                        </div>

                        <!-- Job Category -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="javascript:void(0)" class="btn btn-purple btn-small btn-effect">part time</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single Job Post 2 -->

                    <!-- Start of Single Job Post 3 -->
                    <div class="single-job-post row nomargin">
                        <!-- Job Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div class="job-company">
                                <a href="company-page-1.html">
                                    <img src="images/companies/facebook.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Job Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="job-page.html">graphic designer</a>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-building-o"></i>facebook</span>
                                <span class="location"><i class="fa fa-map-marker"></i>london, UK</span>
                            </div>
                        </div>

                        <!-- Job Category -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="javascript:void(0)" class="btn btn-blue btn-small btn-effect">freelancer</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single Job Post 3 -->

                    <!-- Start of Single Job Post 4 -->
                    <div class="single-job-post row nomargin">
                        <!-- Job Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div class="job-company">
                                <a href="company-page-1.html">
                                    <img src="images/companies/envato.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Job Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="job-page.html">senior UI & UX designer</a>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-building-o"></i>envato</span>
                                <span class="location"><i class="fa fa-map-marker"></i>Melbourn, Australia</span>
                            </div>
                        </div>

                        <!-- Job Category -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="javascript:void(0)" class="btn btn-orange btn-small btn-effect">intership</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single Job Post 4 -->

                    <!-- Start of Single Job Post 5 -->
                    <div class="single-job-post row nomargin">
                        <!-- Job Company -->
                        <div class="col-md-2 col-xs-3 nopadding">
                            <div class="job-company">
                                <a href="company-page-1.html">
                                    <img src="images/companies/twitter.svg" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- Job Title & Info -->
                        <div class="col-md-8 col-xs-6 ptb20">
                            <div class="job-title">
                                <a href="job-page.html">senior health advisor</a>
                            </div>

                            <div class="job-info">
                                <span class="company"><i class="fa fa-building-o"></i>twitter</span>
                                <span class="location"><i class="fa fa-map-marker"></i>New York, USA</span>
                            </div>
                        </div>

                        <!-- Job Category -->
                        <div class="col-md-2 col-xs-3 ptb30">
                            <div class="job-category">
                                <a href="javascript:void(0)" class="btn btn-red btn-small btn-effect">temporary</a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single Job Post 5 -->

                </div>
                <!-- End of Job Post Wrapper -->

            </div>
            <!-- End of Job Post Main -->

        </div>
    </section>
    <!-- ===== End of Job Post Section ===== -->





    <!-- ===== Start of CountUp Section ===== -->
    <section class="ptb40" id="countup">
        <div class="container">

            <!-- 1st Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="743"></span>
                <h4>Students</h4>
            </div>

            <!-- 2nd Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="579"></span>
                <h4>Course</h4>
            </div>

            <!-- 3rd Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="251"></span>
                <h4>Universities</h4>
            </div>

            <!-- 4th Count up item -->
            <div class="col-md-3 col-sm-3 col-xs-12">
                <span class="counter" data-from="0" data-to="330"></span>
                <h4>Location</h4>
            </div>

        </div>
    </section>
    <!-- =============== Start of Footer 1 =============== -->
    <footer class="footer1">

        <!-- ===== Start of Footer Information & Links Section ===== -->
        
        <!-- ===== End of Footer Information & Links Section ===== -->


        <!-- ===== Start of Footer Copyright Section ===== -->
        <div class="copyright ptb40">
            <div class="container">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <span>Copyright &copy; <a href="#">course finder</a>. All Rights Reserved</span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start of Social Media Buttons -->
                    <ul class="social-btns list-inline text-right">
                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll facebook">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                    <i class="social-btn-roll-icon fa fa-facebook"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll twitter">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                    <i class="social-btn-roll-icon fa fa-twitter"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll google-plus">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                    <i class="social-btn-roll-icon fa fa-google-plus"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll instagram">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                    <i class="social-btn-roll-icon fa fa-instagram"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll linkedin">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                    <i class="social-btn-roll-icon fa fa-linkedin"></i>
                                </div>
                            </a>
                        </li>

                        <!-- Social Media -->
                        <li>
                            <a href="#" class="social-btn-roll rss">
                                <div class="social-btn-roll-icons">
                                    <i class="social-btn-roll-icon fa fa-rss"></i>
                                    <i class="social-btn-roll-icon fa fa-rss"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- End of Social Media Buttons -->
                </div>

            </div>
        </div>
        <!-- ===== End of Footer Copyright Section ===== -->

    </footer>
    <!-- =============== End of Footer 1 =============== -->





    <!-- ===== Start of Back to Top Button ===== -->
    <a href="#" class="back-top"><i class="fa fa-chevron-up"></i></a>
    <!-- ===== End of Back to Top Button ===== -->





    <!-- ===== Start of Login Pop Up div ===== -->
    <div class="cd-user-modal">
        <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container">
            <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#1">New account</a></li>
            </ul>

            <div id="cd-login">
                <!-- log in form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="password" placeholder="Password">
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>
                    <p class="fieldset">
                        <button type="submit" value="Login" class="btn btn-blue btn-effect">Login</button>
                    </p>
                </form>
            </div>
            <!-- cd-login -->

            <div id="cd-signup">
                <!-- sign up form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="password" placeholder="Password">
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>
                    <p class="fieldset">
                        <button class="btn btn-blue btn-effect" type="submit" value="Create account">Create Account</button>
                    </p>
                </form>
            </div>
            <!-- cd-signup -->
        </div>
        <!-- cd-user-modal-container -->
    </div>
    <!-- cd-user-modal -->
    <!-- ===== End of Login Pop Up div ===== -->





    <!-- ===== All Javascript at the bottom of the page for faster page loading ===== -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.ajaxchimp.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>