<?php
session_start();
if (isset($_SESSION['username'])) {
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
                                <input type="button" class="btn btn-success dash" onclick="window.location = 'admindash.php'" value="Dash Board">
                                <input type="button" class="btn btn-primary" onclick="window.location = 'reviewer.php'" value="Reviewer">
                                <input type="button" class="btn btn-danger " onclick="window.location = 'logout.php'" value="Log out">

                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="row mer"><h3 class="h3" style="color: black"> Add Reviewer </h3></div>
            <div class="row restyle">
                <form method="post" action="">
                    <fieldset class="resize">
                        <!-- Name -->
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Enter name" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <!-- Sub Theme -->
                        <div class="form-group">       
                            <select name="sub_theme" class="browser-default custom-select" required>
                                <option disabled selected>Select Sub Theme</option>
                                <option value="Cloud Computing">Cloud Computing</option>
                                <option value="Artificial intelligence">Artificial intelligence</option>
                                <option value="Block Chain">Block Chain</option>
                                <option value="Computer Vision">Computer Vision</option>
                                <option value="Internet of Things">Internet of Things</option>
                                <option value="Information Security">Information Security</option>
                            </select>
                        </div> 

                        <input name="set" type="submit" value="AddReviewer" class="btn btn-primary remer">
                    </fieldset>
                </form>
            </div>
        </body>

        <?php
        $conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
        if (isset($_POST['set'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $theme = $_POST['sub_theme'];

            $check = mysqli_query($conn, "SELECT * FROM reviewer where dept='$theme'");
            $line = mysqli_num_rows($check);
            if ($line == 0) {
                $sql = mysqli_query($conn, "INSERT INTO reviewer(name,email,password,dept) VALUES('$name','$email','$pass','$theme')");
                if ($sql) {
                    ?>
                    <script>
                        window.alert('Reviewer Added');
                        window.location.href = 'reviewer.php';
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        window.alert('Reviewer not Added Try Again!');
                        window.location.href = 'review.php';
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    window.alert('This sub theme reviewer already exist Select another please!');
                    window.location.href = 'addreviewer.php';
                </script>
                <?php
            }
        }
    } else {
        header("location:index.php");
    }
    ?>
</html>
