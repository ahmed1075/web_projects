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
                <img class="logo" src="../images/logo.png"></div>
                <h1 class="text-center dash" style="color: black;padding-left: 290px">Welcome to Admin Panel </h1>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <input type="button" class="btn btn-primary" onclick="window.location = 'student.php'" value="Students">
                            <input type="button" class="btn btn-danger num" onclick="window.location = 'logout.php'" value="Log out">

                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="row">
            <div class="offset-md-5 offset-lg-5 offset-sm-5 col-md-6 dump">
                <form method="post" action="studentproc.php">
                    <fieldset class="size">
                        <h2 > <legend class="head"style="color: black" > Register </legend></h2>
                        <!-- First Name -->
                        <div class="form-group">
                            <input name="first_name" type="name" class="form-control" placeholder="First Name">
                        </div>
                        <!-- Last Name -->
                        <div class="form-group">
                            <input name="last_name" type="name" class="form-control" placeholder="Last Name">
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Enter email">
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <input name="cpassword" type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <!-- Contact no -->
                        <div class="form-group">
                            <input name="contact_no" type="tel" class="form-control" placeholder="Contact no">
                        </div>
                        <!-- Company -->
                        <div class="form-group">
                            <input name="company" type="text" class="form-control" placeholder="Company Name">
                        </div>
                        <!-- Country -->
                        <div class="form-group">
                            <input name="country" type="text" class="form-control" placeholder="Country">
                        </div>

                        <button name="submit" type="submit" value="submit" class="btn btn-primary merge">Register</button>
                    </fieldset>
                </form>
            </div>

        </div>

    </body>

</html>