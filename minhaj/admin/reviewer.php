<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
if (isset($_SESSION['username'])) {
    $sql = mysqli_query($conn, "SELECT * FROM reviewer");
    ?>
    <html>
        <head>
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
                                <input type="button" class="btn btn-success dash" onclick="window.location = 'admindash.php'" value="Dash Board">
                                <input type="button" class="btn btn-primary" onclick="window.location = 'addreviewer.php'" value="Add Reviewer">
                                <input type="button" class="btn btn-danger " onclick="window.location = 'logout.php'" value="Log out">

                            </li>
                        </ul>

                    </div>
                </nav>
            </header>


            <div class="row">
                <?php include "sidebar.html"; ?>
                <div  class="col-md-10 col-lg-10 col-sm-12 col-xs-12 " style="margin-top: -50px">
                    <div class="row d-flex justify-content-center">
                        <table class="table" style="margin-right: 35px">
                            <thead>
                                <tr>
                                    <th colspan="4"> <h2> Reviewers </h2> </th>
                            </tr>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Delete Reviewer</th>
                            </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td> <?php echo $row['email']; ?> </td>
                                    <td> <?php echo $row['dept']; ?> </td>
                                    <td> <input type="button" class="btn btn-danger" onclick="window.location = 'delrev.php?status=<?php echo $row['id']; ?>'" value="Delete"> </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>  


            <?php
        } else {
            header("location:index.php");
        }
        ?>