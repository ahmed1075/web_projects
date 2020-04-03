<?php
session_start();
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    $pass = $_SESSION['Password'];

    $conn = mysqli_connect("localhost", "root", "", "leadsdev_minhaj");
    $sql1 = mysqli_query($conn, "SELECT * FROM reviewer where email='$name' && password='$pass'");

    $count = mysqli_num_rows($sql1);
    $row = mysqli_fetch_assoc($sql1);
    $dept = $row['dept'];
    $sql2 = "SELECT * FROM abstract where subTheme='$dept' && Status='pending'";
    $query = mysqli_query($conn, $sql2);


    $sql3 = mysqli_query($conn, "SELECT * FROM fullpaper where sub_theme='$dept' && status='paperuploaded'");
} else {
    header("location:index.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title> Minhaj University Conference </title> 
        <link rel="icon" href="../images/favicon-96x96.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body class="bg">
        <div class="row">
            <div class="col-md-12" style="opacity: 0.7">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header" style="margin-right: 600px">
                            <img class="logo" src="../images/logo.png"> 
                        </div>
                        <input type="button" class="btn btn-primary" onclick="window.location = 'history.php'" value="History" style="margin-left:20px ">
                        <input type="button" class="btn btn-danger" onclick="window.location = 'logout.php'" value="Log out">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
                                <ul class="dropdown-menu"></ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <h3 class="h3 mar" style="color: white"> Welcome to Reviewer Dashboard </h3>
            <div class="row">
                <input type="button" class="btn btn-success tomb" value="Abstract Paper" onclick="window.location = 'abstract.php'">
                <input type="button" class="btn btn-primary tombo" value="Full Paper" onclick="window.location = 'full.php'">
            </div>


            <script>
                $(document).ready(function () {
// updating the view with notifications using ajax
                    function load_unseen_notification(view = '')
                    {
                        $.ajax({
                            url: "fetch.php",
                            method: "POST",
                            data: {view: view},
                            dataType: "json",
                            success: function (data)
                            {
                                $('.dropdown-menu').html(data.notification);
                                if (data.unseen_notification > 0)
                                {
                                    $('.count').html(data.unseen_notification);
                                }
                            }
                        });
                        
                        
                    }
                    load_unseen_notification();

// load new notifications
                    $(document).on('click', '.dropdown-toggle', function () {
                        $('.count').html('');
                        load_unseen_notification('yes');
                    });
                    setInterval(function () {
                        load_unseen_notification();
                        ;
                    }, 5000);
                });
            </script>

    </body>
</html>