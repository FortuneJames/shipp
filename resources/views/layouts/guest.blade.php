<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Marble Cargo Delivery - Transportation & Logistics</title>
    <link rel="shortcut icon" href="/assets/images/toplogo.png" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Css Fils -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/flaticon-02.css">
    <link rel="stylesheet" href="/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/css/custom-animate.css">
    <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <link href="/assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="/assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link href="/assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for the home page content */
        #home-page-content {
            padding: 20px;
            text-align: center;
        }

        /* Modal styling */
        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Dark overlay */
            z-index: 1000;
        }

        .modal-content {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            position: relative;
            max-width: 90%;
            /* Limit max-width for larger screens */
            width: 100%;
            margin: 0 1rem;
            /* Add margin to avoid touching screen edges */
        }

        .captcha {
            font-size: 1.5rem;
            letter-spacing: 0.2rem;
            font-weight: bold;
            background-color: #e0e0e0;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .captcha-refresh {
            cursor: pointer;
            color: blue;
            text-decoration: underline;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 1rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        /* Media Query for smaller screens */
        @media (max-width: 600px) {
            .modal-content {
                padding: 1rem;
                /* Reduce padding on smaller screens */
            }

            .captcha {
                font-size: 1.2rem;
                /* Adjust font size */
                padding: 0.8rem;
            }

            .captcha-refresh {
                font-size: 0.9rem;
                /* Adjust font size */
            }

            input[type="text"],
            input[type="submit"] {
                padding: 0.8rem;
                /* Adjust padding */
                font-size: 0.9rem;
                /* Adjust font size */
            }
        }
    </style>

</head>

<body class="nlhu-body">
    {{-- <div id="preloader"></div> --}}
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <div class="nlhu-body-overlay"></div>

    <!-- Preloader-->
    <div class="loading-preloader">
        <div id="loading-preloader">
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
            <div class="line_shape"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Header -->
    <header class="ft1-main-header">

        <!-- Header Top -->
        <div class="ft1-header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <!-- Top Left -->
                    <div class="ft1-top-left pull-left">
                        <ul class="top-list">
                            <li><span class="icon flaticon-location"></span>California, USA</li>
                            <li><span class="icon flaticon-email"></span><a
                                    href="mailto:>Contact@marblecargo.online">Contact@marblecargo.online</a></li>
                        </ul>
                    </div>

                    <!-- Top Right -->
                    <div class="ft1-top-right pull-right">
                        <div class="language dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="flag-icon"><img src="/assets/images/icons/flag.png"
                                        alt="" /></span>ENG &nbsp;<span class="fa fa-angle-down"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">France</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Urdu</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container clearfix">

                    <!-- Logo -->
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{ route('welcome') }}"><img style="width: 210px; height: 75px"
                                    class="img-fluid" src="/assets/images/toplogo.png" alt=""
                                    title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon"><img src="/assets/images/icons/menu.png"
                                    alt="" /></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('welcome') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>

                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>

                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">



                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ route('welcome') }}" title=""><img style="width: 210px; height: 75px"
                            src="/assets/images/toplogo.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                    <!-- Main Menu End-->
                    <div class="outer-box clearfix">



                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon"><img src="/assets/images/icons/menu.png"
                                    alt="" /></span></div>

                    </div>

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fas fa-times"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('welcome') }}"><img src="/assets/images/toplogo.png"
                            alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    {{ $slot }}
    <div id="home-page-content">
        <h1>Welcome to the Home Page</h1>
        <p>Enjoy browsing our content.</p>
    </div>

    <!-- CAPTCHA Modal -->
    <div id="captchaModal" class="modal">
        <div class="modal-content">
            <form id="captchaForm" onsubmit="return validateCaptcha()">
                <div id="captcha" class="captcha"></div>
                <div class="captcha-refresh" onclick="generateCaptcha()">Refresh CAPTCHA</div>
                <div class="form-group">
                    <label for="captchaInput">Enter CAPTCHA:</label>
                    <input type="text" id="captchaInput" required>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <!-- Footer Style Two -->
    <footer class="ft1-main-footer" style="background-image:url(assets/images/background/pattern-5.png)">
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="{{ route('welcome') }}"><img src="/assets/images/newfooter.png"
                                                alt="" /></a>
                                    </div>
                                    <div class="text">In cases where the user has any Logistics issues, he/she in all
                                        cases must seek independent legal advice provider.</div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="https://#" target="_blank" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://#" target="_blank" class="fab fa-telegram"></a></li>
                                    </ul>
                                    <!-- End Social Box -->
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h5>Quick Links</h5>
                                    <ul class="list-link">
                                        <li><a href="{{ route('welcome') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('contact') }}">Contact us</a></li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget hours-widget">
                                    <h5>Working Hours</h5>
                                    <div class="text">Logistics issues, he/she in all cases must seek independent
                                    </div>
                                    <ul class="time-list">
                                        <li>Monday-Friday : <span>9:00-19:00</span></li>
                                        <li>Saturday: <span>9:00-13:00</span></li>
                                        <li>Sunday & Holidays : <span>8:00-09:00</span></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->


                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="copyright">&copy; 2022 Light Express Delivery- Logistics Services. All rights
                            reserved.</div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <script>
        // Function to generate a random CAPTCHA
        function generateCaptcha() {
            const captchaElement = document.getElementById('captcha');
            const charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            const lengthOtp = 6;
            let captcha = [];
            for (let i = 0; i < lengthOtp; i++) {
                let index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
                if (captcha.indexOf(charsArray[index]) === -1) {
                    captcha.push(charsArray[index]);
                } else i--;
            }
            const captchaString = captcha.join('');
            captchaElement.innerText = captchaString;
        }

        // Validate the CAPTCHA input
        function validateCaptcha() {
            const captchaValue = document.getElementById('captcha').innerText;
            const userCaptchaInput = document.getElementById('captchaInput').value;

            if (captchaValue === userCaptchaInput) {
                alert("CAPTCHA validated successfully!");
                document.getElementById('captchaModal').style.display = 'none';
                return false; // Prevent form submission for demonstration purposes
            } else {
                alert("CAPTCHA validation failed. Please try again.");
                return false; // Prevent form submission
            }
        }

        // Generate a CAPTCHA when the page loads
        window.onload = generateCaptcha;
    </script>
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);


        }
    </script>

    <script>
        document.getElementById('other_input').addEventListener('change', function() {
            document.getElementById('hidden_input').value = this.value;
        })
    </script>


    <!-- For Js Library -->
    <!-- <script src="/assets/js/appilo-js-plugin.js"></script> -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/appear.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/isotope.pkgd.js"></script>
    <script src="/assets/js/progress-bar.js"></script>
    <script src="/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Revolution Slider -->
    <script src="/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="/assets/plugins/revolution/js/main-slider-script.js"></script>
    <!-- For Js Library -->

    <script src="/assets/js/jquery.fancybox.js"></script>
    <script src="/assets/js/wow.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/knob.js"></script>

    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/script-two.js"></script>



</body>


</html>