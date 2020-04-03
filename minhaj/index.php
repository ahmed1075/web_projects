<?php
$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
$query = mysqli_query($conn, "SELECT * FROM price");
$pro = mysqli_fetch_assoc($query);
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
                            <li class="nav-item"><a class="nav-link" href="#Schedule" data-fancyscroll="data-fancyscroll"><span class="nav-link-text">  Home</span></a></li>
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

      <!-- <section> begin ============================-->
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
            <div class="alert alert-light alert-dismissible fade show sticky-kit shadow-sm rounded-0 mb-0" role="alert">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-5 border-md border-lg-0 rounded-soft">
                        <p class="mb-0 text-base text-lg-right text-center mt-lg-2">Get your pass now until price go up & save 10%</p>
                    </div>
                    <div class="col-md-3 col-lg-2 text-center px-0 pt-lg-1 pt-md-2"><span class="fs-1 font-weight-medium text-warning" data-countdown="2019/12/31" data-countdown-fallback="Getting ready"></span></div>
                    <div class="col-md-4 col-lg-4 text-center text-md-left mt-1 mt-md-0"><a class="btn btn-danger btn-lg" href="#price" data-fancyscroll="data-fancyscroll">Buy tickets!</a></div>
                </div><button class="close mt-md-2" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

      <!-- <section> begin ============================-->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex flex-column justify-content-between pr-md-5">
                            <div>
                                <h4 class="mb-4">About us</h4>
                                <p>You've inspired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing CES is the world's gathering place for all those who </p><a class="font-weight-bold" href="#">Read more<span class="fas fa-chevron-right" data-fa-transform="shrink-6 down-2 right-2"></span></a>
                            </div><img class="rounded mt-4 img-fluid" src="assets/img/about-us.png" alt="" data-zanim-xs='{"from":{"opacity":0,"y":100},"to":{"opacity":1,"y":0},"duration":2}'  />
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-between mt-5 mt-md-0 pl-md-5">
                            <div>
                                <h4 class="mb-4">What is our goal</h4>
                                <p>Hear 9 inspiring talks, meet the best product people in Europe, and party together after the event! Twice a year, a group of interesting and impactful people gathers for the week-long experience — which attendees have described as “the ultimate brain spa” and “a journey into the future in the company of those creating it.”year, a group of interesting and impactful people gathers for the week-long experience — which attendees have described as “the ultimate brain spa” and “a journey into the future in the company of those creating it.”</p><a class="font-weight-bold" href="#">Read more<span class="fas fa-chevron-right" data-fa-transform="shrink-6 down-2 right-2"></span></a>
                            </div><img class="rounded mt-4 img-fluid" src="assets/img/section_01.jpg" alt=" " data-zanim-xs='{"from":{"opacity":0,"y":100},"to":{"opacity":1,"y":0},"duration":2}'  />
                        </div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
            <section id="Speakers">
                <div class="container">
                    <h3 class="mb-lg-6 mb-4">Our Speakers</h3>
                    <div class="row">
                        <div class="col-lg-3">
                            <p>Dummy text 2019 meshes international stars of the digital marketing scene, up-and-coming players and hidden champions of the industry.</p>
                            <p>Simultaneously, we’re giving you a solid mix of absolute experts with profound insights and engaging personalities, who you wouldn’t typically associate with marketing at first glance. Here’s a small taste of what’s to come Here’s a small taste of what’s to come</p>
                        </div>
                        <div class="col-lg-9 pl-lg-6 mt-5 mt-lg-0">
                            <?php
                            $sql3 = mysqli_query($conn, "SELECT * FROM speaker where type='VIP'");
                            $rom = mysqli_fetch_assoc($sql3);
                            $sql4 = mysqli_query($conn, "SELECT * FROM speaker where type='General Speaker'");
                            ?>
                            <div class="row">
                                <div class="col-12 col-md-5"><img class="rounded-soft img-fluid speaksty" src="admin/speaker/<?php echo $rom['image']; ?>" alt="thumb-image" /></div>
                                <div class="col pl-md-0 mt-1 mt-md-0">
                                    <h5 class="text-uppercase text-base font-weight-extra-bold mb-0 mt-1 mt-lg-0"><?php echo $rom['name']; ?></h5>
                                    <p class="fs-0 text-uppercase font-weight-extra-bold text-500 mb-1"><?php echo $rom['designation']; ?></p>
                                    <div class="col pl-0 fs-0"><a class="text-400" href="<?php echo $rom['fb']; ?>"><span class="fab fa-facebook"></span></a><a class="mx-2 text-400" href="<?php echo $rom['linked']; ?>"><span class="fab fa-linkedin-in"></span></a><a class="text-400" href="<?php echo $rom['google']; ?>"><span class="fab fa-google-plus-g"></span></a></div>
                                    <p class="mt-2 text-lowercase font-italic mb-0"><?php echo $rom['description']; ?></p>
                                </div>
                            </div>
                            <div class="row datso">
                                <?php
                                while ($rose = mysqli_fetch_assoc($sql4)) {
                                    ?>

                                    <div class="col-sm-6 col-md-6">

                                        <div class=""><img class="rounded-soft img-fluid flowed" src="admin/speaker/<?php echo $rose['image']; ?>" alt="thumb-image" /></div>
                                        <div class="col pl-0">
                                            <h6 class="fs-0 text-uppercase text-base font-weight-extra-bold mb-0"><?php echo $rose['name']; ?></h6>
                                            <p class="fs--1 text-uppercase font-weight-extra-bold text-500 mb-1"><?php echo $rose['designation']; ?></p>
                                            <div class="col pl-0"><a class="text-400" href="<?php echo $rose['fb']; ?>"><i class="fab fa-facebook"></i></a><a class="text-400 mx-2" href="<?php echo $rose['linked']; ?>"><i class="fab fa-linkedin-in"></i></a><a class="text-400" href="<?php echo $rose['google']; ?>"><i class="fab fa-google-plus-g"></i></a></div>
                                            <p class="mt-2 mb-0"><i><?php echo $rose['description']; ?></i></p>
                                        </div>

                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
            <section>
                <div class="bg-holder overlay overlay-1" style="background-image:url(assets/img/background/submit-bg.jpg);"></div>
                <!--/.bg-holder-->
                <div class="container">
                    <div class="row text-white justify-content-center">
                        <div class="col-xl-7 col-lg-9 text-center">
                            <h3 class="mb-3 ls text-white fs-md-2 fs-lg-3">SUBMIT YOUR CONTRIBUTION WORK</h3>
                            <p class="lead font-weight-light text-400">Prospective authors are invited to submit their minimum 250 words abstracts using the form given below. The submitted abstracts should clearly mention the Objective(s), Problem Statement, Research Question(s), Research Design, and Findings.</p><button class="text-base ml-lg-4 mt-3 mt-lg-0 btn btn-outline-light mb-4 mb-lg-0" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Submit Abstract</button>
                        </div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
            <section>
                <div class="container">
                    <h3 class="mb-6 ml-2">Past Events</h3>
                    <div class="row no-gutters">
                        <div class="col pl-0"><a href="pastevents.html">
                                <div class="row no-gutters mb-2">
                                    <div class="col-md-6 px-2 mb-3 mb-md-0">
                                        <div class="hoverbox rounded-soft text-center"><img class="img-fluid rounded-soft" src="assets/img/gallery/gellary-img-77.png" alt="" />
                                            <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                    <h5 class="text-white fs-2">International Conference on Science, Reason and Religion <br /><span>Minhaj University Lahore</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-6 px-2 mb-3">
                                                <div class="hoverbox rounded-soft"><img class="img-fluid rounded-soft" src="assets/img/gallery/gellary-img-3.jpg" alt="" />
                                                    <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                        <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                            <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 px-2 mb-3">
                                                <div class="hoverbox rounded-soft px-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/gellary-img.jpg" alt="" />
                                                    <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                        <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                            <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 px-2">
                                                <div class="hoverbox rounded-soft px-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/gellary-img-2.png" alt="" />
                                                    <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                        <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                            <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 px-2">
                                                <div class="hoverbox rounded-soft px-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/rectangle-5.png" alt="" />
                                                    <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                        <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                            <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters mt-3">
                                    <div class="col-6 px-2 col-md-3">
                                        <div class="hoverbox rounded-soft px-0 mb-3 mb-md-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/rectangle-2.png" alt="" />
                                            <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                    <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2 col-md-3">
                                        <div class="hoverbox rounded-soft px-0 mb-3 mb-md-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/rectangle-7.png" alt="" />
                                            <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                    <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2 col-md-3">
                                        <div class="hoverbox rounded-soft px-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/rectangle-8.png" alt="" />
                                            <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                    <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 px-2 col-md-3">
                                        <div class="hoverbox rounded-soft px-0"><img class="img-fluid rounded-soft" src="assets/img/gallery/rectangle-9.png" alt="" />
                                            <div class="hoverbox-content bg-overlay-primary align-items-center d-flex justify-content-center">
                                                <div><small class="text-white text-center mb-0">15-19 March ,2018</small>
                                                    <h5 class="text-white fs--1 fs-lg-0">Confernce on future of uX <br /><span>design and global networking</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
            <section class="bg-200">
                <div class="container">
                    <h3 class="mb-6">Event Partners</h3>
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="100" data-zanim-xs='{"animation":"slide-right","delay":0.1}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="130" data-zanim-xs='{"animation":"slide-right","delay":0.2}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="120" data-zanim-xs='{"animation":"slide-right","delay":0.3}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="120" data-zanim-xs='{"animation":"slide-right","delay":0.4}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="110" data-zanim-xs='{"animation":"slide-right","delay":0.5}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="110" data-zanim-xs='{"animation":"slide-right","delay":0.6}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="120" data-zanim-xs='{"animation":"slide-right","delay":0.7}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="120" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="130" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="140" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="130" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="120" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="90" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="130" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="140" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-6">
                            <div class="d-flex justify-content-center align-items-center border border-2x rounded-soft mb-4" style="height:150px;"><img src="assets/img/logos/Minhaj-TV-logo.png" alt="" width="100" data-zanim-xs='{"animation":"slide-right","delay":0.8}' /></div>
                        </div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
            <section>
                <div class="container">
                    <h3 class="mb-6">Sponsors</h3>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/apple.png" alt="" width="75" /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/apple.png" alt="" width="100" /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/apple.png" alt="" width="70"  /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/apple.png" alt="" width="100"  /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/apple.png" alt="" width="100"  /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/apple.png" alt="" width="100"  /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/adidas.png" alt="" width="100"  /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/adidas.png" alt="" width="100"/></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/adidas.png" alt="" width="100" /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/adidas.png" alt="" width="100"/></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/adidas.png" alt="" width="100"  /></div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-6 col-lg-3 col-xl-2 mb-4">
                            <div class="border border-2x rounded-soft d-flex align-items-center justify-content-center p-3" style="height: 150px;"><img src="assets/img/logos/adidas.png" alt="" width="100"  /></div>
                        </div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
            <section id="price">
                <div class="bg-holder overlay bg-overlay-primary-dark" style="background-image:url(assets/img/background/bg-pricing.png);"></div>
                <!--/.bg-holder-->
                <div class="container">
                    <h3 class="pb-6 text-white">Registration Pricing</h3>
                    <div class="card-deck">
                        <div class="card mb-3 bg-transparent border-white-20">
                            <div class="card-body">
                                <div class="d-flex justify-content-between pb-1 border-wb-20">
                                    <h6 class="fs-0 text-white mb-0">Bronze</h6><small class="mb-0 text-white-70">75 Remaining</small>
                                </div>
                                <div class="row py-5 justify-content-center">
                                    <div class="col-auto">
                                        <h6 class="d-flex fs-4 mb-0 text-white"><span class="fs-0 rupee">PKR</span><span>  <?php echo $pro['bronze']; ?> </span></h6><small class="text-white-30 mb-0">Single Day for <span class="font-weight-bold text-white-50">1 Person</span></small>
                                    </div>
                                </div>
                                <hr class="border-wb-20 mt-0" />
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <ul class="fa-ul fs--1 text-white pl-3">
                                            <li><span class="fa-li"><i class="fas fa-angle-right text-center"></i></span>Expo</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Seminar</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Live Concert</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Expo Party</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Food & Drinks</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Master classes</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Tshirt & Badges</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Mobile app</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Gala Dinner</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Workshop</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent text-center"><a class="btn btn-lg btn-outline-primary text-white" href="#">JOIN NOW !</a></div>
                        </div>
                        <div class="card mb-3 bg-transparent border-white-20">
                            <div class="card-body">
                                <div class="d-flex justify-content-between pb-1 border-wb-20">
                                    <h6 class="fs-0 text-white mb-0">Silver</h6><small class="mb-0 text-white-70">250 Remaining</small>
                                </div>
                                <div class="row py-5 justify-content-center">
                                    <div class="col-auto">
                                        <h6 class="d-flex fs-4 mb-0 text-white"><span class="fs-0 rupee">PKR</span><span> <?php echo $pro['silver']; ?> </span></h6><small class="text-white-30 mb-0">Every Day for <span class="font-weight-bold text-white-50">1 Person</span></small>
                                    </div>
                                </div>
                                <hr class="border-wb-20 mt-0" />
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <ul class="fa-ul fs--1 text-white pl-3">
                                            <li><span class="fa-li"><i class="fas fa-angle-right text-center"></i></span>Expo</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Seminar</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Live Concert</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Expo Party</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Food & Drinks</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Master classes</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Tshirt & Badges</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Mobile app</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Gala Dinner</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Workshop</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent text-center"><a class="btn btn-lg btn-outline-primary text-white" href="#">JOIN NOW !</a></div>
                        </div>
                        <div class="w-100 d-none d-sm-block d-lg-none"></div>
                        <div class="card mb-3 border bg-transparent">
                            <div class="card-body">
                                <div class="d-flex justify-content-between pb-1 border-bottom">
                                    <h6 class="fs-0 text-white mb-0">Gold</h6><small class="mb-0 text-white-70">68 Remaining</small>
                                </div>
                                <div class="row py-5 justify-content-center">
                                    <div class="col-auto">
                                        <h6 class="d-flex fs-4 mb-0 text-white"><span class="fs-0 rupee">PKR</span><span> <?php echo $pro['gold']; ?> </span></h6><small class="text-white-30 mb-0">Every Day for <span class="font-weight-bold text-white-50">1 Person</span></small>
                                    </div>
                                </div>
                                <hr class="bg-white mt-0" />
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <ul class="fa-ul fs--1 text-white pl-3">
                                            <li><span class="fa-li"><i class="fas fa-angle-right text-center"></i></span>Expo</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Seminar</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Live Concert</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Expo Party</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Food & Drinks</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Master classes</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Tshirt & Badges</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Mobile app</li>
                                            <li class="text-muted"><span class="fa-li"><i class="fas fa-angle-right"></i></span>Gala Dinner</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Workshop</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent text-center"><a class="btn btn-lg btn-primary text-white" href="#">JOIN NOW !</a></div>
                        </div>
                        <div class="card mb-3 border-white-20 bg-transparent">
                            <div class="card-body">
                                <div class="d-flex justify-content-between pb-1 border-wb-20">
                                    <h6 class="fs-0 text-white mb-0">Platinum</h6><small class="mb-0 text-white-70">20 Remaining</small>
                                </div>
                                <div class="row py-5 justify-content-center">
                                    <div class="col-auto">
                                        <h6 class="d-flex fs-4 mb-0 text-white"><span class="fs-0 rupee">PKR</span><span>  <?php echo $pro['platinum']; ?>  </span></h6><small class="text-white-30 mb-0">Every Day for <span class="font-weight-bold text-white-50">1 Person</span></small>
                                    </div>
                                </div>
                                <hr class="border-wb-20 mt-0" />
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <ul class="fa-ul fs--1 text-white pl-3">
                                            <li><span class="fa-li"><i class="fas fa-angle-right text-center"></i></span>Expo</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Seminar</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Live Concert</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Expo Party</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Food & Drinks</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Master classes</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Tshirt & Badges</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Mobile app</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Gala Dinner</li>
                                            <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Workshop</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 text-center bg-transparent"><a class="btn btn-lg btn-outline-primary text-white" href="#">JOIN NOW !</a></div>
                        </div>
                    </div>
                </div>
            </section>

      <!-- <section> begin ============================-->
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

      <!-- <section> begin ============================-->
            <section style=" background-color: #302758;">
                <div class="container">
                    <h3 class="text-white mb-4">FAQ</h3>
                    <div class="row">
                        <div class="col-md-8 px-0">
                            <div class="ui accordion ml-2">
                                <div class="title active text-400 font-weight-bold"><i class="dropdown icon"></i> Can I submitt Full paper without submitting abstract on due date?</div>
                                <div class="content active ml-4 text-200 mt-0">
                                    <p class="transition visible" style="display: block !important;"> No you can not submitt full paper without preior submission of Abstract Paper. Yes, after approval of abstarct one can submitt full paper to present and publish </p>
                                </div>
                                <div class="title text-400 font-weight-bold"><i class="dropdown icon"></i> How can I get to the conference?</div>
                                <div class="content ml-4 text-200 mt-0">
                                    <p>Minhaj University Conference Hall is served by public buses like Sppedo and SWVL and Airlift. All buses are accessible – many streetcars are as well. </p>
                                </div>
                                <div class="title text-400 font-weight-bold"><i class="dropdown icon"></i> Is there accessible parking available?</div>
                                <div class="content ml-4 text-200 mt-0">
                                    <p>We can facilitate accessible parking where required. Please fill in this form in advance so we can best assist. A member of the community support team will contact you shortly after.</p>
                                </div>
                                <div class="title text-400 font-weight-bold"><i class="dropdown icon"></i> Is there accessible accommodation nearby?</div>
                                <div class="content ml-4 text-200 mt-0">
                                    <p>There are several hotels close to the venue which can facilitate attendees with disabilities or special needs. Hotel <a href="#!">PC and Avari Hotel lahore</a> is less than 300 metres from the conference centre and offers accessible rooms. For alternative accessible accommodation nearby please see <a href="#!">here</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

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
        <div class="modal fade bd-example-modal-lg overflow-auto" tabindex="-1" role="dialog" aria-labelledby="registration-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header flex-column"><button class="close pr-3 pt-2" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <div class="w-75">
                            <h4 class="pl-3 text-900" id="registration-modal">Register For Conference</h4>
                            <p class="pl-3 mb-0">Conference 2020 will be available in September. Please provide your information to be notified when Conference briefing are made.</p>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form class="zform" method="post">
                            <div class="from-row">
                                <div class="col-lg-9">
                                    <div class="form-group"><input class="form-control" type="text" name="name" required="" placeholder="First Name*"></div>
                                </div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9 mt-sm-0 mt-3">
                                    <div class="form-group"><input class="form-control" type="text" name="name" required="" placeholder="Last Name*"></div>
                                </div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9">
                                    <div class="form-group"><input class="form-control" type="email" name="from" required="" placeholder="Business Email Address*"></div>
                                </div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9 mt-sm-0 mt-3">
                                    <div class="form-group"><input class="form-control" type="tel" placeholder="Phone"></div>
                                </div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9">
                                    <div class="form-group"><input class="form-control" type="text" placeholder="Company Name"></div>
                                </div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9 mb-3"><select class="custom-select mr-sm-2 text-400" id="inlineFormCustomSelect">
                                        <option selected="">Country Name</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="2">India</option>
                                        <option value="3">Nepal</option>
                                    </select></div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9 mt-sm-0 order-sm-0 order-1">
                                    <div class="custom-control custom-checkbox mb-3"><input class="custom-control-input" id="customControlValidation3" type="checkbox" name="radio-stacked" required="" value="option3"><label class="custom-control-label fs-0 text-500 text-base" for="customControlValidation3">I accept the terms of the Plagiarism Statement for Paper Submission, and acknowledge that the submitted paper is an original research contribution with the references properly cited in the manuscript <a class="text-decoration-none" href="#">Mul Conference Terms and Conditions.</a> </label></div>
                                </div>
                            </div>
                            <div class="from-row">
                                <div class="col-lg-9 pb-3"><button class="btn btn-danger btn-lg" type="submit" name="submit" value="Send!">Submmit</button></div>
                            </div>
                            <div class="zform-feedback"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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



</html>