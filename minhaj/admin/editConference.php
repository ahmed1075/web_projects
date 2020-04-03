<?php
session_start();
if (isset($_SESSION['username'])) {
    $conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
    $sql = mysqli_query($conn, "SELECT * FROM schedule");
    ?>
    <html>
        <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
                            </li>
                        </ul>

                    </div>
                </nav>
            </header>


            <div class="row">
                <?php include "sidebar.html"; ?>


                <div  class="col-md-10 col-lg-10 col-sm-12 col-xs-12 ">

                
                    <div class="row d-flex justify-content-center">
                        <table class="table" style="margin-right: 35px;margin-top: -4px">
                            <thead>
                                <tr>
                                    <th colspan="5">Edit Conference Schedule</th>
                                </tr>
                                <tr>
                                    <th scope="col">Days</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Guest Speaker </th>
                                    <th scope="col">Edit Schedule</th>
                                </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['day'] . "," . $row['date']; ?></td>
                                    <td> <?php echo $row['Title']; ?> </td>
                                    <td> <?php echo $row['Description']; ?> </td>
                                    <?php
                                    $a = $row['GustSpeaker'];
                                    $sql1 = mysqli_query($conn, "SELECT * FROM speaker WHERE id = '$a'");
                                    $aa = mysqli_fetch_assoc($sql1);
                                    ?>

                                    <td><?php echo $aa['name'] ?></td>
                                    <td> <input type="button" class="btn btn-success" onclick="window.location = 'editConferenceprocess.php?status=<?php echo $row['id']; ?>'" value="Edit Schedule"> </td>
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
            ?>
            <script>
                window.location.href = 'index.php';
            </script>
            <?php
        }
        ?>