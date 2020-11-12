<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pro worker</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/elliipse.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/guest/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/guest/slicknav.css') }}">

    <link rel="stylesheet" href="{{ asset('css/guest/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="">
                                        <img src="{{ asset('img/logopro2.png') }}" alt="" title="" /></a>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="dashboard.html">Home</a></li>
											<li><a href="about us.html">About us</a></li>
                                            <li><a href="jobs.html">Browse Job</a></li>
                                            </li>
											<li><a href="howitworks.html">How it Works</a></li>
                                            <li><a href="contact.html">Contact</a></li>
											<li><a href="#">Language<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Indonesia</a></li>
                                                    <li><a href="#">English</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="/register">Sign Up</a>
                                        <a class="boxed-btn3" href="/login">Sign In</a>
                                    </div>
                            </div>
                                </div>
								</div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    @yield('content')

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                    <img src="img/logopro2.png" alt="">
                                    <img src="" alt="">
                                </a>
                            </div>
                            <p>
                                proworker@caleb-technology.com <br>
                            <p>   +62 21 8276 1049 <br>
								<p>Bekasi . West Java 17116 <br>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">How it Works</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Carrier Tips</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Category
                            </h3>
                            <ul>
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Oil & Gas</a></li>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Start Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">You will get update notification from us.</p>
                                <div class="down-row">
                                    <img src="img/android.png" alt="">
                                    <img src="img/apple.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PT Caleb Technology.</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{ asset('js/guest/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/guest/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/guest/popper.min.js') }}"></script>
    <script src="{{ asset('js/guest/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/guest/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/guest/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/guest/ajax-form.js') }}"></script>
    <script src="{{ asset('js/guest/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/guest/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/guest/scrollIt.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/guest/wow.min.js') }}"></script>
    <script src="{{ asset('js/guest/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/guest/plugins.js') }}"></script>
    <script src="{{ asset('js/guest/gijgo.min.js') }}"></script>

 <!--contact js-->
    <script src="{{ asset('js/guest/contact.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.form.js') }}"></script>
    <script src="{{ asset('js/guest/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/guest/mail-script.js') }}"></script>


    <script src="{{ asset('js/guest/main.js') }}"></script>
	    <!-- ClickDesk Live Chat Service for websites -->
    <script type='text/javascript'>
    var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyEgsSBXVzZXJzGICAiNW_sfIKDA');
    if(document.location.hostname != 'localhost'){
    	var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
    	'http://my.clickdesk.com/clickdesk-ui/browser/');
    	var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
    }else{
    	var glcpath = 'http://localhost:8888/clickdesk-ui/browser/';
    	var glcp = 'http://';
    }
    var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
    glcspt.async = true; glcspt.src = glcpath + 'livechat-cloud-new.js';
    var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
    </script>
    <!-- End of ClickDesk -->

   
</body>

</html>