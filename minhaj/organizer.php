<?php
$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">




    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <style>
            #footer {
                position: fixed;
                bottom: 0;
                width: 32%;
                padding-top:6px;
                padding-left:12px;
                background-color:white;
            }
        </style>    

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>Conference Management System</title>

        <!-- ===============================================-->
        <!--    Favicons-->
        <!-- ===============================================-->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.html">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.html">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.html">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.html">
        <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.html">
        <meta name="theme-color" content="#ffffff">

        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
        <link href="assets/lib/semantic-ui-accordion/accordion.min.css" rel="stylesheet">
        <link href="assets/lib/semantic-ui-transition/transition.min.css" rel="stylesheet">
        <link href="assets/lib/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.css" rel="stylesheet">
        <link href="assets/css/theme.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>

    <body id="home" data-spy="scroll" data-target="#navbar-spy" data-offset="100">

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0"></script>
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main>

            <a class="bottom-to-top rounded-soft" href="#top" data-fancyscroll><span class="fas fa-angle-up lg" data-fa-transform="down-2"></span></a>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0" id="top">
                <div class="container"><a class="navbar-brand ml-3 ml-md-0" href="index.php"><img src="images/logo.png" alt="logo" style="margin-bottom: 9px;" /></a><button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse ml-2 ml-md-0" id="navbarContent">
                        <ul class="navbar-nav text-uppercase font-weight-semi-bold ml-auto" id="navbar-spy">
                            <li class="nav-item"><a class="nav-link" href="index.php" data-fancyscroll="data-fancyscroll"><span class="nav-link-text">  Home</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="portal.php" data-fancyscroll="data-fancyscroll"><span class="nav-link-text"> Conference Portal</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="organizer.php" data-fancyscroll="data-fancyscroll"><span class="nav-link-text"> Organizers</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="conshedule.php" data-fancyscroll="data-fancyscroll"><span class="nav-link-text">  Schedule</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact" data-fancyscroll="data-fancyscroll"> <span class="nav-link-text"> contact</span></a></li>


                        </ul>
                        <ul class="navbar-nav text-uppercase font-weight-semi-bold">

                            <div class="dropdown-menu dropdown-menu-right rounded-soft" aria-labelledby="navbarDropdown2"><a class="dropdown-item" href="components/typography.html">Typography</a><a class="dropdown-item" href="components/color.html">Colors</a><a class="dropdown-item" href="components/buttons.html">Button</a><a class="dropdown-item" href="components/icons.html">Icons</a><a class="dropdown-item" href="components/flexslider.html">Flexslider</a><a class="dropdown-item" href="components/layout.html">Layout Helper</a><a class="dropdown-item" href="components/googlemap.html">Google Map</a><a class="dropdown-item" href="components/php-ajax-form.html">Php AJAX Form</a><a class="dropdown-item" href="components/documentation.html">Documentation</a></div>
                            </li>
                        </ul><button class="text-base ml-lg-4 mt-3 mt-lg-0 btn btn-outline-light mb-4 mb-lg-0" type="button" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="window.location.href = 'register.php'">Student Register</button>
                    </div>
                </div>
            </nav>
            <section class="overflow-hidden py-0">
                <div class="bg-holder" style="background-image:url(assets/img/background/img1.jpg);"></div>

                <!--/.bg-holder-->
                <div class="container">
                    <div class="row min-vh-100 flex-center text-center text-white py-6">
                        <div class="col-auto">
                            <p class="font-italic fs-2 mb-3"  data-zanim-xs='{"animation":"slide-left","delay":0.8,"duration":0.5}' >"World's fastest-growing Religion-Science conference" &ndash; Inc.</p>
                            <h3 class="text-uppercase text-white font-weight-bold ls-1" data-zanim-xs='{"animation":"slide-right","delay":0.6,"duration":0.5}' >Minhaj University conference, 2019</h3>
                            <p class="lead text-sans-serif ls font-weight-extra-light mt-5" data-zanim-xs='{"animation":"zoom-in","delay":0.8,"duration":0.5}'>MUL , Hamdard Chowk, Township, Lahore<br />25th - 27th April, 2019</p><a class="btn btn-danger btn-lg mt-3" href="#price" data-fancyscroll="data-fancyscroll" data-zanim-xs='{"animation":"zoom-in","delay":0.8,"duration":0.5}' data-zanim-trigger="scroll">get your pass now !</a><a class="text-500 godown-arrow bounce" href="#about" data-fancyscroll="data-fancyscroll" data-zanim-xs='{"animation":"slide-down","delay":0.9,"duration":1}' data-zanim-trigger="scroll"><span class="fas fa-chevron-down fa-lg"></span></a>
                        </div>
                    </div>
                </div>
            </section>

