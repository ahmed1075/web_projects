<?php
session_start();

if (isset($_SESSION['email'])) {
    ?>
    <html>

        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <title> Minhaj University Conference </title> 
            <link rel="icon" href="images/favicon-96x96.png" type="image/x-icon">
            <link rel="stylesheet" type="text/css" href="css/main.css">
        </head>

        <body class="bg">
            <div class="row">
                <div class="col-md-9">
                    <img class="logo" src="images/logo.png"></div>
                <div class="col-md-3 space2">
                    <input type="button" class="btn btn-primary" onclick="window.location = 'iThenticate.php'" value="IThenticate Report">

                </div></div>
            <div class="row">
                <div class="offset-md-5">
                    <form method="post" action="abstractpaper.php" enctype="multipart/form-data">
                        <fieldset class="size">
                            <h2> <legend class="abs"> Abstract Paper </legend></h2>
                            <!-- Full name of first Author -->
                            <div class="form-group">
                                <input name="fa" type="text" class="form-control" placeholder="Full Name of First Author" required>
                            </div>    
                            <!-- Full name of second Author -->
                            <div class="form-group">
                                <input name="sa" type="text" class="form-control" placeholder="Full Name of Second Author">
                            </div>  
                            <!-- Institute -->
                            <div class="form-group">
                                <input name="institute" type="text" class="form-control" placeholder="Institue" required>
                            </div>
                            <!-- Author Email -->
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Author Email" required>
                            </div>  
                            <!-- Alter Email -->
                            <div class="form-group">
                                <input name="alt_email" type="email" class="form-control" placeholder="Alter Email">
                            </div> 
                            <!-- Postal Address -->
                            <div class="form-group">
                                <input name="address" type="text" class="form-control" placeholder="Postal Address">
                            </div> 
                            <!-- Paper Title -->
                            <div class="form-group">
                                <input name="title" type="text" class="form-control" placeholder="Paper Title">
                            </div> 
                            <!-- Abstract -->
                            <div class="form-group">
                                <label style="color:white">Abstract</label>
                                <input type="file" name="file[]" value="file" class="btn btn-success" required>
                            </div>
                            <!-- I Turn It -->
                            <div class="form-group">
                                <label style="color:white">Attached Turnitin Report</label>
                                <input type="file" name="file[]" value="file" class="btn btn-success" required>
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
                            <button name="send" type="submit" class="btn btn-primary merge">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php
        } else {
            ?>
            <script>
                window.location.href = "index.php";

            </script>

            <?php
        }
        ?>