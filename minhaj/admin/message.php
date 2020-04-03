<?php
$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
$query = mysqli_query($conn, "SELECT * FROM contact");
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
                            <input type="button" class="btn btn-success" onclick="window.location = 'admindash.php'" value="Dash board">
                            <input type="button" class="btn btn-danger" onclick="window.location = 'logout.php'" value="Log out">
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['message']; ?> </td>
                                <td> <input type="button" class="btn btn-danger" onclick="window.location = 'delrecord.php?status=<?php echo $row['id']; ?>'" value="Delete"> </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>  


    </body>
</html>