<!-- <section> begin ============================-->
            <section>
                <div class="bg-holder overlay bg-overlay-primary" style="background-image:url(assets/img/background/organizers-bg.png);"></div>
                <!--/.bg-holder-->
                <div class="container">
                    <h3 class="text-white mb-6">Organizers</h3>
                    <div class="row">
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM organizer where type='VIP'");
                        $row = mysqli_fetch_assoc($sql);
                        $sql2 = mysqli_query($conn, "SELECT * FROM organizer where type='General Speaker'");
                        ?>
                        <div class="col-md-4">  
                            <?php echo "<a href = 'orgdetail.php?id=$row[id]'><img class = 'img-fluid d-none d-lg-block  mainorg' src = 'admin/organizer/$row[image]' alt = 'VIP Organizer' /></a>"
                            ?>

                        </div>
                        <div class="col-md-8 row">  
                            <?php
                            while ($result = mysqli_fetch_assoc($sql2)) {
                                ?>

                                <div class="col-md-6">
                                    <?php echo "<a href = 'orgdetail.php?id=$result[id]'><img class = 'rounded-soft img-fluid genorg' src = 'admin/organizer/$result[image]' alt = 'thumb-image' /></a>"
                                    ?>
                                    <div class="datspnone">
                                        <p class="text-white font-weight-extra-bold text-uppercase mb-0"><?php echo $result['name']; ?></p>
                                        <p class="fs--1 font-weight-extra-bold mb-1 text-300 ls text-uppercase"><?php echo $result['designation']; ?></p>
                                        <div class=""><a href="<?php echo $result['fb']; ?>"><span class="fab fa-facebook text-white-70"></span></a><a class="mx-2" href="<?php echo $result['linked']; ?>"><span class="fab fa-linkedin-in text-white-70"></span></a><a href="<?php echo $result['google']; ?>"><span class="fab fa-google-plus-g text-white-70"></span></a></div>
                                        <p class="mt-2 text-400 font-italic mb-0"><?php echo $result['description']; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <hr class="bg-hr mt-0 d-block"/>
                    <div class="row mt-3">
                        <div class="col justify-content-center d-flex flex-wrap align-items-center"><img class="mx-md-3 mx-2 mt-3 d-inline-block brand-logo" src="assets/img/logos/organizer-bottom-logo-1.png" alt="brand-logo" /><img class="mx-md-3 mx-2 mt-3 d-inline-block brand-logo" src="assets/img/logos/organizer-bottom-logo-2.png" alt="brand-logo" /><img class="mx-md-3 mx-2 mt-3 d-inline-block brand-logo" src="assets/img/logos/organizer-bottom-logo-6.png" alt="brand-logo" /><img class="mx-md-3 mx-2 mt-3 d-inline-block brand-logo d-lg-none d-xl-block" src="assets/img/logos/organizer-bottom-logo-5.png" alt="brand-logo" /></div>
                    </div>
                </div>
            </section>
                        <section id="contact">
                <div class="container">
                    <h3 class="mb-lg-6 mb-4">Location & Contact</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="contact.php" method="post">
                                <input class="form-control" type="hidden" name="to" value="username@domain.extension" />
                                <input class="form-control" type="text" name="name" required="" placeholder="Your Name" />
                                <input class="form-control my-4" type="email" name="email" required="" placeholder="Email Address" />
                                <textarea class="form-control text-aria-height" name="massage" rows="10" placeholder="Type your message"></textarea>
                                <button class="btn btn-primary btn-block btn-lg mt-4" type="submit" name="submit" value="Send!">submit</button>
                                <div class="zform-feedback"></div>
                            </form>
                        </div>
                        <div class="col-lg-8 mt-4 mt-lg-0 d-flex flex-column justify-content-between">
                            <div class="row">
                                <div class="col-md-auto col-6 border-400 pr-md-4">
                                    <ul class="fa-ul mb-0">
                                        <li class="font-weight-bold mb-2"><span class="fa-li pr-2"><i class="fas fa-map"></i></span>Hamdard Chowk</li>
                                        <li>Townhip<br />Lahore Pakistan</li>
                                    </ul>
                                </div>
                                <div class="col-md-auto col-6 border-left border-md-right pr-md-4">
                                    <ul class="fa-ul mb-0">
                                        <li class="mb-2"><span class="fa-li pr-2"><i class="fas fa-phone"></i></span><a href="tel:115973764">+42 35145621</a><br /><a href="tel:115973764">+42 35145626</a></li>
                                        <li><span class="fa-li pr-2"><i class="fas fa-envelope"></i></span><a href="mailto:example@mail.com">info@mul.edu.pk</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-auto pl-3 mt-4 mt-md-0 pb-md-2">
                                    <ul class="fa-ul mb-0">
                                        <li><span class="fa-li pr-2"><i class="fab fa-linkedin-in"></i></span><a href="https://www.linkedin.com/">Linkedin</a></li>
                                        <li class="my-1"><span class="fa-li pr-2"><i class="fab fa-google-plus-g"></i></span><a href="https://plus.google.com/discover">Google+</a></li>
                                        <li><span class="fa-li pr-2"><i class="fab fa-twitter"></i></span><a href="https://twitter.com/">Twitter </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="googlemap rounded-soft mt-4 mt-lg-0" data-latlng="31.448740,74.311317" data-scrollwheel="false" data-icon="assets/img/icons/map-marker.png" data-zoom="17" data-theme="Default" style="min-height:245px;">
                                <div class="marker-content">
                                    <h5>Minhaj University Lahore</h5>
                                    <p>Minhaj Ul Quran University Rd, Civic Center Twp Commercial Area Township, Lahore, Punjab 54770</p>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.87659289979!2d74.31463881514878!3d31.445064181394535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391906cbd12a8403%3A0x568e8ad71dab1c6d!2sMinhaj%20University%20Lahore!5e0!3m2!1sen!2s!4v1584364782005!5m2!1sen!2s" width="85%" height="250px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="footer-bg-color">
                <div class="container">
                    <div class="row fs--1 no-gutters py-4 text-center">
                        <div class="col-md-6 col-sm-auto text-md-left pl-0">
                            <p class="mb-0 text-400">Copyright <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2019 &copy; <a class="text-info" href="#">Conference Management System</a></p>
                        </div>
                        <div class="col-md-5 col-sm-auto text-right d-none d-sm-block ml-6 ml-md-0">
                            <p class="mb-0 text-400">Designed BY </span> <a class="text-info" href="farah.html">Farrah Baby</a></p>
                        </div>
                    </div>
                </div>
            </footer>

            <div id="footer" class="fb-like" data-href="https://www.facebook.com/DISoftwares" data-width="800" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>

            <!-- ===============================================-->
            <!--    JavaScripts-->
            <!-- ===============================================-->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/lib/loaders.css/loaders.css.js"></script>
            <script src="assets/lib/stickyfilljs/stickyfill.min.js"></script>
            <script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
            <script src="assets/lib/jquery-countdown/jquery.countdown.min.js"></script>
            <script src="assets/lib/semantic-ui-accordion/accordion.min.js"></script>
            <script src="assets/lib/semantic-ui-transition/transition.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&amp;callback=initMap" async></script>
            <script src="assets/lib/jquery-countdown/jquery.countdown.min.js"></script>
            <script src="assets/lib/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
            <script src="assets/js/theme.js"></script>
    </body>



</html>