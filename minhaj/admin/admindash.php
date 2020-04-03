<?php
session_start();
if (isset($_SESSION['username'])) {

    $conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
    $sql = "SELECT * FROM abstract";
    $sql1 = mysqli_query($conn, "SELECT * FROM register");

    $query = mysqli_query($conn, $sql);
    ?>
    <html>
        <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <title> Minhaj University Conference </title> 
            <link rel="icon" href="../images/favicon-96x96.png" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="../css/main.css">
        </head>

        <body class="bg">


            <header class="header ">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <img class="logo" src="../images/logo.png">
                    <h1 class="text-center dash" style="color: black;padding-left: 290px">Welcome to Admin Panel </h1>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <input type="button" class="btn btn-danger btn-style-5" onclick="window.location = 'logout.php'" value="Log out">
                            </li>
                        </ul>

                    </div>
                </nav>
            </header>

            <!--          change  -->

            <div class="row">
                <?php include "sidebar.html"; ?>


                <div  class="col-md-10 col-lg-10 col-sm-12 col-xs-12 ">


                    <div class="row d-flex justify-content-center">
                        <table class="table" style="margin-right: 35px;margin-top: -4px">
                            <thead>
                                <tr>
                                    <th colspan="3">Student Records</th>
                                </tr>
                                <tr>
                                    <th scope="col">Registration No</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($sql1)) {
                                ?>
                                <tr>
                                    <td>MU-<?php echo $row['id']; ?></td>
                                    <td> <?php echo $row['email']; ?> </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>  


            <!--change-->


            <div class="col-md-3"></div>
        </div>
        <?php
    } else {
        header("location:index.php");
    }
    ?>