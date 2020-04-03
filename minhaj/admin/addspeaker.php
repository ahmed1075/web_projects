<?php
session_start();
if (isset($_SESSION['username'])) {

    $conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
    ?>
    <html>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                <input type="button" class="btn btn-primary" onclick="window.location = 'speaker.php'" value="Speakers">
                                <input type="button" class="btn btn-danger btn-style-6" onclick="window.location = 'logout.php'" value="Log out">

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <h3 class="h3 addspeaker" style="color: black"> Add Speaker </h3>
            <div class="row restyle">
                <form method="post" action="speakerproc.php" enctype="multipart/form-data">
                    <fieldset class="resize">
                        <!-- Name -->
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Enter name">
                        </div>
                        <!-- Designation -->
                        <div class="form-group">
                            <input name="desig" type="text" class="form-control" placeholder="Enter Designation">
                        </div>

                        <!-- Links -->
                        <div class="form-group">
                            <input name="link" type="text" class="form-control" placeholder="Enter Linkedin link"><br>
                            <input name="fb" type="text" class="form-control" placeholder="Enter Facebook link"><br>
                            <input name="google" type="text" class="form-control" placeholder="Enter Google+ link">
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Enter Designation upto 25 Words" rows="3"></textarea>
                        </div>

                        <!-- Type -->
                        <div class="form-group">
                            <select name="type" class="form-control">
                                <option value="type" disabled selected>Select type of Speaker</option>
                                <option value="VIP">VIP</option>
                                <option value="General Speaker">General Speaker</option>
                                <option value="Guest Speaker">Guest Speaker</option>
                            </select>
                        </div>

                        <!-- Image -->
                        <div class="form-group">
                            <input name="image" type="file" class="form-control btn btn-success">
                        </div>

                        <input name="set" type="submit" value="Add Speaker" class="btn btn-primary spek">
                    </fieldset>
                </form>
            </div>
        </body>
    </html>

    <?php
} else {
    header("location:index.php");
}
?>