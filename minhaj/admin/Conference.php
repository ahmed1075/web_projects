<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
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
                        <h1 class="text-center dash" style="color: black;font-size: 30px">Set Conference Schedule </h1>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <form method="post" action="Conferenceproc.php" style="margin-top: 20px">
                            <fieldset class="size">
                                <div class="form-group">

                                    <select name="day" class="form-control" required>
                                        <option value="Day 1">Day 1</option>
                                        <option value="Day 2">Day 2</option>
                                        <option value="Day 3">Day 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="Date" type="date" class="form-control" placeholder="Date" required>
                                </div>
                                <div class="form-group">
                                    <input name="Venue" type="text" class="form-control" placeholder="Venue" required>
                                </div>
                                <div class="form-group">
                                    <input name="Time" type="time" class="form-control" placeholder="Time" required>
                                </div>
                                <div class="form-group">
                                    <input name="title" type="text" class="form-control" placeholder="Title" required>
                                </div>
                                <div class="form-group">

                                    <textarea name="descp" class="form-control" placeholder="Description"  rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <select name="Guest" type="number" class="form-control"  required >
                                        <option value="">Select Speaker</option> 
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT * FROM speaker WHERE type = 'Guest Speaker'");
                                        while ($row = mysqli_fetch_assoc($sql)) {
                                            ?>    
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>

                                        <?php } ?>
                                    </select>
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
        window.location.href = 'index.php';
    </script>
    <?php
}
?>