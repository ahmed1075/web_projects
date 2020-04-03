<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
if (isset($_SESSION['username'])) {
    $query = mysqli_query($conn, "SELECT * FROM price");
    $row = mysqli_fetch_assoc($query);
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
                    <img class="logo" src="../images/logo.png"></div>
                    <h1 class="text-center dash" style="color: black;padding-left: 290px">Welcome to Admin Panel </h1>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <input type="button" class="btn btn-success dash" onclick="window.location = 'admindash.php'" value="Dash Board">
                                <input type="button" class="btn btn-danger num" onclick="window.location = 'logout.php'" value="Log out">

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            <div class="row">
                <div class="offset-md-5 offset-lg-5 offset-sm-5 col-md-6 dump">
                    <form method="post" action="updateproc.php">
                        <fieldset class="size">
                            <h2> <legend class="head" style="color: black;margin-top: 50px"> Update Price </legend></h2>
                            <!-- Bronze -->
                            <div class="form-group">
                                <label>Bronze</label>
                                <input name="Bronze" type="text" class="form-control" value=" <?php echo $row['bronze']; ?> ">
                            </div>
                            <!-- Silver -->
                            <div class="form-group">
                                <label>Silver</label>
                                <input name="Silver" type="text" class="form-control" value=" <?php echo $row['silver']; ?> ">
                            </div>
                            <!-- Gold -->
                            <div class="form-group">
                                <label>Gold</label>
                                <input name="Gold" type="text" class="form-control" value=" <?php echo $row['gold']; ?> ">
                            </div>
                            <!-- Platinum -->
                            <div class="form-group">
                                <label>Platinum</label>
                                <input name="Platinum" type="text" class="form-control" value=" <?php echo $row['platinum']; ?> ">
                            </div>


                            <button name="update" type="submit" value="submit" class="btn btn-primary merge">Update</button>
                        </fieldset>
                    </form>
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
    </body>

</html>