<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
if (isset($_SESSION['username'])) {
    $sql = mysqli_query($conn, "SELECT * FROM price");
    $check = mysqli_num_rows($sql);
    if ($check == 0) {
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
                                    <input type="button" class="btn btn-primary dash" onclick="window.location = 'updateprice.php'" value="Update prices">
                                    <input type="button" class="btn btn-success dash" onclick="window.location = 'admindash.php'" value="Dash Board">
                                    <input type="button" class="btn btn-danger num" onclick="window.location = 'logout.php'" value="Log out">
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>

                <div class="row">
                    <?php include "sidebar.html"; ?>


                    <div  class="col-md-10 col-lg-10 col-sm-12 col-xs-12 ">

                        <div class="w3-container">
                            <h1 class="text-center dash" style="color: black">Add Price </h1>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <form method="post" action="priceprocess.php" style="margin-top: 40px">
                                <fieldset class="size">
                                    <!-- Bronze -->
                                    <div class="form-group">
                                        <input name="Bronze" type="text" class="form-control" placeholder="Bronze">
                                    </div>
                                    <!-- Silver -->
                                    <div class="form-group">
                                        <input name="Silver" type="text" class="form-control" placeholder="Silver">
                                    </div>
                                    <!-- Gold -->
                                    <div class="form-group">
                                        <input name="Gold" type="text" class="form-control" placeholder="Gold">
                                    </div>
                                    <!-- Platinum -->
                                    <div class="form-group">
                                        <input name="Platinum" type="text" class="form-control" placeholder="Platinum">
                                    </div>


                                    <button name="submit" type="submit" value="submit" class="btn btn-primary merge">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>  

            </body>
        </html>
        <?php
    } else {
        ?>
        <script>
            window.location.href = 'updateprice.php';
        </script>
        <?php
    }
} else {
    ?>
    <script>
        window.location.href = 'index.php';
    </script>
    <?php
}
?>