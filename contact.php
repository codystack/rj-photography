<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Contact :: RJ Photoworks&trade;</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>Did you know that?</p>
            <ul>
                <li>I don’t trust words. I trust pictures.</li>
                <li>You don’t take a photograph, you make it.</li>
                <li>You only photograph what you love.</li>
                <li>I don’t take a photograph, i make it.</li>
                <li>When people ask me what equipment I use – I tell them my eyes.</li>
            </ul>
        </div>
    </div>


    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

    <!-- header start -->
        <?php include 'header2.php';?>
    <!-- header end -->

    <section class="contact-area section_padding_100 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="contact-heading-text text-center mb-100">
                        <span></span>
                        <h2>Please get in touch</h2>
                        <p>Thanks for taking the time to contact us! We do our best to respond to quickly.</br>
                        For quotation requests or other messages, please use the following form. </br>We will do our best to answer as soon as possible. Thank you!</p>
                    </div>
                </div>
                <!-- Contact Form Area -->
                <div class="col-10">
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn studio-btn mt-3"><img src="img/core-img/logo-icon.png" alt=""> Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-10">
                    <div id="googleMap"></div>
                    <!-- Contact Info -->
                    <div class="contact-core-info d-flex align-items-center wow fadeInLeftBig" data-wow-delay="1s" data-wow-duration="1000ms">
                        <div class="contactInfo">
                            <img src="https://i.imgur.com/ssWaaBu.png" alt="">
                            <!-- Single Footer Content -->
                            <div class="single-footer-content">
                                <img src="img/core-img/map.png" alt="">
                                <a href="#">Lagos, Nigeria.</a>
                            </div>
                            <!-- Single Footer Content -->
                            <div class="single-footer-content">
                                <img src="img/core-img/smartphone.png" alt="">
                                <a href="#">0807-165-3829</a>
                            </div>
                            <!-- Single Footer Content -->
                            <div class="single-footer-content">
                                <img src="img/core-img/envelope-2.png" alt="">
                                <a href="mailto:info@rumejohn.com?Subject=Hello%20again">info@rumejohn.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Follow Me Instagram Area Start -->
    
    

    <!-- Follow Me Instagram Area End -->

    <!-- Footer Area Start -->

        <?php include 'footer.php';?>
        
    <!-- Footer Area End -->


    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew"></script>
    <script src="js/map-active.js"></script>


</body>

</html>