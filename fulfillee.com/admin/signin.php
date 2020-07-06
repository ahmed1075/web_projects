<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $sql = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' && password='$pass'");



    if ($sql) {
        while ($row = mysqli_fetch_assoc($sql)) {
            if (is_null($row['shows']) || $row['shows'] == 'enable') {

                session_start();
                $_SESSION["email"] = "$email";
                $_SESSION["password"] = "$pass";
                $_SESSION["id"] = $row['id'];
                if ($row['role'] == 'client' || $row['role'] == 'employee') {
                    ?>
                    <script>
                        window.location.href = 'index.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script>
                        window.location.href = '../superadmin/index.php';
                    </script>
                    <?php
                    
                }
            }
        }
    } else {
        ?>
        <script>
            window.alert('You are not Login Try Again');
            window.location.href = 'signin.php';
        </script>
        <?php
    }
}
?>






<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />

        <title>FullFillee</title>
        <link href="img/Asset 8.png" rel="icon" />

        <meta name="description" content="" />
        <meta name="author" content="pixelcave" />
        <meta name="robots" content="noindex, nofollow" />
        <meta
            name="viewport"
            content="width=device-width,initial-scale=1.0,user-scalable=0"
            />

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->

        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57" />
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72" />
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76" />
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114" />
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120" />
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144" />
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152" />
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180" />
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css" />

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css" />

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css" />
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>
        <!-- CSS only -->
        <link
            rel="stylesheet"
            type="text/css"
            href="//fonts.googleapis.com/css?family=Raleway"
            />
        <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700,900&display=swap" rel="stylesheet"> -->
        <link
            href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;700;900&display=swap"
            rel="stylesheet"
            />
        <link
            href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
            rel="stylesheet"
            />

        <style>
            /* @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@700;900&display=swap'); */
            .a {
                font-weight: 700;
                text-align: left;
                font-family: Raleway;
                color: black;
                font-size: 35px;
                margin-left: 20px;
                margin-top: 5px;
                margin-bottom: 0px;
            }
            .a1 {
                font-weight: 700;
                text-align: left;
                font-family: Raleway;
                color: black;
                font-size: 28px;
                margin-left: 20px;
                margin-top: 5px;
            }
            .mainLoginInput:-webkit-input-placeholder {
                font-family: Lato;
            }
            @media screen and (min-width: 1200px) {
                .set {
                    background-color: white;
                    height: 580px;
                    margin: 20px 0px 0px 20px;
                    border-radius: 15px;
                    padding: 0px;
                    height: 560px;
                }
                .set1 {
                    font-weight: 100;
                    font-size: 18px;
                    font-family: Raleway;
                    color: black;
                    text-align: left;
                    margin-left: 20px;
                    margin-top: 80px;
                    margin-bottom: 50px;
                }
                .display {
                    height: 600px;
                    border-radius: 15px;
                    margin: 10px;
                    padding: 0px;
                }
                .bg-display{
                    padding-left:10%;
                }
            }
            @media screen and (max-width: 942px) {
                .set {
                    background-color: white;
                    height: 580px;
                    margin: 15px 10px 0px 10px;
                    border-radius: 15px;
                    padding: 0px;
                    height: 560px;
                }
                .set1 {
                    font-weight: 100;
                    font-size: 18px;
                    font-family: Raleway;
                    color: black;
                    text-align: left;
                    margin-left: 20px;
                    margin-top: 10px;
                    margin-bottom: 50px;
                }
                .display {
                    height: 600px;
                    border-radius: 15px;
                    margin: 10px 0px 0px 0px;
                    padding: 0px;
                }
            }

            h4,span{
                font-family:Raleway;
            }
        </style>
    </head>
    <body
        style="
        background-image: url('img/Group 29211@2x.png');
        background-repeat: no-repeat;
        background-size: cover;
        overflow-x: hidden;
        "
        class="img-responsive"
        >
        <div
            class="animation-fadeIn col-lg-12 offset-lg-3 offset-md-3 col-md-12 col-xl-12 col-sm-12"
            >
            <center>
                <img
                    src="img/fulfilleedotcom2@2x.png"
                    class="img-responsive"
                    style="
                    margin-bottom: 40px;
                    height: 48px;
                    width: auto;
                    margin-top: 50px;
                    margin-left: -100px;
                    "
                    />
            </center>
            <div class="container" >
                <center>
                    <div class="row">
                        <div class="col-md-12 bg-display" >
                            <div
                                class="col-md-5 col-lg-5 col-xs-12 col-xl-12 offset-md-1 display"
                                style="background-color: #ecbe44;"
                                >
                                <h1
                                    style="
                                    font-weight: 900;
                                    display: block;

                                    text-align: left;
                                    font-family: 'Raleway', sans-serif;
                                    color: black;
                                    margin-left: 20px;
                                    margin-top: 30px;
                                    margin-bottom: 0px;
                                    "
                                    >
                                    Welcome!
                                </h1>
                                <h3 class="a"><b>Join Us Today</b></h3>
                                <h3 class="a1"><b>Ship Anything From China</b></h3>
                                <div
                                    style="
                                    background-repeat: no-repeat;
                                    background-size: cover;
                                    height: 250px;
                                    margin-top: 80px;
                                    "
                                    class="img-fluid"
                                    >
                                    <img
                                        src="img/161595-OVE4FZ-667@2x.png"
                                        alt=""
                                        class="img-responsive"
                                        style="height: 328px;"
                                        />
                                </div>
                            </div>


                            <div
                                class="col-md-5 col-lg-5  col-xs-12 col-xl-12 display"
                                style="
                                background-color: white;
                                border-radius: 15px;
                                background-color: #ecbe44;
                                "
                                >
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-11 set">
                                            <h4 class="set1">
                                            <h4 style="text-align: left;"><b class="set1" ><b style="font-size:30px">Login Your Account.</b></b></h4>
                                            </h4>
                                            <br /><br />
                                            <form class="form-group" action="signin.php" method="post">
                                                <div class="form-group col-md-12">
                                                    <input
                                                        type="email"
                                                        class="form-control mainLoginInput"
                                                        id="email" name="email" required
                                                        placeholder="Email"
                                                        style="
                                                        border: none;
                                                        border-bottom: 2px solid #d8e0e5;
                                                        "
                                                        />
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <input
                                                        type="password"
                                                        class="form-control mainLoginInput"
                                                        id="password" name="password" required
                                                        placeholder="Password"
                                                        style="
                                                        border: none;
                                                        border-bottom: 2px solid #d8e0e5;
                                                        "
                                                        />
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="form-check" style="text-align: right;">
                                                        <label
                                                            class="form-check-label"
                                                            for="gridCheck"
                                                            style="
                                                            font-size: 10px;
                                                            margin-left: 10px;
                                                            font-family: Raleway;
                                                            "
                                                            >
                                                            <a style="color: black; font-weight: bold;"
                                                               ><u>Forget Password?</u></a
                                                            >
                                                            <br /><br
                                                                /></label>
                                                    </div>
                                                </div>

                                                <center>
                                                    <button 
                                                        type="submit"
                                                        class="btn" name="submit" id="submit"
                                                        style="
                                                        background-color: black;
                                                        color: white;
                                                        width: 80%;
                                                        border-radius: 20px;
                                                        font-family: Raleway;
                                                        "
                                                        >
                                                        LOGIN
                                                    </button>
                                                </center>
                                                <div class="form-group col-md-12">
                                                    <div class="form-check">
                                                        <br />
                                                        <label
                                                            class="form-check-label"
                                                            for="gridCheck"
                                                            style="
                                                            font-size: 12px;
                                                            margin-left: 10px;
                                                            font-family: Raleway;
                                                            "
                                                            >
                                                            Don't Have an Account? <a
                                                                style="color: #ecbe44;"
                                                                href="signup.php"
                                                                >Register Now</a
                                                            >
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>

        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/login.js"></script>
        <script>
            $(function () {
                Login.init();
            });
        </script>
    </body>
</html>
